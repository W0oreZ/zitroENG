<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'firstname', 'lastname', 'cin','adresse', 'telephone' , 'email','date_naissance','image'
    ];


    public function formations(){
        return $this->belongsToMany('App\formation','student_formation')->withPivot('start', 'finnish');
    }
}




/*
    public function getRouteKeyName()
    {
        return 'cin';
    }*/