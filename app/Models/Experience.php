<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;
    protected $fillable = [
        'position',
        'year',
        'company',
        's_desc1',
        's_desc2',
        's_desc3',
        's_desc4',
    ];
}
