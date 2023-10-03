<?php if(!empty($service)): ?>

    <!-- Start Services -->
    <section class="services">
        <div class="container">
            <!-- Start Main Title -->
            <div class="d-flex flex-column align-items-center justify-content-center mb-4">
                <h2 class="main-title text-white"><?php echo app('translator')->get('messages.service'); ?></h2>
                <div class="d-flex align-items-center text-responsive-service">
                    <p class="text-center mt-5 mb-5">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى</p>
                    <a href="<?php echo e(route('service')); ?>" class="text-left">عرض الكل</a>
                </div>
            </div>
            <!-- End Main Title -->

            <!-- Start  Boxes -->
            <div class="owl-carousel owl-theme container" id="slider-services">
                <?php $__currentLoopData = $service; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $servic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="row">
                        <div class="d-flex item">
                            <div class="box-service mt-3 d-flex">
                                <div class="card-service">
                                    <div class="d-flex justify-content-center py-3">
                                        <?php if($servic->img): ?>
                                            <img src="<?php echo e(asset($servic->img)); ?>" style="width:90px;height:80px;" alt="services">
                                        <?php else: ?>
                                            <img src="<?php echo e(asset('assets/images/services/Group 335.svg')); ?>" style="width: auto;" alt="services">
                                        <?php endif; ?>
                                    </div>
                                    <div class="card-title text-center mb-3">
                                        <p><?php echo e($servic->name); ?></p>
                                    </div>
                                    <p class="card-text"><?php echo Str::limit($servic->small_description, 600); ?></p>
                                    <div class="under-service">
                                        <hr />
                                        <div class="rating-service">
                                            <div class="d-flex">
                                                <img src="<?php echo e(asset('assets/images/services/Star 3.svg')); ?>" alt="rating">
                                                <p>4.9</p>
                                            </div>
                                            <a class="service-btn-home" id="service-btn-home" id="service-btn-home" data-url="<?php echo e(route('get.details.services',$servic->id)); ?>">عرض التفاصيل</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <!-- End  Boxes -->

    </section>
    <!-- End Services -->

    <!-- Modal pop pursher -->
        <div class="popup-service" id="popup-2">
            <div class="overlay"></div>
            <div class="content">
                <div class="close-btn"><i class="fa-solid fa-xmark"></i></div>

                <div class="img">
                    <div class="d-flex justify-content-center py-3">
                        <?php if($servic->img): ?>
                            <img src="<?php echo e(asset($servic->img)); ?>" style="width:90px;height:80px;" alt="packages">
                        <?php else: ?>
                            <img src="<?php echo e(asset('assets/images/services/Group 335 (1).svg')); ?>" style="width: 140px;height: 120px;" alt="packages">
                        <?php endif; ?>
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
                            <a id="loginButton">شراء</a>
                        </div>
                    <?php endif; ?>

                    <div class="btn-cancle mt-4 d-flex justify-content-center align-items-center">
                        <a>الغاء</a>
                    </div>

                </div>
            </div>
        </div>
    <!-- Modal -->


<?php endif; ?>


<?php /**PATH D:\public_html\resources\views/front/vendor/service-home.blade.php ENDPATH**/ ?>