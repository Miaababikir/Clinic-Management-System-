<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    //
    protected $fillable = ['doctor_id', 'date', 'available_seats'];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

}
