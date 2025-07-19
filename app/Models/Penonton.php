<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penonton extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'hp', 'email', 'jurusan', 'kategori', 'seminar_id', 'ktm'];

    public function seminar()
    {
        return $this->belongsTo(SeminarAdmin::class, 'seminar_id');
    }

    public function penonton() // ini relasi ke user mahasiswa
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function seminarPTN()
    {
        return $this->hasOne(SeminarPTN::class, 'penonton_id');
    }
}
