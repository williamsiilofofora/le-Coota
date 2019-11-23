<?php

namespace App\Http\Controllers;

use App\Event;
use Image;
use Illuminate\Http\Request;
use Carbon\Carbon;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $event = Event::orderBy('dateConcert', 'desc')->take(6)->get();
        // return view('cardEvent', ['event' => $event]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.FormCard');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $event = new Event;
        $event->title = $request->title;
        $event->style = $request->style;
        $event->description = $request->description;
        $event->dateConcert = $request->dateConcert;
        $event->image = $request->image;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $path = 'images/concert/';
            Image::make($image)->save(public_path($path . $filename));
            // Save thumb
            $pathThumb = 'images/thumb/';
            Image::make($image)->widen(500)->encode()->save(public_path($pathThumb . $filename));
            $event->image = $filename;
        }



        $event->save();

        return redirect()->route('accueil.index', [$event->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $event = new Event;
        $event->destroy($event);

        return back();
    }
}