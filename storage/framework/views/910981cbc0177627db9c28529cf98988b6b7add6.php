<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.plantilla','data' => []]); ?>
<?php $component->withName('plantilla'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('titulo'); ?> Academia <?php $__env->endSlot(); ?>
     <?php $__env->slot('cabecera'); ?> Gestión Academia <?php $__env->endSlot(); ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.mensajes','data' => []]); ?>
<?php $component->withName('mensajes'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
    <a href="<?php echo e(route('asignaturas.create')); ?>" class="btn btn-success"><i class="fas fa-plus"></i> Crear Asignatura</a>
    <table class="table table-success table-striped mt-2">
        <thead>
          <tr>
            <th scope="col">Detalle</th>
            <th scope="col">Nombre</th>
            <th scope="col">Creditos</th>
            <th scope="col" colspan=2 class="text-center">Acciones</th>
          </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $asignaturas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <th scope="row">
                <a href="<?php echo e(route('asignaturas.show', $item)); ?>" class="btn btn-info"><i class="fas fa-info"></i> Detalles</a>
            </th>
            <td><?php echo e($item->nombre); ?></td>
            <td><?php echo e($item->creditos); ?></td>
            <td class="text-center">
                <a href="<?php echo e(route('asignaturas.edit', $item)); ?>" class="btn btn-warning"><i class="fas fa-edit"></i> Editar</a>
            </td>
            <td class="text-center">
                <form name="as" method="POST" action="<?php echo e(route('asignaturas.destroy', $item)); ?>">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field("DELETE"); ?>
                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Borrar</button>
                </form>
            </td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>
      <div class="mt-2">
          <?php echo e($asignaturas->links()); ?>

      </div>
 <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php /**PATH C:\srv\laravel\profesores\academia\resources\views/asignaturas/index.blade.php ENDPATH**/ ?>