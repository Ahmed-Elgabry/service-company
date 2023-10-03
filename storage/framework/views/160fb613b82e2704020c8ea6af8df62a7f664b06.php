<div class="row" id="cancel-row">
    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
        <div class="widget-content widget-content-area br-6">
            <div class="d-flex align-items-center justify-content-between">
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('package-create')): ?>
                   <a href="<?php echo e(route('admin.packages.create')); ?>" class="btn btn-primary"><?php echo app('translator')->get('admin.add_new_package'); ?></a>
                <?php endif; ?>
                <form class="d-flex">
                    <input wire:model="name" value="<?php echo e(old('name')); ?>" placeholder="<?php echo e(__('admin.name')); ?>" class="form-control me-2" type="search">
                </form>
            </div>
            <div class="table-responsive mb-4 mt-4">
                <table id="zero-config" class="table table-hover" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th><?php echo app('translator')->get('admin.name'); ?></th>
                            <th><?php echo app('translator')->get('admin.price'); ?></th>
                            <th class="no-content"><?php echo app('translator')->get('admin.action'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $package; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $packag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr id="<?php echo e($packag->id); ?>">
                                <td><?php echo e($loop->iteration); ?></td>
                                <td><?php echo e($packag->name); ?></td>
                                <td><?php echo e($packag->price); ?> $</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                       <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('package-edit')): ?>
                                       <a href="<?php echo e(route('admin.packages.edit', $packag->id)); ?>"
                                        class="btn btn-info mx-2"><?php echo app('translator')->get('admin.edit'); ?></a>
                                       <?php endif; ?>
                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('package-delete')): ?>
                                        <button class="btn btn-danger deleteRecord mx-2"
                                        data-id="<?php echo e($packag->id); ?>"><?php echo app('translator')->get('admin.delete'); ?></button>
                                        <?php endif; ?>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
            <div class="row pb-4 pt-2">
                <div class="col-12">
                    <?php echo e($package->links('general-components.admin.pagination')); ?>

                </div>
            </div>
        </div>
    </div>

</div>
<?php /**PATH D:\public_html\resources\views/livewire/admin/search-package.blade.php ENDPATH**/ ?>