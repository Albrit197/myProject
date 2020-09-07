<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class horses extends Model
{
    public $fillable = ['name', 'runs', 'wins', 'about'];

    public function horses(){
        return $this->hasMany('App\horses');
    }

    public function betters(){
        return $this->hasMany('App\betters');
    }

}
