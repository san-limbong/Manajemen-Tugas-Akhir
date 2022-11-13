<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $guarded = ['id'];
    

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function enrollment(){
        return $this->hasMany(Enrollment::class);
    }

    public function group(){
        return $this->hasMany(Group::class);
    }
    
    public function topic(){
        return $this->hasMany(Topic::class);
    }

    public function meeting(){
        return $this->hasMany(Meeting::class);
    }

    public function finalization(){
        return $this->hasMany(Finalization::class);
    }

    public function profile(){
        return $this->hasMany(User::class);
    }
}
