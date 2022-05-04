<?php $__env->startSection('cabecalho'); ?>
    Episódios
<?php $__env->stopSection(); ?>

<?php $__env->startSection('conteudo'); ?>
    <?php echo $__env->make('mensagem', ['mensagem' => $mensagem], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <form action="/temporadas/<?php echo e($temporadaId); ?>/episodios/assistir" method="post">
        <?php echo csrf_field(); ?>
        <ul class="list-group">
            <?php $__currentLoopData = $episodios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $episodio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="list-group-item d-flex justify-content-between">
                Episódio <?php echo e($episodio->numero); ?>

                <input type="checkbox"
                       name="episodio[<?php echo e($episodio->id); ?>][assistido]"
                       <?php echo e($episodio->assistido ? 'checked' : ''); ?>>
            </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>

        <button class="btn btn-primary mt-2">Salvar</button>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* E:\vinicius-dias\1190-laravel-parte1\controle-series\resources\views/episodios/index.blade.php */ ?>