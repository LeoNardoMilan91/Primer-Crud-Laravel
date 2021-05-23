<?php if($texto=Session::get("mensaje")): ?>
    <div class="my-3 alert alert-warning p-2" role="alert">
        <?php echo e($texto); ?>

    </div>
<?php endif; ?>
<?php /**PATH C:\srv\laravel\profesores\academia\resources\views/components/mensajes.blade.php ENDPATH**/ ?>