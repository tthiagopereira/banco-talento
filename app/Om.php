<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Om extends Model
{
    protected $fillable = [
        'nome'
    ];

    public function users(){
        return $this->hasMany('App\User', 'om_id');
    }

}