<?php if($paginator->hasPages()): ?>
    <div class="pagination-no_spacing">
        <ul class="pagination justify-content-center">

            <?php if($paginator->onFirstPage()): ?>
                <li class="page-item"><a class=" rounded-0  " href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                    </a></li>
            <?php else: ?>
                <button class="btn"
                    style="    background-color: #191e3a;
    font-weight: 600;
    color: #888ea8;
        border-top-right-radius: 50px;
    border-bottom-right-radius: 50px;
    "
                    wire:click="previousPage" wire:loading.attr="disabled" rel="prev">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                </button>
            <?php endif; ?>



            <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(is_string($element)): ?>
                    <li class="page-item" class=""><a class="" href="#"><?php echo e($element); ?></a>
                    </li>
                <?php endif; ?>



                <?php if(is_array($element)): ?>
                    <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($page === $paginator->currentPage()): ?>
                            <li class="page-item"><button style="background: unset;
                                    border: none;
                                    color: #fff;" wire:click="gotoPage(<?php echo e($page); ?>)"><a class="active my-active" href="#!"
                                    ><?php echo e($page); ?></a></button></li>
                        <?php else: ?>
                            <li class="page-item"><button  style="background: unset;
                                    border: none;
                                    color: #888ea8;"  wire:click="gotoPage(<?php echo e($page); ?>)"><a class="" href="#!"
                                    ><?php echo e($page); ?></a></button></li>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



            <?php if($paginator->hasMorePages()): ?>
                <button class="btn"
                    style="    background-color: #191e3a;
    font-weight: 600;
    color: #888ea8;
        border-top-left-radius: 50px;
    border-bottom-left-radius: 50px;
    "
                    wire:click="nextPage" wire:loading.attr="disabled" rel="next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                </button>
            <?php else: ?>
                <li class="page-item"><a class=" rounded-0  " href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                    </a></li>
            <?php endif; ?>
        </ul>
    </div>
<?php endif; ?>
<?php /**PATH D:\public_html\resources\views/general-components/admin/pagination.blade.php ENDPATH**/ ?>