<?php

namespace App\Controllers;

class Productos extends BaseController
{
    public function index()
    {
        echo "Controller Productos";
        
    }

    public function show($id)
    {
        return "<h2>Detalles del producto $id</h2>";
    }

    public function cat($categoria,$id)
    {
        return "<h2>Categoria: $categoria <br> Producto: $id</h2>";
    }
}
