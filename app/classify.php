<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class classify extends Model
{
    protected $table= "classify";
    public $timestamps= false;
    public function tour()
    {
        return $this->hasMany('App\tour','ID','Classify');
    }
}
