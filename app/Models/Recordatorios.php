<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recordatorios extends Model
{
    protected $table = 'Recordatorios'; 
    public function nota()
    {
        return $this->belongsTo(Note::class, 'nota_id','id');
    }
}
