<?php $__env->startSection('container'); ?>

<div id="card">
    <div id="card-content">
        <div id="card-title">

          <?php if(session()->has('success')): ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <?php echo e(session('success')); ?>

            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          <?php endif; ?>

        <?php if(session()->has('LoginError')): ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?php echo e(session('LoginError')); ?>

            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          <?php endif; ?>

        <main class="form-signin">
            <form action="/login" method="post">
                <?php echo csrf_field(); ?>
              <h1 class="h3 mb-5 mt-3 fw-normal text-center"><i class="bi bi-person-circle"></i>Login</h1>

              <div class="form-floating mt-4">
                <input type="email" name="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="email" placeholder="name@example.com" autofocus required value="<?php echo e(old('email')); ?>">
                <label for="email">Email address</label>
                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="invalid-feedback">
                    <?php echo e($message); ?>

                  </div>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
              <div class="form-floating mt-3">
                <input type="password" name="password"  class="form-control" id="password" placeholder="Password" required>
                <label for="password">Password</label>
              </div>


              <button class="w-100 btn btn-lg btn-success mt-3" type="submit">Login</button>

            </form>
            <small class="d-block text-center mt-5">Not registered? <a href="/register">Register Now!</a></small>
          </main>

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\HELENA\app\lamara\resources\views/pengguna/index.blade.php ENDPATH**/ ?>