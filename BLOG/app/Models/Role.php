<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Role extends Model
{
    use HasFactory,Notifiable;

    protected $table='roles';
    protected $guarded=['id'];

    public function getUser(){
        return $this->hasMany('App\Models\User','user_id','id');
    }

}
