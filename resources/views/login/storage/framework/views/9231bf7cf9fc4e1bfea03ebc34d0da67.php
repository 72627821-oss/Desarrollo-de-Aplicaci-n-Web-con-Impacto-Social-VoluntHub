

<?php $__env->startSection('titulo_pagina', 'Home'); ?>

<?php $__env->startSection('contenido'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mt-4">
                <div class="card-body">
                    <a href="<?php echo e(route('logout')); ?>" class="btn btn-danger">Salir del sistema</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\login\resources\views/modules/dashboard/home.blade.php ENDPATH**/ ?>