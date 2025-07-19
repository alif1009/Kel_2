<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seminar;
use App\Models\SeminarAdmin;

class SeminarController extends Controller
{
    public function search(Request $request)
{
    $query = $request->input('query');

    $seminars = SeminarAdmin::where('judul', 'like', "%$query%")
                ->orWhere('deskripsi', 'like', "%$query%")
                ->orWhere('kategori', 'like', "%$query%")
                ->get();

    return view('beranda', compact('seminars', 'query'));
}

}
