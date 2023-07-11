<?php

namespace App\Controllers;

class Productos extends BaseController
{
    public function index()
    {

        $db = \Config\Database::connect();

        $query = $db->query("SELECT codigo, nombre, stock FROM productos");
        $resultado = $query->getResult();
        
        $data = ['titulo' => 'Catalogo de productos', 'productos'=> $resultado];
        return view('productos/productos', $data);
    }

    public function show($id)
    {
        $data = [
            'titulo' => 'Catalogo de productos',
            'id' => $id
        ];
        return view('productos/show', $data);

        // echo view('plantilla\header', $data);
        // echo view('productos\show', $data);
        // echo view('plantilla\footer', ['copy' => '2023']);
    }

    public function cat($categoria, $id)
    {
        return "<h2>Categoria: $categoria <br> Producto: $id</h2>";
    }
}
