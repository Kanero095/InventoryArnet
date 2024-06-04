<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class spare extends Model
{
    use HasFactory;

    protected $fillable=[
        'id',
        'user',
        'namaperangkat',
        'jenismodul',
        'namamodul',
        'tipe',
        'nomorseri',
        'lokasipenyimpanan',
        'tanggalpenyimpanan',
        'jumlah'
    ];
}
