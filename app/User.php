<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Http\Resources\UserCollection;
use App\Http\Resources\UserResource;
use App\Persona;
use App\Rol;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'cedula', 'apellidos'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'created_at', 'email_verified_at', 'updated_at'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */

    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
     //protected $with = ['ersonas'];

    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    //     'created_at' => 'datetime',
    //     'updated_at' => 'datetime'
    // ];

     public static function index()
     {
        return User::all();
        //return new UserResource(User::find(1));
        //return new UserCollection(User::all());
         //return collect(User::find(1))->all();
     }

    // public function rolUser()
    // {
    //     return $this->belongsTo(Rol::class, 'id', 'rol_id');
    // }

     public function ersonas()
     {
        return $this->belongsTo('App\Persona', 'id');
    }
}