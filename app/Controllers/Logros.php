<?php

namespace App\Controllers;
use App\Models\LogrosModel;

class Logros extends BaseController
{
    public function index()
    {
        $logroModel = new LogrosModel();
        $data['logros'] = $logroModel->findAll();

        return view('logros/logros', $data);
    }
}
