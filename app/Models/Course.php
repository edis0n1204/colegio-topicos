<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function schedules(){
        return $this->hasMany('App\Models\Schedule', 'curso_id', 'id');
    }
}
