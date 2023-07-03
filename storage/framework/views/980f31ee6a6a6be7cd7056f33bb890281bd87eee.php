<?php $__env->startSection('titulo', 'Usuarios'); ?>

<?php $__env->startSection('nav-superior'); ?>
<li class="breadcrumb-item"><a href="<?php echo e(route('usuarios_home')); ?>">Usuarios</a></li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenido'); ?>
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Listado general de usuairos</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <button class="btn btn-primary" type="button" onclick="showModalNuevo()">
            <i class="fa fa-plus fa-sm"></i> Agregar Usuario
        </button>
        <hr>
        <div class="table-responsive">
            <table class="table table-hover table-striped align-middle text-center" id="tabla">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Cargo</th>
                        <th>Estado</th>
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




<div class="modal fade" id="usuarioModal" style="padding-right: 15px;" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <?php echo Form::open(['id'=>"frmNuevo", 'method'=>"POST", 'onsubmit'=>"return nuevo()"]); ?>

            <?php echo Form::text('id', null, ['id'=>'id','hidden']); ?>

            <div class="modal-header">
            <h4 class="modal-title" id="titulo-usuario">Agregar Usuario</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" class="text-danger">×</span>
            </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-6">
                        <?php echo Form::label('name', 'Nombre Completo', ['class'=>'form-label']); ?>

                        <?php echo Form::text('name', null, ['id'=>'name','class'=>'form-control','autocomplete'=>'off','required'=>'true']); ?>

                        <?php echo Form::label('cargo', 'Cargo', ['class'=>'form-label']); ?>

                        <?php echo Form::text('cargo', null, ['id'=>'cargo','class'=>'form-control','autocomplete'=>'off','required'=>'true']); ?>

                        <?php echo Form::label('password', 'Contraseña', ['class'=>'form-label']); ?>

                        <?php echo Form::password('password', ['id'=>'password','class'=>'form-control','autocomplete'=>'off','required'=>'true']); ?>

                    </div>
                    <div class="col-6">
                        <?php echo Form::label('email', 'Correo Electrónico', ['class'=>'form-label']); ?>

                        <?php echo Form::text('email', null, ['id'=>'email','class'=>'form-control','autocomplete'=>'off','required'=>'true']); ?>

                        <?php echo Form::label('estado', 'Estado', ['class'=>'form-label']); ?>

                        <select name="estado" id="estado" class="select2" style="width: 100%">
                            <option value="">Seleccionar</option>
                            <option value="1">Activo</option>
                            <option value="0">Inactivo</option>
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
<script src="<?php echo e(asset('js/paginas/usuarios.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/siregm/resources/views/admin/usuarios/home.blade.php ENDPATH**/ ?>