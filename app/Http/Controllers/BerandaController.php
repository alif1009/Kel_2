<?php

namespace App\Http\Controllers;

use App\Models\SeminarAdmin;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        $seminars = SeminarAdmin::all();
        return view('beranda', compact('seminars'));
    }

    public function formPenonton($id)
    {
        $seminar = SeminarAdmin::findOrFail($id);
        return view('formpenonton', compact('seminar'));
    }

    
}
