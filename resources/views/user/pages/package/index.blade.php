@extends('user.master')


@section('title', __('admin.packages'))

@section('page-title', __('admin.packages'))
@section('css')
    <style>
    /* Start packages */
.packages.dark {
  background-color: transparent;
  color: #f5f7fb;
  margin-bottom: 100px;
}
.packages.dark .main-title::after {
  background-color: #a5a5a5;
}
.all-offer a {
  transition: 0.5s ease-in-out;
  color: #25d4e3;
  opacity: 0.5;
  text-decoration: none;
  font-size: 25px;
  font-weight: 500;
  transition: 0.5s ease-in-out;
}
.all-offer a {
  opacity: 1;
}
.all-offer a i,
.all-offer a svg,
.all-offer a path {
  transform: translateX(-20px);
}
.all-offer a i,
.all-offer a svg,
.all-offer a path {
  transition: 0.5s ease-in-out;
  color: #25d4e3;
}

.packages .item .card {
  overflow: hidden;
  box-shadow: 0 0 12px rgba(0, 0, 0, 0.25) !important;
  transition: 0.5s ease-in-out;
  background-color: #fff !important;
  background-clip: border-box !important;
  height: 100% !important;
  padding-bottom: 60px !important;
}
.packages .item .card {
  background-color: #191e3a !important;
  color: #f5f7fb !important;
}

.packages .card-img-top {
  width: 30%;
  display: none;
}
.packages .item .container-card-img {
  transition: 0.2s ease-in-out;
  height: 100%;
  display: none !important;
  align-items: center;
  justify-content: center;
}
/* .packages .item .container-card-img {
  height: 0;
} */
.packages .item .card-img-top {
  transition: 0.1s ease-in-out;
}
/* .packages .item .card-img-top {
  display: none;
} */
.packages .item {
  position: relative;
}
.packages .item .card p {
  vertical-align: middle;
  height: auto;
  color: #fff !important;
  margin-bottom: 15px;
}
.packages .item .card p {
  /* opacity: 0;
  height: 0; */
  padding: 2px 0;
}

.packages .name-service {
  display: none;
  justify-content: center;
  flex-wrap: wrap;
  transition: 0.3s ease-in-out;
}

.packages .item .name-service {
  display: flex;
}
.packages .name-service li {
  display: flex;
  align-items: center;
  justify-content: flex-start;
}
.packages .item .icon {
  transition: 0.5s ease-in-out;
  background-color: #191e3a;
  color: #f5f7fb;
  margin-left: 10px;
  flex-basis: 23.33px;
  padding: 5px;
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 50%;
}
.packages .item .icon {
  background-color: #f5f7fb;
  color: #191e3a;
}
.footer-card {
  display: flex;
  align-items: center;
  justify-content: space-between;
  position: relative;
  padding: 0 10px !important;
  padding-bottom: 5px !important;
}
.footer-card .icons {
  display: flex;
  align-items: center;
  justify-content: center;
}
.packages .footer-card .bonus {
  transition: 0.3s ease-in-out;
  position: absolute;
  top: 0;
  left: calc(50% - 5%);
  transform: translate(-50%, 0);
}
.packages .item .footer-card .bonus {
  position: absolute;
  top: 50%;
  transform: translate(-50%, -200%);
}
.packages .item .footer-card .icons {
  display: none;
}
.packages .footer-card .show-service {
  display: none;
  border: 1px solid #f5f7fb;
  border-radius: 10px;
  padding: 5px 10px;
  cursor: pointer;
  color: #f5f7fb;
  background-color: transparent;
}
.packages .item .footer-card .show-service {
  display: flex;
}
.postion_customize{
  position: absolute !important;
  bottom: 5px;
  right: 0;
  left: 0;
}
/* Packages page */
/* End packages */
    </style>
@endsection
@section('content')
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/6495e88b94cf5d49dc5f7d5e/1h3mfb45n';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<!-- Modal 2-->
<div class="modal fade login-modal" id="loginModal3" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel1"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header" id="loginModalLabel1">
                <h4 class="modal-title">@lang('admin.order_now')</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><svg aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-x">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg></button>
            </div>
            <div class="modal-body">
                <h6 style="    text-align: center;
                margin-bottom: 9px;">@lang('user.user_descrt')</h6>
                <form class="mt-0" id="form_order" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="alterErrorletter">
                    </div>
                    <input type="hidden" name="package_id"  value="@isset($orderId){{ $orderId }} @endisset"  />
                    <div class="col-12 mb-4">
                        {{-- <label>@lang('admin.description')</label> --}}
                        <textarea type="text" name="description_cust"
                            class="form-control">{{ old('description_cust') }}</textarea>
                    </div>
                    <div class="col-12 mb-4">
                        <div class="custom-file-container" data-upload-id="myFirstImage">
                            {{-- <label><a href="javascript:void(0)" class="custom-file-container__image-clear"
                                    title="Clear Image">x</a> @lang('admin.notes')</label> --}}
                            <label class="custom-file-container__custom-file">
                                <input type="file" name="file" class="form-control">
                            </label>
                        </div>
                    </div>
                    <div id="loader" class="spinner-border text-warning d-none" role="status">
                        <span class="visually-hidden"></span>
                    </div>
                    <button id="btnSubmit" type="submit"
                        class="btn btn-primary mt-2 mb-2 btn-block">@lang('admin.order_now')</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="row" id="cancel-row">
    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
        <div class="widget-content widget-content-area br-6">
            <div class="row g-2 packages">
                @foreach ($package as $packag)
                <div class="col-md-3 col-sm-6 col-12 d-flex">
                    {{-- <div class="card shadow-lg p-3 mb-5 bg-body rounded" style="width: 18rem;">
                        <div class="card-body">
                            <h6 class="card-title text-danger">{{ $packag->price }} $</h6>
                            <h5 class="card-title">{{ $packag->name }}</h5>
                            <h6 class="card-title">@lang('admin.services')</h6>
                            <div class="card-text mb-4">
                                @foreach ($service as $servic)
                                @if ($packag->services->contains($servic->id))
                                <div class="d-flex align-items-center mb-2">
                                    <i class="fa fa-check text-success" aria-hidden="true"></i>
                                    <span class="text-warning" style="margin-right: 10px;">
                                        {{ $servic->name }} </span>
                                </div>
                                @endif
                                @endforeach
                                @foreach ($service as $servic)
                                @if (!$packag->services->contains($servic->id))
                                <div class="d-flex align-items-center mb-2">
                                    <i class="fa fa-times text-danger" aria-hidden="true"></i>
                                    <span class="text-secondary" style="margin-right: 10px;">
                                        {{ $servic->name }} </span>
                                </div>
                                @endif
                                @endforeach
                            </div>
                            <a href="#" class="btn btn-primary add_attach" data-id="{{ $packag->id }}"
                                data-toggle="modal" data-target="#loginModal3">@lang('admin.order_now')</a>
                        </div>
                    </div> --}}
                    <div class="item mb-4 w-100">
                        <div class="card">
                          <div class=" container-card-img pt-3">
                            <img src="{{asset('./assets/images/packages/offer.svg')}}" class="card-img-top" alt="offer">
                          </div>
                          <div class="card-body">
                            <h5 class="card-title text-center fs-4 fw-500">{{ $packag->name }}</h5>
                            <p class="card-text fw-500 text-black text-break"><?php echo Str::limit($packag->small_description,600); ?>
                              <a class="dropdown-item view_all_description" style="    text-decoration: revert;
                              text-align: end;
                              background: unset;
    color: white;" href="#!"
                              data-description="{{ $packag->description }}" data-toggle="modal" data-target="#exampleModal1">@lang('admin.view_all')</a>
                            </p>
                            <ul class="list-unstyled m-0 p-0 name-service">
                              @foreach ($service as $servic)
                              @if ($packag->services->contains($servic->id))
                              <li class="w-100 mb-2 text-center">
                                <div class="icon">
                                  <i class="fa-solid fa-check fs-6"></i>
                                </div>
                                <span>{{ $servic->name }}</span>
                              </li>
                              @endif
                              @endforeach
                            </ul>
                            <div class="postion_customize">
                              <hr>
                              <div class="footer-card">
                                {{-- <div class="icons">
                                  <div class="icon">
                                    <i class="fa-solid fa-check fs-6"></i>
                                  </div>
                                  <div class="icon">
                                    <i class="fa-solid fa-check fs-6"></i>
                                  </div>
                                  <div class="icon">
                                    <i class="fa-solid fa-check fs-6"></i>
                                  </div>
                                </div> --}}
                                <div class="bonus">{{$packag->services->count()}}+</div>
                                <a href="{{url('payment/packeges/' . $packag->id)}}" class="show-service add_attach">@lang('admin.order_now')</a>
                                <h6 class="card-title text-danger text-center mb-0">{{ $packag->price }} $</h6>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
                @endforeach
            </div>
            <div class="row pb-4 pt-2">
                <div class="col-12">
                    {{ $package->links('general-components.admin.paginate') }}
                </div>
            </div>
        </div>
    </div>

</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel"
aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        {{-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> --}}
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><svg aria-hidden="true"
          xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
          stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
          class="feather feather-x">
          <line x1="18" y1="6" x2="6" y2="18"></line>
          <line x1="6" y1="6" x2="18" y2="18"></line>
      </svg></button>
          </div>
      <div class="modal-body" id="view_all_description_4">

      </div>
      {{-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> --}}
    </div>
  </div>
</div>
@endsection
@section('ajax')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script>
$(document).ready(function() {

    @if(isset($orderId))
        var orderId = "{{ $orderId }}";
        if (orderId) {
            $('#loginModal3').modal('show');
            $("#package_id1").val("{{ $orderId }}");
        }
    @endif

    $('#form_order').on('submit', function(e) {
        e.preventDefault();
        $('#btnSubmit').attr("disabled", true);
        var formData = new FormData(this);
        var opError = " ";

        $.ajax({
            url: `{{ url('profile/packageorders') }}`,
            type: 'POST',
            data: formData,
            beforeSend: function () {
                $('#loader').removeClass('d-none');
            },
            success: function(result) {
                //console.log(result);
                $('#btnSubmit').attr("disabled", false);
                $("#form_order")[0].reset();
                $('.alterErrorletter').html(" ");
                $('#loginModal3').modal('hide');
                swal(result.success, {
                    icon: "success",
                });
                var redirectUrl = "{{ url('payment/packeges') }}/" + order_id_new;
                window.location.href = redirectUrl;
            },
            cache: false,
            contentType: false,
            processData: false,
            error: function(errorsub) {
                $('#btnSubmit').attr("disabled", false);
                if (errorsub) {
                    if (errorsub.responseJSON.errors.description_cust) {
                        opError += '<div class="alert alert-danger">' +
                            errorsub.responseJSON.errors.description_cust + '</div>';
                    } else if (errorsub.responseJSON.errors.file) {
                        opError += '<div class="alert alert-danger">' +
                            errorsub.responseJSON.errors.file + '</div>';
                    }
                    $('.alterErrorletter').html(" ");
                    $('.alterErrorletter').append(opError);
                }
            },
            complete: function () {
                $('#loader').addClass('d-none');
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
