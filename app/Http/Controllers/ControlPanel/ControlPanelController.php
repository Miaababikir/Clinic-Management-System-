<?php

namespace App\Http\Controllers\ControlPanel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ControlPanelController extends Controller
{
    //
    public function index()
    {
        return view('admin.index');
    }

}
