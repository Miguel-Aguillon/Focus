<?php

namespace App\Controllers;
use App\Models\LeccionModel;

class Categorias extends BaseController
{
    public function index()
    {
        return view('categorias/index'); // tu vista principal de categorías
    }

    public function ver($nombre_categoria)
    {
        $leccionModel = new LeccionModel();

        $data = [
            'categoria' => ucfirst($nombre_categoria),
            'descripcion' => 'Explora las lecciones de ' . ucfirst($nombre_categoria),
            'lecciones' => $leccionModel->where('categoria', $nombre_categoria)->findAll()
        ];

        return view('categorias/categorias', $data);
    }
}
