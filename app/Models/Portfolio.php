<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;
    protected $fillable = [
        'tittle',
        's_desc',
        'overview',
        'technology',
        'part_name',
        'your_role',
        'image',

    ];
}
