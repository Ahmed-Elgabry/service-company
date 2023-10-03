<?php if(!empty($service)): ?>
    <!-- Start Services -->
    <section class="services">
        <div class="container">
            <!-- Start Main Title -->
            <div class="d-flex flex-column align-items-center justify-content-center mb-4">
                <h2 class="main-title text-white"><?php echo app('translator')->get('messages.service'); ?></h2>
                <div class="d-flex align-items-center">
                    <p class="text-center mt-5 mb-5" style="width: 380px;color:#C5CAE6;">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى</p>
                    <a href="<?php echo e(route('service')); ?>" class="text-left" style="color:#E8B654;position: absolute;left:70px;">عرض الكل</a>
                </div>
            </div>
            <!-- End Main Title -->

            <!-- Start  Boxes -->
            <div class="owl-carousel owl-theme" id="item">

                <?php $__currentLoopData = $service; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $servic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="row item" >
                        <div class="col-sm-12 col-md-6 col-lg-4 d-flex item w-100 " style="height:100%;width:100%;">

                            <div class="box-service mt-3 d-flex" >
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
                                    <p class="card-text mx-4 mb-3"><?php echo Str::limit($servic->small_description, 600); ?></p>
                                    <hr />
                                    <div class="rating-service">
                                        <div class="d-flex">
                                            <img src="<?php echo e(asset('assets/images/services/Star 3.svg')); ?>" alt="rating">
                                            <p>4.9</p>
                                        </div>
                                        <a href="" class="service-btn-home">عرض التفاصيل</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <!-- End  Boxes -->


            <!-- Start All offer -->
            
            
            <!-- End All offer -->

    </section>



    <!-- End Services -->
    <!-- Modal -->
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="view_all_description_4">

                </div>
                
            </div>
        </div>
    </div>

<?php endif; ?>
<?php $__env->startSection('ajax'); ?>
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
<?php $__env->stopSection(); ?>

<?php /**PATH C:\Users\Ahmed\Desktop\public_html\resources\views/front/vendor/service-home.blade.php ENDPATH**/ ?>