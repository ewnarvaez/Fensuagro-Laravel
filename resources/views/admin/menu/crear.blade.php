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
                </div>
                 <!-- /.box-header -->
                <form class="form-horizontal" id="form-general" action="{{route('guardar-menu')}}" method="POST">
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