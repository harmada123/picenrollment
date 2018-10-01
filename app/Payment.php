<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'user_id',
        'remittance_date',
        'amount',
        'term',
        'OR_number',
        'section_id'
    ];

    public function user(){
        return $this->hasMany('App\User');
    }
}
