<?php

namespace App\Http\Resources;
use App\Rol;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'username' => $this->name,
            'correo' => $this->email,
            'roles' => collect(Rol::all())->all()   //collect(User::find(1))->all();
        ];
    }
}
