<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
            <img src="{{asset("assets/$theme/dist/img/user8-128x128.jpg")}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p> {{session()->get('nombre_usuario') ?? 'Invitado'}}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Conectado</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Buscar...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MENU PRINCIPAL</li>
            @foreach ($menusComposer as $item)
                @if ($item["menu_id"] != 0)
                    @break
                @endif
                @include("themes.$theme.menu-item", ["item" => $item])
            @endforeach            
        </ul>
    </section>
<!-- /.sidebar -->
</aside>