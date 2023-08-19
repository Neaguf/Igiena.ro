<?php

namespace App\Controllers;

class Politica extends BaseController
{
    public function index()
    {

        return view('structure/header') . view('components/politica/politica-cookie.php') . view('structure/footer');
    }

    public function termeni()
    {

        return view('structure/header') . view('components/politica/termeni-conditii.php') . view('structure/footer');
    }

    public function confidentialitate()
    {

        return view('structure/header') . view('components/politica/politica-confidentialitate.php') . view('structure/footer');
    }
}
