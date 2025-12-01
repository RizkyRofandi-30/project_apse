<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nik'     => 'required',
            'email'   => 'required|email|unique:users,email',
            'nama'    => 'required',
            'telepon' => 'required',
            'password'=> 'required|min:6'
        ]);

        User::create([
            'nik'      => $request->nik,
            'email'    => $request->email,
            'name'     => $request->nama,
            'telepon'  => $request->telepon,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login')->with('success', 'Pendaftaran Berhasil');
    }
}
