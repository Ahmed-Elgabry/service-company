<?php if(!empty($package)): ?>
    <!-- Start packages -->
    <section class="packages">
        <div class="container">
            <!-- Start Main Title -->
            <div class="d-flex flex-column align-items-center justify-content-center mb-4 ">
                <h2 class="main-title text-white"><?php echo app('translator')->get('messages.package'); ?></h2>
                <div class="d-flex align-items-center text-responsive-packages">
                    <p class="text-center mt-5 mb-5">هذا النص هو مثال لنص يمكن أن
                        يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى</p>
                    <a href="<?php echo e(route('package')); ?>" class="text-left">عرض الكل</a>
                </div>
            </div>
            <!-- End Main Title -->

            <!-- Start  Boxes -->
            <div class="owl-carousel owl-theme container" id="slider-packages">
                <?php $__currentLoopData = $package; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $packag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-4 d-flex item w-100 box-packages">
                            <div class="mt-3 d-flex">
                                <div class="card-packages">
                                    <div class="d-flex justify-content-center py-3">
                                        <?php if($packag->img): ?>
                                            <img src="<?php echo e(asset($packag->img)); ?>" style="width:90px;height:80px;"
                                                alt="packages">
                                        <?php else: ?>
                                            <img src="<?php echo e(asset('assets/images/packages/Group 1000001508.svg')); ?>"
                                                style="width:auto;" alt="packages">
                                        <?php endif; ?>
                                    </div>
                                    <div class="card-title text-center mb-3">
                                        <p><?php echo e($packag->name); ?></p>
                                    </div>

                                    <div class="box-service-package-home">
                                        <ul class="list-unstyled m-0 p-0">
                                            <?php $__currentLoopData = $package_services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $servic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($packag->services->contains($servic->id)): ?>
                                                    <li class="w-100 mb-2 text-center d-flex">
                                                        <div class="icon-packages align-items-start justify-content-start">
                                                            <i class="fa-solid fa-check fs-6"
                                                                style="color:#25d4e3;"></i>
                                                        </div>
                                                        <span class="align-items-center justify-content-start text-packges-card-home"><?php echo e($servic->name); ?></span>
                                                    </li>
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                        <?php if($packag->services->count() != 1): ?>
                                        <span>
                                            <?php echo e($packag->services->count()); ?>+
                                        </span>
                                        <?php endif; ?>

                                    </div>
                                    <hr />
                                    <div class="rating-packages">
                                        <div class="d-flex">
                                            <img src="<?php echo e(asset('assets/images/services/Star 3.svg')); ?>" alt="rating">
                                            <p>4.9</p>
                                        </div>
                                        <a class="packages-btn-home" id="packages-btn-home"
                                            data-url="<?php echo e(route('get.details.packages', $packag->id)); ?>">عرض التفاصيل</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <!-- End  Boxes -->
    </section>
    <!-- End Packages -->

    <!-- Modal package-->
    <div class="popup" id="popup-1">
        <div class="overlay"></div>
        <div class="content">
            <div class="close-btn"><i class="fa-solid fa-xmark"></i></div>

            <div class="img">
                <div class="d-flex justify-content-center py-3">
                    <?php if($packag->img): ?>
                        <img src="<?php echo e(asset($packag->img)); ?>" style="width:90px;height:80px;" alt="packages">
                    <?php else: ?>
                        <img src="<?php echo e(asset('assets/images/packages/Group 1000001508.svg')); ?>" style="width: auto;"
                            alt="packages">
                    <?php endif; ?>
                </div>
            </div>

            <h4 id="genral-title" class="mb-3"></h4>

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

            <p id="text-info"></p>

            <div id="box-services">
            </div>

            <div class="price mt-4" id="price">
            </div>

            <div class="btn-all">

                <?php if(auth()->guard()->check()): ?>
                    <div class="btn-pricing mt-4 d-flex justify-content-center align-items-center">
                        <a href="#">شراء</a>
                    </div>
                <?php else: ?>
                    <div class="btn-pricing mt-4 d-flex justify-content-center align-items-center">
                        <a id="loginButton-package">شراء</a>
                    </div>
                <?php endif; ?>

                <div class="btn-cancle mt-4 d-flex justify-content-center align-items-center">
                    <a>الغاء</a>
                </div>

            </div>
        </div>
    </div>
    <!-- modal end -->

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
                    showmodal('#popup-2', );
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

            $('body').on('click', '#packages-btn-home', function() {
                var packagesURL = $(this).data('url');

                $.get(packagesURL, function(data) {
                    $('#genral-title').text(data.name);
                    $('#text-info').text(data.description);

                    var price = $('#price');
                    price.empty();

                    var priceItem = $('<p class="price-title">  السعر</p> ');
                    var priceText = $('<p class="text-center pricing"></p>').text(data.price + '$');
                    price.append(priceItem);
                    price.append(priceText);

                    var boxContainer = $('#box-services');
                    boxContainer.empty();

                    var services = data.services;

                    for (var i = 0; i < services.length; i++) {
                        var serviceItem = $('<div class="box-service"></div>');
                        var serviceText = $('<p class="text-center package-count"></p>').text(
                            services[i] + " + " + data.services_count);
                        var checkmarkIcon = $(
                            '<div class="icon-check-mark-service"><i class="fas fa-check"></i></div>'
                            );
                        serviceItem.append(checkmarkIcon);
                        serviceItem.append(serviceText);
                        boxContainer.append(serviceItem);
                    }

                    showmodal('#popup-1');
                });
            });
        });


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

        const loginButtonPackage = document.getElementById('loginButton-package');
        const loginButton = document.getElementById('loginButton');
        const modal = document.querySelector('.pop-error-login');
        const poppackage = document.querySelector('.popup');
        const xbtnpopuppackage = document.querySelector('.popup .content .close-btn');
        const xbtnpopuppackage1 = document.querySelector('.popup .content .btn-all .btn-cancle');
        const overlypackage1 = document.querySelector('.popup .overlay');

        loginButtonPackage.addEventListener('click', showModal);
        loginButton.addEventListener('click', showModal);
        xbtnpopuppackage.addEventListener('click', hideModalPackage);
        xbtnpopuppackage1.addEventListener('click', hideModalPackage);
        overlypackage1.addEventListener('click', hideModalPackage);

        function hideModalPackage() {
            poppackage.classList.remove('active');
        }
    </script>
<?php $__env->stopSection(); ?>
<?php /**PATH D:\public_html\resources\views/front/vendor/package-home.blade.php ENDPATH**/ ?>