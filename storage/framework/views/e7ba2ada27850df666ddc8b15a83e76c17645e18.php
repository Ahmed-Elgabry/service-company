<?php if(!empty($service)): ?>

    <!-- Start Login -->
    <section class="popup-login">
        <div class="overlay"></div>

        <div class="content">
            <div class="close-btn"><i class="fa-solid fa-xmark"></i></div>

            <div class="inside-content">
                <div class="img">
                    <div class="d-flex justify-content-start py-3">
                        <h4>تسجيل الدخول</h4>
                    </div>
                </div>

                <p style="height:20px;">
                    هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى
                </p>

                <div class="content-modal">
                    <div class="col-md-6">
                        <div class="py-5">
                            <div class="">
                                <form method="POST" action="<?php echo e(route('login')); ?>">
                                    <?php echo csrf_field(); ?>
                                    <div class="mb-3">
                                        <input type="email" name="email"
                                            class="email-input <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="email"
                                            placeholder="البريد الالكتروني" value="<?php echo e(old('email')); ?>" required
                                            autocomplete="email" autofocus>
                                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                        <?php else: ?>
                                            <?php if(session('error')): ?>
                                                <span class="badge badge-danger" style="background-color:#dc3545;">
                                                    <strong><?php echo e(session('error')); ?></strong>
                                                </span>
                                            <?php endif; ?>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                                    </div>

                                    <div class="mb-3 position-relative">
                                        <input type="password" name="password"
                                            class="password-input <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                            id="password" placeholder="كلمة المرور" required
                                            autocomplete="current-password">
                                        <i class="far fa-eye toggle-password" id="togglePassword"
                                            onclick="togglePasswordVisibility()"></i>

                                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>

                                    <div class="text-forget-password">
                                        <div class="text-right">
                                            <input type="checkbox" name="remember" id="remember"
                                                <?php echo e(old('remember') ? 'checked' : ''); ?>>
                                            <label for="remember"
                                                style="color: #A5A5A5; text-align: left; font-size: 14px; font-family: Tajawal; font-style: normal; font-weight: 500; line-height: normal;">
                                                تذكرني
                                            </label>
                                        </div>
                                        <div class="text-left">
                                            <?php if(Route::has('password.request')): ?>
                                                <a class="" href="<?php echo e(route('password.request')); ?>">
                                                    هل نسيت كلمة المرور ؟
                                                </a>
                                            <?php endif; ?>
                                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($message); ?></strong>
                                                </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>

                                    <button type="submit" class="submit-btn mt-3">إرسال</button>
                                </form>
                            </div>

                            <div class="create-account d-flex text-center ">
                                <p class="">لا تملك حساب ؟</p>
                                <a href="<?php echo e(route('register')); ?>" class="create-btn">إنشاء حساب</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Login -->

    <!-- Start Register -->
    <section class="popup-register">
        <div class="overlay"></div>

        <div class="content">
            <div class="close-btn"><i class="fa-solid fa-xmark"></i></div>

            <div class="inside-content">
                <div class="img">
                    <div class="d-flex justify-content-start py-3">
                        <h4>إنشاء حساب</h4>
                    </div>
                </div>

                <p style="height:20px;">
                    هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى
                </p>

                <div class="content-modal">
                    <div class="col-md-6">
                        <div class="py-5">
                            <div class="">
                                <form method="POST" action="<?php echo e(route('register')); ?>">
                                    <?php echo csrf_field(); ?>
                                    <div class="mb-3">
                                        <div class="">
                                            <input type="text" name="firstname" value="<?php echo e(old('firstname')); ?>"
                                                class="firstname-input <?php $__errorArgs = ['firstname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                id="floatingName" placeholder="اسم المستخدم">

                                            <?php $__errorArgs = ['firstname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($message); ?></strong>
                                                </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>

                                    </div>

                                    <div class="">
                                        <input type="email" name="email" value="<?php echo e(old('email')); ?>"
                                            class="email-input <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                            id="floatingPassword" placeholder="البريد الإلكتروني">

                                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>

                                    <div class="mb-3 position-relative">
                                        <input type="password" name="password" value="<?php echo e(old('password')); ?>"
                                            class="password-input <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                            id="password" placeholder="كلمة المرور">

                                        <i class="far fa-eye toggle-password" id="togglePassword"
                                            onclick="togglePasswordVisibility()"></i>

                                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>


                                    <div class="mb-3 position-relative">
                                        <input type="password" value="<?php echo e(old('firstname')); ?>"
                                            name="password_confirmation" class="password-input" id="password-confirm"
                                            placeholder=" تأكيد كلمة السر ">
                                        <i class="far fa-eye toggle-password" id="togglePassword-confirm"
                                            onclick="togglePasswordVisibilityconfirm()"></i>
                                    </div>


                                    <button type="submit" class="submit-btn mt-3">إرسال</button>
                                </form>
                            </div>

                            <div class="create-account d-flex text-center ">
                                <p class="">هل تملك حساب بالفعل ؟</p>
                                <a href="<?php echo e(route('login')); ?>" class="create-btn">تسجيل الدخول</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Register -->

    <!-- Modal pop login -->
    <div class="pop-error-login" id="myModal">
        <div class="overlay"></div>
        <div class="content-pop-login">
            <div class="close-btn">
                <i class="fa-solid fa-xmark"></i>
            </div>
            <div class="content-main-login-service">
                <img src="<?php echo e(asset('assets/images/تنبيه.svg')); ?>" class="mb-3" alt="warning">
                <h3>عنوان</h3>
                <p>تفاصيل الخدمة تفاصيل تفاصيلتفاصيل تفاصيل تفاصيل تفاصيل</p>
                <div class="login-btn-warning">
                    <a href="<?php echo e(route('login')); ?>">سجل الان</a>
                </div>
                <div class="close-btn-warning">
                    <a>الغاء</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal pop login -->

    <!-- Modal pop pursher -->
    <div class="popup-service" id="popup-2">
        <div class="overlay"></div>
        <div class="content">
            <div class="close-btn"><i class="fa-solid fa-xmark"></i></div>

            <div class="img">
                <div class="d-flex justify-content-center py-3">
                    <img src="<?php echo e(asset('assets/images/services/Group 335 (1).svg')); ?>" style="width: 140px;height: 120px;" alt="packages">
                </div>
            </div>

            <h4 id="genral-title-service" class="mb-3"></h4>

            <div class="content-modal d-flex justify-content-center align-items-center mb-3">
                <div class="">
                    <p class="text-rateing-packag-right">(12)</p>
                </div>
                <div class="img center">
                    <img src="<?php echo e(asset('assets/images/packages/Group 1000001491.svg')); ?>" alt="img">
                </div>
                <div class="">
                    <p class="text-rateing-packag-left">4.9</p>
                </div>

            </div>

            <p id="text-info-service"></p>

            <div id="box-services-service">
            </div>

            <div class="price mt-4" id="price-service">
            </div>

            <div class="btn-all">

                <?php if(auth()->guard()->check()): ?>
                    <div class="btn-pricing mt-4 d-flex justify-content-center align-items-center">
                        <a href="#">شراء</a>
                    </div>
                <?php else: ?>
                    <div class="btn-pricing mt-4 d-flex justify-content-center align-items-center">
                        <a id="loginButtonservice">شراء</a>
                    </div>
                <?php endif; ?>

                <div class="btn-cancle mt-4 d-flex justify-content-center align-items-center">
                    <a>الغاء</a>
                </div>

            </div>
        </div>
    </div>
    <!-- Modal -->

    <!-- start head -->
    <section class="head-pages custmoe-nav-bar">
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-expand-lg  navbar-custom">
                    <a class="navbar-brand" href="https://iquick.site/home"><img
                            src="<?php echo e(asset('assets/images/icon-main.svg')); ?>" alt="logo"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav text-center mx-md-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link nav-link-coustom" aria-current="page"
                                    href="<?php echo e(route('home')); ?>"><?php echo app('translator')->get('messages.home'); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-link-coustom me-0 me-md-3 me-lg-4"
                                    href="<?php echo e(route('home')); ?>#advantages"><?php echo app('translator')->get('messages.advantages'); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-link-coustom me-0 me-md-3 me-lg-4 nav-active"
                                    href="<?php echo e(route('package')); ?>"><?php echo app('translator')->get('messages.package'); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-link-coustom me-0 me-md-3 me-lg-4"
                                    href="<?php echo e(url('services')); ?>"><?php echo app('translator')->get('messages.service'); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-link-coustom me-0 me-md-3 me-lg-4"
                                    href="<?php echo e(route('home')); ?>#contact-us"><?php echo app('translator')->get('messages.contact'); ?> </a>
                            </li>
                        </ul>
                        <?php if(auth()->guard()->guest()): ?>
                            <?php if(Route::has('login')): ?>
                                <div class="d-flex justify-content-center">
                                    <a class="btn nav-btn_sign_now" id="nav-btn_sign_now"><?php echo app('translator')->get('messages.Login'); ?></a>
                                </div>

                                <div class="d-flex justify-content-center">
                                    <a class="btn nav-btn_signup_now" id="nav-btn_signup_now">سجل الآن</a>
                                </div>
                            <?php endif; ?>
                        <?php else: ?>
                            <?php if(Auth::user()->type == 'admin'): ?>
                                <div class="d-flex justify-content-center">
                                    <a href="<?php echo e(route('admin.dash')); ?>"
                                        style="    color: white;
                              font-size: 21px;"
                                        target="blank" class="search-button mx-3"> <i class="fas fa-home"></i>
                                    </a>
                                </div>
                            <?php else: ?>
                                <div class="d-flex justify-content-center">
                                    <a href="<?php echo e(route('user.profile')); ?>"
                                        style="    color: white;
                              font-size: 21px;"
                                        target="blank" class="search-button mx-3"> <i class="fas fa-user"></i>
                                    </a>
                                </div>
                            <?php endif; ?>
                            <div class="d-flex justify-content-center">
                                <a class="dropdown-item search-button"
                                    style="    color: white;
                            font-size: 21px;"
                                    href="<?php echo e(route('logout')); ?>"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="fa fa-sign-out-alt"></i>
                                </a>

                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST"
                                    class="d-none">
                                    <?php echo csrf_field(); ?>
                                </form>
                            </div>
                        <?php endif; ?>


                        
                    </div>
                </nav>
            </div>
        </div>
    </section>
    <!-- end head -->

    <!-- Start Services -->
    <section class="services" style="margin-top: 150px;">
        <div class="container">

            <!-- Start Main Title -->
            <div class="d-flex flex-column align-items-center justify-content-center mb-4">
                <h2 class="main-title text-white"><?php echo app('translator')->get('messages.service'); ?></h2>
                <div class="d-flex align-items-center">
                    <p class="text-center mt-5 mb-5" style="width: 380px;color:#C5CAE6;">هذا النص هو مثال لنص يمكن أن
                        يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى</p>
                </div>
            </div>
            <!-- End Main Title -->

            <form action="<?php echo e(route('search/services')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <div class="search-bar">
                    <div class="search-container">
                        <input type="search" name="name" name="search" class="serach-input"
                            placeholder="ابحث هنا ...">
                        <button class="search-btn">بحث</button>
                    </div>
                </div>
            </form>

            <!-- Start  Boxes -->
            <div class="container mt-4">
                <div class="row">
                    <?php $__currentLoopData = $service; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $servic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-sm-12 col-md-6 col-lg-4 d-flex">
                            <div class="box-service box-service-page mt-3 d-flex">
                                <div class="card-service">
                                    <div class="d-flex justify-content-center py-3">
                                        <?php if($servic->img): ?>
                                            <img src="<?php echo e(asset($servic->img)); ?>" style="width:90px;height:80px;"
                                                alt="services">
                                        <?php else: ?>
                                            <img src="<?php echo e(asset('assets/images/services/Group 335.svg')); ?>"
                                                style="width: auto;" alt="services">
                                        <?php endif; ?>
                                    </div>
                                    <div class="card-title text-center mb-3">
                                        <p><?php echo e($servic->name); ?></p>
                                    </div>
                                    <p class="card-text mx-4 mb-3"><?php echo Str::limit($servic->small_description, 600); ?></p>
                                    <br>
                                    <hr />
                                    <div class="under-service">

                                        <div class="rating-service">
                                            <div class="d-flex">
                                                <img src="<?php echo e(asset('assets/images/services/Star 3.svg')); ?>"
                                                    alt="rating">
                                                <p>4.9</p>
                                            </div>
                                            <a href="javascript:void(0)" class="service-btn-home" id="service-btn-home"
                                                data-url="<?php echo e(route('get.details.services', $servic->id)); ?>">عرض
                                                التفاصيل</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            <!-- End  Boxes -->
        </div>
    </section>
    <!-- End Services -->

<?php endif; ?>

<?php $__env->startSection('ajax_front'); ?>
    <script type="text/javascript">

        $(document).ready(function() {

            function hideModal(modalId) {
                $(modalId).removeClass('active');
            }

            function showmodal(modalId) {
                var modal = $(modalId);
                modal.addClass('active');
            }

            $('body').on('click', '#service-btn-home', function() {
                var servicesURL = $(this).data('url');
                $.get(servicesURL, function(data) {
                    showmodal('#popup-2' );
                    $('#genral-title-service').text(data.name);
                    $('#text-info-service').text(data.description);

                    var price = $('#price-service');
                    price.empty();

                    var priceItem = $('<p class="price-title">  السعر</p> ');
                    var priceText = $('<p class="text-center pricing"></p>').text(data.price + '$');
                    price.append(priceItem);
                    price.append(priceText);
                });
            });

        });

        const loginButton = document.getElementById('loginButtonservice');
        const modal = document.querySelector('.pop-error-login');
        const poppackage = document.querySelector('.popup-service');
        const xbtnpopuppackage = document.querySelector('.popup-service .content .close-btn');
        const xbtnpopuppackage1 = document.querySelector('.popup-service .content .btn-all .btn-cancle');
        const overlypackage1 = document.querySelector('.popup-service .overlay');

        loginButton.addEventListener('click', showModal);
        xbtnpopuppackage.addEventListener('click', hideModalPackage);
        xbtnpopuppackage1.addEventListener('click', hideModalPackage);
        overlypackage1.addEventListener('click', hideModalPackage);

        function hideModalPackage() {
            poppackage.classList.remove('active');
        }

        function showModal() {
            const isLoggedIn = checkLoginStatus();

            function checkLoginStatus() {
                return false;
            }

            if (!isLoggedIn) {
                modal.classList.add('modal-show');
            } else {
                window.location.href = event.target.href;
            }
        }

        const closeButton = document.querySelector('.pop-error-login .close-btn-warning');
        const closeButtonx = document.querySelector('.pop-error-login .content-pop-login .close-btn');
        closeButton.addEventListener('click', hideModalLogin);
        closeButtonx.addEventListener('click', hideModalLogin);

        function hideModalLogin() {
            modal.classList.remove('modal-show');
        }

        const popservice = document.querySelector('.popup-service');
        const closeButtonservice = document.querySelector('.popup-service .content .close-btn');
        const closeButtonxservice = document.querySelector('.popup-service .content .btn-all .btn-cancle');
        const overlayservice = document.querySelector('.popup-service .overlay');

        closeButtonservice.addEventListener('click', hideservice);
        closeButtonxservice.addEventListener('click', hideservice);
        overlayservice.addEventListener('click', hideservice);

        function hideservice() {
            popservice.classList.remove('active');
        }
    </script>

<?php $__env->stopSection(); ?>
<?php /**PATH D:\public_html\resources\views/front/vendor/service.blade.php ENDPATH**/ ?>