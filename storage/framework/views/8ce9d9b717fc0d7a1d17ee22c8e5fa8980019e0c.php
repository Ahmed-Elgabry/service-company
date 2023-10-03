<ul class="list-unstyled  mb-3 d-flex   justify-content-sm-center gap-5">
    <?php $__currentLoopData = $page; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><a class="text-decoration-none " href="<?php echo e(route('page',$pag->id)); ?>"><?php echo e($pag->name); ?></a>
        </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul><?php /**PATH C:\Users\Ahmed\Desktop\public_html\resources\views/components/nav-footer.blade.php ENDPATH**/ ?>