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
    public function searchDash(Request $request)
    {

        $search = $request->get('searchDash');
        $eventDash = Event::orderBy('dateConcert', 'desc')
        ->where('style', 'like', '%' . $search . '%')
            ->orWhere('title', 'like', '%' . $search . '%')
            ->orWhere('origine', 'like', '%' . $search . '%')
            ->orWhere('dateConcert', 'like', '%' . $search . '%')
            ->paginate(10);

        $cadeauDash = Cadeau::orderBy('dateCadeaux', 'desc')
        ->where('title', 'like', '%' . $search . '%')
        ->orWhere('dateCadeaux', 'like', '%' . $search . '%')
        ->paginate(10);    

        return view('dashboard.dashboard', compact('eventDash', 'cadeauDash'));
    }

}