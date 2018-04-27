<?php

namespace App\Http\Controllers\Appointments;

use App\Doctor;
use App\Event;
use App\Patient;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class AppointmentController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the request data
        $this->validate($request, [
            'name' => 'required|max:40',
            'phone' => 'required',
            'email' => 'required|email',
            'gender' => 'required',
            'doctor_id' => 'required',
            'date' => 'required',
            'description' => 'required',
        ]);

        if ($this->checkDate($request->date, $request->doctor_id))
        {
            // Adding the patient
            $patient = new Patient();
            $patient->name = $request->name;
            $patient->phone = $request->phone;
            $patient->email = $request->email;
            $patient->gender = $request->gender;
            $patient->description = $request->description;
            $patient->save();

            $event = new Event();
            $event->title = $patient->name;
            $event->start = $request->date;
            $event->end_date = $request->date;
            $event->doctor_id = $request->doctor_id;
            $event->patient_id = $patient->id;
            $event->token = uniqid();
            $event->save();

            Session::flash('success', 'Your appointment have been added successfully!');
            return redirect()->route('appointment-code', ['code' => $event->token]);
        }
        else
        {
            Session::flash('error', 'Please enter valid date');
            return redirect()->route('appointments');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function code($code)
    {
        $appointment = Event::where('token', $code)->first();
        return view('appointment_token')->withToken($appointment->token);
    }

    public function checkDate($date, $doctor_id)
    {
        $day = $this->convertToDays($date);
        $doctor = Doctor::findOrFail($doctor_id);
        if ($doctor->days()->where('name', $day)->first())
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function convertToDays($date)
    {
        //Convert the date string into a unix timestamp.
        $unixTimestamp = strtotime($date);

        //Get the day of the week using PHP's date function.
        $dayOfWeek = date("l", $unixTimestamp);

        return $dayOfWeek;
    }

    public function is_available($date, $doctor_id)
    {
        $doctor = Doctor::findOrFail($doctor_id);
        $seats = $doctor->seats()->where('date', $date)->first();

        $availableSeats = $seats->available_seats;
    }
}
