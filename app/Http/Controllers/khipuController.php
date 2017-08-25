<?php

namespace App\Http\Controllers;

use App\producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Khipu;

class khipuController extends Controller
{
    
public function testCompra($id){

    $producto = producto::find($id);

	$configuration = new Khipu\Configuration();
	$configuration->setReceiverId(env('KHIPU_APP_ID'));
	$configuration->setSecret(env('KHIPU_APP_KEY'));


	$client = new Khipu\ApiClient($configuration);
	$payments = new Khipu\Client\PaymentsApi($client);


    try {
    $opts = array(
        "transaction_id" => "MTI-100",
        "return_url" => "http://localhost:8000/home/aceptar",
        "cancel_url" => "http://localhost:8000/home/cancelar",
        "picture_url" => "",
        "notify_url" => "",
        "notify_api_version" => "1.3"
    );
    $response = $payments->paymentsPost($producto->nombre //Motivo de la compra
        , "CLP" //Moneda
        , $producto->precio //Monto
        , $opts //campos opcionales
        );


   return redirect($response->getPaymentUrl());
    
} catch (\Khipu\ApiException $e) {
    echo print_r($e->getResponseBody(), TRUE);
}

}
public function aceptar(){
    return view('transaccion/aceptar');
}
public function cancelar(){
    return view('transaccion/cancelar');
}

}