<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile.profilbaru'); // pastikan kamu punya file resources/views/profile.blade.php
    }
}
