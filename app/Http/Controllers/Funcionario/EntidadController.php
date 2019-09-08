<?php

namespace App\Http\Controllers\Funcionario;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Funcionario\Entidad;

class EntidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Entidad::orderBy('nombre')->get();
        return view('funcionario.entidad.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function crear()
    {
        return view('funcionario.entidad.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function guardar(Request $request)
    {
        Entidad::create($request->all());
        return redirect('func/entidad')->with('mensaje', 'Entidad creada con éxito');
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editar($id)
    {
        $data = Entidad::findOrFail($id);
        return view('funcionario.entidad.editar', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function actualizar(Request $request, $id)
    {
        Entidad::findOrFail($id)->update($request->all());
        return redirect()->route('editar-entidad', [$id])->with('mensaje', 'Entidad actualizada con exito');
    }

}
