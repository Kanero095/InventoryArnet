<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class namaperangkat extends Model
{
    use HasFactory;

    protected $fillable =[
        'id',
        'user',
        'tanggal',
        'namaperangkat',
    ];
}
