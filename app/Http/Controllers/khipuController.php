<?php

namespace App\Http\Controllers;

use App\producto;
use Illuminate\Http\Request;
use Khipu;

class khipuController extends Controller
{
    
public function testCompra($id){

    $producto = producto::find($id);



	$receiverId = 137821;
	$secretKey = '85a0a909ad2f88ce31e9718854c6bc0e6868e283';

	$configuration = new Khipu\Configuration();
	$configuration->setReceiverId($receiverId);
	$configuration->setSecret($secretKey);


	$client = new Khipu\ApiClient($configuration);
	$payments = new Khipu\Client\PaymentsApi($client);


    try {
    $opts = array(
        "transaction_id" => "MTI-100",
        "return_url" => "http://127.0.0.1:8000/home",
        "cancel_url" => "http://mi-ecomerce.com/backend/cancel",
        "picture_url" => "http://mi-ecomerce.com/pictures/foto-producto.jpg",
        "notify_url" => "http://mi-ecomerce.com/backend/notify",
        "notify_api_version" => "1.3"
    );
    $response = $payments->paymentsPost("Compra de prueba de la API" //Motivo de la compra
        , "CLP" //Moneda
        , $producto->precio //Monto
        , $opts //campos opcionales
        );


   return redirect($response->getPaymentUrl());
    
} catch (\Khipu\ApiException $e) {
    echo print_r($e->getResponseBody(), TRUE);
}

}



}