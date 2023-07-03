<?php $__env->startSection('titulo', 'Centros de Salud'); ?>

<?php $__env->startSection('nav-superior'); ?>
<li class="breadcrumb-item"><a href="<?php echo e(route('cs_home')); ?>">Centros de Salud</a></li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenido'); ?>
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Listado general de los Centros de Salud donde trabajan los colaboradores</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <button class="btn btn-primary" type="button" onclick="showModalNuevo()">
            <i class="fa fa-plus fa-sm"></i> Agregar Centro de Salud
        </button>
        <hr>
        <div class="table-responsive">
            <table class="table table-hover table-striped align-middle text-center" id="tabla">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Atendido Por</th>
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




<div class="modal fade" id="centros_saludModal" style="padding-right: 15px;" aria-modal="true" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <?php echo Form::open(['id'=>"frmNuevo", 'method'=>"POST", 'onsubmit'=>"return nuevo()"]); ?>

            <?php echo Form::text('id', null, ['id'=>'id','hidden']); ?>

            <div class="modal-header">
            <h4 class="modal-title" id="titulo-centros_salud">Agregar Centro de Salud</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" class="text-danger">×</span>
            </button>
            </div>
            <div class="modal-body">
                <?php echo Form::label('nombre', 'Nombre', ['class'=>'form-label']); ?>

                <?php echo Form::text('nombre', null, ['id'=>'nombre','class'=>'form-control','autocomplete'=>'off','required'=>'true']); ?>

                <?php echo Form::label('jefe_id', 'Jefe Colaboración que atiende el centro', ['class'=>'form-label']); ?>

                <select name="jefe_id" id="jefe_id" class="select2" style="width: 100%" required>
                    <option value="">Seleccionar</option>
                    <?php $__currentLoopData = $jefes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jefe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($jefe['id']); ?>"><?php echo e($jefe['text']); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
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
<script src="<?php echo e(asset('js/paginas/centros_salud.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/sigecol/resources/views/nomencladores/centros_salud/home.blade.php ENDPATH**/ ?>