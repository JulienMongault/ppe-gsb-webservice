<?php $__env->startSection("title", "Liste des visiteurs"); ?>

<?php $__env->startSection("content"); ?>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <!-- Action -->


                <!-- Liste -->
                <ul class="list-group">
                	
                    <?php $__empty_1 = true; $__currentLoopData = $visiteurs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $visiteur): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <li class="list-group-item">
                            <span><?php echo e($visiteur->VIS_NOM); ?> &nbsp; </span>
                            <span><?php echo e($visiteur->VIS_PRENOM); ?> &nbsp; </span>
                            <span><?php echo e($visiteur->VIS_ADRESSE); ?> &nbsp; </span>
                            <span><?php echo e($visiteur->VIS_VILLE); ?> &nbsp; </span>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <li class="list-group-item text-center">C'est vide !</li>
                    <?php endif; ?>
                </ul>
                <button type="button" class="btn btn-primary">Primary</button>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("template", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/gsb_julien_quentin/resources/views/listeVisiteur.blade.php ENDPATH**/ ?>