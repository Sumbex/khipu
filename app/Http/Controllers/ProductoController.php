<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\producto;

class ProductoController extends Controller
{

 public function __construct()
    {
        $this->middleware('auth');
    }

	public function index(){

		return view('producto/crear');
	}

    public function crear(Request $request){


    	$filenameext = $request->file('foto')->getClientOriginalName();

        $filename = pathinfo($filenameext, PATHINFO_FILENAME);

        $extension = $request->file('foto')->getClientOriginalExtension();

       $nombreFoto = $filename.'_'.time().'.'.$extension;

        $ruta = $request->file('foto')->storeAs('public/productos', $nombreFoto);

        $producto = new producto;

        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;
        $producto->foto = $nombreFoto;

        $producto->save();

        return redirect('/home');
       
    }

    public function show($id){
        $productos = producto::find($id);

        return view('producto/show')->with('productos',$productos);
    }


}
