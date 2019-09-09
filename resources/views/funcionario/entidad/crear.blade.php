@extends("themes.$theme.layout")
@section('titulo')
    Entidad
@endsection

@section("scripts")
<script src="{{asset("assets/pages/scripts/admin/rol/crear.js")}}" type="text/javascript"></script>
@endsection

@section('contenido')
<div class="row">
    <div class="col-lg-12">
        @include('includes.error-form')
        <div class="box box-danger">
            <div class="box-header with-border">
                <h3 class="box-title">Crear Entidad</h3>
                <div class="box-tools pull-right">
                    <a href="{{route('entidad')}}" class="btn btn-block btn-success btn-sm">
                        <i class="fa fa-fw fa-reply-all"></i> Volver al listado
                    </a>
                </div>
            </div>
            <form action="{{route('guardar-entidad')}}" id="form-general" class="form-horizontal" method="POST" autocomplete="off">
                @csrf
                <div class="box-body">
                    @include('funcionario.entidad.form')
                </div>
                <div class="box-footer">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6">
                        @include('includes.boton-form-crear')
                    </div>
                </div>
            </form>
        </div>
    </div>
</div> 
@endsection 