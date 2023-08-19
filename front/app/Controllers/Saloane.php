<?php

namespace App\Controllers;

class Saloane extends BaseController
{
    public function index()
    {
        return view('structure/header') . view('pages/saloane') . view('structure/footer');
    }
}
