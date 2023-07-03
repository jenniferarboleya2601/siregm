<!DOCTYPE html>

<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SIREGM | Reportar</title>

  <!-- Select2 -->
  <link rel="stylesheet" href="{{ asset('plantilla/plugins/select2/css/select2.min.css') }}">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="{{ asset('plantilla/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('plantilla/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('plantilla/dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
        <div class="container">
        <a href="" class="navbar-brand">
            <img src="{{ asset('logo.jpg') }}" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">Sistema de Reporte | Gas Manufacturado</span>
        </a>

        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        </div>

        <!-- Right navbar links -->
        <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">
                    <i class="fas fa-user"> Acceder</i>
                </a>
            </li>
        </ul>
        </div>
    </nav>
    <!-- /.navbar -->

    <!-- Main content -->
    <div class="content">
        <div class="container">
            <div class="card card-success" style="margin-top: 20px">
                <div class="card-header">
                <h3 class="card-title">Formulario de Reporte</h3>
                </div>
			    {!! Form::open(['id'=>"frmReporte", 'method'=>"POST", 'onsubmit'=>"return nuevo()"]) !!}
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="nombre">Nombre y Apellidos</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="direccion">Dirección del incidente</label>
                                <input type="text" class="form-control" id="direccion" name="direccion" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="tipo">Tipo de reporte</label>
                                <input type="text" class="form-control" id="tipo" name="tipo" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="telefono">Tel. de contacto</label>
                                <input type="text" class="form-control" id="telefono" name="telefono" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="municipio">Municipio</label>
                                <select name="municipio" id="municipio" class="select2" style="width: 100%">
                                    <option value="">Seleccionar</option>
                                    @foreach ($municipios as $municipio)
                                        <option value="{{$municipio['id']}}">{{$municipio['text']}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="detalle">Detalles del reporte</label>
                            <textarea id="detalle" class="form-control" name="detalle" rows="4"></textarea>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">Enviar Rreporte</button>
                    </div>
                {!! Form::close() !!}
            </div>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->

</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset('plantilla/plugins/jquery/jquery.min.js') }}"></script>
<!-- Select2 -->
<script src="{{ asset('plantilla/plugins/select2/js/select2.full.min.js') }}"></script>
<!-- SweetAlert2 -->
<script src="{{ asset('plantilla/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
<!-- InputMask -->
<script src="{{ asset('plantilla/plugins/inputmask/jquery.inputmask.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plantilla/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('plantilla/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('js/principal.js') }}"></script>
<script src="{{ asset('js/paginas/reportes_user.js') }}"></script>
</body>
</html>
