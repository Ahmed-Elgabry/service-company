


<?php $__env->startSection('title', __('admin.edit_package')); ?>

<?php $__env->startSection('page-title', __('admin.edit_package')); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-10 mx-auto">
            <?php echo $__env->make('general-components.admin.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <a href="<?php echo e(route('admin.packages.index')); ?>" class="btn btn-info mb-2"><?php echo app('translator')->get('admin.packages'); ?></a>
            <form action="<?php echo e(route('admin.packages.update', $package->id)); ?>" method="post" class="border p-4"
                enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo method_field('put'); ?>
                <div class="row mb-4">
                    <div class="col-12 col-md-6 mb-4">
                        <input type="text" name="name" value="<?php echo e($package->name); ?>" class="form-control"
                            placeholder="<?php echo e(__('admin.name')); ?>">
                    </div>
                    <div class="col-12 col-md-6 mb-4">
                        <input type="text" name="price" value="<?php echo e($package->price); ?>" class="form-control"
                            placeholder="<?php echo e(__('admin.price')); ?>">
                    </div>
                    <div class="col-12 mb-4" style="overflow: hidden;">
                             <textarea name="small_description" class="form-control" placeholder="<?php echo e(__('admin.small_description')); ?>"><?php echo e($package->small_description); ?></textarea>
                    </div>
                    <div class="col-12 mb-4">
                        <textarea class="form-control" name="description" placeholder="<?php echo e(__('admin.big_description')); ?>"><?php echo e($package->description); ?></textarea>
                    </div>
                    <div class="col-12 mb-4">
                        <a href="#!" id="btn_add" class="btn btn-info">+</a>
                    </div>
                    <div class="col-12 mb-4">
                        <div class="d-block" id="todo_list">
                            <div class="row remove_div">
                                <div class="col-12 col-md-6 mb-4">
                                    <label><?php echo app('translator')->get('admin.note_service'); ?></label>
                                    <select class="form-control" id="service_html" name="service_id[]" >
                                        <option selected></option>
                                        <?php $__currentLoopData = $service; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $servic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($servic->id); ?>"><?php echo e($servic->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6 mb-4">
                                    <label><?php echo app('translator')->get('admin.num_service'); ?></label>
                                    <input type="text" id="num_service_html" name="num_service[]" 
                                        class="form-control" >
                                </div>
                            <div>
                        </div>
                    <div>
                </div>
                </div>
                </div>
                <input type="submit" name="submit" value="<?php echo e(__('admin.edit_package')); ?>" class="btn btn-primary">
            </form>
        </div>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('package-getService')): ?>
        <div class="col-10 mb-4">
            <h3><?php echo app('translator')->get("admin.package_service"); ?></h3>
         </div>
        <div class="col-10 mb-4">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col"><?php echo app('translator')->get("admin.services"); ?></th>
                            <th scope="col"><?php echo app('translator')->get("admin.count_service"); ?></th>
                            <th class="no-content"><?php echo app('translator')->get('admin.action'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $package->services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $servic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($loop->iteration); ?></td>
                                <td><?php echo e($servic->name); ?></td>
                                <td><?php echo e($servic->pivot->num_service); ?></td>
                                <td>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('package-deleteService')): ?>
                                    <form action="<?php echo e(route("admin.deleteservice",['package_id'=>$servic->pivot->package_id , 'service_id'=>$servic->pivot->service_id])); ?>">
                                        <button class="btn btn-danger"><?php echo app('translator')->get('admin.delete'); ?></button>
                                    </form>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection("ajax"); ?>
        <script>
        $(document).ready(function() {
            var html=`
                    <div class="row w-100 remove_div">
                        <div class="col-12 col-md-6 mb-4">
                            <label><?php echo app('translator')->get('admin.note_service'); ?></label>
                            <select class="form-control" name="service_id[]" >
                                <option selected></option>
                                <?php $__currentLoopData = $service; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $servic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($servic->id); ?>"><?php echo e($servic->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="col-12 col-md-6 mb-4">
                            <label><?php echo app('translator')->get('admin.num_service'); ?></label>
                            <input type="text" name="num_service[]" 
                                class="form-control" >
                        </div>
                        <div class="col-12 mb-4">
                            <a href="#!" id="btn_remove" class="btn btn-danger">-</a>
                        </div>
                    <div>
            `;
            $("#btn_add").on('click',function(){
                $("#todo_list").append(html);
            });
            $("#todo_list").on('click',"#btn_remove",function(){
                $(this).closest(".remove_div").remove();
            });
            
        });
        </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\public_html\resources\views/admin/pages/package/edit.blade.php ENDPATH**/ ?>