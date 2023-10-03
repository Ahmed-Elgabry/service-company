<?php if(Auth::user()->type_user!="1"): ?>
<?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<a href="<?php echo e(route('admin.contacts.index')); ?>" class="dropdown-item item_count d-block mb-2 ">
    <div class="">
        <div class="media notification-new">
            <div class="notification-icon">
                <div class="icon-svg mr-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                        </path>
                        <polyline points="22,6 12,13 2,6"></polyline>
                    </svg>
                </div>
            </div>
            <div class="media-body">
                <p class="meta-title mr-3"><?php echo e($contact->name); ?></p>
                <p class="message-text"><?php echo e($contact->email); ?></p>
                <p class="align-self-center mb-0"><?php echo e(Str::limit($contact->message,50)); ?></p>
            </div>
        </div>
    </div>
</a>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?><?php /**PATH D:\public_html\resources\views/components/admincontact.blade.php ENDPATH**/ ?>