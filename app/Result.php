<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    protected $table = 'results';

    protected $fillable = [
        'home_goals',
        'away_goals',
        'game_id',
    ];

    public function game() 
    {
        return $this->belongsTo('App\Game');
    }

    public function getPoints()
    {
        $difference = abs($this->home_goals - $this->away_goals);

        if ($difference === 10) {
            return 3;
        } else if ($difference >= 5) {
            return 2;
        } else {
            return 1;
        }
    }
}
