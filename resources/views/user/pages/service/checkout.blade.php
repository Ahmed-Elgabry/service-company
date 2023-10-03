@extends('user.master')


@section('title', __('admin.services'))

@section('page-title', __('admin.view_all'))
@section('css')
    <style>

/* End Services */
    </style>
@endsection
@section('content')
<div class="row g-5 " style="margin-right:46px;" >
    <div class="col-md-6 col-lg-6 ">
        <h4 class=" my-3" style="    color: #fff;">تفاصيل الدفع </h4>
        <form class=""  method="post" enctype="multipart/form-data" id="form_order" >
            <div class="row g-3">
                <div class="col-sm-6">
                    <label for="firstName" class="form-label"> السعر  </label>
                    <input type="text" class="form-control" id="firstName" name="service_price" placeholder="" value="{{ $servic }}" readonly >
                     
                </div>

                <div class="col-sm-6">
                    <label for="lastName" class="form-label">الخدمة  </label>
                    <input type="text" class="form-control" id="lastName" name="service_name" placeholder="" value="{{ $name }}" readonly >
                   
                </div>
                <div class="col-sm-6">
                    <label for="lastName" class="form-label"> اختر طريقة الدفع  </label><span class="star2">*</span>
                    <div class="custom-select" style="width:200px;">
                        <select name="payment">
                          <option value="0">Paypal</option>
                          <option value="1">Visa Card</option>
                          
                        </select>
                      </div>
                </div>
 
 
              

                
            </div>

         

            <hr class="my-4">

            <button class="mb-5 w-100 btn btn-dark btn-lg" type="submit"> Send Order</button>
        </form>
    </div>
</div>
@endsection
@section('ajax')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script>



     
$(document).ready(function() {

$('#loginModal6').on('show.bs.modal', function(event) {
  var button = $(event.relatedTarget); // Button that triggered the modal
  var value = button.data('value'); // Extract value from data-* attributes
 //alert(value); // Print the value to the console
  $('#service_price').val(value);
});



    $('.add_attach').on('click', function() {
        const order_id_new = $(this).attr("data-id");
        $("#service_id1").val(order_id_new);
    });
    $('#form_order').on('submit', function(e) {
        e.preventDefault();
        $('#btnSubmit').attr("disabled", true);
        var formData = new FormData(this);
        var opError = " ";
        $.ajax({
            url: `{{ url('profile/serviceorders') }}`,
            type: 'POST',
            data: formData,
            beforeSend: function () {
                $('#loader').removeClass('d-none')
            },
            success: function(result) {
                console.log(result);
            window.location.href =result;
                $('#btnSubmit').attr("disabled", false);
                $("#form_order")[0].reset();
                $('.alterErrorletter').html(" ");
                $('#loginModal6').modal('hide');
                swal(result.success, {
                    icon: "success",
                });
                // location.reload();
            },
            cache: false,
            contentType: false,
            processData: false,
            error: function(errorsub) {
                $('#btnSubmit').attr("disabled", false);
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
                $('#loader').addClass('d-none')
            },
        });
    });
});
</script>
<script>
  setInterval(function() {
      $('.view_all_description').on('click', function() {
          const view_all_description1 = $(this).attr("data-description");
          $("#view_all_description_4").text(view_all_description1);
      });
  }, 500);
</script>
@endsection