<?php $__env->startSection('title', __('messages.Login')); ?>

<?php $__env->startSection('title_breadcrumb', __('messages.Login')); ?>

<?php $__env->startSection('css'); ?>

    <style>

    </style>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>



<?php $__env->stopSection(); ?>

<?php $__env->startSection('ajax_front'); ?>
    <script>
        function togglePasswordVisibility() {
            var x = document.getElementById("password");
            var y = document.getElementById("togglePassword");
            if (x.type === "password") {
                x.type = "text";
                y.classList.remove('far', 'fa-eye');
                y.classList.add('far', 'fa-eye-slash');
            } else {
                x.type = "password";
                y.classList.remove('far', 'fa-eye-slash');
                y.classList.add('far', 'fa-eye');
            }
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\public_html\resources\views/front/pages/auth/login.blade.php ENDPATH**/ ?>