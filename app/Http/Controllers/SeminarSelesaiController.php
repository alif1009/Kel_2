<?php

// app/Http/Controllers/SeminarSelesaiController.php
namespace App\Http\Controllers;

use App\Models\SeminarSelesai;
use Illuminate\Http\Request;

class SeminarSelesaiController extends Controller
{
    public function index()
    {
        $data = SeminarSelesai::with('konfirmasiAdmin.acara')->get();
        return view('seminarselesai', compact('data'));
    }
}
