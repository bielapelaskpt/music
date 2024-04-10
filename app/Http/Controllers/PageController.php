<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;

class PageController extends Controller
{
    public function video()
    {
        session()->put("step", 0);
        return view("pages/avaliar");
    }

    public function video2()
    {
        session()->put("step", 4);
        return view("pages/avaliar");
    }

    public function saqueFinal()
    {
        session()->put("step", 5);
        return view("pages/saqueFinal");
    }

    public function concluirSaque()
    {
        return view("pages/concluirSaque");
    }

    public function vsl()
    {
        session()->put("step", 1);
        return view("pages/vsl");
    }
}