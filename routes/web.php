<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingsController;
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

      // bagian event planning sama konstultasi
Route::get('/layanan/planning', function () {
    return view('layanan.planning');
});

Route::get('/layanan/konsultasi', function () {
    return view('layanan.konsultasi');
});

Route::get('/profile/profilbaru', function () {
    return view('profile.profilbaru');
})->name('profile.profilbaru');

Route::get('/profile/profilADMbaru', function () {
    return view('profile.profilADMbaru');
})->name('profile.profilADMbaru');

Route::get('/profile/profilPTNbaru', function () {
    return view('profile.profilPTNbaru');
})->name('profile.profilPTNbaru');

// Profil
Route::get('/profile.profilbaru', [ProfileController::class, 'index'])->name('profile.profilbaru');


    
    // Menampilkan halaman settings (edit profil)
    Route::get('/profile/settingsmhs', [SettingsController::class, 'editMhs'])->name('settings.mhs');

    // Menampilkan halaman settings (edit profil)
    Route::get('/settingspanitia', [SettingsController::class, 'editPtn'])->name('settings.panitia');
    Route::get('/profile/settingsptn', [SettingsController::class, 'editPtn'])->name('settings.ptn');
    Route::post('/profile/settingsptn', [SettingsController::class, 'updatePtn'])->name('settings.ptn.update');

    // Menampilkan halaman settings (edit profil)
    Route::get('/settingsadm', [SettingsController::class, 'edit'])->name('profile.edit');

    // Menyimpan perubahan profil (form method: POST/PUT)
    Route::put('/settings/update', [SettingsController::class, 'update'])->name('profile.update');

