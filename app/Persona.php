<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table = persona;
    public $timestamps = false;
    protected $fillable = [
        'nombres', 'apellidos', 'cedula','correo'
    ];
}
