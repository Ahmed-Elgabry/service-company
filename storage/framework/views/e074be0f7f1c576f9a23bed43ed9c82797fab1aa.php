<?php $__env->startSection('title', __("messages.package")); ?>

<?php $__env->startSection('title_breadcrumb', __("messages.package")); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make("front.vendor.package", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('front.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\public_html\resources\views/front/pages/package.blade.php ENDPATH**/ ?>