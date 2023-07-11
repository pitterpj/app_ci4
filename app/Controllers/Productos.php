<?php

namespace App\Controllers;

use App\Models\ProductosModel;

class Productos extends BaseController
{
    private $productoModel;

    public function __construct()
    {
        $this->productoModel = new ProductosModel();
    }

    public function index()
    {

        // $db = \Config\Database::connect();

        // $query = $db->query("SELECT codigo, nombre, stock FROM productos");
        // $resultado = $query->getResult();

        $productoModel = new ProductosModel();
        $resultado = $productoModel->where('estatus',1)->findAll();

        $data = ['titulo' => 'Catalogo de productos', 'productos' => $resultado];
        return view('productos/productos', $data);
    }

    public function show($id)
    {

        $productoModel = new ProductosModel();
        $producto = $productoModel->find($id);
        $data = [
            'titulo' => 'Catalogo de productos',
            'producto' => $producto
        ];
        return view('productos/show', $data);

        // echo view('plantilla\header', $data);
        // echo view('productos\show', $data);
        // echo view('plantilla\footer', ['copy' => '2023']);
    }

    public function transaccion()
    {
        $data = [
            'estatus' => '0'
        ];
        echo $this->productoModel->delete(5);
        //echo $this->productoModel->getInsertID();
    }




    public function cat($categoria, $id)
    {
        return "<h2>Categoria: $categoria <br> Producto: $id</h2>";
    }
}
