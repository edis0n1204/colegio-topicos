<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    public function matter()
    {
        return $this->hasOne('App\Models\Matter', 'id','materia_id');
    }
}
