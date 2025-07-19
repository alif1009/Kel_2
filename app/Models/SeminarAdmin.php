<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeminarAdmin extends Model
{
    use HasFactory;

    protected $table = 'seminar_admin'; // Sesuaikan dengan nama tabel di database

    protected $fillable = [
        'user_id', // Pastikan kolom ini ada di tabel seminar_admin
        'kategori',
        'judul',
        'deskripsi',
        'tanggal',
        'waktu',
        'poster'
    ];

    public function penontons()
    {
        return $this->hasMany(Penonton::class, 'seminar_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
