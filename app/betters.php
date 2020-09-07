<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class betters extends Model
{
    public $fillable = ['name', 'surname', 'bet', 'horse_id'];

    public function country(){
        return $this->belongsTo('App\Country');
    }

}
