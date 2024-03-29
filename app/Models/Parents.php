<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Parents extends Model
{
    protected $table = 'parents';

    public function students()
    {
        return $this->hasMany('App\Models\Student', 'padre_id');
    }
}
