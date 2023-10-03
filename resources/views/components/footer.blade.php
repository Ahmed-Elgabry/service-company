@if (!empty($setting))
<footer class="end-page">
  <div class="container">
    <div class="end-page_image me-4">
      <img src="<?php if($setting->footer_logo!=null): echo asset('storage/images/settings/footer_logo/'.$setting->footer_logo);  else: echo asset('./assets/images/logo.png'); endif; ?>" alt="logo">
    </div>
    <div class="mt-4">
      <div class="row">
        <div class="col-lg-5">
          <p class="text-sm-center  mb-3 text-start"><?php echo $setting->about_us; ?></p>
        </div>
        <div class="col-lg-4">
          <x-nav-footer/>
        </div>
        <div class="col-lg-3">
          <div class="social mb-3 ">
            <a href="{{$setting->facebook}}" class="social-item">
              <i class="fab fa-facebook-f fa-xl"></i>
            </a>
            <a href="{{$setting->Linkedin}}" class="social-item">
              <i class="fa-brands fa-linkedin-in fa-xl"></i>
            </a>
            <a href="{{$setting->twitter}}" class="social-item">
              <i class="fa-brands fa-twitter fa-xl"></i>
            </a>
            <a href="{{$setting->insta}}" class="social-item">
              <i class="fa-brands fa-instagram fa-xl"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- End Footer -->
@endif
  