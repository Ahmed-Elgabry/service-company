@if (!empty($package))
<!-- Start Packages -->
<section class="packages py-5">
  <div class="container">
    <div class="d-flex  flex-column align-items-center justify-content-center">
      <h2 class="main-title packages-title">@lang('messages.package')</h2>
      <h2 class="w-50 text-center lh-base"> تفاصيل تفاصيل تفاصيل تفاصيل تفاصيل تفاصيل
        تفاصيل تفاصيل تفاصيل تفاصيل</h2>
    </div>
    <div class="d-flex my-5 align-items-center all-offer justify-content-end">
      <a href="{{route("package")}}">
        عرض جميع الباقات
        <i class="fa-solid fa-chevron-left fa-xs"></i>
      </a>
    </div>

    <div class="owl-carousel owl-theme" id="item">
      @foreach ($package as $packag)
      <div class="item w-100">
        <div class="card">
            <div class="d-flex justify-content-center py-3">
                @if ($packag->img)
                    <img src="{{ asset($packag->img) }}" style="width:90px;height:80px;" alt="services">
                @else
                    <img src="{{ asset('packegs/355994210_1124084965647529_638385616533105195_n.png') }}" style="width:90px;height:80px;"  alt="services">
                @endif
            </div>

          <div class="card-body">
            <h5 class="card-title text-center fs-4 fw-500">{{ $packag->name }}</h5>
            <p class="card-text fw-500 text-black text-break"><?php echo Str::limit($packag->small_description,600); ?>
              <a class="dropdown-item view_all_description" style="    text-decoration: revert;
              text-align: end;" href="#!"
              data-description="{{ $packag->description }}" data-bs-toggle="modal" data-bs-target="#exampleModal1">@lang('admin.view_all')</a>
            </p>
            <ul class="list-unstyled m-0 p-0 name-service">
              @foreach ($package_services as $servic)
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
                <a href="{{route("package")}}" class="show-service">@lang('admin.packages')</a>
                <h6 class="card-title text-danger text-center mb-0">{{ $packag->price }} $</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>


</section>
<!-- End Packages -->
<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
@section('ajax_front')
    <script>
      setInterval(function() {
          $('.view_all_description').on('click', function() {
              const view_all_description1 = $(this).attr("data-description");
              $("#view_all_description_4").text(view_all_description1);
          });
      }, 500);
    </script>
@endsection
