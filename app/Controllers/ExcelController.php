<?php

namespace App\Controllers;

use App\Models\UsuarioModel;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class ExcelController extends BaseController
{
    public function exportarUsuarios()
    {
        $usuarios = (new UsuarioModel())->findAll();

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // Encabezados
        $sheet->setCellValue('A1', 'ID');
        $sheet->setCellValue('B1', 'Nombre');
        $sheet->setCellValue('C1', 'Correo');
        $sheet->setCellValue('D1', 'Fecha Registro');

        // Datos
        $fila = 2;
        foreach ($usuarios as $u) {
            $sheet->setCellValue("A$fila", $u['id']);
            $sheet->setCellValue("B$fila", $u['nombre']);
            $sheet->setCellValue("C$fila", $u['correo']);
            $sheet->setCellValue("D$fila", $u['fecha_registro']);
            $fila++;
        }

        $writer = new Xlsx($spreadsheet);
        $filename = 'usuarios.xlsx';

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header("Content-Disposition: attachment; filename=$filename");
        $writer->save('php://output');
        exit;
    }
}
