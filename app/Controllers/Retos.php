<?php

namespace App\Controllers;
use App\Models\RetoModel;

class Retos extends BaseController
{
    public function index()
    {
        $retoModel = new RetoModel();
        $data['retos'] = $retoModel->findAll();

        return view('retos/retos', $data);
    }
}
