<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class formation extends Model
{
    //mass assignable

    protected $fillable = [
        'name', 'description', 'price','image'
    ];

    public function students(){
        return $this->belongsToMany('App\User','student_formation')->withPivot('start', 'finnish');
    }
}
