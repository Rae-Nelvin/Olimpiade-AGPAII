<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ParticipantDetail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\StreamedResponse;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $totalPendaftar = ParticipantDetail::whereHas('user', function ($query) {
            $query->whereNull('deleted_at');
        })->count();

        // $participants = ParticipantDetail::all();
        // foreach ($participants as $participant) {
        //     $nisnWithoutZeros = ltrim($participant->nisn, '0');
        //     $participant->username_ujian = $nisnWithoutZeros . '.' . '13262';
        //     $participant->password_ujian = '123';
        //     $participant->save();
        // }

        return view('admin.dashboard', compact('totalPendaftar'));
    }

    public function dataPesertaIndex()
    {
        $results = ParticipantDetail::whereHas('user', function ($query) {
            $query->whereNull('deleted_at');
        })->paginate(10);

        return view('admin.data-peserta', compact('results'));
    }

    public function export()
    {
        $filename = 'exported-data-peserta.csv';

        // Query your database to fetch the data
        $data = DB::table('participant_details')
            ->leftJoin('users', 'participant_details.user_id', '=', 'users.id')
            ->leftJoin('provinces', 'users.province_id', '=', 'provinces.id')
            ->select('participant_details.*', 'users.*', 'provinces.name as province_name')
            ->get();

        $headers = [
            "Content-type" => "text/csv",
            "Content-Disposition" => "attachment; filename=exported-data-peserta.csv",
        ];

        $counter = 1;

        return response()->stream(
            function () use ($data, $counter) {
                $handle = fopen('php://output', 'w');

                // Create a new CSV file
                fputcsv($handle, ['No', 'Tanggal', 'NISN', 'Nama Lengkap', 'Asal Sekolah', 'Asal Provinsi', 'E-mail', 'Kartu Pelajar', 'Bukti Bayar', 'Username Ujian', 'Password Ujian']);

                // Loop through the data and write each row to the CSV file
                foreach ($data as $row) {
                    fputcsv($handle, [
                        $counter,
                        $row->created_at,
                        $row->nisn,
                        $row->name,
                        $row->asal_sekolah,
                        $row->province_name ?? '-',
                        $row->email,
                        $row->foto_kartu_pelajar,
                        $row->foto_bukti_pembayaran,
                        $row->username_ujian ?? '-',
                        $row->password_ujian ?? '-',
                    ]);
                    $counter++;
                }

                fclose($handle);
            },
            200,
            $headers
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $search = $request->search;

        $results = ParticipantDetail::whereHas('user', function ($query) use ($search) {
            $query->where('nisn', 'like', '%' . $search . '%');
        })->paginate(10);

        return view('admin.data-peserta', compact('results'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $participantDetail = ParticipantDetail::findOrFail($id);

        return view('admin.edit-participant', compact('participantDetail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $request->validate([
            'name' => ['required', 'exists:users,name'],
            'email' => ['required', 'exists:users,email'],
            'nisn' => ['required', 'exists:participant_details,nisn'],
            'password' => ['required', 'min:8'],
        ]);

        $data = $request->all();

        $participantDetail = ParticipantDetail::findOrFail($data['participant_detail_id']);
        $participantDetail->user->update([
            'password' => bcrypt($data['password']),
        ]);
        $participantDetail->save();

        return redirect()->route('data-peserta');
    }

    public function isiDataUjian($id)
    {
        $participantDetail = ParticipantDetail::findOrFail($id);

        return view('admin.isi-data-ujian', compact('participantDetail'));
    }

    public function storeDataUjian(Request $request)
    {
        $request->validate([
            'username_ujian' => ['required'],
        ]);

        $data = $request->all();

        $participantDetail = ParticipantDetail::findOrFail($data['participant_detail_id']);
        $participantDetail->update([
            'username_ujian' => $data['username_ujian'],
            'password_ujian' => '123',
        ]);
        $participantDetail->save();

        return redirect()->route('data-peserta');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->forceDelete();
        return redirect()->back();
    }
}
