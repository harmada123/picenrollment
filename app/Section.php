<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $fillable = ['degree',
        'course',
        'term',
        'term_payment'
        ];
}
