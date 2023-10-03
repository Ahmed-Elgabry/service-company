


<?php $__env->startSection('title', __('admin.add_new_service')); ?>

<?php $__env->startSection('page-title', __('admin.add_new_service')); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-10 mx-auto">
            <?php echo $__env->make('general-components.admin.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <a href="<?php echo e(route('admin.services.index')); ?>" class="btn btn-info mb-2"><?php echo app('translator')->get('admin.services'); ?></a>
            <form action="<?php echo e(route('admin.services.store')); ?>" method="post" class="border p-4" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="row mb-4">
                    <div class="col-12 col-md-6 mb-4">
                        <input type="text" name="name" value="<?php echo e(old('name')); ?>" class="form-control"
                            placeholder=<?php echo app('translator')->get('admin.name'); ?>>
                    </div>
                    <div class="col-12 col-md-6 mb-4">
                        <input type="text" name="price" value="<?php echo e(old('price')); ?>" class="form-control"
                            placeholder=<?php echo app('translator')->get('admin.price'); ?>>
                    </div>
                    <div class="col-12 mb-4" style="overflow: hidden;"> 
                             <textarea name="small_description" class="form-control" placeholder="<?php echo e(__('admin.small_description')); ?>"><?php echo e(old('small_description')); ?></textarea>
                    </div>
                    <div class="col-12 mb-4" style="overflow: hidden;">
                             <textarea name="description" class="form-control" placeholder="<?php echo e(__('admin.big_description')); ?>"><?php echo e(old('description')); ?></textarea>
                    </div>
                    <div class="col-12 mb-4" style="overflow: hidden;">
                        <select class="form-control" name="status" aria-label="Default select example">
                            <option value="1"><?php echo app('translator')->get('admin.public'); ?></option>
                            <option value="0"><?php echo app('translator')->get('admin.private'); ?></option>
                        </select>
                    </div>
                </div>
                <input type="submit" name="submit" value="<?php echo e(__('admin.add_new_service')); ?>" class="btn btn-primary">
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\public_html\resources\views/admin/pages/service/create.blade.php ENDPATH**/ ?>