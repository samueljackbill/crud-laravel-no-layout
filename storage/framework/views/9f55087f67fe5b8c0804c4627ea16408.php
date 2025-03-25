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
    <a href="<?php echo e(route('user.edit', ['user' => $user->id])); ?>">Editar</a><br>

    <h2>Visualizar Usuário</h2>

    <?php if(session('success')): ?>
        <p style="color: #086;">
            <?php echo e(session('success')); ?>

        </p>    
    <?php endif; ?>

    ID: <?php echo e($user->id); ?><br>
    Nome: <?php echo e($user->name); ?><br>
    E-mail: <?php echo e($user->email); ?><br>
    Cadastrado: <?php echo e(\Carbon\Carbon::parse($user->created_at)->format('d/m/Y H:i:s')); ?><br>
    Editado: <?php echo e(\Carbon\Carbon::parse($user->updated_at)->format('d/m/Y H:i:s')); ?><br>

</body>
</html><?php /**PATH C:\xampp\htdocs\crud-laravel\resources\views/users/show.blade.php ENDPATH**/ ?>