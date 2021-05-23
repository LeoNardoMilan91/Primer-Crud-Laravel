<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.plantilla','data' => []]); ?>
<?php $component->withName('plantilla'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('titulo'); ?> Gestion <?php $__env->endSlot(); ?>
     <?php $__env->slot('cabecera'); ?> Detalles Asignatura (<?php echo e($asignatura->id); ?>) <?php $__env->endSlot(); ?>
    <div class="card m-auto" style="width: 34rem;">
        <div class="card-body">
            <h4 class="card-title"><?php echo e($asignatura->nombre); ?></h4>
            <h6 class="card-subtitle mb-2 text-muted"><b>Créditos:</b> <?php echo e($asignatura->creditos); ?></h6>
            <h6 class="card-subtitle mb-2 text-muted"><b>Impartida por:</b> <a href="<?php echo e(route('profesores.show', $asignatura->profesor->id)); ?>">#<?php echo e($asignatura->profesor->nombre); ?></a></h6>
            <p class="card-subtitle mb-2 text-muted"><b>Descripción: </b><?php echo e($asignatura->descripcion); ?></p>
            <div class="mt-2">
                <button class="btn btn-primary ml-3 mt-2" onclick="window.history.back();"><i class="fas fa-backward"></i> Volver</button>
            </div>
        </div>
    </div>
 <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php /**PATH C:\srv\laravel\profesores\academia\resources\views/asignaturas/mostrar.blade.php ENDPATH**/ ?>