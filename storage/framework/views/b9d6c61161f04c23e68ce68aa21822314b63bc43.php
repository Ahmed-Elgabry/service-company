<li class="menu <?php echo e(request()->is('dashborad/assignedtasks') ? 'active' : ''); ?>">
    <a href="<?php echo e(route('admin.assignedtasks.index')); ?>" aria-expanded="false" class="dropdown-toggle">
        <div class="">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-target">
                <circle cx="12" cy="12" r="10"></circle>
                <circle cx="12" cy="12" r="6"></circle>
                <circle cx="12" cy="12" r="2"></circle>
            </svg>
            <span><?php echo app('translator')->get('admin.assignedtasks'); ?></span>
            <span class="count-response"><strong class="response-count"><?php echo e($pending_tasks); ?></strong></span>
            <span class="count-response" style="margin-right:3px !important;background:#e36e14;"><strong class="response-count"><?php echo e($done_tasks); ?></strong></span>
        </div>
    </a>
</li><?php /**PATH D:\public_html\resources\views/components/assignedtask-sidebar.blade.php ENDPATH**/ ?>