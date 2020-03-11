<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
	
        <title><?php echo $__env->yieldContent('title'); ?></title>
        <?php echo $__env->yieldPushContent('styles'); ?>
        <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <script type="text/javascript" src="<?php echo e(asset('js/app.js')); ?>"></script>
        <link rel="icon" type="image/png" href="<?php echo e(route('gsb.root')); ?>/images/ico-gsb.png" />
    </head>
    <body>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
            <a class="navbar-brand" href="<?php echo e(route('home')); ?>"><img class="logo-gsb" src="<?php echo e(route('gsb.root')); ?>/images/logo-gsb.png" /></a>
            &nbsp;
            <?php if(auth()->guard()->guest()): ?>
            <?php else: ?>
                <a class="navbar-brand" href="<?php echo e(route('gsb.listRap')); ?>"><button type="button" class="btn btn-dark">Mes comptes rendus</button></a>
                &nbsp;
                <a class="navbar-brand" href="<?php echo e(route('gsb.listPra')); ?>"><button type="button" class="btn btn-dark">Liste des Praticiens</button></a>
                &nbsp;
                <a class="navbar-brand" href="<?php echo e(route('gsb.listVis')); ?>"><button type="button" class="btn btn-dark">Liste des Visiteurs</button></a>
            <?php endif; ?>
            <?php if(Session::has('message')): ?>
   				 <p class="alert alert-danger"><?php echo e(Session::get('message')); ?></p>
			<?php endif; ?>
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                <?php if(auth()->guard()->guest()): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                    </li>
                    <?php if(Route::has('register')): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                        </li>
                    <?php endif; ?>
                <?php else: ?>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <?php echo e(Auth::user()->username); ?> <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                <?php echo e(__('Logout')); ?>

                            </a>

                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                <?php echo csrf_field(); ?>
                            </form>
                        </div>
                    </li>
                <?php endif; ?>
            </ul>
            &nbsp;
        </nav>
        <div class="content">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
        

    </body>
</html>
<?php /**PATH /var/www/gsb_julien_quentin/resources/views/template.blade.php ENDPATH**/ ?>