@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Productos</div>

                <div class="panel-body">


@if(count($productos)>0)

                    @foreach($productos as $producto)


            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">

            <a href="/home/show/{{ $producto->id }}">
                
               <img src="storage/productos/{{ $producto->foto }}" class="img-responsive" >

            </a>
       
                        <div class="row">
                            <div class="col-md-6 col-xs-6">
                                <h3>{{ $producto->nombre }}</h3>
                            </div>
                            <div class="col-md-6 col-xs-6 price">
                                <h3>
                                <label>{{ '$'.$producto->precio }}</label></h3>
                            </div>
                        </div>
                        
                    </div>

                   @endforeach
                      

                @else
                        
                    <p>No hay productos que mostrar</p>

                @endif

                </div>

            </div>
        </div>
    </div>
</div>
@endsection
