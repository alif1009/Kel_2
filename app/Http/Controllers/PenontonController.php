<?php

namespace App\Http\Controllers;

use App\Models\Penonton;
use App\Models\SeminarAdmin;
use Illuminate\Http\Request;
use App\Models\SeminarPTN;

class PenontonController extends Controller
{
    public function create($id)
    {
        $seminar = SeminarAdmin::findOrFail($id);
        return view('formpenonton', compact('seminar'));
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'jurusan' => 'required',
            'email' => 'required|email',
            'hp' => 'required',
            'seminar_id' => 'required|exists:seminar_admin,id',
            'ktm' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',
        ]);

        // Simpan KTM
        if ($request->hasFile('ktm')) {
            $filename = time() . '-' . $request->file('ktm')->getClientOriginalName();
            $request->file('ktm')->move(public_path('ktm'), $filename);
            $validated['ktm'] = 'ktm/' . $filename;
        }

        $penonton = Penonton::create($validated);
        $seminar = SeminarAdmin::findOrFail($validated['seminar_id']);
        $validated['kategori'] = $seminar->kategori; // Ambil kategori seminar

        
        // Simpan otomatis ke seminar_ptns
        SeminarPTN::create([
            'penonton_id' => $penonton->id,
            'seminar_id' => $validated['seminar_id'],
            'kategori' => $seminar->kategori, 
        ]);


        return redirect()->back()->with('success', 'Data berhasil dikirim!');
    }
}
