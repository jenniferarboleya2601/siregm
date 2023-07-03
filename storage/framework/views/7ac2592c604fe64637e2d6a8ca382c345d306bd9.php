<?php $__env->startSection('titulo', 'Reportes'); ?>

<?php $__env->startSection('nav-superior'); ?>
<li class="breadcrumb-item"><a href="<?php echo e(route('reportes_home')); ?>">Reportes</a></li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenido'); ?>
<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header">
				<h3 class="card-title">Listado general de reportes</h3>
			</div>
			<!-- /.card-header -->
			<div class="card-body">
				<button class="btn btn-primary" type="button" onclick="showModalNuevo()">
					<i class="fa fa-plus fa-sm"></i> Agregar Reporte
				</button>
				<hr>
				<div class="table-responsive">
					<table class="table table-hover table-striped align-middle text-center" id="tabla">
						<thead>
							<tr>
								<th>No. Reporte</th>
								<th>Nombre</th>
								<th>Dirección</th>
								<th>Municipio</th>
								<th class='notexport'>Opciones</th>
							</tr>
						</thead>
						<tbody></tbody>
					</table>
				</div>
			</div>
			<!-- /.card-body -->
		</div>
		<!-- /.card -->
	</div>
	<!-- /.col -->
</div>




<div class="modal fade" id="reporteModal" style="padding-right: 15px;" aria-modal="true" role="dialog">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<?php echo Form::open(['id'=>"frmReporte", 'method'=>"POST", 'onsubmit'=>"return nuevo()"]); ?>

			<?php echo Form::text('id', null, ['id'=>'id','hidden']); ?>

			<div class="modal-header">
				<h4 class="modal-title" id="titulo-reportes">Agregar Reporte</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true" class="text-danger">×</span>
				</button>
			</div>
			<div class="modal-body">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="nombre">Nombre y Apellidos</label>
                        <input type="text" class="form-control" id="nombre" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="direccion">Dirección del incidente</label>
                        <input type="text" class="form-control" id="direccion" required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="tipo">Tipo de reporte</label>
                        <input type="text" class="form-control" id="tipo" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="telefono">Tel. de contacto</label>
                        <input type="text" class="form-control" id="telefono" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="municipio">Municipio</label>
                        <select name="municipio" id="municipio" class="select2" style="width: 100%">
                            <option value="">Seleccionar</option>
                            <?php $__currentLoopData = $municipios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $municipio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($municipio['id']); ?>"><?php echo e($municipio['text']); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="detalle">Detalles del reporte</label>
                    <textarea id="detalle" class="form-control" name="" rows="5"></textarea>
                </div>
			</div>
			<div class="modal-footer justify-content-between">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				<button type="submit" class="btn btn-primary" id="btnGuardar"><i class="fa fa-save"></i> Guardar Datos</button>
			</div>
			<?php echo Form::close(); ?>

		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script src="<?php echo e(asset('js/paginas/reportes.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/siregm/resources/views/reportes/home.blade.php ENDPATH**/ ?>