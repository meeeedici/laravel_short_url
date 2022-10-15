<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class link extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'url',
        'short',
        'created_at',
        'updated_at'
    ];
}
