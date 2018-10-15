<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    protected $fillable = [
        'std_id',
        'section_id',
        'subject_id',
        'grade'
    ];
}
