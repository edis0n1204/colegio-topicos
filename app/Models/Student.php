<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function parent()
    {
        return $this->hasOne('App\Models\Parents');
    }

    public function course()
    {
        return $this->hasOne('App\Models\Course', 'id', 'curso_id');
    }
}
