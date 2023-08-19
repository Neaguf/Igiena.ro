<?php

namespace App\Controllers;

class Contact extends BaseController
{
    public function index()
    {

        return view('structure/header') . view('pages/contact') . view('structure/footer');
    }
}
