<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Laravel</title>
</head>
<body>
    
    <a href="<?php echo e(route('user.create')); ?>">Cadastrar</a><br>

    <h2>Listar Usuários</h2>

    <?php if(session('success')): ?>
        <p style="color: #086;">
            <?php echo e(session('success')); ?>

        </p>    
    <?php endif; ?>

    <?php $__empty_1 = true; $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        ID: <?php echo e($user->id); ?><br>
        Nome: <?php echo e($user->name); ?><br>
        E-mail: <?php echo e($user->email); ?><br>
        <a href="<?php echo e(route('user.show', ['user' => $user->id])); ?>">Visualizar</a><br>
        <a href="<?php echo e(route('user.edit', ['user' => $user->id])); ?>">Editar</a><br>
        
        <form method="POST" action="<?php echo e(route('user.destroy', ['user' => $user->id])); ?>">
            <?php echo csrf_field(); ?>
            <?php echo method_field('delete'); ?>
            <button type="submit" onclick="return confirm('Tem certeza que deseja apagar este registro?')">Apagar</button>
        </form>
        <hr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        
    <?php endif; ?>

</body>
</html><?php /**PATH C:\xampp\htdocs\crud-laravel\resources\views/users/index.blade.php ENDPATH**/ ?>