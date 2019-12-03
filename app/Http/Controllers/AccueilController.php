<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use Carbon\Carbon;
class AccueilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dateToday = Carbon::now();
        $lastEvent = Event::orderBy('dateConcert', 'asc')->where('dateConcert', '>=', $dateToday)->take(1)->get();
        $event = Event::orderBy('dateConcert', 'asc')->where('dateConcert','>=',$dateToday)->take(6)->get();
        
        $randNumber1 = rand(1, 27);
        $randNumber2 = rand(1, 27);
        $randNumber3 = rand(1, 27);
        $cootaImg1=  "coota".($randNumber1).".jpeg";
        $cootaImg2 =  "coota" . ($randNumber2) . ".jpeg";
        $cootaImg3 =  "coota" . ($randNumber3) . ".jpeg";
        return view('accueil', compact('cootaImg1','cootaImg2','cootaImg3','event','dateToday','lastEvent'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $modal = Event::findOrFail($id);
        return view('accueil',  compact('modal')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}