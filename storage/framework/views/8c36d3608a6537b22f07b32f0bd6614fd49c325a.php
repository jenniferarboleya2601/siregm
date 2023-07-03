<?php $__env->startSection('titulo', 'Misiones del Colaborador'); ?>

<?php $__env->startSection('nav-superior'); ?>
<li class="breadcrumb-item"><a href="<?php echo e(route('colaboradores_home')); ?>">Colaboradores</a></li>
<li class="breadcrumb-item"><a href="">Misiones</a></li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenido'); ?>
<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header">
				<h3 class="card-title">Listado de las misiones</h3>
			</div>
			<!-- /.card-header -->
			<div class="card-body">
				<button class="btn btn-primary" type="button" onclick="showModalNuevo()">
					<i class="fa fa-plus fa-sm"></i> Agregar Misión
				</button>
				<hr>
                <div class="row text-center">
                    <div class="col-lg-3 col-md-6">
                        <h5>Nombre y Apellidos</h5>
                        <label><?= $datos[0]->nombre." ".$datos[0]->apellidos ?></label>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5>Municipio Recidencia</h5>
                        <label><?= $datos[0]->municipio ?></label>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5>Centro Laboral</h5>
                        <label><?= $datos[0]->centro ?></label>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5>Especialidad</h5>
                        <label><?= $datos[0]->especialidad ?></label>
                    </div>
                </div>
                <hr>
				<div class="table-responsive">
					<table class="table table-hover table-striped align-middle text-center" id="tabla">
						<thead>
							<tr>
								<th>Pais</th>
								<th>Tipo Misión</th>
								<th>Salida</th>
								<th>Regreso</th>
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




<div class="modal fade" id="misionModal" style="padding-right: 15px;" aria-modal="true" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<?php echo Form::open(['id'=>"frmNuevo", 'method'=>"POST", 'onsubmit'=>"return nuevo()"]); ?>

			<?php echo Form::text('id', null, ['id'=>'id','hidden']); ?>

			<?php echo Form::text('colaborador', $colaborador, ['id'=>'colaborador','hidden']); ?>

			<div class="modal-header">
				<h4 class="modal-title" id="titulo-misiones">Agregar Jefe</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true" class="text-danger">×</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
                    <?php echo Form::label('fecha_salida', 'Fecha Salida', ['class'=>'form-label']); ?>

                    <?php echo Form::date('fecha_salida', null, ['id'=>'fecha_salida','class'=>'form-control','required']); ?>

                    <?php echo Form::label('tipo_mision', 'Tipo de Misión', ['class'=>'form-label']); ?>

                    <?php echo Form::text('tipo_mision', null, ['id'=>'tipo_mision','class'=>'form-control','autocomplete'=>'off','required'=>'true']); ?>

                    <?php echo Form::label('pais', 'País', ['class'=>'form-label']); ?>

                    <select name="pais" id="pais" class="select2" style="width: 100%" required>
                        <option value="">Seleccionar</option>
                        <?php $__currentLoopData = $paises; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pais): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($pais['id']); ?>"><?php echo e($pais['text']); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <?php echo Form::label('fecha_regreso', 'Fecha Regreso', ['class'=>'form-label']); ?>

                    <?php echo Form::date('fecha_regreso', null, ['id'=>'fecha_regreso','class'=>'form-control','required']); ?>

                    <?php echo Form::label('estado', 'Estado de la Misión', ['class'=>'form-label']); ?>

                    <?php echo Form::select('estado', [''=>'Seleccionar','0'=>'En Curso','1'=>'Finalizada'], 0, ['class'=>'select2','style'=>'width: 100%','required']); ?>

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
<script src="<?php echo e(asset('js/paginas/misiones.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/sigecol/resources/views/misiones/home.blade.php ENDPATH**/ ?>