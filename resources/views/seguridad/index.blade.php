<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Fensuagro | Inicio de Sesión</title>
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
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="{{route('inicio')}}">FENSUAGRO</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Inicio de sesión</p>
    @if ($errors->any())
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>       
    </div>
    @endif
    <form action="{{route('login-post')}}" method="post" autocomplete="off">
      @csrf
      <div class="form-group has-feedback">
        <input type="text" name="usuario" class="form-control" value="{{old('usaurio')}}" placeholder="Usuario" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Contraseña" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">        
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Entrar</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<script src="{{asset("assets/$theme/bower_components/jquery/dist/jquery.min.js")}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset("assets/$theme/bower_components/bootstrap/dist/js/bootstrap.min.js")}}"></script>
<!-- SlimScroll -->
<script src="{{asset("assets/$theme/bower_components/jquery-slimscroll/jquery.slimscroll.min.js")}}"></script>
<!-- FastClick -->
<script src="{{asset("assets/$theme/bower_components/fastclick/lib/fastclick.js")}}"></script>
<!-- AdminLTE App -->
<script src="{{asset("assets/$theme/dist/js/adminlte.min.js")}}"></script>

<!-- Jquery Validation -->
<script src="{{asset("js/jquery-validation/jquery.validate.min.js")}}"></script>
<script src="{{asset("js/jquery-validation/localization/messages_es.min.js")}}"></script>

</body>
</html>
