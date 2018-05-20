<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable =[
      'name', 'lateAfterTo', 'outOfTimeAfterTo',
    ];
    protected $casts = [
        'active' => 'boolean',
    ];

    public function user(){
        return $this->belongsToMany('App\User')->withPivot('type','active')->withTimestamps();
    }

    public function timetables(){
        return $this->hasMany('App\Timetable');
    }
}
