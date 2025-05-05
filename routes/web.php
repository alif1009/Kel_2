<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\registerController;
//Route::get('/', function () {
//return view('welcome');
//});
Route::get('/', function () {
    return view('landing');
});

Route::get('/beranda', function () {
    return view('beranda');
});


Route::get('/register', function () {
    return view('auth.register');
});
Route::view('/register', 'register')->name('register');
Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/profile/profil', function () {
    return view('profile.profil');
})->name('profile.profil');

Route::get('/venue/auditorium', function () {
    return view('venue.auditorium');
})->name('venue.auditorium');

Route::get('/venue/gedungtekno', function () {
    return view('venue.gedungtekno');
})->name('venue.gedungtekno');

Route::get('/venue/lapangan', function () {
    return view('venue.lapangan');
})->name('venue.lapangan');

Route::get('/event/bazar', function () {
    return view('event.bazar');
})->name('event.bazar');

Route::get('/invoice', function () {
    return view('invoice');
});

Route::post('/invoice', function (Request $request) {
    $validated = $request->validate([
        'nama' => 'required',
        'kategori' => 'required',
        'total' => 'required|numeric',
        'bukti' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',
    ]);

    // Simpan file jika ingin
    $buktiPath = $request->file('bukti')->store('bukti-pembayaran', 'public');

    return back()->with('success', 'Invoice berhasil dikirim!');
});

Route::get('/pemesanan', function () {
    return view('pemesanan');
});

Route::post('/pemesanan', function (Request $request) {
    $validated = $request->validate([
        'nama' => 'required',
        'alamat' => 'required',
        'no_hp' => 'required',
        'email' => 'nullable|email',
        'kategori' => 'required',
    ]);

    return back()->with('success', 'Pemesanan berhasil dikirim!');
});

Route::get('/list-orderan', function () {
    $orders = [
        ['nama' => 'Alya', 'kategori' => 'Bazar', 'total' => 'Rp200.000', 'status' => 'Belum Bayar'],
        ['nama' => 'Budi', 'kategori' => 'Seminar', 'total' => 'Rp150.000', 'status' => 'Sudah Bayar'],
        // Tambah data dummy lainnya jika perlu
    ];
    
    return view('list-orderan', compact('orders'));
});

Route::get('/orderan-selesai', function () {
    return view('orderan-selesai');
});

Route::get('/tabel-invoice', function () {
    return view('tabel-invoice');
});

Route::get('/stock-peralatan', function () {
    return view('stock-peralatan');
});

Route::get('/katalog-peralatan', function () {
    return view('katalog-peralatan');
});

