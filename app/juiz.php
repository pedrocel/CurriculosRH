<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class juiz extends Model
{
    protected $table = 'juiz';

    protected $fillable = [
        'nome',
        'peso',
        'id_status',
        'id_local'
    ];

    public function status()
    {
        return $this->hasOne(status::class, 'id', 'id_status');
    }

    public function locais()
    {
        return $this->hasOne(locais::class, 'id', 'id_locais');
    }

}