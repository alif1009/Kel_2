<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\registerController;
//Route::get('/', function () {
//return view('welcome');
//});
Route::get('/berandaPTN', function () {
    return view('berandaPTN');
})->name('berandaPTN');


Route::get('/seminarPTN', function () {
    return view('seminarPTN');
})->name('seminarPTN');

Route::get('/bikinseminar', function () {
    return view('bikinseminar');
})->name('bikinseminar');

Route::get('/pengajuanPTN', function () {
    return view('pengajuanPTN');
})->name('pengajuanPTN');


Route::get('/jadiPTN', function () {
    return view('jadiPTN');
})->name('jadiPTN');

Route::get('/', function () {
    return view('landing');
});

Route::get('/beranda', function () {
    return view('beranda');
})->name('beranda');



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

Route::get('/profile/profilADM', function () {
    return view('profile.profilADM');
})->name('profile.profilADM');

Route::get('/profile/profilPTN', function () {
    return view('profile.profilPTN');
})->name('profile.profilPTN');

Route::get('/venue/auditorium', function () {
    return view('venue.auditorium');
})->name('venue.auditorium');

Route::get('/venue/gedungtekno', function () {
    return view('venue.gedungtekno');
})->name('venue.gedungtekno');

Route::get('/konfirmasiPTN', function () {
    return view('konfirmasiPTN');
})->name('konfirmasiPTN');

Route::get('/invoice', function () {
    return view('invoice');
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

Route::get('/konfirmasiacara', function () {
    return view('konfirmasiacara');
})->name('konfirmasiacara');


Route::get('/seminarselesai', function () {
    return view('seminarselesai');
})->name('seminarselesai');


Route::get('/dashboardcard', function () {
    return view('dashboardcard');
})->name('dashboardcard');

Route::get('/formcard', function () {
    return view('formcard');
})->name('formcard');

Route::get('/formpenonton', function () {
    return view('formpenonton');
})->name('formpenonton');

Route::post('/formpenonton', function (Request $request) {
    // Validasi sederhana
    $request->validate([
        'nama' => 'required',
        'jurusan' => 'required',
        'email' => 'required|email',
        'hp' => 'required',
        'seminar' => 'required',
        'ktm' => 'required|file|mimes:jpg,png,pdf|max:2048'
    ]);

    // Simpan file jika diperlukan
    if ($request->hasFile('ktm')) {
        $request->file('ktm')->store('ktm', 'public');
    }

    return back()->with('success', 'Formulir berhasil dikirim!');
})->name('formpenonton');

// tampilkan halaman tambah seminar tanpa controller terlebih dahulu
//Route::view('/updatecard', 'updatecard')->name('seminars.create');

// Halaman edit seminar (sementara tanpa controller)
// Halaman edit seminar (sementara tanpa controller)
Route::view('/updatecard', 'updatecard')
      ->name('updatecard');

