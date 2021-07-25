<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

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
}
