<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $table = 'groups';

    protected $fillable = [
        'name'
    ];

    public function teams() {
        return $this->hasMany('App\Team');
    } 

    public function games() {
        return $this->hasMany('App\Game');
    }
}
