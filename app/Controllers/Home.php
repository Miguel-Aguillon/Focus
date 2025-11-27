<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
     public function servicios()
    {
        return view('servicios');
    }

    public function acerca()
    {
        return view('acerca');
    }

    public function contacto()
    {
        return view('contacto');
    }
}
