<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('structure/header') . view('pages/home') . view('structure/footer');
    }
}
