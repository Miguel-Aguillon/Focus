<?php

namespace App\Controllers;

use App\Models\UsuarioModel;
use App\Models\LogrosModel;
use App\Models\NivelModel;
use CodeIgniter\Controller;

class Perfil extends BaseController
{
    public function index()
    {
        // ⚙️ Usuario actual (de sesión o de prueba)
        $usuario_id = session()->get('usuario_id') ?? 1;

        $usuarioModel = new UsuarioModel();
        $logrosModel = new LogrosModel();
        $nivelModel = new NivelModel();

        // Buscar el usuario
        $usuario = $usuarioModel->find($usuario_id);

        if (!$usuario) {
            $usuario = [
                'nombre' => 'Invitado',
                'correo' => 'sin correo',
                'experiencia' => 0,
            ];
        }

        // 🧮 Calcular datos del perfil
        $xp_total = $usuario['experiencia'];
        $nivel = floor($xp_total / 100) + 1;
        $racha = 3; // puedes luego hacerlo dinámico
        $logros = $logrosModel->findAll();

        // 🔹 Enviar todos los datos a la vista
        $data = [
            'usuario'   => $usuario,
            'xp_total'  => $xp_total,
            'nivel'     => $nivel,
            'racha'     => $racha,
            'logros'    => $logros,
        ];

        return view('perfil/perfil', $data);
    }
}
