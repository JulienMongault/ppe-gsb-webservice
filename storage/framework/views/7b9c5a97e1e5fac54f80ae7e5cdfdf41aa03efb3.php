<?php $__env->startSection("title", "Menu"); ?>

<?php $__env->startSection('content'); ?>
<main class="py-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Notifications</div>

                    <div class="card-body">
                        <?php if(session('status')): ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo e(session('status')); ?>

                            </div>
                        <?php endif; ?>
                        <p>Vous êtes connecté </p>
                            <?php if( count(Auth::user()->visiteur->rapports) == 0 ): ?>
                            <div class="alert alert-warning" role="alert">
                                 Vous n'avez fait aucun compte-rendu de visite !
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\gsb\resources\views/home.blade.php ENDPATH**/ ?>