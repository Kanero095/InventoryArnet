<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lokasipenyimpanan extends Model
{
    use HasFactory;

    protected $fillable =[
        'id',
        'user',
        'tanggal',
        'lokasipenyimpanan',
    ];
}
