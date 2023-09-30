<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ParticipantDetail;
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
        $totalPendaftar = ParticipantDetail::count();

        return view('admin.dashboard', compact('totalPendaftar'));
    }

    public function dataPesertaIndex()
    {
        $results = ParticipantDetail::paginate(10);

        return view('admin.data-peserta', compact('results'));
    }

    // public function export()
    // {
    //     $filename = 'exported-data-peserta.csv';

    //     $headers = array(
    //         "Content-type" => "text/csv",
    //         "Content-Disposition" => "attachment; filename=$filename",
    //         "Pragma" => "no-cache",
    //         "Cache-Control" => "must-revalidate, post-check=0, pre-check=0",
    //         "Expires" => "0",
    //     );

    //     $handle = fopen('php://output', 'w');

    //     // Write the header row
    //     fputcsv($handle, ['No', 'Tanggal', 'NISN', 'Nama Lengkap', 'Asal Sekolah', 'E-mail', 'Kartu Pelajar', 'Bukti Bayar']); // Replace with your table's column names

    //     // Query your database to fetch the data
    //     $data = DB::table('detail_participants')
    //         ->join('users', 'detail_participants.user_id', '=', 'users.id')
    //         ->select('detail_participants.nisn', 'detail_participants.asal_sekolah', 'detail_participants.')
    //         ->get();

    //     // Loop through the data and write each row to the CSV file
    //     foreach ($data as $row) {
    //         fputcsv($handle, [
    //             $row->column1,
    //             $row->column2,
    //             $row->column3,
    //         ]); // Replace with your table's column names
    //     }

    //     fclose($handle);

    //     return Response::stream(
    //         function () use ($handle) {
    //             fclose($handle);
    //         },
    //         200,
    //         $headers
    //     );
    // }

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
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
