<?php

namespace App\Controllers;

use App\Models\UsuarioModel;
use CodeIgniter\Controller;

class Registro extends BaseController
{
    public function index()
    {
        // Muestra la vista del formulario de registro
        return view('registro/registro');
    }

    public function guardar()
    {
        $usuarioModel = new UsuarioModel();

        // Obtener los datos del formulario (NO se cambió ningún nombre)
        $nombre = $this->request->getPost('nombre');
        $correo = $this->request->getPost('correo');
        $contrasena = $this->request->getPost('contrasena');

        // Validar que no esté vacío
        if (!$nombre || !$correo || !$contrasena) {
            return redirect()->back()->with('error', 'Todos los campos son obligatorios.');
        }

        // Verificar si el correo ya existe
        $existe = $usuarioModel->where('correo', $correo)->first();
        if ($existe) {
            return redirect()->back()->with('error', 'El correo ya está registrado.');
        }

        // Guardar el usuario nuevo
        $usuarioModel->insert([
            'nombre' => $nombre,
            'correo' => $correo,
            'contrasena' => password_hash($contrasena, PASSWORD_DEFAULT),
            'fecha_registro' => date('Y-m-d H:i:s'),
            'experiencia' => 0,
        ]);

        // Mostrar mensaje de exito
        return view('registro/registroexitoso', [
            'registro_ok' => true
        ]);
    }
}
