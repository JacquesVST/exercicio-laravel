<?php $__env->startSection('content'); ?>
<br>
<h2>Listar Produtos</h2>
<br>
<form action="/produtos/create">
    <div class="field">
        <div class="control">
            <button type="submit" class="button is-link">Adicionar Novo</button>
        </div>
    </div>
</form>

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Descrição</th>
        <th>Quantidade</th>
        <th>Valor</th>
        <th></th>

    </tr>
    <?php $__currentLoopData = $produtos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($produto->id); ?></td>
            <td><?php echo e($produto->descricao); ?></td>
            <td><?php echo e($produto->quantidade); ?></td>
            <td><?php echo e($produto->valor); ?></td>
            <td>
                <form action="<?php echo e(route('produtos.destroy',$produto->id)); ?>" method="POST">
                   <a class="btn btn-warnig" href="<?php echo e(route('produtos.show',$produto->id)); ?>">Mostrar</a>
                   <a class="btn btn-success" href="<?php echo e(route('produtos.edit',$produto->id)); ?>">Editar</a>
                   <?php echo csrf_field(); ?>
                   <?php echo method_field("DELETE"); ?>
                   <button class="btn btn-danger" type="submit">Remover</button>
                </form>
            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<br>
<br>
<?php if($message = Session::get('success')): ?>
   <div class="alert alert-success">
      <p><?php echo e($message); ?></p>
   </div>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Aulas_2019\LPBCC\Programas\baseBCC\resources\views/produtos/index.blade.php ENDPATH**/ ?>