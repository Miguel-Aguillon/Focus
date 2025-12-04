<?php

namespace App\Controllers;
use App\Models\PreguntaModel;
use App\Models\UsuarioModel;

class Preguntas extends BaseController
{
    public function index($leccion_id)
    {
        $preguntaModel = new PreguntaModel();
        $data['preguntas'] = $preguntaModel->where('leccion_id', $leccion_id)->findAll();
        $data['leccion_id'] = $leccion_id;

        return view('preguntas/index', $data);
    }

    public function responder()
    {
        $db = \Config\Database::connect();
        $preguntaModel = new \App\Models\PreguntaModel();
        $usuario_id = session()->get('usuario_id'); // asegúrate de tenerlo en sesión
        $puntosGanados = 0;

        foreach ($this->request->getPost() as $key => $respuestaUsuario) {
            if (strpos($key, 'pregunta_') !== false) {
                $idPregunta = str_replace('pregunta_', '', $key);
                $pregunta = $preguntaModel->find($idPregunta);

                if ($pregunta['respuesta_correcta'] == $respuestaUsuario) {
                    $puntosGanados += 10;
                }
            }
        }

        // 🟢 AQUÍ va el código de experiencia:
        $db->query("UPDATE usuarios SET experiencia = experiencia + $puntosGanados WHERE id = $usuario_id");

        return redirect()->to(base_url('perfil'))->with('success', "¡Has ganado $puntosGanados puntos de experiencia!");
    }
}
