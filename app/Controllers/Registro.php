<?php

namespace App\Controllers;

use App\Models\UsuarioModel;

class Registro extends BaseController
{
    public function index()
    {
        return view('registro/registro');
    }

    public function guardar()
    {
        $usuarioModel = new UsuarioModel();

        $data = [
            'nombre' => $this->request->getPost('nombre'),
            'correo' => $this->request->getPost('correo'),
            'contrasena' => password_hash($this->request->getPost('contrasena'), PASSWORD_DEFAULT),
            'fecha_registro' => date('Y-m-d H:i:s'),
            'rol' => 'usuario' // Rol por defecto
        ];

        $usuarioModel->insert($data);
        return redirect()->to(base_url('login'))->with('success', 'Registro exitoso.');
    }
}
