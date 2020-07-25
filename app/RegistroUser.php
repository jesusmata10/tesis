<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegistroUser extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name', 'email', 'password', 'cedula', 'apellidos', 'rol'
    ];
    public static function listaUser()
    {
    	return Users::select('id', 'name', 'email','cedula')
    	->orderBy('name')
    	->get();
    }
}
