<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table = 'subjects';

    public function asignatura()
    {
        return $this->hasMany('App\Model\Topic', 'subject_id', 'nombre');
    }
}
