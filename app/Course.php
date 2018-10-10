<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function dept()
    {
        return $this->belongsTo('App\Dept');
    }

    public function teacher()
    {
        return $this->belongsTo('App\Teacher');
    }

    public function students()
    {
        return $this->belongsToMany('App\Student');
    }

}
