<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function inicio()
    {
        return view('pages.inicio');
    }

    public function nosotros()
    {
        return view('pages.nosotros');
    }

    public function contacto()
    {
        return view('pages.contacto');
    }
}