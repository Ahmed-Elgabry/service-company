


<?php $__env->startSection('title', __('admin.view_all')); ?>

<?php $__env->startSection('content'); ?>
    <div class="row layout-top-spacing">
        <div class="col-xl-5 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-one">
                <div class="widget-heading">
                    <a href="<?php echo e(route('admin.services.index')); ?>">
                        <h6 class=""><?php echo app('translator')->get('admin.services'); ?></h6>
                    </a>
                </div>
                <div class="w-chart">
                    <div class="w-chart-section">
                        <div class="w-detail">
                            <p class="w-title"><?php echo app('translator')->get('admin.Total_Services'); ?></p>
                            <p class="w-stats"><?php echo e($service->count()); ?></p>
                        </div>
                        <div class="w-chart-render-one">
                            <div id="total-users"></div>
                        </div>
                    </div>

                    <div class="w-chart-section">
                        <div class="w-detail">
                            <p class="w-title"><?php echo app('translator')->get('admin.Paid_Services'); ?></p>
                            <p class="w-stats"><?php echo e($serviceOrder->count()); ?></p>
                        </div>
                        <div class="w-chart-render-one">
                            <div id="paid-visits"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing d-flex">
            <div class="widget widget-account-invoice-two w-100">
                <div class="widget-content">
                    <div class="account-box">
                        <div class="info">
                            <a href="<?php echo e(route('admin.packages.index')); ?>">
                                <h5 class=""><?php echo app('translator')->get('admin.packages'); ?></h5>
                            </a>
                            <p class="inv-balance"><?php echo e($package->count()); ?></p>
                        </div>
                        <div class="acc-action">
                            <div class="">
                                <a href="<?php echo e(route('admin.packages.index')); ?>"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-plus">
                                        <line x1="12" y1="5" x2="12" y2="19"></line>
                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                    </svg></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing d-flex">
            <div class="widget widget-card-four w-100">
                <div class="widget-content">
                    <div class="w-content">
                        <div class="w-info">
                            <a href="<?php echo e(route('admin.orders.index')); ?>">
                                <h6 class="value"><?php echo app('translator')->get('admin.orders'); ?></h6>
                            </a>
                            <p class=""><?php echo e($order->count()); ?></p>
                        </div>
                        <div class="">
                            <div class="w-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-dollar-sign">
                                    <line x1="12" y1="1" x2="12" y2="23"></line>
                                    <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-gradient-secondary" role="progressbar"
                            style="width: <?php echo e($order->count()); ?>px" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-activity-three">

                <div class="widget-heading">
                    <h5 class=""><?php echo app('translator')->get('admin.contacts'); ?></h5>
                </div>

                <div class="widget-content">

                    <div class="mt-container mx-auto">
                        <div class="timeline-line">
                            <?php $__currentLoopData = $contact; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contac): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="item-timeline timeline-new">
                                    <div class="t-dot">
                                        <div class="t-success"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-mail">
                                                <path
                                                    d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                                </path>
                                                <polyline points="22,6 12,13 2,6"></polyline>
                                            </svg></div>
                                    </div>
                                    <div class="t-content">
                                        <div class="t-uppercontent">
                                            <a href="<?php echo e(route('admin.contacts.index')); ?>">
                                                <h5><?php echo e($contac->name); ?></h5>
                                            </a>
                                            <span
                                                class=""><?php echo e(date('Y-m-d H:i', strtotime($contac->created_at))); ?></span>
                                        </div>
                                        <p><?php echo e(Str::limit($contac->message, 50)); ?></p>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-table-two widget-activity-three">

                <div class="widget-heading">
                    <h5 class=""><?php echo app('translator')->get('admin.latest_orders'); ?></h5>
                </div>

                <div class="widget-content">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>
                                        <div class="th-content"><?php echo app('translator')->get('admin.name'); ?></div>
                                    </th>
                                    <th>
                                        <div class="th-content"><?php echo app('translator')->get('admin.type_order'); ?></div>
                                    </th>
                                    <th>
                                        <div class="th-content"><?php echo app('translator')->get('admin.status'); ?></div>
                                    </th>
                                    <th>
                                        <div class="th-content th-heading"><?php echo app('translator')->get('admin.total_price'); ?></div>
                                    </th>
                                    <th>
                                        <div class="th-content"><?php echo app('translator')->get('admin.profile'); ?></div>
                                    </th>
                                    <th>
                                        <div class="th-content"><?php echo app('translator')->get('admin.view_all1'); ?></div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $latest_orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $latest_order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td>
                                            <div class="td-content customer-name"><?php echo e($latest_order->name); ?></div>
                                        </td>
                                        <td>
                                            <div class="td-content product-brand">
                                                <?php if($latest_order->type_order == 'service'): ?>
                                                    <?php echo app('translator')->get('admin.services'); ?>/ <?php echo e(Str::limit($latest_order->service->name, 10)); ?>

                                                <?php else: ?>
                                                    <?php echo app('translator')->get('admin.packages'); ?>/ <?php echo e(Str::limit($latest_order->package->name, 10)); ?>

                                                <?php endif; ?>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="td-content">
                                                <?php if($latest_order->status == 'done'): ?>
                                                    <a href="#!"><span
                                                            class="badge outline-badge-secondary shadow-none edit_order_status"
                                                            data-id="<?php echo e($latest_order->id); ?>" data-toggle="modal"
                                                            data-target="#loginModal"><?php echo app('translator')->get('admin.done'); ?></span></a>
                                                <?php elseif($latest_order->status == 'canceled'): ?>
                                                    <a href="#!"><span
                                                            class="badge outline-badge-danger shadow-none edit_order_status"
                                                            data-id="<?php echo e($latest_order->id); ?>" data-toggle="modal"
                                                            data-target="#loginModal"><?php echo app('translator')->get('admin.canceled'); ?></span></a>
                                                <?php elseif($latest_order->status == 'pending'): ?>
                                                    <a href="#!"><span
                                                            class="badge outline-badge-primary shadow-none edit_order_status"
                                                            data-id="<?php echo e($latest_order->id); ?>" data-toggle="modal"
                                                            data-target="#loginModal"><?php echo app('translator')->get('admin.pending'); ?></span></a>
                                                <?php elseif($latest_order->status == 'successful'): ?>
                                                    <a href="#!"><span
                                                            class="badge outline-badge-success shadow-none edit_order_status"
                                                            data-id="<?php echo e($latest_order->id); ?>" data-toggle="modal"
                                                            data-target="#loginModal"><?php echo app('translator')->get('admin.successful'); ?></span></a>
                                                <?php endif; ?>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="td-content pricing"><span
                                                    class=""><?php echo e($latest_order->total_price); ?> $</span></div>
                                        </td>
                                        <td>
                                            <div class="td-content"><?php echo e($latest_order->profile->name); ?>

                                            </div>
                                        </td>
                                        <td>
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('order-show')): ?>
                                            <div class="td-content">
                                                <a href="<?php echo e(route('admin.orders.show', $latest_order->id)); ?>" class="d-block">
                                                    <i style="font-size: 26px;" class="fa fa-eye" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\public_html\resources\views/admin/pages/theme/index.blade.php ENDPATH**/ ?>