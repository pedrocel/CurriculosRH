<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class locais extends Model
{
    protected $table = 'locais';

    protected $fillable = [
        'id',
        'local_vara',
        'vara'
    ];
}
