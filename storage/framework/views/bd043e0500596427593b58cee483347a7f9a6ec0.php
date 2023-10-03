<?php if(!empty($setting)): ?>
<footer class="end-page">
  <div class="container">
    <div class="end-page_image me-4">
      <img src="<?php echo e(asset('assets/images/icon-main.svg')); ?>" alt="logo">
    </div>
    <div class="mt-4">
      <div class="row">
        <div class="col-lg-5">
          <p class="text-sm-centermb-3 text-start"><?php echo $setting->about_us; ?></p>
        </div>
        <div class="col-lg-4">
          <?php if (isset($component)) { $__componentOriginal12437b8ecad3e65b002945cc21592e1b700f83f4 = $component; } ?>
<?php $component = App\View\Components\NavFooter::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('nav-footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\NavFooter::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal12437b8ecad3e65b002945cc21592e1b700f83f4)): ?>
<?php $component = $__componentOriginal12437b8ecad3e65b002945cc21592e1b700f83f4; ?>
<?php unset($__componentOriginal12437b8ecad3e65b002945cc21592e1b700f83f4); ?>
<?php endif; ?>
        </div>
        <div class="col-lg-3">
          <div class="social mb-3">
            <a href="<?php echo e($setting->facebook); ?>" class="social-item">
              <i class="fab fa-facebook-f fa-xl"></i>
            </a>
            <a href="<?php echo e($setting->Linkedin); ?>" class="social-item">
              <i class="fa-brands fa-linkedin-in fa-xl"></i>
            </a>
            <a href="<?php echo e($setting->twitter); ?>" class="social-item">
              <i class="fa-brands fa-twitter fa-xl"></i>
            </a>
            <a href="<?php echo e($setting->insta); ?>" class="social-item">
              <i class="fa-brands fa-instagram fa-xl"></i>
            </a>

          </div>
          <div class="email-icon d-flex justify-content-center mt-2 social ">
            <div class="mt-3">
                <p>info@iquick.site</p>
            </div>
            <div class="social-item">
                <i class="fa-regular fa-envelope fa-xl"></i>
            </div>
        </div>
        </div>
      </div>
      <div class="copyright">
        <p class="text-center mt-4">
            جميع الحقوق محفوظة ل أي كويك @2023
        </p>
    </div>
    </div>
  </div>
</footer>
<!-- End Footer -->
<?php endif; ?>
<?php /**PATH D:\public_html\resources\views/components/footer.blade.php ENDPATH**/ ?>