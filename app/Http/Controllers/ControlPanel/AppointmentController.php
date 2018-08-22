<?php

namespace App\Http\Controllers\ControlPanel;

use App\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Auth::user()->events;

        return view('admin.appointments.index')->withEvents($events);
    }

    public function show()
    {

    }


    public function allAppointments()
    {
        $appointments = Event::where('doctor_id', Auth::user()->id)->get();

        return view('admin.appointments.all')->withAppointments($appointments);
    }

}
