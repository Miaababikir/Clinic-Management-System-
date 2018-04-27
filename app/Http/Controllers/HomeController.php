<?php

namespace App\Http\Controllers;


use App\Doctor;
use PhpParser\Comment\Doc;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors = Doctor::all();
        return view('index')->withDoctors($doctors);
    }

    public function appointments()
    {
        $doctors = Doctor::all();
        return view('appointments')->withDoctors($doctors);
    }

    public function doctors()
    {
        $doctors = Doctor::all();
        return view('doctors')->withDoctors($doctors);
    }

}
