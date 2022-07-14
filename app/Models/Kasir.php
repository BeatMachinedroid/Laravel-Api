<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kasir extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'email',
        'password',
        'remember_token'
    ];
}
