@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Productos</div>

                <div class="panel-body">
                   <br>
        
<br>
<a href="/home" class="btn btn-info">Atras</a>
<div class="col-lg-10 ">
    <form class="form-horizontal" action="/home/crear" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
        <fieldset>
            <center><legend>Ingrese el Producto</legend></center>
            <div class="form-group">
                <label class="col-lg-3 control-label">Nombre:</label>
                <div class="col-lg-9">
                     <input type="text" class="form-control" name="nombre">
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-3 control-label">Descripcion:</label>
                <div class="col-lg-9">
                    
                    <textarea class="form-control" name="descripcion"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-3 control-label">Precio:</label>
                <div class="col-lg-9">
                    <input type="text" class="form-control" name="precio">
                </div>
            </div>
            <div class="form-group">
                <label f class="col-lg-3 control-label">Foto:</label>
                <div class="col-lg-9">
                    <input type="file" class="form-control" name="foto">
                </div>
            </div>
            <div class="col-lg-10 col-lg-offset-5">
                  <button type="reset" class="btn btn-default">Limpiar</button>
                  <button type="submit" class="btn btn-primary">Ingresar</button>
                  
            </div>
        </fieldset>
    </form>

<br>    
<center>
        
        @if (count($errors)>0)
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
    
        
    @endif
    
    </center>

</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
