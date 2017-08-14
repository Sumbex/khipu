@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
<a href="/home" class="btn btn-info pull-right">Atras</a>
                <label>Productos</label>
		
                </div>

                <div class="panel-body">

          <br>

                
            <div class="gallery_product col-lg-5 col-md-5 col-sm-5 col-xs-6 filter hdpe">

			
               <img src="/storage/productos/{{ $productos->foto }}" class="img-responsive">

			</div>

					

				<div class="col-md-7">
					<div class="product-title"><h1>{{ $productos->nombre }}</h1></div>
					<div class="product-desc"><h3>{{$productos->descripcion}}</h3></div>
					
					<hr>
					<div class="product-price">{{ 'Valor:     $ '.$productos->precio }}</div>
					<div class="product-stock">En Stock</div>
					<br>
					<div class="btn-group cart">

					<form method="post" action="/home/show/{{ $productos->id }}">

					{{ csrf_field() }}


						<button type="submit" class="btn btn-success">
							Comprar
						</button>

					</form>
						
					</div>
					<hr>
					
					
				</div>

            </div>
        </div>
    </div>
</div>
@endsection
