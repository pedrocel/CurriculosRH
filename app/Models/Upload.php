<?php

namespace App\Models;

use App\status;
use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    protected $table = 'uploads';

    protected $fillable = [
        'nome',
        'id_arquivo'
    ];

    public function arquivo(){

        return $this->hasOne(Arquivo::class, 'id', 'id_arquivo');

    }
}




