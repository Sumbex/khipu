<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


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

    	//var_dump($request->file('foto'));

    	return $request->file('foto')->getClientOriginalExtension();

    	


    }
}
