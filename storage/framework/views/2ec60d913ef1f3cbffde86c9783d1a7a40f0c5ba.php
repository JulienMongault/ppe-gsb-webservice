<?php $__env->startSection("title", "Liste des praticiens"); ?>

<?php $__env->startSection("content"); ?>

    <div class="content_box">
	    <div class="left_bar">
	        <ul class=" nav-tabs--vertical nav" role="navigation">
		    <li class="nav-item">
			    <a href="#tous" class="nav-link active" data-toggle="tab" role="tab" aria-controls="tous">Tous les praticiens</a>
		    </li>
		    <li class="nav-item">
			    <a href="#mh" class="nav-link" data-toggle="tab" role="tab" aria-controls="mh">Médecin Hospitalier</a>
		    </li>
		    <li class="nav-item">
			    <a href="#mv" class="nav-link " data-toggle="tab" role="tab" aria-controls="mv">Médecine de Ville</a>
		    </li>
		    <li class="nav-item">
			    <a href="#ph" class="nav-link" data-toggle="tab" role="tab" aria-controls="ph">Pharmacien Hospitalier</a>
		    </li>
            <li class="nav-item">
			    <a href="#po" class="nav-link" data-toggle="tab" role="tab" aria-controls="po">Pharmacien Officine</a>
		    </li>
            <li class="nav-item">
			    <a href="#ps" class="nav-link" data-toggle="tab" role="tab" aria-controls="ps">Personnel de santé</a>
		    </li>
	    </ul>
	    </div>
        <div class="right_bar ">
        	    <div class="tab-content ">
		    <div class="tab-pane fade show active" id="tous" role="tabpanel">
    <table class="table table-bordered">
        <thead>
          <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Type</th>
            <th>Adresse</th>
            <th>Ville</th>
            <th>Code Postal</th>
             <th>Coef Notoriété</th>
          </tr>
        </thead>
        <tbody>
        <?php $__empty_1 = true; $__currentLoopData = $praticiens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $praticien): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
          <tr>
            <td><?php echo e($praticien->PRA_NOM); ?></td>
            <td><?php echo e($praticien->PRA_PRENOM); ?></td>
            <td><?php echo e($praticien->type->TYP_LIBELLE); ?></td>
            <td><?php echo e($praticien->PRA_ADRESSE); ?></td>
            <td><?php echo e($praticien->PRA_VILLE); ?></td>
            <td><?php echo e($praticien->PRA_CP); ?></td>
            <td><?php echo e($praticien->PRA_COEFNOTORIETE); ?></td>
          </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <li class="list-group-item text-center">C'est vide !</li>
        <?php endif; ?>
        </tbody>
      </table>
		    </div>
		    <div class="tab-pane fade" id="mh" role="tabpanel">
		    <table class="table table-bordered">
        <thead>
          <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Type</th>
            <th>Adresse</th>
            <th>Ville</th>
            <th>Code Postal</th>
             <th>Coef Notoriété</th>
          </tr>
        </thead>
        <tbody>
        <?php $__empty_1 = true; $__currentLoopData = $praticiens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $praticien): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <?php if($praticien->TYP_CODE == "MH"): ?>
              <tr>
                <td><?php echo e($praticien->PRA_NOM); ?></td>
                <td><?php echo e($praticien->PRA_PRENOM); ?></td>
                <td><?php echo e($praticien->type->TYP_LIBELLE); ?></td>
                <td><?php echo e($praticien->PRA_ADRESSE); ?></td>
                <td><?php echo e($praticien->PRA_VILLE); ?></td>
                <td><?php echo e($praticien->PRA_CP); ?></td>
                <td><?php echo e($praticien->PRA_COEFNOTORIETE); ?></td>
              </tr>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <li class="list-group-item text-center">C'est vide !</li>
        <?php endif; ?>
        </tbody>
      </table>
		    </div>
		    <div class="tab-pane fade" id="mv" role="tabpanel">
		    <table class="table table-bordered">
        <thead>
          <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Type</th>
            <th>Adresse</th>
            <th>Ville</th>
            <th>Code Postal</th>
             <th>Coef Notoriété</th>
          </tr>
        </thead>
        <tbody>
        <?php $__empty_1 = true; $__currentLoopData = $praticiens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $praticien): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <?php if($praticien->TYP_CODE == "MV"): ?>
              <tr>
                <td><?php echo e($praticien->PRA_NOM); ?></td>
                <td><?php echo e($praticien->PRA_PRENOM); ?></td>
                <td><?php echo e($praticien->type->TYP_LIBELLE); ?></td>
                <td><?php echo e($praticien->PRA_ADRESSE); ?></td>
                <td><?php echo e($praticien->PRA_VILLE); ?></td>
                <td><?php echo e($praticien->PRA_CP); ?></td>
                <td><?php echo e($praticien->PRA_COEFNOTORIETE); ?></td>
              </tr>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <li class="list-group-item text-center">C'est vide !</li>
        <?php endif; ?>
        </tbody>
      </table>
		    </div>
		    <div class="tab-pane fade" id="ph" role="tabpanel">
		    <table class="table table-bordered">
        <thead>
          <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Type</th>
            <th>Adresse</th>
            <th>Ville</th>
            <th>Code Postal</th>
             <th>Coef Notoriété</th>
          </tr>
        </thead>
        <tbody>
        <?php $__empty_1 = true; $__currentLoopData = $praticiens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $praticien): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <?php if($praticien->TYP_CODE == "PH"): ?>
              <tr>
                <td><?php echo e($praticien->PRA_NOM); ?></td>
                <td><?php echo e($praticien->PRA_PRENOM); ?></td>
                <td><?php echo e($praticien->type->TYP_LIBELLE); ?></td>
                <td><?php echo e($praticien->PRA_ADRESSE); ?></td>
                <td><?php echo e($praticien->PRA_VILLE); ?></td>
                <td><?php echo e($praticien->PRA_CP); ?></td>
                <td><?php echo e($praticien->PRA_COEFNOTORIETE); ?></td>
              </tr>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <li class="list-group-item text-center">C'est vide !</li>
        <?php endif; ?>
        </tbody>
      </table>
			    </div>
		    <div class="tab-pane fade" id="po" role="tabpanel">
		    <table class="table table-bordered">
        <thead>
          <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Type</th>
            <th>Adresse</th>
            <th>Ville</th>
            <th>Code Postal</th>
             <th>Coef Notoriété</th>
          </tr>
        </thead>
        <tbody>
        <?php $__empty_1 = true; $__currentLoopData = $praticiens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $praticien): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <?php if($praticien->TYP_CODE == "PO"): ?>
              <tr>
                <td><?php echo e($praticien->PRA_NOM); ?></td>
                <td><?php echo e($praticien->PRA_PRENOM); ?></td>
                <td><?php echo e($praticien->type->TYP_LIBELLE); ?></td>
                <td><?php echo e($praticien->PRA_ADRESSE); ?></td>
                <td><?php echo e($praticien->PRA_VILLE); ?></td>
                <td><?php echo e($praticien->PRA_CP); ?></td>
                <td><?php echo e($praticien->PRA_COEFNOTORIETE); ?></td>
              </tr>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <li class="list-group-item text-center">C'est vide !</li>
        <?php endif; ?>
        </tbody>
      </table>
			    </div>
		    <div class="tab-pane fade" id="ps" role="tabpanel">
		    <table class="table table-bordered">
        <thead>
          <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Type</th>
            <th>Adresse</th>
            <th>Ville</th>
            <th>Code Postal</th>
             <th>Coef Notoriété</th>
          </tr>
        </thead>
        <tbody>
        <?php $__empty_1 = true; $__currentLoopData = $praticiens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $praticien): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <?php if($praticien->TYP_CODE == "PS"): ?>
              <tr>
                <td><?php echo e($praticien->PRA_NOM); ?></td>
                <td><?php echo e($praticien->PRA_PRENOM); ?></td>
                <td><?php echo e($praticien->type->TYP_LIBELLE); ?></td>
                <td><?php echo e($praticien->PRA_ADRESSE); ?></td>
                <td><?php echo e($praticien->PRA_VILLE); ?></td>
                <td><?php echo e($praticien->PRA_CP); ?></td>
                <td><?php echo e($praticien->PRA_COEFNOTORIETE); ?></td>
              </tr>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <li class="list-group-item text-center">C'est vide !</li>
        <?php endif; ?>
        </tbody>
      </table>
			    </div>
	    </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("template", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\gsb\resources\views/liste.blade.php ENDPATH**/ ?>