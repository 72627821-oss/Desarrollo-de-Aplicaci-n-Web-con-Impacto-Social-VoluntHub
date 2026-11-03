

<?php $__env->startSection('titulo_pagina', 'Registro de usuario'); ?>

<?php $__env->startSection('contenido'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mt-4">
                <div class="card-body">
                    <h2>Registro de usuario con laravel 11</h2>
                    <form action="<?php echo e(route('registrar')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('POST'); ?>
                        <label for="name">Nombre</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                        
                        <label for="email">Correo</label>
                        <input type="email" class="form-control" name="email" id="email" required>
                        
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control" required>
                        
                        <button class="btn btn-primary mt-4">Registrarse</button>
                        <a href="<?php echo e(route('login')); ?>" class="btn btn-info mt-4">Logearse</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\login\resources\views/modules/auth/registro.blade.php ENDPATH**/ ?>