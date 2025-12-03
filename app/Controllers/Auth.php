<?php

namespace App\Controllers;

use App\Models\UsuarioModel;

class Auth extends BaseController
{
    public function loginPost()
    {
        $request = \Config\Services::request();
        $session = \Config\Services::session();

        $email = $request->getPost('correo');
        $password = $request->getPost('contraseña');

        $usuarioModel = new UsuarioModel();
        $usuario = $usuarioModel->where('correo', $email)->first();

        if ($usuario && password_verify($password, $usuario['contraseña'])) {
            // Guardar sesión
            $session->set([
                'usuario_id' => $usuario['id'],
                'usuario_nombre' => $usuario['nombre'],
                'is_logged_in' => true
            ]);

            return redirect()->to(base_url('inicio'));
        } else {
            $session->setFlashdata('error', 'Usuario o contraseña incorrectos');
            return redirect()->back();
        }
    }

    public function logout()
    {
        $session = \Config\Services::session();
        $session->destroy();
        return redirect()->to(base_url('login'));
    }
}
