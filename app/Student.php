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
        'course',
        'section_id',
        'year_enrolled',
        'address',
        'gender',
        'student_number',

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
    public function course(){
        return $this->belongsTo('App\Course');
    }
}
