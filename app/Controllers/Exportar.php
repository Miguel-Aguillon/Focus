<?php

namespace App\Controllers;

use App\Models\UsuarioModel;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Exportar extends BaseController
{
    public function usuarios()
    {
        $model = new UsuarioModel();
        $usuarios = $model->findAll();

        $spreadsheet = new Spreadsheet();
        $hoja = $spreadsheet->getActiveSheet();

        // Encabezados
        $hoja->setCellValue("A1", "ID");
        $hoja->setCellValue("B1", "Nombre");
        $hoja->setCellValue("C1", "Correo");
        $hoja->setCellValue("D1", "Fecha Registro");

        // Datos
        $fila = 2;
        foreach ($usuarios as $u) {
            $hoja->setCellValue("A$fila", $u['id']);
            $hoja->setCellValue("B$fila", $u['nombre']);
            $hoja->setCellValue("C$fila", $u['correo']);
            $hoja->setCellValue("D$fila", $u['fecha_registro']);
            $fila++;
        }

        $writer = new Xlsx($spreadsheet);
        $filename = "usuarios.xlsx";

        header('Content-Type: application/vnd.ms-excel');
        header("Content-Disposition: attachment; filename=$filename");
        
        $writer->save("php://output");
        exit;
    }
}
