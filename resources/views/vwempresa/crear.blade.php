@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Crear</div>

                <div class="card-body" >

                <a href="{{ route('ListarEmpresa') }}">Regresar</a>
     <form method="post" action="{{ route('RegistrarEmpresa') }}">
      {{ csrf_field() }}
            <input type="text" name="nombre" placeholder="Nombre Empresa" class="form-control" value="{{ old('nombre') }}">
            <input type="text" name="direccion" placeholder="Direccion" class="form-control" value="{{ old('direccion') }}">
            <input type="text" name="telefono" placeholder="Telefono" class="form-control" value="{{ old('telefono') }}">
            <input type="text" name="comentarios" placeholder="Comentarios Adicionales" class="form-control" value="{{ old('comentarios') }}">
             <button type="submit" class="btn btn-primary">  Registrar</button>   
              
            </div>
        </div>
    </div>
</div>
@endsection
