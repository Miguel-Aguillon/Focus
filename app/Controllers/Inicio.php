<?php

namespace App\Controllers;
use App\Models\UsuarioModel;
use App\Models\NivelModel;
use App\Models\LogrosModel;

class Inicio extends BaseController
{
    public function index()
    {
        $usuarioModel = new UsuarioModel();
        $nivelModel = new NivelModel();
        $logrosModel = new LogrosModel();

        $data['totalUsuarios'] = $usuarioModel->countAllResults();
        $data['totalNiveles'] = $nivelModel->countAllResults();
        $data['totalLogros'] = $logrosModel->countAllResults();

        return view('inicio/inicio', $data);
    }
}
