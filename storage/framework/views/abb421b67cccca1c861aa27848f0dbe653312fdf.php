


<?php $__env->startSection('title', __('admin.packages')); ?>

<?php $__env->startSection('page-title', __('admin.packages')); ?>

<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.search-package')->html();
} elseif ($_instance->childHasBeenRendered('inQWKvQ')) {
    $componentId = $_instance->getRenderedChildComponentId('inQWKvQ');
    $componentTag = $_instance->getRenderedChildComponentTagName('inQWKvQ');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('inQWKvQ');
} else {
    $response = \Livewire\Livewire::mount('admin.search-package');
    $html = $response->html();
    $_instance->logRenderedChild('inQWKvQ', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
                                url: `<?php echo e(url('dashborad/packages/${dataid}')); ?>`,
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

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\public_html\resources\views/admin/pages/package/index.blade.php ENDPATH**/ ?>