<section class="d-flex flex-column justify-content-center align-items-center m-5">
    <div class="row">
        <div class="col-lg-12">
            <h2>Galerie</h2>
        </div>
    </div>

    <div class="row">
        <div class="d-flex flex-row w-100">
            <div id="carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <?php $__currentLoopData = $galerie; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$galerie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="carousel-item <?php echo e($key==0?'active':''); ?>">
                        <img src="<?php echo e($galerie->photo->photo); ?>" height="300px" width="400px" class="" alt="Responsive image" id="myImg">
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
                </div>
            </div>
        </div>
    </div>


</section><?php /**PATH /home/cyberun-2/projet/Projet/intidetour/resources/views/clients/accueil/galerie.blade.php ENDPATH**/ ?>