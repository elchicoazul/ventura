<?php

namespace App\Controllers;

class Cards extends BaseController
{
    public function index()
    {
        return view('cards/index');
    }
    public function contenido()
    {
        return view('cards/contenido');
    }
}
