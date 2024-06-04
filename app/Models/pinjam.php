<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pinjam extends Model
{
    use HasFactory;

    protected $fillable=[
        'id',
        'id_kodespare',
        'namamodul',
        'tanggalpenggunaan',
        'jumlahpenggunaan',
        'penggunaan'
    ];
}
