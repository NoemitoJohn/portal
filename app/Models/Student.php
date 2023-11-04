<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_number',
        'password',
        'f_name',
        'l_name',
        'm_name',
        'ex_name',
        'gender',
        'birthday',
        'civil_status',
        'religion',
        'provice',
        'city',
        'barangay',
    ];

    // protected $casts = [
    //     'birthday' => 'date'
    // ];
}
