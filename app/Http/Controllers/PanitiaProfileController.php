<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class PanitiaProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('profile.profilPTNbaru', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'nullable|string',
            'address' => 'nullable|string',
            'about' => 'nullable|string',
            'photo' => 'nullable|image|max:2048',
        ]);

        $user->fill($request->only(['name', 'email', 'phone', 'address', 'about']));

        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('photos', 'public');
            $user->photo = $path;
        }

        $user->save();

        return redirect()->back()->with('success', 'Profil panitia berhasil diperbarui.');
    }


    public function edit()
    {
        $user = Auth::user();
        return view('profile.settingsptn', compact('user'));
    }
}
