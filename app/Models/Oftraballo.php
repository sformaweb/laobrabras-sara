<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oftraballo extends Model
{
    use HasFactory;

     protected $fillable = [
        'name',
        'updated_at',
        'created_at'
    ];
}
