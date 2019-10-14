<?php $__env->startSection('content'); ?>
    <br>
    <div class="row">
        <div class="col-lg-6 margin-tb">
            <div class="pull-right">
                <h2>Editar Produto</h2>
            </div>
        </div>
    </div>
    <br><br>
    <form action="<?php echo e(route('produtos.update',$produto->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <div class="field">
            <strong>ID: </strong> <?php echo e($produto->id); ?>

        </div>

        <div class="field">
            <strong>Descrição: </strong>
            <div class="control">
                <input type="text" class="input" name="descricao"
                 value="<?php echo e($produto->descricao); ?>">
            </div>
        </div>
        <div class="field">
            <strong>Quantidade: </strong>
            <div class="control">
                <input type="text" class="input" name="quantidade"
                value="<?php echo e($produto->quantidade); ?>">
            </div>
        </div>
        <div class="field">
            <strong>Valor: </strong>
            <div class="control">
                <input type="text" class="input" name="valor"
                value="<?php echo e($produto->valor); ?>">
            </div>
        </div>
        <input type="submit" class="button is-success" value="Gravar">
        <input type="reset" class="button is-warning" value="Limpar">
    </form>

    <br><br>
    <?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <strong>Opa!!!</strong> Existem erros na entrada de dados.<br><br>
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
    <?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Aulas_2019\LPBCC\Programas\baseBCC\resources\views/produtos/edit.blade.php ENDPATH**/ ?>