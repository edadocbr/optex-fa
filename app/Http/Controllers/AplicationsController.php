<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AplicationsController extends Controller
{
    public function automotriz()
    {
        return view('aplications.automotriz');
    }

    public function alimentos_farmaceuticos()
    {
        return view('aplications.alimentos_farmaceuticos');
    }

    public function electronica_semiconductores()
    {
        return view('aplications.electronica_semiconductores');
    }

    public function logistica_transporte()
    {
        return view('aplications.logistica_transporte');
    }
}
