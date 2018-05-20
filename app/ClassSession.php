<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassSession extends Model
{
    protected $fillable = [
        'timetable_id', 'comments',
    ];

    protected $hidden = [
        'qr'
    ];

    public function timetables(){
        return $this->belongsTo('App\Timetable');
    }

    public  function students(){
        return $this->belongsToMany('App\User','attendaces')->as('attendace')->withPivot('status','comments')->withTimestamps();
    }
}
