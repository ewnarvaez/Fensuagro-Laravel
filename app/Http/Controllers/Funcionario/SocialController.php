<?php

namespace App\Http\Controllers\Funcionario;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Funcionario\SectorSocial;
use App\Models\Funcionario\Social;

class SocialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Social::orderBy('nombre')->get();        
        return view('funcionario.social.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function crear()
    {
        $sectores = SectorSocial::orderBy('nombre')->get()->all();
        //dd($sectores);
        return view('funcionario.social.crear', compact('sectores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function guardar(Request $request)
    {
        Social::create($request->all());
        return redirect('func/social')->with('mensaje', 'Organización creada con éxito');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editar($id)
    {
        $data = Social::findOrFail($id);
        $sectores = SectorSocial::orderBy('id')->get();
        return view('funcionario.social.editar', compact('data', 'sectores'));
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
        Social::findOrFail($id)->update($request->all());
        return redirect()->route('editar-social', [$id])->with('mensaje', 'Organización actualizada con exito');
    }

}
