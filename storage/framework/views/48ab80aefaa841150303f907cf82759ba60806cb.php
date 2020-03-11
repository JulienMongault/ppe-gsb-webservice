<?php $__env->startSection("title", "Liste des comptes rendus de visites"); ?>

<?php $__env->startSection("content"); ?>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="js/searchBarPraticiens.js"></script>
<div class="container">
<div class="col-6">
<div class="card mt-3">
<div class="card-header">
    <h5 class="card-text">Praticien : <?php echo e($rapport->praticien->PRA_PRENOM); ?> <?php echo e($rapport->praticien->PRA_NOM); ?></h5>
</div>

<div class="tab-content">
    <div class="p-3">
    <h5 class="card-text">Motif : <?php echo e($rapport->RAP_MOTIF); ?></h5>
    <p class="card-text"><?php echo e($rapport->RAP_BILAN); ?></p>
    <p class="card-text float-left"><?php echo e($rapport->praticien->PRA_VILLE); ?></p> 
    <p class="card-text float-right"><?php echo e($rapport->RAP_DATE); ?></p>            
    </div>
</div>
</div>
    <h3>Êtes-vous sûr de vouloir supprimer ce rapport ?</h3>
    <form action="<?php echo e(route('gsb.supprimerRap')); ?>" method="POST">

        <input type="hidden" name="id_rap" value="<?php echo e($rapport->RAP_NUM); ?>" />
        <?php echo e(csrf_field()); ?>

        <a href="#" class="btn btn-warning" onclick="this.parentNode.submit()">Supprimer</a>
        <a href="<?php echo e(route('gsb.listRap')); ?>" class="btn">Annuler</a>
    </form>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("template", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\gsb\resources\views/supprimerRapport.blade.php ENDPATH**/ ?>