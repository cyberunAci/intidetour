<?php $__env->startSection('content'); ?>

<section>
    <h2>À propos</h2>

    <div class="card bg-light mb-3" >
      <div class="card-body">
        <p class="card-text"><?php $__currentLoopData = $apropos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $apropos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php echo e($apropos->text); ?>

          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></p>
      </div>
    </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/cyberun-2/projet/Projet/intidetour/resources/views/clients/apropos.blade.php ENDPATH**/ ?>