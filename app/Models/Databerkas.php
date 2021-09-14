<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Databerkas extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'akte',
        'kk',
        'ijazahtk',
        'ktporangtua',
        'pasfoto'
    ];
}
