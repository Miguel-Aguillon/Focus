<?php

namespace App\Controllers;
use App\Models\UsuarioModel;

class Perfil extends BaseController
{
    public function perfil()
    {
        // 1️⃣ Obtener la sesión
        $session = \Config\Services::session();

        // 2️⃣ Revisar si el usuario está logueado
        if (!$session->get('is_logged_in')) {
            return redirect()->to(base_url('login'));
        }

        // 3️⃣ Obtener ID del usuario desde la sesión
        $usuarioId = $session->get('usuario_id');

        // 4️⃣ Buscar usuario en la base de datos
        $usuarioModel = new UsuarioModel();
        $usuario = $usuarioModel->find($usuarioId);

        if (!$usuario) {
            // Si por alguna razón no se encuentra el usuario
            return redirect()->to(base_url('login'));
        }

        // 5️⃣ Calcular variables adicionales para la vista
        $nivel = $usuario['nivel'];                // Nivel del usuario
        $xp_total = $usuario['experiencia'];       // Experiencia total
        $racha = $usuario['racha'] ?? 0;           // Racha de días (puedes calcular según tu lógica)
        $rol = $usuario['rol'];                    // Rol del usuario

        // 6️⃣ Enviar todas las variables a la vista
        return view('perfil/perfil', [
            'usuario' => $usuario,
            'nivel' => $nivel,
            'xp_total' => $xp_total,
            'racha' => $racha,
            'rol' => $rol
        ]);
    }
}
