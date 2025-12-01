<?php

namespace App\Controllers;

use App\Models\LeccionModel;
use App\Models\PreguntaModel;
use CodeIgniter\Controller;

class Lecciones extends BaseController
{
    /**
     * Muestra todas las lecciones disponibles.
     * Esta es la página principal de "Lecciones".
     */
    public function index()
    {
        $leccionModel = new LeccionModel();
        $data['lecciones'] = $leccionModel->findAll();

        return view('lecciones/lecciones', $data);
    }

    /**
     * Muestra una lección específica con su quiz.
     * Ejemplo de ruta: /lecciones/3
     */
    public function quiz($leccion_id)
    {
        $preguntaModel = new PreguntaModel();
        $leccionModel = new LeccionModel();

        $data['leccion'] = $leccionModel->find($leccion_id);
        $data['preguntas'] = $preguntaModel->obtenerPorLeccion($leccion_id);

        return view('lecciones/quiz', $data);
    }

    /**
     * Evalúa las respuestas enviadas por el usuario desde el quiz.
     * Calcula los aciertos y actualiza la experiencia (XP) del usuario
     */
    public function evaluar()
    {
        $respuestas = $this->request->getPost();
        $aciertos = 0;

        // Obtenemos el ID de la lección
        $leccion_id = $respuestas['leccion_id'] ?? null;
        unset($respuestas['leccion_id']);

        // Obtenemos las preguntas de la lección
        $preguntaModel = new PreguntaModel();
        $preguntas = $preguntaModel->obtenerPorLeccion($leccion_id);
        $total = count($preguntas);

        // Comparar respuestas
        foreach ($preguntas as $p) {
            $clave = 'pregunta_' . $p['id'];
            if (isset($respuestas[$clave]) && $respuestas[$clave] == $p['respuesta_correcta']) {
                $aciertos++;
            }
        }

        // Calcular experiencia (10 puntos por acierto)
        $xp = $aciertos * 10;

        // ID del usuario actual (puedes reemplazar con session real)
        $usuario_id = session()->get('usuario_id') ?? 1;

        // Actualizar experiencia
        $db = \Config\Database::connect();
        $db->query("UPDATE usuarios SET experiencia = experiencia + $xp WHERE id = $usuario_id");

        // Mostrar resultado en una vista
        return view('lecciones/resultado', [
            'aciertos' => $aciertos,
            'total' => $total,
            'xp' => $xp
        ]);
    }
}
