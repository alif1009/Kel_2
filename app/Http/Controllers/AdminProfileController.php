<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AdminProfileController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        return view('profile.profilADMbaru', compact('user'));
    }

    public function edit()
    {
        $user = Auth::user();
        return view('profile.settingsadm', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
            'about' => 'nullable|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $user->nama_lengkap = $request->name;
        $user->email = $request->email;
        $user->hp = $request->phone;
        $user->alamat = $request->address;
        $user->about = $request->about;

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $path = $file->store('photo', 'public');
            $user->photo = $path;
        }

        $user->save();

        return redirect()->back()->with('success', 'Profil admin berhasil diperbarui.');
    }
}
