<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    protected $table = 'participants';

    protected $fillable = [
        'firstname',
        'surname',
        'team_id',
    ];

    public function team() {
        return $this->belongsTo('App\Team');
    }
}
