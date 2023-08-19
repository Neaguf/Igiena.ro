<?php

namespace App\Controllers;

class Despre_noi extends BaseController
{
    public function index()
    {

        return view('structure/header') . view('pages/despre_noi') . view('structure/footer');
    }
}
