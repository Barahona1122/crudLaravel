@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar</div>

                <div class="card-body" >

                <a href="{{ route('ListarEmpresa') }}">Regresar</a>
                <p></p>
     <form method="post" action="/update/{{$_empresa->id}}">
     @csrf
<table>
    <tr>
        <th>ID</th>
        <th><input type="tex" name="id" value="{{ $_empresa->id }}" class="form-control" disabled=""></th>
        </tr>
       
        <tr>
        <th>Nombre</th>
        <th><input type="tex" name="nombre" value="{{ $_empresa->nombre }}" class="form-control"></th>
        </tr>

    
        <tr><th>Direccion</th>
        <th><input type="tex" name="direccion" value="{{ $_empresa->direccion }}" class="form-control"></th>
        </tr>
        <tr><th>Telefono</th>
        <th><input type="tex" name="telefono" value="{{ $_empresa->telefono }}" class="form-control"> </th>
        </tr>
        <tr><th>Comentarios</th>
        <th><input type="tex" name="comentarios" value="{{ $_empresa->comentarios }}" class="form-control"></th>
        </tr>
        <tr>
        <th>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        </th>
        </tr>


</table>
      
     
     
      
     
       
              
            </div>
        </div>
    </div>
</div>
@endsection