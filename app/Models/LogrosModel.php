<?php

namespace App\Models;

use CodeIgniter\Model;

class LogrosModel extends Model
{
    protected $table = 'logros';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nombre', 'descripcion', 'icono'];
}
