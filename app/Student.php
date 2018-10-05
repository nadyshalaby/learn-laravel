<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{

    public $timestamps = false;
    // public $table = 'instructors';

    protected $fillable = [
        'name',
        'tel',
        'age',
        'year',
        'dept_id',
        'img',
    ];

    protected $hidden = [
        // 'name',
    ];
    //
    // protected $gaurded = [
    //     'name',
    //     'tel',
    // ];
}
