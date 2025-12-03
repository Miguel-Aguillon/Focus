<?php

namespace App\Models;
use CodeIgniter\Model;

class LeccionModel extends Model
{
    protected $table = 'lecciones';
    protected $primaryKey = 'id';
    protected $allowedFields = ['categoria_id', 'titulo', 'descripcion', 'contenido', 'xp'];

    public function obtenerPorCategoria($categoria_id)
    {
        return $this->where('categoria_id', $categoria_id)->findAll();
    }
}
