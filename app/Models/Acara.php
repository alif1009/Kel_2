<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acara extends Model
{
    use HasFactory;

    protected $table = 'acara';

    protected $fillable = [
        'user_id',
        'kategori_seminar',
        'judul',
        'deskripsi',
        'borang_tempat',
        'tor',
        'rundown',
        'waktu',
        'tanggal',
        'status',
    ];

    /**
     * Relasi ke model User (setiap acara dimiliki oleh satu user)
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function konfirmasi()
    {
        return $this->hasOne(KonfirmasiAdmin::class, 'acara_id');
    }
}
