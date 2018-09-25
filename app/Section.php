<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $fillable = [
        'section',
        'location',
        'term_id',
        ];

    public function term(){
        return $this->belongsTo('App\Term');
    }

}
