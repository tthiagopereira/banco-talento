<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $fillable = ['image_logo','nome_empresa','user_id'];

    public function user() {
        return $this->belongsTo(User::class,'user_id');
    }
}
