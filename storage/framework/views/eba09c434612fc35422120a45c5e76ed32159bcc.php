<?php $__env->startSection('titulo', 'Municipios'); ?>

<?php $__env->startSection('nav-superior'); ?>
<li class="breadcrumb-item"><a href="<?php echo e(route('municipio_home')); ?>">Municipios</a></li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenido'); ?>
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Listado general de Municipios donde residen colaboradores</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <button class="btn btn-primary" type="button" onclick="showModalNuevo()">
            <i class="fa fa-plus fa-sm"></i> Agregar municipio
        </button>
        <hr>
        <div class="table-responsive">
            <table class="table table-hover table-striped align-middle text-center" id="tabla">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Provincia</th>
                        <th>Código</th>
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




<div class="modal fade" id="municipioModal" style="padding-right: 15px;" aria-modal="true" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <?php echo Form::open(['id'=>"frmNuevo", 'method'=>"POST", 'onsubmit'=>"return nuevo()"]); ?>

            <?php echo Form::text('id', null, ['id'=>'id','hidden']); ?>

            <div class="modal-header">
            <h4 class="modal-title" id="titulo-municipio">Agregar Municipio</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" class="text-danger">×</span>
            </button>
            </div>
            <div class="modal-body">
                <?php echo Form::label('nombre', 'Nombre', ['class'=>'form-label']); ?>

                <?php echo Form::text('nombre', null, ['id'=>'nombre','class'=>'form-control','autocomplete'=>'off','required'=>'true']); ?>

                <?php echo Form::label('prov_id', 'Provincia', ['class'=>'form-label']); ?>

                <?php echo Form::text('prov_id', null, ['id'=>'prov_id','class'=>'form-control','autocomplete'=>'off','required'=>'true']); ?>

                <?php echo Form::label('codigo', 'Código', ['class'=>'form-label']); ?>

                <?php echo Form::text('codigo', null, ['id'=>'codigo','class'=>'form-control','autocomplete'=>'off','required'=>'true']); ?>

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
<script src="<?php echo e(asset('js/paginas/municipios.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/sigecol/resources/views/nomencladores/municipios/home.blade.php ENDPATH**/ ?>