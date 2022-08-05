<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function index(){

        return view('owner.calendar');

    }
}
