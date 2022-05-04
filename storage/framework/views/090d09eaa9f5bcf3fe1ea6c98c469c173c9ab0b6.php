<?php $__env->startSection('cabecalho'); ?>
    Temporadas de <?php echo e($serie->nome); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('conteudo'); ?>
    <ul class="list-group">
        <?php $__currentLoopData = $temporadas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $temporada): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li class="list-group-item">Temporada <?php echo e($temporada->numero); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* E:\vinicius-dias\1190-laravel-parte1\controle-series\resources\views/temporadas/index.blade.php */ ?>