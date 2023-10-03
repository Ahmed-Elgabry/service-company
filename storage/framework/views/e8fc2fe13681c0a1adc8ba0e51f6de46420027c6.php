<?php $__currentLoopData = $notices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<a href="<?php echo e(route('admin.orders.show', $notice->order_id)); ?>" class="d-block mb-2">
    <div class="dropdown-item">
        <div class="media">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-message-square">
                <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
            </svg>
            <div class="media-body">
                <div class="notification-para"><span class="user-name"><?php echo e($notice->user_name); ?></span> <?php if($notice->filed_name!=null): ?> <?php echo e($notice->attchname); ?>  <?php else: ?> <?php echo e($notice->order_code); ?> <?php endif; ?></div>
                <div class="notification-meta-time"><?php echo e($notice->messages); ?></div>
                <div class="notification-meta-time"><?php if($notice->order_status=="canceled"||$notice->order_status=="pending"||$notice->order_status=="done"||$notice->order_status=="successful"): ?><?php echo app('translator')->get("admin.status"); ?> <?php echo app('translator')->get("admin.$notice->order_status"); ?><?php elseif($notice->filed_name!=null): ?> <?php echo e($notice->filed_name); ?>  <?php else: ?> <?php echo e($notice->order_status); ?> <?php endif; ?></div>
            </div>
        </div>
    </div>
</a>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH D:\public_html\resources\views/components/adminmessages.blade.php ENDPATH**/ ?>