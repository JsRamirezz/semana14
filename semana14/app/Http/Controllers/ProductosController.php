<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\tblproductos;
use App\Models\Servicios;
use App\Models\Estilistas;
use App\Models\Citas;
use Illuminate\Http\Request;


class ProductosController extends Controller
{
    //INDEX PRINCIPAL
    public function index()
    {
        $productos = tblproductos::all();
        return view('Productos.index', compact('productos'));
    }






    

    //PARTE DE PRODUCTOS

    public function forminsertar()
    {
        return view('Productos.createForm');
    }


    //Metodo para crear productos nuevos

    public function crearreg(Request $request)
    {
        tblproductos::create($request->all());
        return redirect('home');
    }


    //Metodo que busca un producto por el nombre
    public function buscarreg(Request $request)
    {
        $nombre = $request->input('articulo');
        $registro = tblproductos::where('articulo', $nombre)->first();
        return view('Productos.verRegistro', compact('registro'));
    }



    //Metodo para eliminar un producto
    public function eliminar($id)
    {
        $producto = tblproductos::findOrFail($id);
        $producto->delete();
        return redirect('home');
    }

    public function editar($id)
    {
        $producto = tblproductos::find($id);
        return view('home', compact('producto'));
    }

    //Form de actualizar productos
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







    //PARTE DE CATEGORIAS
    public function indexx()
    {
        return view('Productos.home');
    }

    //Metodo para ver productos categorias ¿?

    public function categorias()
    {
        return view('Productos.categorias');
    }

    //Metodo que llama estilistas y servicios en una vista
    public function cabello()
    {
        $estilistas = Estilistas::all();
        $servicios = Servicios::all();
        // Pasar los estilistas y servicios a la vista 'pagina1'
        return view('Productos.cabello', ['estilistas' => $estilistas, 'servicios' => $servicios]);
    }

    //Llamar productos barba
    public function barba()
    {
        $estilistas = Estilistas::all();
        $servicios = Servicios::all();
        return view('Productos.barba', ['estilistas' => $estilistas, 'servicios' => $servicios]);
    }

    //Llamar produto cejas
    public function cejas()
    {
        return view('Productos.cejas');
    }







    // PARTE DE LA VISTA CONTACTO
    public function contacto()
    {
        return view('Productos.contacto');
    }

  


    

    // PARTE DE LA RESERVA DE CITA

    public function reservas()
    {
        $estilistas = Estilistas::all(); 
        $servicios = Servicios::all();
        return view('Productos.reservas', ['estilistas' => $estilistas, 'servicios' => $servicios]); 
    }



    public function showReservasForm() {
        $estilistas = Estilistas::all();
        $servicios = Servicios::all();
    
        return view('reservas', [
            'estilistas' => $estilistas,
            'servicios' => $servicios,
        ]);
    }

    



    // PARTE DEL CARRITO

    public function cart()
      {
          $cartCollection = Cart::all();
          return view('cart.index', compact('cartCollection'));
      }
      public function remove(Request $request){
        $producto = Cart::findOrFail($request->id);
        $producto->delete();        
        return redirect()->route('cart.index')->with('success_msg', 'Producto eliminado del carrito correctamente');
    }


    public function clear()
    {
        Cart::clear();

        return redirect()->back()->with('success_msg', '¡El carrito se ha vaciado exitosamente!');
    }


    public function add(Request $request)
    {
        Cart::create([
            'nombre_servicio' => $request->nombre_servicio,
            'precio' => $request->precio
               
        ]);

        return redirect()->route('cart.index')->with('success_msg', 'Producto agregado al carrito correctamente');
    }





    //PARTE DEL CRUD 

    //AGREGAR CITAS CON EL FORMULARIO
    public function guardarCita(Request $request)
    {
       
       
        $request->validate([
            'estilista' => 'required',
            'nombre_servicio' => 'required',
            'fecha' => 'required',
            'hora' => 'required',
        ]);
    
        

        Citas::create([
            'id_servicio' => $request->input('nombre_servicio'), 
            'id_estilistas' => $request->input('estilista'), 
            'fecha' => $request->input('fecha'),
            'hora' => $request->input('hora')
        ]);

        return redirect()->route('citas');

    
    }


    public function getCitas()
    {
        $citas = Citas::with(['estilista', 'servicio'])->get();
        return view('Productos.citas', compact('citas'));
    }
    






    public function citas()
    {
        return Citas::with(['servicio', 'estilista'])->get();
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'id_servicio' => 'required',
            'id_estilistas' => 'required',
            'fecha' => 'required|date',
            'hora' => 'required',
        ]);

        $cita = Citas::findOrFail($id);
        $cita->update([
            'fecha' => $request->input('fecha'),
            'hora' => $request->input('hora'),
            'id_servicio' => $request->input('id_servicio'),
            'id_estilistas' => $request->input('id_estilistas'),
        ]);

        return response()->json($cita);
    }


    public function destroy($id)
    {
        $cita = Citas::findOrFail($id);
        $cita->delete();

        return response()->json(null, 204);
    }


    public function getEstilistas()
    {
        $estilistas = Estilistas::all();
        return response()->json($estilistas);
    }

    public function getServicios()
    {
        $servicios = Servicios::all();
        return response()->json($servicios);
    }


}






