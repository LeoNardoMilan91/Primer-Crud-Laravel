<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.plantilla','data' => []]); ?>
<?php $component->withName('plantilla'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('titulo'); ?> Gestion <?php $__env->endSlot(); ?>
     <?php $__env->slot('cabecera'); ?> Detalles profesor (<?php echo e($profesore->id); ?>) <?php $__env->endSlot(); ?>
    <div class="card m-auto" style="width: 34rem;">
        <div class="card-body">
          <h4 class="card-title"><?php echo e($profesore->nombre); ?></h4>
          <h6 class="card-subtitle mb-2 text-muted"><?php echo e($profesore->apellidos); ?></h6>
          <h6 class="card-subtitle mb-2 text-muted">(<?php echo e($profesore->localidad); ?>)</h6>
          <p class="card-text"><b>Email:</b> <?php echo e($profesore->email); ?></p>
          <p class="card-text">
              <b>Asignaturas impartidas</b>
              <ul>
                  <?php $__currentLoopData = $profesore->asignaturas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <li><a href="<?php echo e(route('profesores.show', $item)); ?>">#<?php echo e($item->apellidos.", ".$item->nombre); ?></a></li>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </ul>
          </p>
          <div class="mt-2">
          <button class="ml-3 btn btn-primary" onclick="window.history.back();"><i class="fas fa-backward"></i>
          </div>

        </div>
      </div>

 <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php /**PATH C:\srv\laravel\profesores\academia\resources\views/profesores/mostrar.blade.php ENDPATH**/ ?>