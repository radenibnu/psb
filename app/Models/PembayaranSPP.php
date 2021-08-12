<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;

class PembayaranSPP extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'nama',
        'nis',
        'kelas',
        'kategoribayar',
        'bulan',
        'keterangan'
    ];

    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])
                ->translatedFormat('l, d F Y');
    }
}
