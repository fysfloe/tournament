<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table = 'teams';

    protected $fillable = [
        'name',
        'group_id'
    ];

    protected $appends = ['wins', 'losses', 'points'];

    public function participants() 
    {
        return $this->hasMany('App\Participant');
    }

    public function homeGames() 
    {
        return $this->hasMany('App\Game', 'home_team_id');
    }

    public function awayGames() 
    {
        return $this->hasMany('App\Game', 'away_team_id');
    }

    public function getWinsAttribute() 
    {
        $wins = 0;

        foreach ($this->homeGames as $game) {
            if ($game->result && $game->result->home_goals > $game->result->away_goals) {
                $wins++;
            }
        }

        foreach ($this->awayGames as $game) {
            if ($game->result && $game->result->away_goals > $game->result->home_goals) {
                $wins++;
            }
        }

        return $wins;
    }

    public function getLossesAttribute() 
    {
        $losses = 0;

        foreach ($this->homeGames as $game) {
            if ($game->result && $game->result->home_goals < $game->result->away_goals) {
                $losses++;
            }
        }

        foreach ($this->awayGames as $game) {
            if ($game->result && $game->result->away_goals < $game->result->home_goals) {
                $losses++;
            }
        }

        return $losses;
    }

    public function getPointsAttribute()
    {
        $points = 0;

        foreach ($this->homeGames as $game) {
            if ($game->result && $game->result->home_goals > $game->result->away_goals) {
                $points += $game->result->getPoints();
            }
        } 

        foreach ($this->awayGames as $game) {
            if ($game->result && $game->result->away_goals > $game->result->home_goals) {
                $points += $game->result->getPoints();
            }
        } 

        return $points;
    }
}
