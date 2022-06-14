<?php $__env->startSection('content'); ?>
<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col col-lg-6 col-md-4">
      <div class="card card-primary card-outline">
        <div class="card-body box-profile">
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <div class="text-center">
            <img src="<?php echo e(url('images')); ?>/<?php echo e($user->foto); ?>" alt="profil" class="profile-user-img img-responsive img-circle">
          </div>
          <h3 class="profile-username text-center"><?php echo e($user->name); ?></h3>
          <p class="text-muted text-center">Member sejak : <?php echo e($user->created_at); ?></p>
          <hr>
          <strong>
            <i class="fas fa-map-marker mr-2"></i>
            Alamat
          </strong>
          <p class="text-muted">
            <?php echo e($user->alamat); ?>

          </p>
          <hr>
          <strong>
            <i class="fas fa-envelope mr-2"></i>
            Email
          </strong>
          <p class="text-muted">
            <?php echo e($user->email); ?>

          </p>
          <hr>
          <strong>
            <i class="fas fa-phone mr-2"></i>
            No Tlp
          </strong>
          <p class="text-muted">
            <?php echo e($user->phone); ?>

          </p>
          <hr>
          <a href="/editprofil" class="btn btn-primary btn-block">Edit</a>
        </div>
      </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\HELENA\app\lamara\resources\views/user/index.blade.php ENDPATH**/ ?>