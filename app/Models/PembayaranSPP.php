<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PembayaranSPP extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'nama',
        'nis',
        'kelas',
        'kategoribayar',
        'bulan'
    ];
}
