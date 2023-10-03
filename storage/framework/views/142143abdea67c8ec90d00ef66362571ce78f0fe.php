


<?php $__env->startSection('title', __('user.profiles')); ?>

<?php $__env->startSection('page-title', __('admin.profiles')); ?>

<?php $__env->startSection('content'); ?>

    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.search-profile')->html();
} elseif ($_instance->childHasBeenRendered('glVndRt')) {
    $componentId = $_instance->getRenderedChildComponentId('glVndRt');
    $componentTag = $_instance->getRenderedChildComponentTagName('glVndRt');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('glVndRt');
} else {
    $response = \Livewire\Livewire::mount('admin.search-profile');
    $html = $response->html();
    $_instance->logRenderedChild('glVndRt', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<!-- Modal 2-->
<div class="modal fade login-modal" id="loginModal10" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel1"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header" id="loginModalLabel1">
                <h4 class="modal-title"><?php echo app('translator')->get('admin.order_now'); ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><svg aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-x">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg></button>
            </div>
            <div class="modal-body">
                <form class="mt-0" id="form_order" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="alterErrorletter">
                    </div>
                    <div class="col-12 mb-4">
                        <label><?php echo app('translator')->get('admin.services'); ?></label>
                        <select class="form-control" name="service_id" aria-label="Default select example">
                            <option selected></option>
                            <?php $__currentLoopData = $service; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $servic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($servic->id); ?>"><?php echo e($servic->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="col-12 mb-4">
                        <label><?php echo app('translator')->get('admin.packages'); ?></label>
                        <select class="form-control" name="package_id" aria-label="Default select example">
                            <option selected></option>
                            <?php $__currentLoopData = $package; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $packag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($packag->id); ?>"><?php echo e($packag->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="col-12 mb-4">
                        <label><?php echo app('translator')->get('admin.profiles'); ?></label>
                        <select class="form-control" name="profile_id" aria-label="Default select example">
                            
                        </select>
                    </div>
                    <input type="hidden" name="user_id" id="user_id1" />
                    
                    <div class="col-12 mb-4">
                        <div class="custom-file-container" data-upload-id="myFirstImage">
                            <label><a href="javascript:void(0)" class="custom-file-container__image-clear"
                                    title="Clear Image">x</a> <?php echo app('translator')->get('admin.notes'); ?></label>
                            <label class="custom-file-container__custom-file">
                                <input type="file" name="file" class="form-control form-control-sm">
                            </label>
                        </div>
                    </div>
                    <div id="loader1" class="spinner-border text-warning d-none" role="status">
                        <span class="visually-hidden"></span>
                      </div>
                    <button id="btnSubmit10" type="submit"
                        class="btn btn-primary mt-2 mb-2 btn-block"><?php echo app('translator')->get('admin.order_now'); ?></button>
                </form>
            </div>
        </div>
    </div>
</div> 
    <!-- Modal 2-->
    <div class="modal fade login-modal" id="loginModal1" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel1"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-header" id="loginModalLabel1">
                    <h4 class="modal-title"><?php echo app('translator')->get('admin.attachments'); ?></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><svg aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-x">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg></button>
                </div>
                <div class="modal-body">
                    <form class="mt-0" id="form_attach" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="alterErrorletter">
                        </div>
                        <input type="hidden" name="order_id" id="order_id1" />
                        <div class="col-12 mb-4">
                            <input type="text" name="name_attach" value="<?php echo e(old('name_attach')); ?>" class="form-control"
                                placeholder=<?php echo app('translator')->get('admin.name_attach'); ?>>
                        </div>
                        <div class="col-12 mb-4">
                            <div class="custom-file-container" data-upload-id="myFirstImage">
                                <label><a href="javascript:void(0)" class="custom-file-container__image-clear"
                                        title="Clear Image">x</a> <?php echo app('translator')->get('admin.notes'); ?></label>
                                <label class="custom-file-container__custom-file">
                                    <input type="file" name="attachment_file"
                                        class="form-control" multiple />
                                </label>
                            </div>
                        </div>
                        <div id="loader" class="spinner-border text-warning d-none" role="status">
                            <span class="visually-hidden"></span>
                        </div>
                        <button id="btnSubmit" type="submit" class="btn btn-primary mt-2 mb-2 btn-block"><?php echo app('translator')->get('admin.add_new_attach'); ?></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('ajax'); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <script>
        $(document).ready(function() {
            setInterval(function() {
                $('.deleteRecord').on('click', function() {
                    const dataid = $(this).attr('data-id');
                    swal(dataid);
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
                                url: `<?php echo e(url('dashborad/profiles/${dataid}')); ?>`,
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
            setInterval(function() {
                $('.add_attach').on('click', function() {
                    const order_id_new = $(this).attr("data-id");
                    $("#order_id1").val(order_id_new);
                });
            }, 1000);

            $('#form_attach').on('submit', function(e) {
                e.preventDefault();
                $("#btnSubmit").attr("disabled", true);
                var formData = new FormData(this);
                var opError = " ";
                $.ajax({
                    url: `<?php echo e(url('dashborad/store/attach/profile')); ?>`,
                    type: 'POST',
                    data: formData,
                    beforeSend: function () {
                        $('#loader').removeClass('d-none')
                    },
                    success: function(result) {
                        //console.log(result);
                        $("#btnSubmit").attr("disabled", false);
                        $('#loginModal1').modal('hide');
                        $("#form_attach")[0].reset();
                        $('.alterErrorletter').html(" ");
                        swal(result.success, {
                            icon: "success",
                        });
                        location.reload();
                    },
                    cache: false,
                    contentType: false,
                    processData: false,
                    error: function(errorsub) {
                        $("#btnSubmit").attr("disabled", false);
                        if (errorsub) {
                            if (errorsub.responseJSON.errors.name_attach) {
                                opError += '<div class="alert alert-danger">' +
                                    errorsub.responseJSON.errors
                                    .name_attach + '</div>';
                            } else if (errorsub.responseJSON.errors
                                .attachment_file) {
                                opError += '<div class="alert alert-danger">' +
                                    errorsub.responseJSON.errors
                                    .attachment_file + '</div>';
                            }
                            $('.alterErrorletter').html(" ");
                            $('.alterErrorletter').append(opError);
                        }
                    },
                    complete: function () {
                        $('#loader').addClass('d-none')
                    },
                });
            });
        });
        setInterval(function() {
        $('.add_order').on('click', function() {
            const order_id_new = $(this).attr("data-id");
            $("#user_id1").val(order_id_new);
            $("#form_order")[0].reset();
        });
    }, 1000);

    $('#form_order').on('submit', function(e) {
        e.preventDefault();
        $('#btnSubmit10').attr("disabled", true);
        var formData = new FormData(this);
        var opError = " ";
        $.ajax({
            url: `<?php echo e(url('dashborad/order/to/user')); ?>`,
            type: 'POST',
            data: formData,
            beforeSend: function () {
                        $('#loader1').removeClass('d-none')
                    },
            success: function(result) {
                //console.log(result);
                $('#btnSubmit10').attr("disabled", false);
                $("#form_order")[0].reset();
                $('.alterErrorletter').html(" ");
                $('#loginModal3').modal('hide');
                swal(result.success, {
                    icon: "success",
                });
                location.reload();
            },
            cache: false,
            contentType: false,
            processData: false,
            error: function(errorsub) {
                $('#btnSubmit10').attr("disabled", false);
                if (errorsub) {
                    if (errorsub.responseJSON.errors.description_cust) {
                        opError += '<div class="alert alert-danger">' +
                            errorsub.responseJSON.errors
                            .description_cust + '</div>';
                    } else if (errorsub.responseJSON.errors
                        .file) {
                        opError += '<div class="alert alert-danger">' +
                            errorsub.responseJSON.errors
                            .file + '</div>';
                    }
                    $('.alterErrorletter').html(" ");
                    $('.alterErrorletter').append(opError);
                }
            },
            complete: function () {
                $('#loader1').addClass('d-none')
            },
        });
    });
    $('select[name="service_id"],select[name="package_id"]').on('click', function() {
                var client = $('#user_id1').val();
                if (client) {
                    $.ajax({
                        url: `<?php echo e(url('dashborad/getProfile/${client}')); ?>`,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            $('select[name="profile_id"]').empty();
                            $.each(data, function(key, value) {
                                $('select[name="profile_id"]').append('<option value="' +
                                    value['id'] + '">' + value['name'] + '</option>'
                                );
                            });
                        },
                    });
                } else {
                    console.log('AJAX load did not work');
                }
            });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\public_html\resources\views/admin/pages/profile/index.blade.php ENDPATH**/ ?>