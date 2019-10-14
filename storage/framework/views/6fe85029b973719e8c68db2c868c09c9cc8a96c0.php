<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-6 text-left">
        <h3>Listar Funcionários</h3>

    </div>
    <div class="col-6 text-right">
            <a href="<?php echo e(route('funcionario.create')); ?>" class="btn btn-success">
                    <i class="fa fa-fw fa-plus"></i> Novo Funcionário
                </a>
    </div>
</div>
<div class="row">
        <div class="col-12">
<table class="table table-striped table-bordered tabel-hover">
    <thead>
        <tr class="text-center">
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Cargo</th>
            <th scope="col">Data de Matrícula</th>
            <th scope="col">Salário</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $funcionarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $funcionario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <th scope="row"><?php echo e($funcionario->id); ?></th>
            <td><?php echo e($funcionario->nome); ?></td>
            <td><?php echo e($funcionario->cargo); ?></td>
            <td><?php echo e($funcionario->data_matricula); ?></td>
            <td><?php echo e($funcionario->salario); ?></td>
            <td class="text-center">
                <form action="<?php echo e(route('funcionario.destroy',$funcionario->id)); ?>" method="POST">
                        <a href="<?php echo e(route('funcionario.show',$funcionario->id)); ?>" class="btn btn-primary">
                                <i class="fa fa-fw fa-eye"></i> Exibir
                            </a>
                            <a href="<?php echo e(route('funcionario.edit',$funcionario->id)); ?>" class="btn btn-warning text-white">
                                <i class="fa fa-fw fa-pencil-alt"></i> Editar
                            </a>
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="btn btn-danger"><i class="fa fa-fw fa-trash"></i> Excluir</button>
                </form>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>

</table>
</div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\exercicio-laravel\resources\views/funcionarios/index.blade.php ENDPATH**/ ?>