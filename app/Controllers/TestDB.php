<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use Config\Database;

class TestDB extends Controller
{
    public function index()
    {
        try {
            $db = Database::connect();
            echo "✅ Conectando a base de datos...<br>";

            // Fuerza una consulta para ver si responde
            $query = $db->query('SHOW TABLES');
            $results = $query->getResultArray();

            if (count($results) > 0) {
                echo "📋 Tablas encontradas:<br>";
                foreach ($results as $row) {
                    echo "- " . implode(', ', $row) . "<br>";
                }
            } else {
                echo "⚠️ No se encontraron tablas en la base de datos.";
            }
        } catch (\Throwable $e) {
            echo "❌ Error detectado: " . $e->getMessage();
        }
    }
}
