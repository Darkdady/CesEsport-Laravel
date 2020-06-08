<?php

namespace CesEsport;

use Illuminate\Database\Eloquent\Model;

class CesiTeam extends Model
{
    public $timestamps = false;

    protected $table = 'cesi_team';

    public function game()
    {
        return $this->belongsToMany('CesEsport\Game')->as('games');
    }

    public function players()
    {
        return $this->hasMany('CesEsport\User');
    }
}
