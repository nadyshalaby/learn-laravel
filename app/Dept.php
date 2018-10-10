<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dept extends Model
{
    public function courses()
    {
        return $this->hasMany('App\Course');
        // hasMany
        // hasOne
        // belongsTo
        // belongsToMany
    }

    public function students()
    {
        return $this->hasMany('App\Student');
    }
}
