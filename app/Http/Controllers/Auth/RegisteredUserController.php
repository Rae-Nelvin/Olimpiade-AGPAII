<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\ParticipantDetail;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Str;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['bail', 'required', 'string', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'string', 'min:8', Rules\Password::defaults()],
            'nisn' => ['required', 'integer', 'unique:participant_details,nisn'],
            'asal_sekolah' => ['required', 'string'],
            'foto_kartu_pelajar' => ['required', 'image', 'mimes:jpg,jpeg,png', 'max:2048'],
            'foto_bukti_pembayaran' => ['required', 'image', 'mimes:jpg,jpeg,png', 'max:2048'],
        ]);

        $data = $request->all();

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        $randomDirectoryName = Str::random(20);

        $foto_kartu_pelajar = $request->file('foto_kartu_pelajar')->store("{$randomDirectoryName}/foto_kartu_pelajar");
        $foto_bukti_pembayaran = $request->file('foto_bukti_pembayaran')->store("{$randomDirectoryName}/foto_bukti_pembayaran");

        $participant = ParticipantDetail::create([
            'user_id' => $user->id,
            'nisn' => $data['nisn'],
            'asal_sekolah' => $data['asal_sekolah'],
            'foto_kartu_pelajar' => $foto_kartu_pelajar,
            'foto_bukti_pembayaran' => $foto_bukti_pembayaran,
        ]);
        $participant->save();

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
