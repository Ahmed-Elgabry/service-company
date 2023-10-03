
<?php if($paginator->hasPages()): ?>
    <div class="pagination-no_spacing">
        <ul class="pagination justify-content-center">
       
        <?php if($paginator->onFirstPage()): ?>
            <li class="page-item disabled"><a class=" rounded-0" href="#" aria-label="Previous">
                       <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
            </a></li>
        <?php else: ?>
            <li class="page-item"><a class=" rounded-0" href="<?php echo e($paginator->previousPageUrl()); ?>" rel="prev" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
            </a></li>
        <?php endif; ?>


      
        <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
           
            <?php if(is_string($element)): ?>
                <li class="page-item" class="disabled"><a class="" href="#"><?php echo e($element); ?></a></li>
            <?php endif; ?>


           
            <?php if(is_array($element)): ?>
                <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($page == $paginator->currentPage()): ?>
                        <li class="page-item "><a class="active my-active" href="#"><?php echo e($page); ?></a></li>
                    <?php else: ?>
                        <li class="page-item"><a class="" href="<?php echo e($url); ?>"><?php echo e($page); ?></a></li>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


        
        <?php if($paginator->hasMorePages()): ?>
            <li class="page-item"><a class=" rounded-0" href="<?php echo e($paginator->nextPageUrl()); ?>" rel="next" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
                              <span class="sr-only">Next</span>
            </a></li>
        <?php else: ?>
            <li class="page-item" class="disabled"><a class=" rounded-0" href="#" aria-label="Next"> 
            <span aria-hidden="true">&raquo;</span>
                              <span class="sr-only">Next</span>
            </a></li>
        <?php endif; ?>
    </ul>
</div>
<?php endif; ?> <?php /**PATH D:\public_html\resources\views/general-components/admin/paginate.blade.php ENDPATH**/ ?>