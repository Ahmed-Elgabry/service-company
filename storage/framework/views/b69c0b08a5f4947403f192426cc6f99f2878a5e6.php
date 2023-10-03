<?php $__env->startSection('title', $page->name); ?>

<?php $__env->startSection('title_breadcrumb', $page->name); ?>

<?php $__env->startSection('content'); ?>

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
                                    <a class="nav-link nav-link-coustom me-0 me-md-3 me-lg-4"
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

    <section style="margin-bottom: 20px; margin-top: 20px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h2 class="title mb-0 text-light"><?php echo e($page->name); ?></h2>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-12 col-md-12 text-light">
                    <div><?php echo $page->content; ?></div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\public_html\resources\views/front/pages/page.blade.php ENDPATH**/ ?>