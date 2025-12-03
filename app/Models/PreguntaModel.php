<?php

namespace App\Models;
use CodeIgniter\Model;

class PreguntaModel extends Model
{
    protected $table = 'preguntas';
    protected $primaryKey = 'id';
    protected $allowedFields = ['leccion_id', 'pregunta', 'opcion_a', 'opcion_b', 'opcion_c', 'opcion_d', 'respuesta_correcta'];

    public function obtenerPorLeccion($leccion_id)
    {
        return $this->where('leccion_id', $leccion_id)->findAll();
    }
}
