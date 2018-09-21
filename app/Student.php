<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'name',
        'mname',
        'lname',
        'birthday',
        'photo_id',
        'course_id',
        'section_id',
        'year_enrolled',

    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
    public function photo(){
        return $this->belongsTo('App\Photo');
    }
    public function section(){
        return $this->belongsTo('App\Section');
    }
}
