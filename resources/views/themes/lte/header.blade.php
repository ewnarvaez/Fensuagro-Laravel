<header class="main-header">
    <!-- Logo -->
    <a href="/" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>FEN</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Fensuagro</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Messages: style can be found in dropdown.less-->
                <li class="dropdown messages-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-envelope-o"></i>
                        <span class="label label-success">4</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">Usted tiene 4 mensajes</li>
                        <li>
                        <!-- inner menu: contains the actual data -->
                            <ul class="menu">
                                <li><!-- start message -->
                                <a href="#">
                                    <div class="pull-left">
                                    <img src="{{asset("assets/$theme/dist/img/avatar5.png")}}" class="img-circle" alt="Imagen de usuario">
                                    </div>
                                    <h4>
                                    Equipo de soporte
                                    <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                    </h4>
                                    <p>¿Se puede incluír un nuevo usuario?</p>
                                </a>
                                </li>
                                <!-- end message -->
                            </ul>
                        </li>
                        <li class="footer"><a href="#">Ver todos los mensajes</a></li>
                    </ul>
                </li>
                <!-- Notifications: style can be found in dropdown.less -->
                <li class="dropdown notifications-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-bell-o"></i>
                        <span class="label label-warning">10</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">Usted tiene 10 notificaciones</li>
                        <li>
                        <!-- inner menu: contains the actual data -->
                            <ul class="menu">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-users text-aqua"></i> 5 nuevas denuncias se han registrado hoy
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="footer"><a href="#">Ver todo</a></li>
                    </ul>
                </li>
                <!-- Tasks: style can be found in dropdown.less -->
                <li class="dropdown tasks-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-flag-o"></i>
                        <span class="label label-danger">9</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">Usted tiene 9 tareas</li>
                        <li>
                            <!-- inner menu: contains the actual data -->
                            <ul class="menu">
                                <li><!-- Task item -->
                                    <a href="#">
                                        <h3>
                                        Revisar 5 denuncias
                                        <small class="pull-right">20%</small>
                                        </h3>
                                        <div class="progress xs">
                                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                            <span class="sr-only">Completado en un 20%</span>
                                        </div>
                                        </div>
                                    </a>
                                </li>
                                <!-- end task item -->
                            </ul>
                        </li>
                        <li class="footer">
                            <a href="#">Ver todas las tareas</a>
                        </li>
                    </ul>
                </li>
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{asset("assets/$theme/dist/img/avatar5.png")}}" class="user-image" alt="User Image">
                            <span class="hidden-xs">{{session()->get('nombre_usuario') ?? 'Invitado'}}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="{{asset("assets/$theme/dist/img/avatar5.png")}}" class="img-circle" alt="User Image">

                            <p>
                                {{session()->get('nombre_usuario') ?? 'Invitado'}} - {{session()->get('rol_nombre') ?? 'Invitado'}}
                                <small>Miembro desde Nov. 2012</small>
                            </p>
                        </li>
                        <!-- Menu Body
                        <li class="user-body">
                            <div class="row">
                                <div class="col-xs-4 text-center">
                                <a href="#">Se</a>
                                </div>
                                <div class="col-xs-4 text-center">
                                <a href="#">Sales</a>
                                </div>
                                <div class="col-xs-4 text-center">
                                <a href="#">Friends</a>
                                </div>
                            </div>
                        </li> -->
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="{{route('login')}}" class="btn btn-default btn-flat">Entrar</a>
                            </div>
                            <div class="pull-right">
                                <a href="{{route('logout')}}" class="btn btn-default btn-flat">Salir</a>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->
                <li>
                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                </li>
            </ul>
        </div>
    </nav>
</header>