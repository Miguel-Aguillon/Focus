<?php

namespace App\Models;
use CodeIgniter\Model;

class PerfilModel extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'id';

    public function obtenerPerfil($usuario_id)
    {
        return $this->find($usuario_id);
    }

    public function obtenerLeccionesCompletadas($usuario_id)
    {
        return $this->db->table('lecciones_completadas')
            ->select('lecciones.titulo, lecciones.xp, lecciones_completadas.fecha')
            ->join('lecciones', 'lecciones.id = lecciones_completadas.leccion_id')
            ->where('lecciones_completadas.usuario_id', $usuario_id)
            ->get()
            ->getResultArray();
    }

    public function obtenerLogros($usuario_id)
    {
        return $this->db->table('usuario_logros')
            ->select('logros.nombre, logros.descripcion, logros.icono')
            ->join('logros', 'logros.id = usuario_logros.logro_id')
            ->where('usuario_logros.usuario_id', $usuario_id)
            ->get()
            ->getResultArray();
    }
}
