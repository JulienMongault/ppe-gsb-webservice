<?php $__env->startSection("title", "Création d'un rapport de visite"); ?>

<?php $__env->startSection("content"); ?>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<div class="container">
  <form action="<?php echo e(route('gsb.saveRap')); ?>" method="post" class="form-horizontal" role="form" autocomplete="off" >
    <fieldset>
      <div class="form-group">
        <label class="col-sm-3 control-label" for="praNum">Numéro du Praticien</label>
        <div class="col-sm-3">
          <input type="text" class="form-control" name="praNum" id="praNum" required value="">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label" for="motif">Motif de la visite</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="motif" id="motif" required value="">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label" for="bilan">Bilan</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="bilan" id="bilan" required placeholder="">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label" for="card-number">Date</label>
        <div class="col-sm-2">
          <input type="date" class="form-control" name="date" id="date" required value="">
        </div>
      </div>
      <?php echo e(csrf_field()); ?>

      <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9">
          <input type="submit" class="btn btn-success" value="Enregistrer"/>
          <a href="<?php echo e(route('gsb.listRap')); ?>" class="btn">Annuler</a>
        </div>
      </div>
    </fieldset>
  </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("template", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\gsb\resources\views/creationRapport.blade.php ENDPATH**/ ?>