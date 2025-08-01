<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function imagenes_cvs1()
    {
        return view('products.imagenes_cvs1');
    }

    public function desplazamiento()
    {
        return view('products.desplazamiento');
    }

    public function fotoelectrico()
    {
        return view('products.fotoelectrico');
    }

    public function laser()
    {
        return view('products.laser');
    }

    public function fibra()
    {
        return view('products.fibra');
    }

    public function comparador_sincronizacion()
    {
        return view('products.comparador_sincronizacion');
    }

}
