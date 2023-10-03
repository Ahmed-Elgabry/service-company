


<?php $__env->startSection('title', __('admin.services')); ?>

<?php $__env->startSection('page-title', __('admin.services')); ?>

<?php $__env->startSection('content'); ?>

    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.search-service')->html();
} elseif ($_instance->childHasBeenRendered('MSSMmOG')) {
    $componentId = $_instance->getRenderedChildComponentId('MSSMmOG');
    $componentTag = $_instance->getRenderedChildComponentTagName('MSSMmOG');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('MSSMmOG');
} else {
    $response = \Livewire\Livewire::mount('admin.search-service');
    $html = $response->html();
    $_instance->logRenderedChild('MSSMmOG', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('ajax'); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <script>
   
        $(document).ready(function() {
            setInterval(function() {
                $('.deleteRecord').on('click', function() {
                    const dataid = $(this).attr('data-id');
                    swal({
                        title: 'هل أنت متأكد?',
                        text: 'لن تتمكن من استرداد العنصر!',
                        icon: 'warning',
                        closeModal: false,
                        allowOutsideClick: false,
                        closeOnConfirm: false,
                        closeOnCancel: false,
                        buttons: ['لا', 'نعم']
                    }).then((willDelete) => {
                        if (willDelete) {
                            $.ajax({
                                url: `<?php echo e(url('dashborad/services/${dataid}')); ?>`,
                                method: 'DELETE',
                                data: {
                                    "_token": "<?php echo e(csrf_token()); ?>",
                                    dataid: dataid
                                },
                                success: function(result) {
                                    //console.log(result);
                                    swal(result.success, {
                                        icon: result.icon,
                                    });
                                    $('#' + result.id).remove();
                                }
                            });
                        } else {
                            swal("لم يتم حذف العنصر.");
                        }
                    });
                });
            }, 1000);
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\public_html\resources\views/admin/pages/service/index.blade.php ENDPATH**/ ?>