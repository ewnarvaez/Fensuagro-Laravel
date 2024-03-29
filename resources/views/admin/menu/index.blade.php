@extends("themes.$theme.layout")
@section("titulo")
    Menú
@endsection

@section("styles")
    <link href="{{asset("js/jquery-nestable/jquery.nestable.css")}}" rel="stylesheet" type="text/css" />
@endsection

@section("scriptsPlugins")
    <script src="{{asset("js/jquery-nestable/jquery.nestable.js")}}" type="text/javascript"></script>
@endsection

@section("scripts")
    <script src="{{asset("assets/pages/scripts/admin/menu/index.js")}}" type="text/javascript"></script>
@endsection

@section('contenido')
    <div class="row">
        <div class="col-lg-12">
            @include('includes.success-message')
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">Menús</h3>
                    <div class="box-tools pull-right">
                        <a href="{{route('crear-menu')}}" class="btn btn-block btn-success btn-sm">
                            <i class="fa fa-fw fa-plus-circle"></i> Nuevo registro
                        </a>
                    </div>
                </div>
                <div class="box-body">
                    @csrf
                    <div class="dd" id="nestable">
                        <ol class="dd-list">
                            @foreach ($menus as $key => $item)
                                @if ($item["menu_id"] != 0)
                                    @break
                                @endif
                                @include("admin.menu.menu-item",["item" => $item])
                            @endforeach
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div> 
@endsection