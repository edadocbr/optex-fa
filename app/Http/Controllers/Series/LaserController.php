<?php

namespace App\Http\Controllers\Series;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LaserController extends Controller
{
    public function serie_d()
    {
        return view('series.laser.serie_d');
    }

    public function serie_d2sa()
    {
        return view('series.laser.serie_d2sa');
    }

    public function serie_dm()
    {
        return view('series.laser.serie_dm');
    }

    public function serie_ds()
    {
        return view('series.laser.serie_ds');
    }

    public function serie_zl()
    {
        return view('series.laser.serie_zl');
    }

}
