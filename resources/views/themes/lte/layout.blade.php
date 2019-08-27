<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>@yield('titulo', 'Fensuagro') | Denuncias en Linea</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="{{asset("assets/$theme/bower_components/bootstrap/dist/css/bootstrap.min.css")}}">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{asset("assets/$theme/bower_components/font-awesome/css/font-awesome.min.css")}}">
        <!-- Ionicons -->
        <link rel="stylesheet" href="{{asset("assets/$theme/bower_components/Ionicons/css/ionicons.min.css")}}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{asset("assets/$theme/dist/css/AdminLTE.min.css")}}">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
            folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="{{asset("assets/$theme/dist/css/skins/_all-skins.min.css")}}">

        <!-- css plugin para mensajes de acción flotantes -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

        @yield('styles')

        <!-- Estilos Personalizados -->
        <link rel="stylesheet" href="{{asset("css/custom.css")}}">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Google Font -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>
    <!-- ADD THE CLASS layout-boxed TO GET A BOXED LAYOUT -->
    <body class="hold-transition skin-blue layout-boxed sidebar-mini">
        <!-- Site wrapper -->
        <div class="wrapper">
            <div class="content-wrapper">
                <!-- Inicio HEADER -->
                @include("themes/$theme/header")
                <!-- Fin HEADER -->
                <!-- Inicio ASIDE -->
                @include("themes/$theme/aside")
                <!-- Fin ASIDE -->
                <!-- Content Header (Page header) -->
                <section class="content">
                    @yield('contenido')
                </section>
            </div>    
            <!-- Inicio FOOTER --> 
            @include("themes/$theme/footer")
            <!-- Fin FOOTER --> 
        </div>
        <!-- jQuery 3 -->
        <script src="{{asset("assets/$theme/bower_components/jquery/dist/jquery.min.js")}}"></script>
        <!-- Bootstrap 3.3.7 -->
        <script src="{{asset("assets/$theme/bower_components/bootstrap/dist/js/bootstrap.min.js")}}"></script>
        <!-- SlimScroll -->
        <script src="{{asset("assets/$theme/bower_components/jquery-slimscroll/jquery.slimscroll.min.js")}}"></script>
        <!-- FastClick -->
        <script src="{{asset("assets/$theme/bower_components/fastclick/lib/fastclick.js")}}"></script>
        <!-- AdminLTE App -->
        <script src="{{asset("assets/$theme/dist/js/adminlte.min.js")}}"></script>
        <!-- Pluggins JS -->
        @yield('scriptsPlugins')
        <!-- Jquery Validation -->
        <script src="{{asset("js/jquery-validation/jquery.validate.min.js")}}"></script>
        <script src="{{asset("js/jquery-validation/localization/messages_es.min.js")}}"></script>
        <script src="{{asset("js/funciones.js")}}"></script>

        <!-- Plugin para mensajes de alerta emergentes -->
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <!-- Plugin para mensajes de alerta flotantes -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <!-- ToolTip JS Para los íconos de edición y eliminación entre otros-->
        <script src="{{asset("js/tooltip.js")}}"></script>

        @yield('scripts')
        
    </body>
</html>