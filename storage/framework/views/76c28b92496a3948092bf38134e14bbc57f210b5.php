<?php $__env->startSection('content'); ?>
    <br>
    <div class="row">
        <div class="col-lg-6 margin-tb">
            <div class="pull-right">
                <h2>Mostrar Produto</h2>
            </div>
        </div>
    </div>
    <br><br>
    <div class="row">
     <div class="col-lg-6 margin-tb">
        <div class="field">
            <strong>ID: </strong> <?php echo e($produto->id); ?>

        </div>
        <br>
        <div class="field">
            <strong>Descrição: </strong> <?php echo e($produto->descricao); ?>

        </div>
        <br>
        <div class="field">
            <strong>Quantidade: </strong> <?php echo e($produto->quantidade); ?>

        </div>
        <br>
        <div class="field">
            <strong>ID: </strong> <?php echo e($produto->valor); ?>

        </div>
        <br>
        <a class="btn btn-primary" href="<?php echo e(route('produtos.index')); ?>">Voltar</a
     </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Aulas_2019\LPBCC\Programas\baseBCC\resources\views/produtos/show.blade.php ENDPATH**/ ?>