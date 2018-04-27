<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Doctor extends Authenticatable
{
    //
    const MALE = 1;
    const FEMALE = 0;

    protected $fillable = ['name','username','full_name', 'password',
        'gender', 'profile_image', 'speciality', 'description'];

    public function days()
    {
        return $this->belongsToMany('App\Day', 'doctors_days');
    }

    public function events()
    {
        return $this->hasMany(Event::class);
    }

    public function seats()
    {
        return $this->hasMany(Seat::class);
    }

}
