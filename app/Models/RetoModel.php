<?php

namespace App\Models;
use CodeIgniter\Model;

class RetoModel extends Model
{
    protected $table = 'retos';
    protected $primaryKey = 'id';
    protected $allowedFields = ['usuario_id', 'nivel_id', 'titulo', 'estado'];
}
