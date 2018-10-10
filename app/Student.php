<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{


    public function dept()
    {
        return $this->belongsTo('App\Dept');
    }

    public function courses()
    {
        return $this->belongsToMany('App\Course');
    }




















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
