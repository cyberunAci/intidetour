<?php $__env->startSection('content'); ?>

<h1 class="text-center m-5">catalogue de circuits</h1>
<div class="container">

    <?php $__currentLoopData = $circuits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $circuit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="card mb-3 " style="width: 100%;">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="<?php echo e($circuit->image); ?>" class="card-img" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"> <?php echo e($circuit->nom); ?></h5>

                    <p class="card-text"><?php echo e($circuit->description); ?></p>
                    <p class="card-text"><small class="text-muted">durée</small></p>
                    <p class="card-text"><small class="text-muted">distance</small></p>
                    <p class="card-text"><small class="text-muted"><?php echo e($circuit->difficulte); ?></small></p>
                    <p class="card-text"><small class="text-muted">mots cles</small> <small class="text-muted">mots cles</small></p>
                </div>

                <div class="text-right mb-3">
                    <a href="/circuits/<?php echo e($circuit->id); ?>" class="btn btn-primary">Voir plus</a>
                </div>

            </div>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div>

</html>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/krishna/Projet/intidetour/resources/views/clients/views/circuits.blade.php ENDPATH**/ ?>