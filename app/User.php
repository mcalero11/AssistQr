<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'lastName', 'email', 'password', 'birthDate', 'timeZone',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
      'is_instructor' => 'boolean',
      'active' => 'boolean',
    ];

    public function courses(){
        return $this->belongsToMany('App\Course')->withPivot('type','active')->withTimestamps();
    }

    public function classSession(){
        return $this->belongsToMany('App\ClassSession','attendances')->as('attendace')->withPivot('status','comments')->withTimestamps();
    }

    public function CompleteName(){
        return $this->name . ' ' . $this->lastName;
    }
}
