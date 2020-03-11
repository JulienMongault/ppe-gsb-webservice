<?php $__env->startSection("title", "Liste des comptes rendus de visites"); ?>

<?php $__env->startSection("content"); ?>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <!-- Action -->
                <a href="<?php echo e(route('gsb.creationRap')); ?>" class="float-right btn btn-primary">Écrire un rapport</a>
                <!-- Liste -->
                <div class="row"></div>
                        <?php $__empty_1 = true; $__currentLoopData = Auth::user()->visiteur->rapports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rapport): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                            <div class="col-6">
                              <div class="card mt-3 tab-card">
                                <div class="card-header tab-card-header">
                                    <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo e(route('gsb.editerRap', $rapport->RAP_NUM )); ?>" >Modifier</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo e($rapport->RAP_NUM); ?>">Exporter</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo e(route('gsb.validerSupprimerRap', $rapport->RAP_NUM )); ?>" >Supprimer</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-header">
                                    <h5 class="card-text">Praticien : <?php echo e($rapport->praticien->PRA_PRENOM); ?> <?php echo e($rapport->praticien->PRA_NOM); ?></h5>
                                </div>

                                <div class="tab-content" id="myTabContent">
                                  <div class="tab-pane fade show active p-3" id="one" role="tabpanel" aria-labelledby="one-tab">
                                    <h5 class="card-text">Motif : <?php echo e($rapport->RAP_MOTIF); ?></h5>
                                    <p class="card-text"><?php echo e($rapport->RAP_BILAN); ?></p>
                                      <p class="card-text float-left"><?php echo e($rapport->praticien->PRA_VILLE); ?></p> 
                                    <p class="card-text float-right"><?php echo e($rapport->RAP_DATE); ?></p>            
                                  </div>
                                </div>
                              </div>
                            </div>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <li class="list-group-item text-center">Vous n'avez fait aucun rapport.</li>
                            <a href="<?php echo e(route('gsb.creationRap')); ?>" class="float-right btn btn-primary">Cliquez ici pour écrire un rapport</a>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make("template", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\gsb\resources\views/listeRapports.blade.php ENDPATH**/ ?>