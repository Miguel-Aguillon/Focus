<?php

namespace App\Controllers;

use App\Models\UsuarioModel;

class Admin extends BaseController
{
    public function index()
    {
        $usuarioModel = new UsuarioModel();
        $usuarios = $usuarioModel->findAll();

        return view('admin/dashboard', ['usuarios' => $usuarios]);
    }

    public function dashboard()
    {
        // Puedes reutilizar el código del index
        $usuarioModel = new UsuarioModel();
        $usuarios = $usuarioModel->findAll();

        return view('admin/dashboard', ['usuarios' => $usuarios]);
    }

    public function editarRol($id)
    {
        $usuarioModel = new UsuarioModel();
        $usuario = $usuarioModel->find($id);

        if (!$usuario) {
            return redirect()->to(base_url('admin'))->with('error', 'Usuario no encontrado');
        }

        return view('admin/editarRol', ['usuario' => $usuario]);
    }

    public function actualizarRol($id)
    {
        $request = \Config\Services::request();
        $usuarioModel = new UsuarioModel();

        $nuevoRol = $request->getPost('rol');
        $usuarioModel->update($id, ['rol' => $nuevoRol]);

        return redirect()->to(base_url('admin'))->with('success', 'Rol actualizado correctamente');
    }

    public function eliminarUsuario($id)
    {
        $usuarioModel = new UsuarioModel();
        $usuarioModel->delete($id);

        return redirect()->to(base_url('admin'))->with('success', 'Usuario eliminado correctamente');
    }
}
