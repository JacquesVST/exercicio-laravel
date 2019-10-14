<?php $__env->startSection('content'); ?>
   <h2>Listar Produtos</h2>

   <?php if($message = Session::get('success')): ?>
   <div class="alert alert-success">
       <p><?php echo e($message); ?></p>
   </div>
  <?php endif; ?>

   <table class="table table-bordered">
        <tr>
           <th> ID </th>
           <th> Descricao </th>
           <th> Quantidade </th>
           <th> Valor </th>
           <th></th>
        </tr>

        <?php $__currentLoopData = $produtos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <tr>
           <td><?php echo e($produto->id); ?></td>
           <td><?php echo e($produto->descricao); ?></td>
           <td><?php echo e($produto->quantidade); ?></td>
           <td><?php echo e($produto->valor); ?></td>
           <td>
          </tr>

         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

   </table>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Aulas_2019\LPADS\aula\baseADS\resources\views/produtos/index.blade.php ENDPATH**/ ?>