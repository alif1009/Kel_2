<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class SettingsController extends Controller
{
    // Untuk Mahasiswa
    public function editMhs()
    {
        return view('profile.settingsmhs');
    }

    public function updateMhs(Request $request)
    {
        $user = Auth::user();
        $user->name = $request->input('name');
        $user->about = $request->input('about');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->address = $request->input('address');
        $user->save();

        return redirect()->back()->with('success', 'Profil Mahasiswa diperbarui.');
    }

    // Untuk Panitia
    public function editPtn()
    {
        return view('profile.settingsptn');
    }

    public function updatePtn(Request $request)
    {
        $user = Auth::user();
        $user->name = $request->input('name');
        $user->about = $request->input('about');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->address = $request->input('address');
        $user->save();

        return redirect()->back()->with('success', 'Profil Panitia diperbarui.');
    }
}
