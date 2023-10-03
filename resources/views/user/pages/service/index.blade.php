@extends('user.master')


@section('title', __('admin.services'))

@section('page-title', __('admin.view_all'))
@section('css')
    <style>
        /* Start Services */
        .services.dark {
            background-color: transparent;
            color: #ffffff;
            margin-bottom: 100px;
        }

        .services.dark .main-title::after {
            background-color: #a5a5a5;
        }

        .services .box {
            width: 100% !important;
        }

        .services .box .card {
            background-color: #fff !important;
            background-clip: border-box !important;
            height: 100% !important;
            padding-bottom: 60px !important;
        }

        .services .box .card {
            background-color: #191e3a !important;
            color: #ffffff !important;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.25);
            border-radius: 12.5px;
            transform: scale(1.02);
        }

        .services .box .card-text {
            font-weight: 400;
            font-size: 19px;
        }

        .services .box .card {
            transition: 0.3s ease-in-out;
            overflow: hidden;
        }

        .services .box .card-title {
            font-size: 20px;
            font-weight: 500;
            margin: 0 10px
        }

        .services .service-btn {
            border: 1px solid #ffffff;
            border-radius: 10px;
            padding: 5px 10px;
            cursor: pointer;
            transform: translateY(120%);
            color: #ffffff;
            background-color: transparent;
            display: block;
            transition: 0.3s ease-in-out;
        }

        .services .box .service-btn {
            transform: translateY(0);
        }

        .services .all-offer a {
            color: #ffffff !important;
        }

        .services .all-offer i,
        .services .all-offer svg,
        .services .all-offer path {
            color: #ffffff !important;
        }

        .postion_customize {
            position: absolute !important;
            bottom: 5px;
            right: 0;
            left: 0;
        }

        /* End Services */
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
    <div class="modal fade login-modal" id="loginModal6" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel1"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-header" id="loginModalLabel1">
                    <h4 class="modal-title">@lang('admin.order_now')</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><svg aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-x">
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
                        <input type="hidden" name="service_id" value="@isset($orderId){{ $orderId }} @endisset" />
                        <div class="col-12 mb-4">
                            {{-- <label>@lang('admin.description')</label> --}}
                            <textarea type="text" name="description_cust" class="form-control">{{ old('description_cust') }}</textarea>
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
                <div class="row g-2 services">
                    @foreach ($service as $servic)
                        <div class="col-md-3 col-sm-6 col-12 d-flex">
                            {{-- <div class="card text-center shadow-lg p-3 mb-5 bg-body rounded" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $servic->name }}</h5>
                            <h6 class="card-title text-warning">{{ $servic->price }} $</h6>
                            <a href="#" class="btn btn-primary add_attach" data-id="{{ $servic->id }}"
                                data-toggle="modal" data-target="#loginModal6">@lang('admin.order_now')</a>
                        </div>
                    </div> --}}
                            <div class="box mt-4">
                                <div class="card">
                                    <div class="d-flex justify-content-center py-3">
                                        <img src="{{ asset('./assets/images/services/services.svg') }}" class=""
                                            alt="services">
                                    </div>
                                    <div class="card-title text-center mb-3 fs-4 fw-500">
                                        {{ $servic->name }}
                                    </div>
                                    <p class="card-text mx-2 fs-4 fw-500"><?php echo Str::limit($servic->small_description, 600); ?>
                                        <a class="dropdown-item view_all_description"
                                            style="    text-decoration: revert;
                            text-align: end;
                            background: unset;
         color: white;"
                                            href="#!" data-description="{{ $servic->description }}" data-toggle="modal"
                                            data-target="#exampleModal1">@lang('admin.view_all')</a>
                                    </p>
                                    <div class="postion_customize">
                                        <div class="text-success">
                                            <hr />
                                        </div>
                                        <div class="d-flex flex-wrap pb-2 justify-content-between mx-2">
                                            <a href="{{url('payment/service/' . $servic->id)}}" class="service-btn add_attach">@lang('admin.order_now')</a>
                                            <h6 class="card-title text-center text-warning mb-0 fs-4 fw-500">
                                                {{ $servic->price }} $</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="row pb-4 pt-2">
                    <div class="col-12">
                        {{ $service->links('general-components.admin.paginate') }}
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
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><svg
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
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
                $('#loginModal6').modal('show');
                $("#service_id1").val(orderId);
            }
        @endif


    $('#form_order').on('submit', function(e) {
        e.preventDefault();
        $('#btnSubmit').attr("disabled", true);
        var formData = new FormData(this);
        var opError = " ";



        var self = this;

        $.ajax({
            url: "{{ url('profile/serviceorders') }}",
            type: 'POST',
            data: formData,
            beforeSend: function() {
                $('#loader').removeClass('d-none')
            },
            success: function(result) {
                $('#btnSubmit').attr("disabled", false);
                $(self)[0].reset();
                $('.alterErrorletter').html(" ");
                $('#loginModal6').modal('hide');
                swal(result.success, {
                    icon: "success",
                });

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
                    complete: function() {
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
