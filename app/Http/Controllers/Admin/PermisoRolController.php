<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Permiso;
use App\Models\Rol;

class PermisoRolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Rol::orderBy('id')->pluck('nombre', 'id')->toArray();
        $permisos = Permiso::get();
        $permisosRoles = Permiso::with('getPermisosRoles')->get()->pluck('getPermisosRoles', 'id')->toArray();
        return view('admin.permiso-rol.index', compact('roles', 'permisos', 'permisosRoles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function guardar(Request $request)
    {
        if ($request->ajax()) {
            cache()->tags('permiso');
            $permisos = new Permiso();
            if ($request->input('estado') == 1) {
                $permisos->find($request->input('permiso_id'))->getPermisosRoles()->attach($request->input('rol_id'));
                return response()->json(['respuesta' => 'El permiso se asigno correctamente']);
            } else {
                $permisos->find($request->input('permiso_id'))->getPermisosRoles()->detach($request->input('rol_id'));
                return response()->json(['respuesta' => 'El permiso se elimino correctamente']);
            }
        } else {
            abort(404);
        }
    }
   
}
