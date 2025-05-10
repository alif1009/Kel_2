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

//Route::get('/event/bazar', function () {
    //return view('event.bazar');
//})->name('event.bazar');

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

//Route::get('/katalog-alperalatan', function () {
    //return view('katog-peralatan');
//});

Route::view('/peralatan', 'peralatan')->name('peralatan');

Route::view('/seminar', 'seminar')->name('seminar');

Route::view('/seminarmental', 'seminarmental')->name('seminarmental');

//Route::view('/bazar', 'bazar')->name('bazar');

Route::get('/event/bazarpreloved', function () {
    return view('event.bazarpreloved');
})->name('event.bazarpreloved');

Route::get('/event/bazarmakanan', function () {
    return view('event.bazarmakanan');
})->name('event.bazarmakanan');

Route::get('/event/seminarmentality', function () {
    return view('event.seminarmentality');
})->name('event.seminarmentality');

Route::get('/event/seminarinformatika', function () {
    return view('event.seminarinfromatika');
})->name('event.seminarinformatika');

Route::get('/event/festivalbudaya', function () {
    return view('event.festivalbudaya');
})->name('event.festivalbudaya');

Route::get('/event/festivalkonser', function () {
    return view('event.festivalkonser');
})->name('event.festivalkonser');

Route::view('/festival2', 'festival2')->name('festival2');
