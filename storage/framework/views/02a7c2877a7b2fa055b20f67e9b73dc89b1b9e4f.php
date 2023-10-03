


<?php $__env->startSection('title', __('admin.all_assign')); ?>

<?php $__env->startSection('page-title', __('admin.all_assign')); ?>
<?php $__env->startSection('css'); ?>
<style>
.lds-dual-ring {
    display: inline-block;
    width: 20px;
    height: 20px;
}

.lds-dual-ring:after {
    content: " ";
    display: block;
    width: 14px;
    height: 14px;
    margin: 8px;
    border-radius: 50%;
    border: 6px solid #fff;
    border-color: #fff transparent #fff transparent;
    animation: lds-dual-ring 1.2s linear infinite;
}

@keyframes lds-dual-ring {
    0% {
        transform: rotate(0deg);
    }

    100% {
        transform: rotate(360deg);
    }
}
</style>
<script>
    // Code goes here
function resetStartTime() {
  startTime = new Date();
  window.localStorage.setItem('startTime', startTime);
  return startTime;
}
document.addEventListener('DOMContentLoaded', function(event) { 
  // get timestamp
  startTime = new Date(window.localStorage.getItem('startTime') || resetStartTime());
  // start timer
  window.setInterval(function() {
    var secsDiff = new Date().getTime() - startTime.getTime();
    var s= Math.floor(secsDiff / 1000 % 60);
    var m= Math.floor(secsDiff / 60000 % 60);
    var h= Math.floor(secsDiff / 3600000 % 24);
    var d= Math.floor(secsDiff / 86400000);
    var content =s +' ثانية  '+ m +'  دقيقه '+ h +'  ساعه '+ d +'  يوم ';
    document.querySelector('.timerLabel').innerText =content;
  }, 1000);
});
</script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row" id="cancel-row">
    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
        <div class="widget-content widget-content-area br-6">
            <div class="text-center">
                <?php if(App\Models\AssignedTask::where("user_task_id",Auth::user()->id)->first()!=null): ?>
                   <div class="timerLabel">...</div>
                <?php else: ?>
                <script>
                       resetStartTime();
                </script>
                <?php endif; ?>
            </div>
            <div class="table-responsive overflow-auto mb-4 mt-4">
                <table id="zero-config" class="table table-hover table-bordered mb-4" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th><?php echo app('translator')->get('admin.code'); ?></th>
                            <th><?php echo app('translator')->get('admin.employee'); ?></th>
                            <th><?php echo app('translator')->get('admin.name'); ?></th>
                            <th><?php echo app('translator')->get('admin.description'); ?></th>
                            <th><?php echo app('translator')->get('admin.total_price'); ?></th>
                            <th><?php echo app('translator')->get('admin.type_order'); ?></th>
                            <th><?php echo app('translator')->get('admin.order'); ?></th>
                            <th><?php echo app('translator')->get('admin.profiles'); ?></th>
                            <th><?php echo app('translator')->get('admin.status'); ?></th>
                            <th><?php echo app('translator')->get('admin.attachments'); ?></th>
                            <th><?php echo app('translator')->get('admin.start_date'); ?></th>
                            <th><?php echo app('translator')->get('admin.end_date'); ?></th>
                            <th><?php echo app('translator')->get('admin.time_dur'); ?></th>
                            <th class="no-content"><?php echo app('translator')->get('admin.action'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $assignedtask; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $assignedtas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr id="<?php echo e($assignedtas->id); ?>">
                            <td><?php echo e($loop->iteration); ?></td>
                            <td><?php echo e($assignedtas->order->code); ?></td>
                            <td><?php if(App\Models\User::where("id",$assignedtas->user_task_id)->first()!=null): ?> <?php echo e(App\Models\User::where("id",$assignedtas->user_task_id)->first()->firstname.' '.App\Models\User::where("id",$assignedtas->user_task_id)->first()->lastname); ?> <?php endif; ?></td>
                            <td><a href="<?php echo e(route('admin.profile/history', $assignedtas->order->user->id)); ?>"><?php echo e($assignedtas->order->user->firstname.' '.$assignedtas->order->user->lastname); ?></a></td>
                            <td><?php echo $assignedtas->notes; ?></td>
                            <td><?php echo e($assignedtas->order->total_price); ?> $</td>
                            <td>
                                <?php if($assignedtas->order->type_order == 'service'): ?>
                                <?php echo app('translator')->get('admin.services'); ?>
                                <?php else: ?>
                                <?php echo app('translator')->get('admin.packages'); ?>
                                <?php endif; ?>
                            </td>
                            <td>
                                <?php if($assignedtas->order->type_order == 'service'): ?>
                                <?php echo e($assignedtas->order->service->name); ?>

                                <?php else: ?>
                                <?php echo e($assignedtas->order->package->name); ?>

                                <?php endif; ?>
                            </td>
                            <td>
                                <?php echo e($assignedtas->order->profile->name); ?>

                            </td>
                            <td class="text-center">
                                <?php if($assignedtas->order->status == 'done'): ?>
                                <a href="#!"><span class="badge outline-badge-secondary shadow-none edit_order_status"
                                        data-id="<?php echo e($assignedtas->order->id); ?>" data-toggle="modal"
                                        data-target="#loginModal"><?php echo app('translator')->get('admin.done'); ?></span></a>
                                <?php elseif($assignedtas->order->status == 'canceled'): ?>
                                <a href="#!"><span class="badge outline-badge-danger shadow-none edit_order_status"
                                        data-id="<?php echo e($assignedtas->order->id); ?>" data-toggle="modal"
                                        data-target="#loginModal"><?php echo app('translator')->get('admin.canceled'); ?></span></a>
                                <?php elseif($assignedtas->order->status == 'pending'): ?>
                                <a href="#!"><span class="badge outline-badge-primary shadow-none edit_order_status"
                                        data-id="<?php echo e($assignedtas->order->id); ?>" data-toggle="modal"
                                        data-target="#loginModal"><?php echo app('translator')->get('admin.pending'); ?></span></a>
                                <?php elseif($assignedtas->order->status == 'successful'): ?>
                                <a href="#!"><span class="badge outline-badge-success shadow-none edit_order_status"
                                        data-id="<?php echo e($assignedtas->order->id); ?>" data-toggle="modal"
                                        data-target="#loginModal"><?php echo app('translator')->get('admin.successful'); ?></span></a>
                                <?php endif; ?>
                            </td>
                            <td class="text-center">
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('order-show')): ?>
                                <a href="<?php echo e(route('admin.orders.show', $assignedtas->order->id)); ?>"
                                    class="btn btn-info mx-2"><?php echo app('translator')->get('admin.attachments'); ?></a>
                                <?php endif; ?>
                            </td>
                            <td>
                                <?php echo e(date('h:i:s a d/m/Y', strtotime($assignedtas->start_date))); ?>

                            </td>
                            <td>
                                <?php if($assignedtas->end_date != null): ?>
                                <?php echo e(date('h:i:s a d/m/Y', strtotime($assignedtas->end_date))); ?>

                                <?php endif; ?>
                            </td>
                            <td>
                                <?php if($assignedtas->end_date != null && $assignedtas->start_date != null): ?>
                                    
                                        
                                        <?php
                                            $datetime1 = new DateTime($assignedtas->start_date);
                                            $datetime2 = new DateTime($assignedtas->end_date);
                                            $interval = $datetime1->diff($datetime2);
                                            echo $interval->format('%h')." ساعه ".$interval->format('%i')." دقيقه";
                                        ?>
                                <?php else: ?>
                                        <?php
                                            $datetime1 = new DateTime($assignedtas->start_date);
                                            $datetime2 = new DateTime("now");
                                            $interval = $datetime1->diff($datetime2);
                                            echo $interval->format('%h')." ساعه ".$interval->format('%i')." دقيقه";
                                        ?>
                                <?php endif; ?>
                            </td>
                            <td class="text-center">
                                <div class="dropdown custom-dropdown">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink7"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <h1>...</h1>
                                    </a>
                                    <div class="dropdown-menu solve_menu_problem" aria-labelledby="dropdownMenuLink7">
                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('order-export')): ?>
                                        <a class="dropdown-item"
                                        href="<?php echo e(route('admin.export', $assignedtas->order->id)); ?>"><?php echo app('translator')->get('admin.download'); ?></a>
                                        <?php endif; ?>
                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('order-create')): ?>
                                        <a class="dropdown-item add_attach" href="#!"
                                        data-id="<?php echo e($assignedtas->order->id); ?>" href="#!" data-toggle="modal"
                                        data-target="#loginModal1"><?php echo app('translator')->get('admin.add_attach'); ?></a>
                                        <?php endif; ?>
                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('packageArchive-create')): ?>
                                        <?php if($assignedtas->order->type_order == 'package'): ?>
                                        <a class="dropdown-item done_service"
                                            data-id="<?php echo e($assignedtas->order->package->id); ?>"
                                            data-order="<?php echo e($assignedtas->order->id); ?>" href="#!" data-toggle="modal"
                                            data-target="#loginModal4"><?php echo app('translator')->get('admin.done_service'); ?></a>
                                        <?php endif; ?>
                                        <?php endif; ?>
                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('order-edit')): ?>
                                        <a class="dropdown-item edit_order_status"
                                        data-id="<?php echo e($assignedtas->order->id); ?>" href="#!" data-toggle="modal"
                                        data-target="#loginModal"><?php echo app('translator')->get('admin.edit_status'); ?></a>
                                        <?php endif; ?>
                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('assignedtask-delete')): ?>
                                        <a class="dropdown-item deleteRecord" href="#!"
                                        data-id="<?php echo e($assignedtas->id); ?>"><?php echo app('translator')->get('admin.delete'); ?></a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
            <div class="row pb-4 pt-2">
                <div class="col-12">
                    <?php echo e($assignedtask->links('general-components.admin.paginate')); ?>

                </div>
            </div>
        </div>
    </div>

</div>
<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('order-edit')): ?>
<!-- Modal 1-->
<div class="modal fade login-modal" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header" id="loginModalLabel">
                <h4 class="modal-title"><?php echo app('translator')->get('admin.edit_status'); ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><svg aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-x">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg></button>
            </div>
            <div class="modal-body">
                <form class="mt-0" id="form_status" method="post">
                    <div class="form-group">
                        <input type="hidden" id="order_id_status" />
                        <select class="form-control" id="status" aria-label="Default select example">
                            <option value="done"><?php echo app('translator')->get('admin.done'); ?></option>
                            <option value="pending"><?php echo app('translator')->get('admin.pending'); ?></option>
                            <option value="canceled"><?php echo app('translator')->get('admin.canceled'); ?></option>
                            <option value="successful"><?php echo app('translator')->get('admin.successful'); ?></option>
                        </select>
                    </div>
                    <button id="btnSubmit" type="submit"
                        class="btn btn-primary mt-2 mb-2 btn-block"><?php echo app('translator')->get('admin.edit'); ?></button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
<!-- Modal 1-->
<div class="modal fade login-modal" id="loginModal4" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">

            <div class="modal-header" id="loginModalLabel">
                <h4 class="modal-title"><?php echo app('translator')->get('admin.done_service'); ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><svg aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-x">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg></button>
            </div>
            <div class="modal-body">
                <a id="#!" class="btn btn-secondary mt-2 mb-2 btn-block view_service"><?php echo app('translator')->get('admin.view_service'); ?></a>
                <form class="mt-0" id="form_service" method="post">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="package_id" id="get_package_id" />
                    <input type="hidden" name="order_id" id="get_order_id" />
                    <div class="row" id="tobody">
                        
                    </div>
                    <button id="btnSubmit4" type="submit" class="btn btn-primary mt-2 mb-2 btn-block"
                        style="display:none"><?php echo app('translator')->get('admin.save'); ?></button>
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
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-x">
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
                        <textarea type="text" name="description" rows="8" value="<?php echo e(old('description')); ?>" class="form-control"
                            placeholder="<?php echo e(__('admin.description')); ?>"></textarea>
                    </div>
                    <div class="col-12 mb-4">
                        <div class="custom-file-container" data-upload-id="myFirstImage">
                            <label><a href="javascript:void(0)" class="custom-file-container__image-clear"
                                    title="Clear Image">x</a> <?php echo app('translator')->get('admin.notes'); ?></label>
                            <label class="custom-file-container__custom-file">
                                <input type="file" name="attachment_file[]" class="form-control" multiple />
                            </label>
                        </div>
                    </div>
                    <div id="loader" class="spinner-border text-warning d-none" role="status">
                        <span class="visually-hidden"></span>
                    </div>
                    <button id="btnSubmit1" type="submit" class="btn btn-primary mt-2 mb-2 btn-block"><?php echo app('translator')->get('admin.add_new_attach'); ?></button>
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
                        url: `<?php echo e(url('dashborad/assignedtasks/${dataid}')); ?>`,
                        method: 'DELETE',
                        data: {
                            "_token": "<?php echo e(csrf_token()); ?>",
                            dataid: dataid
                        },
                        success: function(result) {
                            //console.log(result);
                            swal(result.success, {
                                icon: "success",
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
        $('.edit_order_status').on('click', function() {
            const order_id_new = $(this).attr("data-id");
            $("#order_id_status").val(order_id_new);
        });
    }, 1000);

    $('#form_status').on('submit', function(e) {
        e.preventDefault();
        $("#btnSubmit").attr("disabled", true);
        const order_id = $('#order_id_status').val();
        const status = $('#status').val();
        $.ajax({
            url: `<?php echo e(url('dashborad/orders/${order_id}')); ?>`,
            type: "put",
            data: {
                "_token": "<?php echo e(csrf_token()); ?>",
                order_id: order_id,
                status: status,
            },
            success: function(result) {
                //console.log(result);
                $("#btnSubmit").attr("disabled", false);
                $('#loginModal').modal('hide');
                $("#form_status")[0].reset();
                swal(result.success, {
                    icon: "success",
                });
                location.reload();
                localStorage.setItem('startTime', new Date())
            }
        });
    });

    setInterval(function() {
        $('.add_attach').on('click', function() {
            const order_id_new = $(this).attr("data-id");
            $("#order_id1").val(order_id_new);
        });
    }, 1000);

    $('#form_attach').on('submit', function(e) {
        e.preventDefault();
        $("#btnSubmit1").attr("disabled", true);
        var formData = new FormData(this);
        var opError = " ";
        $.ajax({
            url: `<?php echo e(url('dashborad/orders')); ?>`,
            type: 'POST',
            data: formData,
            beforeSend: function () {
                $('#loader').removeClass('d-none')
            },
            success: function(result) {
                //console.log(result);
                $("#btnSubmit1").attr("disabled", false);
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
                $("#btnSubmit1").attr("disabled", false);
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
                    else if (errorsub.responseJSON.errors
                        .description) {
                        opError += '<div class="alert alert-danger">' +
                            errorsub.responseJSON.errors
                            .description + '</div>';
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


    setInterval(function() {
        $('.done_service').on('click', function() {
            const package_new_id = $(this).attr("data-id");
            const order_id_new = $(this).attr("data-order");
            $("#get_package_id").val(package_new_id);
            $("#get_order_id").val(order_id_new);
        });
    }, 1000);

    $('.view_service').on('click', function() {
        const get_order_id = $("#get_order_id").val();
        $.ajax({
            url: `<?php echo e(url('dashborad/get/package/service/${get_order_id}')); ?>`,
            type: 'get',
            data: {
                get_order_id: get_order_id
            },
            success: function(data) {
                //console.log(result);
                $(".view_service").css("display", 'none');
                $("#btnSubmit4").css("display", 'block');
                $.each(data, function(key, value) {
                    $('#tobody').append(`
                    <div class="col-12 col-md-4">
                            <div class="form-check">
                                <input class="form-check-input" name="service_id[]" ${ value['status']=='1' ? 'checked' :''} type="checkbox" value="${value['service_id']}" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    ${value['service_name']}
                                </label>
                            </div>
                        </div>
                        <div class="col-12 col-md-3 mb-2">
                            <div class="form-check">
                                <label><?php echo app('translator')->get('admin.num_service'); ?>: ${value['num_servicetotle']}</label>
                            </div>
                        </div>
                        <div class="col-12 col-md-3 mb-2">
                            <div class="form-check">
                                <label><?php echo app('translator')->get('admin.num_service_done'); ?>: ${value['num_service_done']}</label>
                            </div>
                        </div>
                        <div class="col-12 col-md-2 mb-2">
                            <div class="form-check">
                                <input class="form-control pt-0 pb-0" name="num_service[]"  value="${value['num_service']}"  type="text" placeholder="<?php echo e(__('admin.num_service')); ?>">
                            </div>
                        </div>
                        `);
                });
            },
        });
    });
    $('#form_service').on('submit', function(e) {
        e.preventDefault();
        $("#btnSubmit4").attr("disabled", true);
        var formData = new FormData(this);
        var opError = " ";
        $.ajax({
            url: `<?php echo e(url('dashborad/package/archives')); ?>`,
            type: 'POST',
            data: formData,
            success: function(result) {
                //console.log(result);
                $("#btnSubmit4").attr("disabled", false);
                $('#loginModal3').modal('hide');
                $("#form_service")[0].reset();
                swal(result.success, {
                    icon: result.warning,
                });
                location.reload();
            },
            cache: false,
            contentType: false,
            processData: false,
        });
    });
});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\public_html\resources\views/admin/pages/assign/all-assign.blade.php ENDPATH**/ ?>