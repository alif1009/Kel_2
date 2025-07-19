<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KonfirmasiAdmin;
use Illuminate\Support\Facades\Auth;

class BerandaPTNController extends Controller
{
    public function index()
    {
        $userId = Auth::id();

        $notifikasi = KonfirmasiAdmin::with('acara')
            ->whereHas('acara', function ($query) use ($userId) {
                $query->where('user_id', $userId);
            })
            ->orderByDesc('created_at')
            ->get();

        return view('berandaPTN', compact('notifikasi'));
    }
}
