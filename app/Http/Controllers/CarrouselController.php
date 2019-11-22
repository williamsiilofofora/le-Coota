<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarrouselController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $randNumber1 = rand(1, 27);
        $randNumber2 = rand(1, 27);
        $randNumber3 = rand(1, 27);
        $cootaImg1 =  "coota" . ($randNumber1) . ".jpeg";
        $cootaImg2 =  "coota" . ($randNumber2) . ".jpeg";
        $cootaImg3 =  "coota" . ($randNumber3) . ".jpeg";
        return view('carrousel', compact('cootaImg1', 'cootaImg2', 'cootaImg3'));
    }

}