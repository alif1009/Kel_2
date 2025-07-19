<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SeminarPTN extends Model
{
    protected $table = 'seminar_ptn';

    protected $fillable = [
        'penonton_id',
        'seminar_id', 
        'judul_seminar',
        'status'
    ];


    public function penonton()
    {
        return $this->belongsTo(Penonton::class, 'penonton_id');
    }

    public function seminar()
    {
        return $this->belongsTo(SeminarAdmin::class, 'seminar_id');
    }
}
