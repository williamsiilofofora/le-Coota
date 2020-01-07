<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Cadeau;
use Carbon\Carbon;
class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventDash = Event::orderBy('dateConcert', 'desc')->paginate(10);
        $cadeauDash = Cadeau::orderBy('dateCadeaux', 'desc')->paginate(10);
        return view('dashboard.dashboard',compact('eventDash','cadeauDash'));
        
    }

}