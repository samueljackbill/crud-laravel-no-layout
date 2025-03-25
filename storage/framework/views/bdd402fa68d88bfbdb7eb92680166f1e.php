<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD Laravel</title>
</head>
<body>
    
    <a href="<?php echo e(route('user.index')); ?>">Listar</a><br>
    <a href="<?php echo e(route('user.show', ['user' => $user->id])); ?>">Visualizar</a><br>

    <h2>Editar Usuário</h2>

    <?php if($errors->any()): ?>        
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p style="color: #f00">
                <?php echo e($error); ?>

            </p>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>

    <form action="<?php echo e(route('user.update', ['user' => $user->id])); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <label for="name">Nome: </label>
        <input type="text" name="name" placeholder="Nome completo" value="<?php echo e(old('nome', $user->name)); ?>"><br><br>

        <label for="email">E-mail: </label>
        <input type="email" name="email" placeholder="Melhor e-mail do usuário" value="<?php echo e(old('email', $user->email)); ?>"><br><br>

        <label for="password">Senha: </label>
        <input type="password" name="password" placeholder="Senha com mínimo 6 caracteres" value="<?php echo e(old('password')); ?>"><br><br>

        <button type="submit">Salvar</button>

    </form>

</body>
</html><?php /**PATH C:\xampp\htdocs\crud-laravel\resources\views/users/edit.blade.php ENDPATH**/ ?>