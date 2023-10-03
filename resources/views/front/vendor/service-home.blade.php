@if (!empty($service))
    <!-- Start Services -->
    <section class="services">
        <div class="container">
            <!-- Start Main Title -->
            <div class="d-flex flex-column align-items-center justify-content-center mb-4">
                <h2 class="main-title text-white">@lang('messages.service')</h2>
                <div class="d-flex align-items-center">
                    <p class="text-center mt-5 mb-5" style="width: 380px;color:#C5CAE6;">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى</p>
                    <a href="{{ route('service') }}" class="text-left" style="color:#E8B654;position: absolute;left:70px;">عرض الكل</a>
                </div>
            </div>
            <!-- End Main Title -->

            <!-- Start  Boxes -->
            <div class="owl-carousel owl-theme" id="item">

                @foreach ($service as $servic)
                    <div class="row item" >
                        <div class="col-sm-12 col-md-6 col-lg-4 d-flex item w-100 " style="height:100%;width:100%;">

                            <div class="box-service mt-3 d-flex" >
                                <div class="card-service">

                                    <div class="d-flex justify-content-center py-3">
                                        @if ($servic->img)
                                            <img src="{{ asset($servic->img) }}" style="width:90px;height:80px;" alt="services">
                                        @else
                                            <img src="{{ asset('assets/images/services/Group 335.svg') }}" style="width: auto;" alt="services">
                                        @endif
                                    </div>
                                    <div class="card-title text-center mb-3">
                                        <p>{{ $servic->name }}</p>
                                    </div>
                                    <p class="card-text mx-4 mb-3"><?php echo Str::limit($servic->small_description, 600); ?></p>
                                    <hr />
                                    <div class="rating-service">
                                        <div class="d-flex">
                                            <img src="{{ asset('assets/images/services/Star 3.svg') }}" alt="rating">
                                            <p>4.9</p>
                                        </div>
                                        <a href="" class="service-btn-home">عرض التفاصيل</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- End  Boxes -->


            <!-- Start All offer -->
            {{--<h6 class="card-title text-center text-warning mb-0 fs-4 fw-500">{{ $servic->price }} $</h6> --}}
            {{-- <a class="dropdown-item view_all_description" style="text-decoration: revert;text-align: end;" href="#!"data-description="{{ $servic->description }}" data-bs-toggle="modal" data-bs-target="#exampleModal1">@lang('admin.view_all')</a> --}}
            <!-- End All offer -->

    </section>



    <!-- End Services -->
    <!-- Modal -->
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    {{-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> --}}
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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

@endif
@section('ajax')
<script>
$(document).ready(function(){
    $("#item").owlCarousel({
        nav: true,
        loop: true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:3  // Set the number of items to 3 for screen size 1000px and above
            }
        }
    }).trigger('refresh.owl.carousel');  // Refresh the carousel to apply the changes
});

</script>
@endsection

