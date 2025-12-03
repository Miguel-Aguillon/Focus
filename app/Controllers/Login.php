<?php

namespace App\Controllers;
use App\Models\UsuarioModel;

class Login extends BaseController
{
    public function index()
    {
        return view('login/login');
    }

    public function autenticar()
    {
        $usuarioModel = new UsuarioModel();

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $usuario = $usuarioModel->where('email', $email)->first();

        if ($usuario && password_verify($password, $usuario['password'])) {
            session()->set('usuario', $usuario);
            return redirect()->to(base_url('perfil'));
        } else {
            return redirect()->back()->with('error', 'Correo o contraseña incorrectos.');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('login'));
    }
}
