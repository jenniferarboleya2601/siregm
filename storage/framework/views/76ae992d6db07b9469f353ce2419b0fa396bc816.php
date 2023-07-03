<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>SIREGM | <?php echo $__env->yieldContent('titulo'); ?></title>
	<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
	<meta name="routeName" content="<?php echo e(Route::currentRouteName()); ?>">

	<!-- Favicons -->
	<link href="<?php echo e(asset('logo.png')); ?>" rel="icon">
	<link href="<?php echo e(asset('logo.png')); ?>" rel="apple-touch-icon">

	<!-- Fuente -->
	<link rel="stylesheet" href="<?php echo e(asset('plantilla/dist/fonts/Sans.css')); ?>">
	<!-- Font Awesome Icons -->
	<link rel="stylesheet" href="<?php echo e(asset('plantilla/plugins/fontawesome-free/css/all.min.css')); ?>">
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="<?php echo e(asset('plantilla/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')); ?>">
    <!-- Select2 -->
    <link rel="stylesheet" href="<?php echo e(asset('plantilla/plugins/select2/css/select2.min.css')); ?>">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="<?php echo e(asset('plantilla/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')); ?>">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo e(asset('plantilla/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('plantilla/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('plantilla/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')); ?>">

	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo e(asset('plantilla/dist/css/adminlte.min.css')); ?>">
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
	<div class="wrapper">

		<!-- Preloader -->
		<div class="preloader flex-column justify-content-center align-items-center">
			<img class="animation__wobble" src="<?php echo e(asset('logo.jpg')); ?>" alt="LOGO" height="260" width="260">
		</div>

		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand navbar-white navbar-light">
			<!-- Left navbar links -->
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
				</li>
			</ul>

			<!-- Right navbar links -->
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" data-widget="fullscreen" href="#" role="button">
						<i class="fas fa-expand-arrows-alt"></i>
					</a>
				</li>
				<li class="nav-item dropdown">
					<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
						<?php echo e(Auth::user()->name); ?>

					</a>

					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
						onclick="event.preventDefault();
						document.getElementById('logout-form').submit();">
						<?php echo e(__('Salir')); ?>

					</a>

					<form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
						<?php echo csrf_field(); ?>
					</form>
				</div>
			</li>
		</ul>
	</nav>
	<!-- /.navbar -->

	<!-- Main Sidebar Container -->
	<aside class="main-sidebar sidebar-light-lime elevation-4">
		<!-- Brand Logo -->
		<a href="<?php echo e(url('')); ?>" class="brand-link">
			<img src="<?php echo e(asset('logo.jpg')); ?>" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
			<span class="brand-text font-weight-light">SIREGM</span>
		</a>

		<!-- Sidebar -->
		<div class="sidebar">
			<!-- Sidebar user panel (optional) -->
			<div class="user-panel mt-3 pb-3 mb-3 d-flex">
				<div class="image">
					<img src="<?php echo e(asset('plantilla/img/avatar.png')); ?>" class="img-circle elevation-2">
				</div>
				<div class="info">
					<a href="#" class="d-block"><?php echo e(Auth::user()->name); ?></a>
				</div>
			</div>

			<!-- Sidebar Menu -->
			<nav class="mt-2">
				<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
					<!-- Add icons to the links using the .nav-icon class
						with font-awesome or any other icon font library -->
						<li class="nav-item">
							<a href="<?php echo e(route('home')); ?>" class="nav-link lk-home">
								<i class="nav-icon fas fa-th"></i>
								<p>
									Panel de Control
								</p>
							</a>
						</li>
						<li class="nav-item lk-jefes_home lk-provincia_home lk-municipio_home lk-cs_home lk-especialidad_home lk-pais_home">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-tachometer-alt"></i>
								<p>
									Nomencladores
									<i class="right fas fa-angle-left"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
                                <li class="nav-item">
									<a href="<?php echo e(route('provincia_home')); ?>" class="nav-link lk-provincia_home">
										<i class="far fa-circle nav-icon"></i>
										<p>Provincias</p>
									</a>
								</li>
                                <li class="nav-item">
									<a href="<?php echo e(route('municipio_home')); ?>" class="nav-link lk-municipio_home">
										<i class="far fa-circle nav-icon"></i>
										<p>Muncipios</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?php echo e(route('reportes_home')); ?>" class="nav-link lk-especialidad_home">
										<i class="far fa-circle nav-icon"></i>
										<p>Tipos de Reportes</p>
									</a>
								</li>
							</ul>
                            <li class="nav-item">
                                <a href="<?php echo e(route('reportes_home')); ?>" class="nav-link lk-reportes_home">
                                    <i class="nav-icon fa fa-users"></i>
                                    <p>
                                        Reportes
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo e(route('usuarios_home')); ?>" class="nav-link lk-usuarios_home">
                                    <i class="nav-icon fa fa-user"></i>
                                    <p>
                                        Usuarios
                                    </p>
                                </a>
                            </li>
						</li>
					</ul>
				</nav>
				<!-- /.sidebar-menu -->
			</div>
			<!-- /.sidebar -->
		</aside>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<div class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-6">
							<h1 class="m-0"><?php echo $__env->yieldContent('titulo'); ?></h1>
						</div><!-- /.col -->
						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
								<li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Home</a></li>
								<?php $__env->startSection('nav-superior'); ?>
								<?php echo $__env->yieldSection(); ?>
							</ol>
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.container-fluid -->
			</div>
			<!-- /.content-header -->

			<!-- Main content -->
			<section class="content">
				<div class="container-fluid">
					<?php echo $__env->yieldContent('contenido'); ?>
				</div><!--/. container-fluid -->
			</section>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->

		<!-- Main Footer -->
		<footer class="main-footer">
			<strong>Copyright &copy; 2014-2023 </strong>
			Todos los derechos reservados.
			<div class="float-right d-none d-sm-inline-block">
				<b>Desarrollado por:</b> Jennifer
			</div>
		</footer>
	</div>
	<!-- ./wrapper -->

	<!-- REQUIRED SCRIPTS -->
	<!-- jQuery -->
	<script src="<?php echo e(asset('plantilla/plugins/jquery/jquery.min.js')); ?>"></script>
	<script src="<?php echo e(asset('plantilla/plugins/moment/moment.min.js')); ?>"></script>
    <!-- Bootstrap -->
	<script src="<?php echo e(asset('plantilla/plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
	<!-- overlayScrollbars -->
	<script src="<?php echo e(asset('plantilla/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')); ?>"></script>
	<!-- AdminLTE App -->
	<script src="<?php echo e(asset('plantilla/dist/js/adminlte.js')); ?>"></script>

	<!-- PAGE PLUGINS -->
    <!-- Select2 -->
    <script src="<?php echo e(asset('plantilla/plugins/select2/js/select2.full.min.js')); ?>"></script>
    <!-- InputMask -->
    <script src="<?php echo e(asset('plantilla/plugins/inputmask/jquery.inputmask.min.js')); ?>"></script>
    <!-- SweetAlert2 -->
    <script src="<?php echo e(asset('plantilla/plugins/sweetalert2/sweetalert2.min.js')); ?>"></script>
    <!-- DataTables  & Plugins -->
    <script src="<?php echo e(asset('plantilla/plugins/datatables/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('plantilla/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')); ?>"></script>
    <script src="<?php echo e(asset('plantilla/plugins/datatables-responsive/js/dataTables.responsive.min.js')); ?>"></script>
    <script src="<?php echo e(asset('plantilla/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')); ?>"></script>
    <script src="<?php echo e(asset('plantilla/plugins/datatables-buttons/js/dataTables.buttons.min.js')); ?>"></script>
    <script src="<?php echo e(asset('plantilla/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')); ?>"></script>
    <script src="<?php echo e(asset('plantilla/plugins/jszip/jszip.min.js')); ?>"></script>
    <script src="<?php echo e(asset('plantilla/plugins/pdfmake/pdfmake.min.js')); ?>"></script>
    <script src="<?php echo e(asset('plantilla/plugins/pdfmake/vfs_fonts.js')); ?>"></script>
    <script src="<?php echo e(asset('plantilla/plugins/datatables-buttons/js/buttons.html5.min.js')); ?>"></script>
    <script src="<?php echo e(asset('plantilla/plugins/datatables-buttons/js/buttons.print.min.js')); ?>"></script>
    <script src="<?php echo e(asset('plantilla/plugins/datatables-buttons/js/buttons.colVis.min.js')); ?>"></script>

    <script src="<?php echo e(asset('js/principal.js')); ?>"></script>

	<?php echo $__env->yieldContent('js'); ?>

</body>
</html>
<?php /**PATH /var/www/html/siregm/resources/views/layouts/app.blade.php ENDPATH**/ ?>