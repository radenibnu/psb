<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Datasiswa extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'nik',
        'nama',
        'ttl',
        'jenis_kelamin',
        'asal_tk',
        'tanggal_lulus',
        'kk',
        'kip',
        'alamat',
        'status',
        'ayah',
        'ayahttl',
        'nikayah',
        'pendidikan',
        'pekerjaan',
        'penghasilan',
        'nomorayah'
    ];
}
