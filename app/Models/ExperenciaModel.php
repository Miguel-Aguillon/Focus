<?php

namespace App\Models;
use CodeIgniter\Model;

class ExperienciaModel extends Model
{
    protected $table = 'experiencia';
    protected $allowedFields = ['usuario_id', 'puntos', 'categoria', 'fecha'];

    public function obtenerXP($usuario_id)
    {
        $result = $this->selectSum('puntos')->where('usuario_id', $usuario_id)->first();
        return $result ? (int)$result['puntos'] : 0;
    }

    public function obtenerRacha($usuario_id)
    {
        $hoy = date('Y-m-d');
        $ayer = date('Y-m-d', strtotime('-1 day'));

        $ultima = $this->where('usuario_id', $usuario_id)
                       ->orderBy('fecha', 'DESC')
                       ->first();

        if (!$ultima) return 0;

        $ultimaFecha = date('Y-m-d', strtotime($ultima['fecha']));
        return ($ultimaFecha == $ayer) ? 5 : 1; // 🔥 ejemplo: si estudió ayer → racha 5
    }

    public function obtenerLogros($usuario_id)
    {
        $xp = $this->obtenerXP($usuario_id);
        $logros = [];

        if ($xp >= 100) $logros[] = "Primer paso 🚀";
        if ($xp >= 500) $logros[] = "Aprendiz constante 📘";
        if ($xp >= 1000) $logros[] = "Maestro Focus 🧠";

        return $logros;
    }
}
