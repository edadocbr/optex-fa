<?php

namespace App\Http\Controllers\Series;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FibraController extends Controller
{
    public function serie_drf()
    {
        return view('series.fibra.serie_drf');
    }

    public function serie_brf()
    {
        return view('series.fibra.serie_brf');
    }

    public function serie_tgf_vgt_t()
    {
        return view('series.fibra.serie_tgf_vgt_t');
    }

    public function serie_nf()
    {
        return view('series.fibra.serie_nf');
    }

}
