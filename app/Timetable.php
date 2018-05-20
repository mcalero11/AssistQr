<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Timetable extends Model
{

    protected $fillable = [
        'course_id', 'dayOfWeek', 'startTime', 'endingTime',
    ];

    public function course(){
        return $this->belongsTo('App\Course');
    }

    public function classSessions(){
        return $this->hasMany('App\ClassSession');
    }
}
