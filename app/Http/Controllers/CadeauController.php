<?php

namespace App\Http\Controllers;

use App\Cadeau;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CadeauController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dateToday = Carbon::now();
        $cadeau = Cadeau::orderBy('dateCadeaux', 'desc')->where('dateCadeaux', '>=', $dateToday)->take(1)->get();
        return view('cadeaux.cadeaux', compact('cadeau'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.FormCadeau');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cadeau = new Cadeau;
        $cadeau->title = $request->title;
        $cadeau->descriptionCadeaux = $request->descriptionCadeaux;
        $cadeau->dateCadeaux = $request->dateCadeaux;
        $cadeau->lien = $request->lien;
        $cadeau->save();

        return redirect()->route('dashboard.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cadeau = Cadeau::find($id);
        return view('cadeaux.edit', compact('cadeau'));
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
        $cadeau = Cadeau::find($id);
        $cadeau->id =$id;
        $cadeau->title = $request->title;
        $cadeau->descriptionCadeaux = $request->descriptionCadeaux;
        $cadeau->dateCadeaux = $request->dateCadeaux;
        $cadeau->lien = $request->lien;
        $cadeau->update();
        return redirect()->route('accueil.index', [$cadeau->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cadeau = Cadeau::findOrFail($id);
        $cadeau->destroy($id);

        return redirect()->route('dashboard.index');
    }
}