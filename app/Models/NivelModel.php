<?php

namespace App\Models;
use CodeIgniter\Model;

class NivelModel extends Model
{
    protected $table = 'niveles';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nombre', 'descripcion', 'dificultad'];
}
