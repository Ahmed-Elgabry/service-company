<?php $__env->startSection('title', __("messages.service")); ?>

<?php $__env->startSection('title_breadcrumb', __("messages.service")); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make("front.vendor.service", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\public_html\resources\views/front/pages/service.blade.php ENDPATH**/ ?>