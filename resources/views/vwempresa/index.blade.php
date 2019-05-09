@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Listar</div>
   <meta name="csrf-token" content="{{ csrf_token() }}">
<div class="card-body" >        
<a href="{{ route('CrearEmpresa') }}">Crear</a>

        <table  border="1" >
        <tr>
        <th># Empresa</th>
        <th>Nombre Empresa</th>
        <th>Direccion</th>
        <th>Telefono</th>
        <th>Comentarios</th>
        <th>Actualizar</th>
        <th>Borrar</th>
        </tr>
         <tbody>
        @foreach($_empresa as $empresa)
        <tr>
        <td>{!! $empresa->id !!}</td>
        <td>{!! $empresa->nombre !!}</td>
        <td>{!! $empresa->direccion !!}</td>
        <td>{!! $empresa->telefono !!}</td>
        <td>{!! $empresa->comentarios !!}</td>
        <td><a href="/edit/{{$empresa->id}}" class="btn btn-primary">Actualizar</a></td>
        <td><a href="/delete/{{$empresa->id}}" class="btn btn-danger" >Borrar</a></td>
        </tr>
        @endforeach
                </tbody>             

</table>


            </div>
            </div>
        </div>
    </div>
</div>
<style>
    
@endsection


