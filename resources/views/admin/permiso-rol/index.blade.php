@extends("themes.$theme.layout")
@section("titulo")
Permiso - Rol
@endsection

@section("scripts")
<script src="{{asset("assets/pages/scripts/admin/permiso-rol/index.js")}}" type="text/javascript"></script>
@endsection

@section('contenido')
<div class="row">
    <div class="col-lg-12">
        @include('includes.success-message')
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">Permisos - Rol</h3>
            </div>
            <div class="box-body">
                @csrf
                <table class="table table-striped table-bordered table-hover" id="tabla-data">
                    <thead>
                        <tr>
                            <th>Permiso</th>
                            @foreach ($roles as $id => $nombre)
                            <th class="text-center">{{$nombre}}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($permisos as $key => $permiso)                       
                            <tr>
                                <td class="font-weight-bold"><i class="fa fa-arrows-alt"></i> {{$permiso["nombre"]}}</td>
                                @foreach($roles as $id => $nombre)
                                    <td class="text-center">
                                        <input
                                        type="checkbox"
                                        class="permiso_rol"
                                        name="permiso_rol[]"
                                        data-permisoid={{$permiso[ "id"]}}
                                        value="{{$id}}" {{in_array($id, array_column($permisosRoles[$permiso["id"]], "id"))? "checked" : ""}}>
                                    </td>
                                @endforeach
                            </tr>            
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div> 
@endsection 