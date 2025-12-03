<?php 
namespace App\Models;
use CodeIgniter\Model;

class ConfiguracionModel extends Model {
    protected $table = 'configuraciones';
    protected $primaryKey = 'id';
    protected $allowedFields = ['usuario_id', 'idioma', 'modo_oscuro', 'notificaciones', 'animaciones'];
}
