<?php

namespace App\Http\Controllers;

use App\Models\SeminarAdmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class SeminarAdminController extends Controller
{
    public function index()
    {
        $seminars = SeminarAdmin::all();
        $panitias = User::where('role', 'panitia')->get(); // ambil semua user role panitia

        return view('dashboardcard', compact('seminars', 'panitias'));
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'kategori'   => 'required',
            'judul'      => 'required',
            'deskripsi'  => 'required',
            'tanggal'    => 'required|date',
            'waktu'      => 'required',
            'poster'     => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'user_id'    => 'required|exists:users,id', // tambahkan ini!
        ]);

        if ($request->hasFile('poster')) {
            $posterName = time() . '-' . $request->file('poster')->getClientOriginalName();
            $request->file('poster')->move(public_path('poster'), $posterName);
            $validated['poster'] = 'poster/' . $posterName;
        }

        SeminarAdmin::create($validated);

        return redirect()->back()->with('success', 'Seminar berhasil ditambahkan!');
    }


    public function update(Request $request, $id)
    {
        $seminar = SeminarAdmin::findOrFail($id);

        $validated = $request->validate([
            'kategori'   => 'required',
            'judul'      => 'required',
            'deskripsi'  => 'required',
            'tanggal'    => 'required|date',
            'waktu'      => 'required',
            'poster'     => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $validated['user_id'] = Auth::id(); // simpan user_id yang login

        if ($request->hasFile('poster')) {
            if ($seminar->poster && file_exists(public_path($seminar->poster))) {
                unlink(public_path($seminar->poster));
            }

            $posterName = time() . '-' . $request->file('poster')->getClientOriginalName();
            $request->file('poster')->move(public_path('poster'), $posterName);
            $validated['poster'] = 'poster/' . $posterName;
        }

        $seminar->update($validated);

        return redirect()->back()->with('success', 'Seminar berhasil diperbarui!');
    }


    public function destroy($id)
    {
        $seminar = SeminarAdmin::findOrFail($id);

        if ($seminar->poster && file_exists(public_path($seminar->poster))) {
            unlink(public_path($seminar->poster));
        }

        $seminar->delete();

        return redirect()->back()->with('success', 'Seminar berhasil dihapus!');
    }
}
