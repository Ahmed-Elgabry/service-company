<?php echo $__env->make('front.layouts.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
    
              

    <!-- End Navbar -->

    <!-- Start  Carousel -->
    <?php echo $__env->yieldContent('section-here'); ?>
    <!-- End Carousel -->
</header>
<?php /**PATH D:\public_html\resources\views/front/layouts/header.blade.php ENDPATH**/ ?>