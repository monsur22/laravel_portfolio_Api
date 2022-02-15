<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $fillable = [
        'tittle',
        's_desc',
        'birth',
        'age',
        'web',
        'degree',
        'email',
        'city',
        'desc',
    ];
}
