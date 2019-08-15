<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plantoes extends Model
{
    protected $table = 'plantoes';

    protected $fillable = [
        'id',
        'id_juiz',
        'id_status',
        'id_local',
        'id_plantao'
    ];

    public function id_juiz()
    {
        return $this->hasOne(juiz::class, 'id', 'id_juiz');
    }

    public function status()
    {
        return $this->hasOne(status::class, 'id', 'id_status');
    }

    public function locais()
    {
        return $this->hasOne(locais::class, 'id', 'id_locais');
    }

    public function data_plantao_id()
    {
        return $this->hasOne(data::class, 'id', 'id_data');
    }



}
