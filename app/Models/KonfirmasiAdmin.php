<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class KonfirmasiAdmin extends Model
{
    use HasFactory;

    protected $table = 'konfirmasi_admin';
    protected $fillable = ['acara_id', 'user_id', 'status', 'alasan', 'waktu_konfirmasi'];

    public function acara()
    {
        return $this->belongsTo(Acara::class, 'acara_id');
    }
    
    public function seminarSelesai()
    {
        return $this->hasOne(SeminarSelesai::class);
    }
}
