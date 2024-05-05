<?php

namespace App\Http\Controllers;

use App\Models\tblproductos;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function index()
    {
        $productos = tblproductos::all();
        return view('Productos.Index', compact('productos'));
    }


    public function forminsertar()
    {
        return view('Productos.CreateForm');
    }


    public function crearreg(Request $request)
    {
        tblproductos::create($request->all());
        return redirect('home');
    }


    public function buscarreg(Request $request)
    {
        $nombre = $request->input('articulo');
        $registro = tblproductos::where('articulo', $nombre)->first();
        return view('Productos.VerRegistro', compact('registro'));
    }



    public function eliminar($id)
    {
        $producto = tblproductos::findOrFail($id);
        $producto->delete();
        return redirect('home');
    }
    public function indexx()
    {
        return view('Productos.home');
    }


    public function editar($id)
    {
        $producto = tblproductos::find($id);
        return view('home', compact('producto'));
    }

    public function actualizar(Request $request, $id)
    {
        $producto = tblproductos::find($id);

        // Guarda la posición original del producto
        $posicionOriginal = $producto->posicion;

        // Actualiza los datos del producto
        $producto->update([
            'articulo' => $request->articulo,
            'cantidad' => $request->cantidad,
            'existencias' => $request->existencias
        ]);

        // Reordena los productos solo si la posición original es diferente de la nueva posición
        if ($posicionOriginal != $producto->posicion) {
            $this->reordenarProductos();
        }

        return redirect('home');
    }

    private function reordenarProductos()
    {
        $productos = tblproductos::orderBy('posicion')->get();
        $contador = 1;
        foreach ($productos as $producto) {
            $producto->update(['posicion' => $contador]);
            $contador++;
        }
    }
}
