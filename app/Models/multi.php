<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class multi extends Model
{
    protected $fillable=[
    'user_id',
    'name',
    'quantity',
    'date',
    'desc',
    ];

    use HasFactory;
}
