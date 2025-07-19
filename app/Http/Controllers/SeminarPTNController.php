<?php

namespace App\Http\Controllers;

use App\Models\SeminarPTN;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\SeminarAdmin;
use App\Models\Penonton;

class SeminarPTNController extends Controller
{
    public function index()
    {
        $userId = Auth::id();

        // Ambil semua ID seminar milik panitia ini
        $seminarIds = SeminarAdmin::where('user_id', $userId)->pluck('id');

        // Ambil penonton yang mengikuti seminar-seminar tersebut
        $data = Penonton::whereIn('seminar_id', $seminarIds)
            ->with('seminar') // relasi ke seminar_admin
            ->get();

        return view('seminarPTN', compact('data'));
    }
}
