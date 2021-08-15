<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
// use Illuminate\Support\Carbon;

class Form extends Model
{
    use softDeletes;

    protected $fillable = [
        'nama',
        'kelas',
        'nama_rekening',
        'nomor_rekening',
        'image'
    ];

    // public function getCreatedAtAttribute()
    // 
    //     return Carbon::parse($this->attributes['created_at'])
    //             ->translatedFormat('l, d F Y');
    // }
}
