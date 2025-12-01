<?php

namespace App\Controllers;
use App\Models\NivelModel;

class Niveles extends BaseController
{
    public function index()
    {
        $nivelModel = new NivelModel();
        $data['niveles'] = $nivelModel->findAll();

        return view('niveles/niveles', $data);
    }
}
