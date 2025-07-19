<?php

// app/Models/SeminarSelesai.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeminarSelesai extends Model
{
    use HasFactory;

    protected $table = 'seminar_selesai';

    protected $fillable = ['konfirmasi_admin_id'];

    public function konfirmasiAdmin()
    {
        return $this->belongsTo(KonfirmasiAdmin::class);
    }
}
