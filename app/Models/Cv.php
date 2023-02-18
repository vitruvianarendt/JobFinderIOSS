<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cv extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'age',
        'profession',
        'country',
        'city',
        'zip',
        'phone',
        'email',
        'workdescription',
        'degree',
        'uni',
        'gradyear',
        'skills',
        'summary'
    ];
}
