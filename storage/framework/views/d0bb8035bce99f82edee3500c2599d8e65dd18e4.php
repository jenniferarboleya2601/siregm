<?php $__env->startSection('titulo', 'Colaboradores'); ?>

<?php $__env->startSection('nav-superior'); ?>
<li class="breadcrumb-item"><a href="<?php echo e(route('colaboradores_home')); ?>">Colaboradores</a></li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenido'); ?>
<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header">
				<h3 class="card-title">Listado general de colaboradores</h3>
			</div>
			<!-- /.card-header -->
			<div class="card-body">
				<button class="btn btn-primary" type="button" onclick="showModalNuevo()">
					<i class="fa fa-plus fa-sm"></i> Agregar Colaborador
				</button>
				<hr>
				<div class="table-responsive">
					<table class="table table-hover table-striped align-middle text-center" id="tabla">
						<thead>
							<tr>
								<th>Nombre</th>
								<th>Centro Laboral</th>
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




<div class="modal fade" id="colaboradorModal" style="padding-right: 15px;" aria-modal="true" role="dialog">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<?php echo Form::open(['id'=>"frmNuevo", 'method'=>"POST", 'onsubmit'=>"return nuevo()"]); ?>

			<?php echo Form::text('id', null, ['id'=>'id','hidden']); ?>

			<div class="modal-header">
				<h4 class="modal-title" id="titulo-colaboradores">Agregar Jefe</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true" class="text-danger">×</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-6">
						<?php echo Form::label('nombre', 'Nombre', ['class'=>'form-label']); ?>

						<?php echo Form::text('nombre', null, ['id'=>'nombre','class'=>'form-control','autocomplete'=>'off','required'=>'true']); ?>

						<?php echo Form::label('ci', 'Carnet de Identidad', ['class'=>'form-label']); ?>

						<?php echo Form::text('ci', null, ['id'=>'ci','class'=>'form-control','autocomplete'=>'off','required'=>'true','data-inputmask'=>'"mask": "99999999999"', 'data-mask']); ?>

						<?php echo Form::label('sexo', 'Sexo', ['class'=>'form-label']); ?>

                        <?php echo Form::select('sexo', [''=>'Seleccionar','M'=>'Masculino','F'=>'Femenino'], 0, ['class'=>'select2','style'=>'width:100%']); ?>

						<?php echo Form::label('centro', 'Centro Laboral', ['class'=>'form-label']); ?>

                        <select name="centro" id="centro" class="select2" style="width: 100%">
                            <option value="">Seleccionar</option>
                            <?php $__currentLoopData = $centros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $centro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($centro['id']); ?>"><?php echo e($centro['text']); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
					</div>

					<div class="col-6">
						<?php echo Form::label('apellidos', 'Apellidos', ['class'=>'form-label']); ?>

						<?php echo Form::text('apellidos', null, ['id'=>'apellidos','class'=>'form-control','autocomplete'=>'off','required'=>'true']); ?>

						<?php echo Form::label('direccion', 'Direccion', ['class'=>'form-label']); ?>

						<?php echo Form::text('direccion', null, ['id'=>'direccion','class'=>'form-control','autocomplete'=>'off','required'=>'true']); ?>

						<?php echo Form::label('municipio', 'Municipio', ['class'=>'form-label']); ?>

                        <select name="municipio" id="municipio" class="select2" style="width: 100%">
                            <option value="">Seleccionar</option>
                            <?php $__currentLoopData = $municipios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $municipio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($municipio['id']); ?>"><?php echo e($municipio['text']); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
						<?php echo Form::label('especialidad', 'Especialidad', ['class'=>'form-label']); ?>

                        <select name="especialidad" id="especialidad" class="select2" style="width: 100%">
                            <option value="">Seleccionar</option>
                            <?php $__currentLoopData = $especialidades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $especialidad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($especialidad['id']); ?>"><?php echo e($especialidad['text']); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
					</div>
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
<script src="<?php echo e(asset('js/paginas/colaboradores.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/sigecol/resources/views/colaboradores/home.blade.php ENDPATH**/ ?>