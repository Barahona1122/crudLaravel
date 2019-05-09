<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;
class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    $_empresa = Empresa::all();
      //json_encode($_empresa);
    //return view('mensajes.index', compact('mensajes'));
   return view('vwempresa.index')->with('_empresa',$_empresa);
       // return view('vwempresa.index');


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('vwempresa.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     $_empresa = new Empresa;
    $_empresa->nombre = $request->nombre;
    $_empresa->direccion = $request->direccion;
    $_empresa->telefono = $request->telefono;
    $_empresa->comentarios = $request->comentarios;
    $_empresa->save();
   // $_empresa->create($request->all());
    
  return redirect('ListarEmpresa');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $_empresa = Empresa::where('id',$id)->first();
        return view('vwempresa.editar',['_empresa'=>$_empresa]);
}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $nombre = $request->input('nombre');
      $direccion = $request->input('direccion');
      $telefono = $request->input('telefono');
      $comentarios = $request->input('comentarios');

       $_empresa = Empresa::find($id);
       $_empresa->nombre = $nombre;
       $_empresa->direccion = $direccion;
       $_empresa->telefono = $telefono;
       $_empresa->comentarios = $comentarios;
       $_empresa->save();
        return redirect('ListarEmpresa'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
   $empresa = Empresa::find($id);
    $empresa->delete();

    return redirect('ListarEmpresa');
    }
}
