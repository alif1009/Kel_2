<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Acara;
use App\Models\KonfirmasiAdmin;
use App\Models\SeminarSelesai;

class AcaraController extends Controller
{
    public function create()
    {
        return view('bikinseminar');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'kategori_seminar' => 'required|string|max:255',
            'judul'            => 'required|string|max:255',
            'deskripsi'        => 'required|string',
            'borang_tempat'    => 'nullable|file|mimes:pdf,docx,png,jpg,jpeg',
            'tor'              => 'nullable|file|mimes:pdf,docx,png,jpg,jpeg',
            'rundown'          => 'nullable|file|mimes:pdf,docx,png,jpg,jpeg',
            'waktu'            => 'required',
            'tanggal'          => 'required|date',
        ]);

        // Simpan file jika ada
        foreach (['borang_tempat', 'tor', 'rundown'] as $fileField) {
            if ($request->hasFile($fileField)) {
                $validated[$fileField] = $request->file($fileField)->store('berkas');
            }
        }

        $validated['user_id'] = Auth::id();
        $validated['nama_panitia'] = Auth::user()->nama_lengkap ?? Auth::user()->name ?? 'Panitia';

        Acara::create($validated);

        return redirect()->back()->with('success', 'Formulir berhasil dikirim!');
    }

    public function konfirmasi($id)
    {
        $acara = Acara::findOrFail($id);

        // Simpan status konfirmasi sebagai 'diterima'
        $konfirmasi = KonfirmasiAdmin::updateOrCreate(
            [
                'acara_id' => $id,

                'user_id' => Auth::id()
            ],
            [
                'status' => 'diterima',
                'waktu_konfirmasi' => now()
            ]
        );

        // Tambahkan ke tabel seminar selesai (jika memang digunakan untuk histori)
        SeminarSelesai::firstOrCreate([
            'konfirmasi_admin_id' => $konfirmasi->id
        ]);

        return redirect()->back()->with('success', 'Acara berhasil dikonfirmasi.');
    }

    public function tolak(Request $request, $id)
    {
        $request->validate([
            'alasan' => 'required|string|max:255'
        ]);
        $acara = Acara::findOrFail($id);

        KonfirmasiAdmin::updateOrCreate(
            [
                'acara_id' => $acara->id,

                'user_id' => Auth::id()
            ],

            [
                'user_id' => Auth::id(),
                'status' => 'ditolak',
                'alasan' => $request->alasan
            ]
        );


        return back()->with('success', 'Acara ditolak dengan alasan.');
    }


    public function konfirmasiAcara()
    {
        $data = Acara::with(['konfirmasi', 'user'])->get();

        return view('konfirmasiacara', compact('data'));
    }

   public function berandaPanitia()
{
    $userId = auth()->id();

    $notifikasi = KonfirmasiAdmin::with('acara')
        ->whereHas('acara', fn($q) => $q->where('user_id', $userId))
        ->latest()
        ->get();

    $unreadCount = $notifikasi->where('is_read', false)->count();

    return view('berandaPTN', compact('notifikasi', 'unreadCount'));
}

public function bacaNotifikasi()
{
    KonfirmasiAdmin::whereHas('acara', function ($q) {
        $q->where('user_id', auth()->id());
    })->where('is_read', false)->update(['is_read' => true]);

    return response()->json(['message' => 'Semua notifikasi ditandai telah dibaca']);
}
}