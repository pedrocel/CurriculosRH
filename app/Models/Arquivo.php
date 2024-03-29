<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Arquivo extends Model
{
    protected $table = 'arquivos';

    protected $fillable = [
        'mime',
        'path',
        'nome',
        'tamanho'
    ];

}
