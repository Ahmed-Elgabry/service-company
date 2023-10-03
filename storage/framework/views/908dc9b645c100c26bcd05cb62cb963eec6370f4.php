<div class="row" id="cancel-row">
    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
        <div class="widget-content widget-content-area br-6">
            <div class="align-items-center justify-content-between">
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('profile-profileExport')): ?>
                   <a href="<?php echo e(route('admin.profile/export/data')); ?>" class="btn btn-secondary mb-2 mx-4"><?php echo app('translator')->get('permission.profile-profileExport'); ?></a>
                <?php endif; ?>
                <div class="row g-3">
                    <div class="col-md-3 col-12">
                        <div class="form-outline">
                            <label class="form-label"><?php echo app('translator')->get('admin.code'); ?></label>
                            <input type="text" placeholder="<?php echo e(__('admin.code')); ?>" wire:model="code"
                                value="<?php echo e(old('code')); ?>" class="form-control" />
                        </div>
                    </div>
                    <div class="col-md-3 col-12">
                        <div class="form-outline">
                            <label class="form-label"><?php echo app('translator')->get('admin.users'); ?></label>
                            <select class="form-control" wire:model="user_id">
                                <option selected></option>
                                <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $use): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($use->id); ?>"><?php echo e($use->firstname . ' ' . $use->lastname); ?>

                                    </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-12">
                        <div class="form-outline">
                            <label class="form-label"><?php echo app('translator')->get('admin.name'); ?></label>
                            <input type="text" placeholder="<?php echo e(__('admin.name')); ?>" wire:model="name"
                                value="<?php echo e(old('name')); ?>" class="form-control" />
                        </div>
                    </div>
                </div>
            </div>
            <?php if($profile != null): ?>
                <div class="table-responsive mb-4 mt-4">
                    <table id="zero-config" class="table table-hover table-bordered mb-4" style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th><?php echo app('translator')->get('admin.code'); ?></th>
                                <th><?php echo app('translator')->get('admin.name'); ?></th>
                                <th><?php echo app('translator')->get('user.link'); ?></th>
                                <th><?php echo app('translator')->get('admin.user'); ?></th>
                                <th class="no-content"><?php echo app('translator')->get('admin.action'); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $profile; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $profil): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr id="<?php echo e($profil->id); ?>">
                                    <td><?php echo e($loop->iteration); ?></td>
                                    <td><?php echo e($profil->code); ?></td>
                                    <td><?php echo e($profil->name); ?></td>
                                    <td><a href="<?php echo e($profil->link); ?>" target="_blank">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-edit">
                                                <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7">
                                                </path>
                                                <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z">
                                                </path>
                                            </svg>
                                        </a></td>
                                    <td><?php echo e($profil->user->firstname . ' ' . $profil->user->lastname); ?></td>
                                    <td class="text-center">
                                        <div class="dropdown custom-dropdown">
                                            <a class="dropdown-toggle" href="#" role="button"
                                                id="dropdownMenuLink7" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <h1>...</h1>
                                            </a>
                                            <div class="dropdown-menu solve_menu_problem" aria-labelledby="dropdownMenuLink7">
                                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('profile-edit')): ?>
                                                <a class="dropdown-item" href="<?php echo e(route('admin.profiles.edit',$profil->id)); ?>"><?php echo app('translator')->get('admin.edit'); ?></a>
                                                <?php endif; ?>
                                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user-orderToUser')): ?>
                                                <a class="dropdown-item add_order" data-id="<?php echo e($profil->user->id); ?>" href="#!"
                                                    data-toggle="modal" data-target="#loginModal10"><?php echo app('translator')->get('admin.order_now'); ?></a>
                                                <?php endif; ?>
                                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('profile-storeAttach')): ?>
                                                <a class="dropdown-item add_attach" href="#!"
                                                data-id="<?php echo e($profil->id); ?>" href="#!" data-toggle="modal"
                                                data-target="#loginModal1"><?php echo app('translator')->get('admin.add_new_attach'); ?></a>
                                                <?php endif; ?>
                                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('profile-delete')): ?>
                                                <a class="dropdown-item deleteRecord" href="#!"
                                                data-id="<?php echo e($profil->id); ?>"><?php echo app('translator')->get('admin.delete'); ?></a>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
                <div class="row pb-4 pt-2">
                    <div class="col-12">
                        <?php echo e($profile->links('general-components.admin.pagination')); ?>

                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>

</div>
<?php /**PATH D:\public_html\resources\views/livewire/admin/search-profile.blade.php ENDPATH**/ ?>