<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jenismodul extends Model
{
    use HasFactory;

    protected $fillable =[
        'id',
        'user',
        'tanggal',
        'jenismodul',
    ];
}
