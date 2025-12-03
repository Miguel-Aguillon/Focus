<?php

namespace App\Controllers;
use App\Models\UsuarioModel;

class Usuarios extends BaseController
{
    public function registro()
    {
        return view('registro');
    }

    public function registrar()
    {
        $model = new UsuarioModel();

        $data = [
            'nombre'   => $this->request->getPost('nombre'),
            'email'    => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT)
        ];

        $model->insert($data);
        return redirect()->to(base_url('login'))->with('mensaje', 'Usuario registrado correctamente');
    }

    public function login()
    {
        return view('login');
    }

    public function autenticar()
    {
        $model = new UsuarioModel();
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $usuario = $model->where('email', $email)->first();

        if ($usuario && password_verify($password, $usuario['password'])) {
            session()->set('usuario', $usuario);
            return redirect()->to(base_url('perfil'));
        } else {
            return redirect()->back()->with('error', 'Credenciales incorrectas');
        }
    }

    public function perfil()
    {
        $usuario = session()->get('usuario');
        if (!$usuario) return redirect()->to(base_url('login'));
        return view('perfil', ['usuario' => $usuario]);
    }
}
