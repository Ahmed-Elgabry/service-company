@include('front.layouts.head')
<!-- preloader start -->
<header>
    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/6495e88b94cf5d49dc5f7d5e/1h3kp8oem';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
const checkbox = document.getElementById("checkbox")
checkbox.addEventListener("change", () => {
  document.body.classList.toggle("dark")
})
</script>
<!--End of Tawk.to Script-->
    <!-- Start Navbar -->
    {{-- <div class="header-section">
        <nav class="navbar  navbar-expand-lg  navbar-custom ">
            <div class="container">
              <x-header/>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav text-center mx-md-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link nav-link-coustom " aria-current="page" href="{{route("home")}}">@lang('messages.home')</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link nav-link-coustom me-0 me-md-3 me-lg-4" href="{{route("home")}}#advantages">@lang('messages.advantages')</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link nav-link-coustom me-0 me-md-3 me-lg-4" href="{{route("package")}}">@lang('messages.package')</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link nav-link-coustom me-0 me-md-3 me-lg-4" href="{{url("services")}}">@lang('messages.service')</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link nav-link-coustom me-0 me-md-3 me-lg-4" href="{{route("home")}}#contact-us">@lang('messages.contact')</a>
                  </li>
                </ul>
                @guest
                    @if (Route::has('login'))
                    <div class="d-flex justify-content-center">
                        <a class="btn nav-btn_sign_now" href="{{ route('login') }}">@lang('messages.Login')</a>
                    </div>
                    @endif
                @else
                    @if (Auth::user()->type == 'admin')
                    <div class="d-flex justify-content-center">
                        <a href="{{ route('admin.dash') }}" style="    color: white;
                        font-size: 21px;" target="blank" class="search-button mx-3"> <i
                                class="fas fa-home"></i>
                        </a>
                    </div>
                    @else
                    <div class="d-flex justify-content-center">
                        <a href="{{ route('user.profile') }}" style="    color: white;
                        font-size: 21px;" target="blank" class="search-button mx-3"> <i
                                class="fas fa-user"></i>
                        </a>
                    </div>
                    @endif
                    <div class="d-flex justify-content-center">
                      <a class="dropdown-item search-button" style="    color: white;
                      font-size: 21px;" href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                          <i class="fa fa-sign-out-alt"></i>
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                      </form>
                    </div>
                @endguest
                {{-- <div class="d-flex justify-content-center">
                  <a href="{{route("login")}}" class="btn nav-btn_sign_now">سجل الآن</a>
                </div> --}}
              {{-- </div>
            </div>
          </nav>
    </div> --}}

    <!-- End Navbar -->

    <!-- Start  Carousel -->
    @yield('section-here')
    <!-- End Carousel -->
</header>
