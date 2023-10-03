<li class="menu <?php echo e(request()->is('dashborad/stocks') ? 'active' : ''); ?>">
    <a href="<?php echo e(route('admin.stocks.index')); ?>" aria-expanded="false" class="dropdown-toggle">
        <div class="">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock">
                <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
            </svg>
            <span><?php echo app('translator')->get('admin.order_stocks'); ?></span>
            <span class="count-response"><strong class="response-count"><?php echo e($stocks); ?></strong></span>
        </div>
    </a>
</li><?php /**PATH D:\public_html\resources\views/components/stock-sidebar.blade.php ENDPATH**/ ?>