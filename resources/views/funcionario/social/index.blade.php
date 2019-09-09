@extends("themes.$theme.layout")
@section('titulo')
    Social
@endsection

@section('contenido')
    <div class="row">
        <div class="col-lg-12">
            @include('includes.success-message')
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Organizaciones Sociales</h3>  
                    <div class="box-tools pull-right">
                        <a href="{{route('crear-social')}}" class="btn btn-block btn-success btn-sm">
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
                                <th>Responsable</th>
                                <th>Sector</th>
                                <th>Telefono</th>
                                <th class="width70"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $social)
                                <tr>
                                    <td>{{$social->nombre}}</td>
                                    <td>{{$social->responsable}}</td>
                                    <td>{{$social->sector}}</td>
                                    <td>{{$social->telefono}}</td>
                                    <td>
                                        <a href="{{route('editar-social', ['id' => $social->id])}}" class="btn-accion-tabla tooltipsC" title="Editar este registro">
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