<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\ParticipantDetail;
use App\Models\Province;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $today = Carbon::today();
        $targetDate = Carbon::parse('2023-11-20');
        $participant = ParticipantDetail::where('user_id', Auth::user()->id)->first();

        return view('dashboard', compact('today', 'targetDate', 'participant'));
    }

    public function dataDiriIndex()
    {
        $user = Auth::user();
        $result = ParticipantDetail::where('user_id', $user->id)->first();

        return view('data-diri', compact('result'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $participant = ParticipantDetail::findOrFail($id);
        $provinces = Province::all();

        return view('edit-data-diri', compact('participant', 'provinces'));
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
            'name' => ['required', 'string', 'max:255'],
            'nisn' => ['required', 'string', 'regex:/^[0-9]{10}$/'],
            'asal_sekolah' => ['required', 'string'],
            'province_id' => ['required', 'exists:provinces,id'],
            'phone_number' => ['required', 'string', 'regex:/^08\d{9,12}$/'],
        ], [
            'nisn.regex' => 'NISN field is required and must be 10 digits',
            'asal_sekolah.required' => 'Asal Sekolah field is required',
            'phone_number.required' => 'Nomor Handphone is required',
            'province_id.required' => 'Asal provinsi harus diisi',
        ]);

        $participant = ParticipantDetail::findOrFail($request->participant_id);
        $participant->update([
            'nisn' => $request->nisn,
            'asal_sekolah' => $request->asal_sekolah,
        ]);
        $user = User::findOrFail($participant->user_id);
        $user->update([
            'name' => $request->name,
            'phone_number' => $request->phone_number,
            'province_id' => $request->province_id,
        ]);

        return redirect()->route('data-diri')->with('success', 'Data berhasil diperbaharui');
    }
}
