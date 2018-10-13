<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $table = 'games';

    protected $fillable = [
        'home_team_id',
        'away_team_id',
        'result_id',
        'group_id'
    ];

    public function homeTeam() {
        return $this->belongsTo('App\Team', 'home_team_id');
    } 

    public function awayTeam() {
        return $this->belongsTo('App\Team', 'away_team_id');
    }

    public function result() {
        return $this->belongsTo('App\Result');
    }

    public function group() {
        return $this->belongsTo('App\Group');
    }
}
