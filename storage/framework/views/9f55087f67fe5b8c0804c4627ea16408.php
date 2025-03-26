<?php $__env->startSection('content'); ?>
    <div class="card mt-4 mb-4 border-light shadow">
        <div class="card-header hstack gap-2">

            <span>Visualizar Usuários</span>

            <span class="ms-auto d-sm-flex flex-row">
                <a href="<?php echo e(route('user.index')); ?>" class="btn btn-info btn-sm me-1">Listar</a>
                <a href="<?php echo e(route('user.edit', ['user' => $user->id])); ?>" class="btn btn-warning btn-sm me-1">Editar</a>
                
                <form method="POST" action="<?php echo e(route('user.destroy', ['user' => $user->id])); ?>"
                    class="d-inline">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('delete'); ?>
                    <button type="submit"
                        onclick="return confirm('Tem certeza que deseja apagar este registro?')"
                        class="btn btn-danger btn-sm me-1">Apagar</button>
                </form>
            </span>
        </div>

        <div class="card-body">

            <?php if (isset($component)) { $__componentOriginal5194778a3a7b899dcee5619d0610f5cf = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5194778a3a7b899dcee5619d0610f5cf = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.alert','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5194778a3a7b899dcee5619d0610f5cf)): ?>
<?php $attributes = $__attributesOriginal5194778a3a7b899dcee5619d0610f5cf; ?>
<?php unset($__attributesOriginal5194778a3a7b899dcee5619d0610f5cf); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5194778a3a7b899dcee5619d0610f5cf)): ?>
<?php $component = $__componentOriginal5194778a3a7b899dcee5619d0610f5cf; ?>
<?php unset($__componentOriginal5194778a3a7b899dcee5619d0610f5cf); ?>
<?php endif; ?>

            <dl class="row">

                <dt class="col-sm-3">ID</dt>
                <dd class="col-sm-9"><?php echo e($user->id); ?></dd>

                <dt class="col-sm-3">Nome</dt>
                <dd class="col-sm-9"><?php echo e($user->name); ?></dd>

                <dt class="col-sm-3">E-mail</dt>
                <dd class="col-sm-9"><?php echo e($user->email); ?></dd>

                <dt class="col-sm-3">Cadastrado</dt>
                <dd class="col-sm-9"><?php echo e(\Carbon\Carbon::parse($user->created_at)->format('d/m/Y H:i:s')); ?></dd>

                <dt class="col-sm-3">Editado</dt>
                <dd class="col-sm-9"><?php echo e(\Carbon\Carbon::parse($user->updated_at)->format('d/m/Y H:i:s')); ?></dd>

            </dl>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\crud-laravel\resources\views/users/show.blade.php ENDPATH**/ ?>