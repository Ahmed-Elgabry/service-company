@if (!empty($service))
     <!-- Start Packages -->
 <section class="services dark py-5">
  <div class="container">
    <div class="d-flex flex-column align-items-center justify-content-center">
      <h2 class="main-title packages-title text-white">@lang('messages.service')</h2>
      <h2 class="w-50 text-center lh-base"> تفاصيل تفاصيل تفاصيل تفاصيل تفاصيل تفاصيل
        تفاصيل تفاصيل تفاصيل تفاصيل</h2>
    </div>
    <form action="{{route("search/services")}}" method="post">
      @csrf
    <div class="search-bar">
      <div class="search-container">
        <input type="search" name="name" name="search" class="serach-input" placeholder="بحث عن خدمة أو باقة">
        <button class="search-btn">بحث</button>
      </div>
    </div>
    </form>
    <div class="title">الخدمات المتاحة</div>
    <!-- Start  Boxes -->
    <div class="row ">
      @foreach ($service as $servic)
      <div class="col-sm-12  col-md-6 col-lg-3 col-lg_custom-3 d-flex">
        <div class="box mt-3">
          <div class="card">
            <div class="d-flex justify-content-center py-3">
              <img src="{{asset('./assets/images/services/services.svg')}}" class="" alt="services">
            </div>
            <div class="card-title text-center mb-3">
              {{$servic->name}}          
                </div>
            <p class="card-text mx-2"><?php echo Str::limit($servic->small_description,600); ?>
              <a class="dropdown-item view_all_description" style="    text-decoration: revert;
              text-align: end;" href="#!"
              data-description="{{ $servic->description }}" data-bs-toggle="modal" data-bs-target="#exampleModal2">@lang('admin.view_all')</a>
            </p>
            <div class="postion_customize">
                <div class="text-success">
                  <hr />
                </div>
                <div class="d-flex flex-wrap pb-2 justify-content-between mx-3">
                  <a href="{{route("user.services")}}" class="service-btn">@lang('admin.add_new_service')</a>
                  <h6 class="card-title text-center text-warning mb-0 fs-4 fw-500">{{ $servic->price }} $</h6>
                </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
  
    </div>
    <!-- End  Boxes -->
  </div>
</section>
<!-- End Packages -->
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