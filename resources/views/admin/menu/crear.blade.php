@extends("themes.$theme.layout")
@section('titulo')
    Menús
@endsection

@section('contenido')
    <div class="row">
        <div class="col-lg-12">
            @include('includes.error-form')
            @include('includes.success-message')
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title">Crear Menú</h3>    
                    <div class="box-tools pull-right">
                        <a href="{{route('menu')}}" class="btn btn-block btn-info btn-sm">
                            <i class="fa fa-fw fa-reply-all"></i> Volver al listado
                        </a>
                    </div>                
                </div>
                 <!-- /.box-header -->
                <form class="form-horizontal" id="form-general" action="{{route('guardar-menu')}}" method="POST" autocomplete="off">
                    @csrf
                    <div class="box-body">
                        @include('admin.menu.form')
                    </div>    
                    <div class="box-footer">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-10">
                            @include('includes.boton-form-crear')
                        </div>
                    </div>                    
                </form>
            </div>
        </div>
    </div>
@endsection

@section("scripts")
    <script src="{{asset("assets/pages/scripts/admin/menu/crear.js")}}" type="text/javascript"></script>
@endsection