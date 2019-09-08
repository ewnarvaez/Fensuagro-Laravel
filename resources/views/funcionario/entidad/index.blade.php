@extends("themes.$theme.layout")
@section('titulo')
    Entidades
@endsection

@section('contenido')
    <div class="row">
        <div class="col-lg-12">
            @include('includes.success-message')
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Listado Entidades</h3>  
                    <div class="box-tools pull-right">
                        <a href="{{route('crear-entidad')}}" class="btn btn-block btn-success btn-sm">
                            <i class="fa fa-fw fa-plus-circle"></i> Nuevo registro
                        </a>
                    </div>                  
                </div>
                 <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-bordered table-hover tabel-striped" id="tabla-data">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Nit</th>
                                <th>Director</th>
                                <th class="width70"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $entidad)
                                <tr>
                                    <td>{{$entidad->nombre}}</td>
                                    <td>{{$entidad->nit}}</td>
                                    <td>{{$entidad->director}}</td>
                                    <td>
                                        <a href="{{route('editar-entidad', ['id' => $entidad->id])}}" class="btn-accion-tabla tooltipsC" title="Editar este registro">
                                            <i class="fa fa-fw fa-pencil"></i>
                                        </a>                                        
                                    </td>
                                </tr>
                            @endforeach                            
                        </tbody>                        
                    </table>
                </div>
        </div>
    </div>
@endsection