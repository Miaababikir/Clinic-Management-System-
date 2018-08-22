<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //
    const CONFIRMED = 1;
    const NOT_CONFIRMED = 0;

    protected $fillable = ['title','token','start','end_date', 'doctor_id', 'patient_id'];
    protected $appends = ['doctor', 'patient'];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function getDoctorAttribute()
    {
        $doctor = Doctor::findOrFail($this->doctor_id);
        return $doctor->full_name;
    }

    public function getPatientAttribute()
    {
        $patient = Patient::findOrFail($this->patient_id);
        return $patient->name;
    }

}
