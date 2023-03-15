<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    use HasFactory;

    protected $fillable = [
        'fname',
        'lname',
        'gender',
        'email',
        'password',
    ];

    // protected $guarded = [];


}
