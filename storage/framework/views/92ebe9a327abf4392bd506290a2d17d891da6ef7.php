<?php $__env->startSection('title', __('messages.home')); ?>


<?php $__env->startSection('section-here'); ?>

        <!-- Start  Carousel -->
    <section class="head-carousel">
      <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner  carousel_inner">
          <div class="carousel-item active carousel_item">
            <div></div>
            <div class="login-container">
              <div class="login-btn">
                <a href="<?php echo e(route("login")); ?>">تسجيل الدخول</a>
              </div>
            </div>
          </div>
          <div class="carousel-item carousel_item">
            <div class="login-container">
              <div class="login-btn">
                <a href="<?php echo e(route("login")); ?>">تسجيل الدخول</a>
              </div>
            </div>
          </div>
          <div class="carousel-item carousel_item">
            <div class="login-container">
              <div class="login-btn">
                <a href="<?php echo e(route("login")); ?>">تسجيل الدخول</a>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev d-none d-md-flex" type="button" data-bs-target="#carouselExampleIndicators"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next d-none d-md-flex" type="button" data-bs-target="#carouselExampleIndicators"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>
    <!-- End Carousel -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<!-- Start Advantages -->
<section class="advantages" id="advantages">
    <div class="container">
      <div class="container-main-title">
        <h2 class="main-title advantages-title">مميزاتنا</h2>
      </div>
      <div class="row">
        <div class="col-sm-12 col-lg-6 d-flex justify-content-center">
          <div class="box my-4 d-flex align-items-center  justify-content-center gap-1 w-75">
            <div class="icon">
              <div class="icon-contianer">
                <i class="fa-solid fa-check fs-4"></i>
              </div>
            </div>
            <div class="right">
              <div class="card">
                <div class="card-title pe-3">الدقة</div>
                <p class="m-0 pe-3">تفاصيل تفاصيل</>
                <p class="text-muted m-0 pe-3">تفاصيل تفاصيل</p>
              </div>
            </div>
            <div class="left">
              <div class="card">
                <div class="card-body">
                  <div class="img-container">
                    <img src="assets/images/advantages/target 1.svg" alt="target width=" 80px" height="80px" 1">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-lg-6 d-flex justify-content-center">
          <div class="box my-4 d-flex align-items-center  justify-content-center gap-1 w-75">
            <div class="icon">
              <div class="icon-contianer">
                <i class="fa-solid fa-check fs-4"></i>
              </div>
            </div>
            <div class="right">
              <div class="card">
                <div class="card-title pe-3">السرعة</div>
                <p class="m-0 pe-3">تفاصيل تفاصيل</p>
                <p class="text-muted m-0 pe-3">تفاصيل تفاصيل</p>
              </div>
            </div>
            <div class="left">
              <div class="card">
                <div class="card-body">
                  <div class="img-container">
                    <img src="assets/images/advantages/fast-time.svg" alt="fast-time" width="80px" height="80px">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col d-flex justify-content-center">
          <div class="box my-4 d-flex justify-content-center align-items-center gap-1 w-75">
            <div class="icon">
              <div class="icon-contianer">
                <i class="fa-solid fa-check fs-4"></i>
              </div>
            </div>
            <div class="right">
              <div class="card">
                <div class="card-title pe-3">متابعة العميل</div>
                <p class="m-0 pe-3">تفاصيل تفاصيل</p>
                <p class="text-muted m-0 pe-3">تفاصيل تفاصيل</p>
              </div>
            </div>
            <div class="left">
              <div class="card">
                <div class="card-body">
                  <div class="img-container">
                    <img src="assets/images/advantages/contact.svg" width="80px" height="80px" alt="contact">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Advantages -->
<?php echo $__env->make("front.vendor.package-home", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make("front.vendor.service-home", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <!-- Start Contact Us -->
  <section class="contact-us" id="contact-us">
    <div class="container">
      <div class="main-title"><?php echo app('translator')->get('messages.contact'); ?></div>
      <div class="row align-items-center">
        <div class="col-md-6">
          <div class="mt-5">
            <form id="contact_form" method="post">
              <div class="mb-3">
                <input type="text" id="name" placeholder="الإسم" class="form-control" id="exampleInputEmail1"
                  aria-describedby="emailHelp">
                  <div id="invalid-feedback1" class="badge bg-danger"></div>
              </div>
              <div class="mb-3">
                <input type="email" id="email" placeholder="البريد الإلكتروني" class="form-control" id="exampleInputEmail1"
                  aria-describedby="emailHelp">
                  <div id="invalid-feedback3" class="badge bg-danger"></div>
              </div>
              <div class="mb-3">
                <input type="text" id="phone" placeholder="رقم الهاتف" class="form-control" id="exampleInputEmail1"
                  aria-describedby="emailHelp">
                  <div id="invalid-feedback2" class="badge bg-danger"></div>
              </div>
              <textarea class="form-control" id="message" placeholder="محتوى الرسالة" id="floatingTextarea2"
                style="height: 100px"></textarea>
                <div id="invalid-feedback4" class="badge bg-danger"></div>
                <div class="spinner-border text-success mt-2 d-none" role="status">
                  <span class="visually-hidden">Loading...</span>
                </div>
              <button type="submit" class="btn bg-input w-100 text-white mt-3">إرسال</button>
            </form>
          </div>
        </div>
        <div class="col-md-6 d-none d-md-block">
          <img src="./assets/images/contact-us/contact-us.png" class="img-fluid" alt="contact-us">
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact Us -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('ajax_front'); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <script>
        $('#contact_form').on('submit', function(e) {
            e.preventDefault();
            $("#btnSubmit").attr("disabled", true);
            const name = $('#name').val();
            const email = $('#email').val();
            const phone = $('#phone').val();
            const message = $('#message').val();
            $.ajax({
                url: `<?php echo e(url('contactstore')); ?>`,
                type: "post",
                data: {
                    "_token": "<?php echo e(csrf_token()); ?>",
                    name: name,
                    email: email,
                    phone: phone,
                    message: message,
                },
                beforeSend: function () {
                $('.spinner-border').removeClass('d-none')
            },
                success: function(result) {
                    //console.log(result);
                    $("#btnSubmit").attr("disabled", false);
                    swal(result.success, {
                        icon: "success",
                    });
                    $("#contact_form")[0].reset();
                    $('#invalid-feedback1').text('');
                    $('#invalid-feedback2').text('');
                    $('#invalid-feedback3').text('');
                    $('#invalid-feedback4').text('');
                },
                error: function(errorsub) {
                    $("#btnSubmit").attr("disabled", false);
                    if (errorsub) {
                        if (errorsub.responseJSON.errors.name) {
                            $('#invalid-feedback1').text('');
                            $('#invalid-feedback1').append(errorsub.responseJSON.errors.name);
                        }else{
                            $('#invalid-feedback1').text('');
                        }
                        if (errorsub.responseJSON.errors.email) {
                            $('#invalid-feedback2').text('');
                            $('#invalid-feedback2').append(errorsub.responseJSON.errors.email);
                        }else{
                            $('#invalid-feedback2').text('');
                        }
                        if (errorsub.responseJSON.errors.phone) {
                            $('#invalid-feedback3').text('');
                            $('#invalid-feedback3').append(errorsub.responseJSON.errors.phone);
                        }else{
                            $('#invalid-feedback3').text('');
                        }
                        if (errorsub.responseJSON.errors.message) {
                            $('#invalid-feedback4').text('');
                            $('#invalid-feedback4').append(errorsub.responseJSON.errors.message);
                        }else{
                            $('#invalid-feedback4').text('');
                        }
                    }
                },
            complete: function () {
                $('.spinner-border').addClass('d-none')
            },
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Ahmed\Desktop\public_html\resources\views/front/pages/home.blade.php ENDPATH**/ ?>