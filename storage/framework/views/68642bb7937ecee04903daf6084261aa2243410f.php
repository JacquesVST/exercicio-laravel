<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-12">
        <h3>Exibir Funcionário</h3>

    </div>
</div>
<div class="row">
    <div class="col-12">
        <form id="showFuncionario" name="showFuncionario">
            <div class="form-group">
                    <label for="id">Id: </label>
            <input type="text" id="id" name="id" class="form-control" value="<?php echo e($funcionario->id); ?>" readonly>
                </div>
            <div class="form-group">
                <label for="nome">Nome: </label>
                <input type="text" id="nome" name="nome" class="form-control" value="<?php echo e($funcionario->nome); ?>" readonly>
            </div>
            <div class="form-group">
                <label for="cargo">Cargo: </label>
                <input type="text" id="cargo" name="cargo" class="form-control" value="<?php echo e($funcionario->cargo); ?>" readonly>
            </div>
            <div class="form-group">
                    <label for="data_matricula">Data Matrícula: </label>
                    <input type="datetime-local" id="data_matricula" name="data_matricula" class="form-control" value="<?php echo e(Carbon\Carbon::parse($funcionario->data_matricula)->format('Y-m-d')); ?>" readonly>
                </div>
            <div class="form-group">
                <label for="salario">Salário: </label>
                <input type="number" id="salario" name="salario" class="form-control" value="<?php echo e($funcionario->salario); ?>" readonly>
            </div>
            <a href="<?php echo e(route('funcionario.index')); ?>" class="btn btn-primary">
                    <i class="fa fa-fw fa-arrow-left"></i> Voltar
                </a>
        </form>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\exercicio-laravel\resources\views/funcionarios/show.blade.php ENDPATH**/ ?>