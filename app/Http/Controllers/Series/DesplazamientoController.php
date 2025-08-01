<?php

namespace App\Http\Controllers\Series;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DesplazamientoController extends Controller
{
    public function serie_cd1()
    {
        return view('series.desplazamiento.serie_cd1');
    }

    public function serie_cd3()
    {
        return view('series.desplazamiento.serie_cd3');
    }

    public function serie_cd5()
    {
        return view('series.desplazamiento.serie_cd5');
    }
}
