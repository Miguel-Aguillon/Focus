<?php

namespace App\Controllers;

use App\Models\UsuarioModel;

class Auth extends BaseController
{
    public function login()
    {
        return view('login/login');
    }

    public function loginPost()
    {
        $request = \Config\Services::request();
        $session = \Config\Services::session();

        $email = $request->getPost('correo');
        $password = $request->getPost('contrasena');

        $usuarioModel = new UsuarioModel();
        $usuario = $usuarioModel->where('correo', $email)->first();

        if ($usuario && password_verify($password, $usuario['contrasena'])) {
            // Guardar sesión con el rol
            $session->set([
                'usuario_id' => $usuario['id'],
                'usuario_nombre' => $usuario['nombre'],
                'rol' => $usuario['rol'],  // 👈 Guardamos rol aquí
                'is_logged_in' => true
            ]);

            // Redirección según el rol
            if ($usuario['rol'] === 'admin') {
                return redirect()->to(base_url('admin'));
            } else {
                return redirect()->to(base_url('perfil'));
            }
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
