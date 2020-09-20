<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name','email','cpf','tipo','telefone','status','password','om_id'
    ];

    public function om(){
        return $this->belongsTo(Om::class, 'om_id');
    }

    public function empresa() {
        return $this->hasMany(Empresa::class);
    }

    protected $hidden = [
        'password', 'remember_token',
    ];
}
