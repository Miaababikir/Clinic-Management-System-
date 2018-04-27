<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    const MALE = 1;
    const FEMALE = 0;

    protected $fillable = ['name', 'gender', 'phone', 'email', 'description'];

    public function events()
    {
        return $this->hasMany(Event::class);
    }

}
