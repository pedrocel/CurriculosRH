<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{

    protected $table = 'usuarios';

    protected $fillable = [
        'nome',
        'email',
        'cpf',
        'senha'
    ];


    protected $hidden = [
        'senha', 'remember_token',
    ];

    public function setSenhaAttribute($password)
    {
        $this->attributes['senha'] = bcrypt($password);
    }

    public function getAuthPassword(){
        return $this->senha;
    }
}
