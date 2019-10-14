<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-12">
        <h3>Novo Funcionário</h3>

    </div>
</div>
<div class="row">
    <div class="col-12">
        <form id="createFuncionario" name="createFuncionario" method="POST" action="/funcionario">
            <?php echo e(csrf_field()); ?>

            <div class="form-group">
                <label for="nome">Nome: </label>
                <input type="text" id="nome" name="nome" class="form-control">
            </div>
            <div class="form-group">
                <label for="cargo">Cargo: </label>
                <input type="text" id="cargo" name="cargo" class="form-control">
            </div>
            <div class="form-group">
                    <label for="data_matricula">Data Matrícula: </label>
                    <input type="datetime-local" id="data_matricula" name="data_matricula" class="form-control">
                </div>
            <div class="form-group">
                <label for="salario">Salário: </label>
                <input type="text" id="salario" name="salario" class="form-control">
            </div>
            <input type="submit" class="btn btn-success" id="salvar" value="Salvar">
            <input type="reset" class="btn btn-warning text-white" id="limpar" value="Limpar">
            <a href="<?php echo e(route('funcionario.index')); ?>" class="btn btn-primary">
                    <i class="fa fa-fw fa-arrow-left"></i> Voltar
                </a>
        </form>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\exercicio-laravel\resources\views/funcionarios/create.blade.php ENDPATH**/ ?>