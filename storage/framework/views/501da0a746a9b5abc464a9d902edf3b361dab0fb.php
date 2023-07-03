<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="login-box">
                <!-- /.login-logo -->
                <div class="card card-outline card-primary">
                  <div class="card-header text-center">
                    <a href="" class="h1"><b>SIRE</b>GM</a>
                  </div>
                  <div class="card-body">
                    <p class="login-box-msg">Ingrese sus datos de usuario</p>

                    <form method="POST" action="<?php echo e(route('login')); ?>">
                        <?php echo csrf_field(); ?>
                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <div class="input-group-text">
                              <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                        <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>
                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <div class="input-group-text">
                              <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="current-password">
                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="row">
                        <div class="col-8">
                          <div class="icheck-primary">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                            <label class="form-check-label" for="remember">
                                <?php echo e(__('Recordar Navegador')); ?>

                            </label>
                          </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">
                        <?php echo e(__('Acceder')); ?>

                    </button>
                    </form>

                    <p class="mb-1">
                    </p>
                    <p class="mb-0">
                        <?php if(Route::has('password.request')): ?>
                            <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                                <?php echo e(__('Forgot Your Password?')); ?>

                            </a>
                        <?php endif; ?>
                    </p>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.login-box -->
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.login', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/siregm/resources/views/auth/login.blade.php ENDPATH**/ ?>