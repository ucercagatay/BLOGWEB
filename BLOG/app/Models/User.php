<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $table='users';
    protected $guarded =['id'];
    protected $hidden=['password'];
    protected $fillable=[
        'name',
        'surname',
        'email',
    ];

    public function getRole(){
    return $this->hasOne('App\Models\Role','role_id','id');
    }



    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
