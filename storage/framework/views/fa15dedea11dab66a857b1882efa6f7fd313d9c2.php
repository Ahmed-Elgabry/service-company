<?php if (isset($component)) { $__componentOriginal88b1957f21f7f49b400717e8d0a27189798132bf = $component; } ?>
<?php $component = App\View\Components\Footer::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Footer::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal88b1957f21f7f49b400717e8d0a27189798132bf)): ?>
<?php $component = $__componentOriginal88b1957f21f7f49b400717e8d0a27189798132bf; ?>
<?php unset($__componentOriginal88b1957f21f7f49b400717e8d0a27189798132bf); ?>
<?php endif; ?>

  
<style>
  :root {
    --primary: #191e3a;
    --secondary: #25d4e3;
    --white: #ffffff;
    --prim20: #d1d2d8;
    --bg: #e9eaeb;
    --sec1: #f3f5f5;
    --gray: #a5a5a5;
    --second10: #e1f2f4;
    --third: #e19809;
    --third10: #f3ecde;
    --third1: #f5f4f3;
    --star: #f7cb15;
    --white_blue: #f5f7fb;
    --input: #333645;
    /* transitions */
    --trans-3: 0.3s ease-in-out;
    --trans-5: 0.5s ease-in-out;
  }
    /* Start Chat */
  .chat {
    position: fixed;
    bottom: 70px;
    right: 60px;
    z-index: 999999;
  }
  .chat-btn {
    position: fixed;
    bottom: 45px;
    right: 50px;
    z-index: 999999;
    cursor: pointer;
    transition: var(--trans-5);
  }
  .chat-btn.open {
    transform: rotate(-180deg);
    opacity: 0.7;
  }
  .card-container.show {
    height: auto;
  }
  .card-container.show .chat-card {
    max-height: 390px;
    opacity: 1;
  }
  .chat .card-container {
    position: absolute;
    top: 0;
    right: 50px;
    transform: translateY(-105%);
  }
  .chat .chat-card {
    position: relative;
    height: 390px;
    opacity: 0;
    max-height: 0;
    background-color: var(--white);
    box-shadow: 0px 0px 12px rgba(0, 0, 0, 0.25);
    width: 328px;
    border-radius: 10px;
    overflow: hidden;
    transition: max-height var(--trans-5), opacity var(--trans-5);
  }
  .chat .card-head {
    background-color: var(--third);
    color: var(--white);
    width: 100%;
    padding: 15px 0;
    text-align: center;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.25);
    font-weight: 500;
  }
  .chat .chat-body {
    padding: 7px 12px;
    padding-bottom: 60px;
    max-height: 345px;
    overflow-y: auto;
  }
  .chat .chat-body::-webkit-scrollbar {
    width: 5px;
    background-color: var(--white);
  }
  .chat .chat-body::-webkit-scrollbar-thumb {
    width: 5px;
    background-color: var(--prim20);
  }
  .chat .chat-body .right,
  .chat .chat-body .left {
    padding-top: 10px;
    font-size: 10px;
  }
  .chat .chat-body .right .user-name,
  .chat .chat-body .left .user-name {
    font-size: 12px;
    margin: 0;
  }
  .chat .chat-body .right .massage,
  .chat .chat-body .left .massage {
    background-color: var(--sec1);
    color: var(--primary);
    border-radius: 10px;
    padding: 5px 15px;
    font-size: 10px;
    margin-top: 5px;
    margin-bottom: 0;
    word-break: break-word;
  }
  .chat .chat-body .right .time,
  .chat .chat-body .left .time {
    font-size: 8px;
    color: var(--gray);
  }
  .chat .chat-body .left {
    text-align: left;
  }
  .chat .chat-body .right {
    text-align: right;
  }
  
  .chat .chat-footer {
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.25);
    position: absolute;
    bottom: 0;
    left: 50%;
    width: 100%;
    background-color: var(--white);
    padding: 10px 0;
    transform: translateX(-50%);
    z-index: 999999;
  }
  .chat .chat-footer form {
    display: flex;
    align-items: center;
    gap: 7px;
    margin-right: 20px;
  }
  .chat .chat-footer .send {
    position: relative;
  }
  .assets {
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
  }
  .chat .chat-footer .send-btn {
    background-color: var(--third);
    display: flex;
    align-items: center;
    justify-content: center;
    width: 52px;
    height: 34px;
    border-radius: 5px;
    border: none;
    visibility: hidden;
  }
  .chat .chat-footer .emoji-img {
    cursor: pointer;
  }
  .chat .chat-footer .message {
    position: relative;
    width: 100%;
  }
  
  .chat .chat-footer .message-input {
    border: none;
    border-bottom: 1px solid var(--prim20);
    outline: none;
    font-weight: 500;
    width: 88%;
  }
  
  .chat .chat-footer .message-input::placeholder {
    color: var(--prim20);
  }
  .assets.hide {
    visibility: hidden !important;
  }
  .send-btn.show {
    visibility: visible !important;
  }
  /* End Chat */
  
  @media screen and (max-width: 767px) {
    .chat .card-container {
      right: -35px;
    }
    .chat-btn {
      right: 20px;
      bottom: 20px;
    }
  }
  
  </style>

<!-- Start Chat -->
<!--<div class="chat-btn" id="chat-btn">-->
<!--  <img src="<?php echo e(asset('./assets/images/chat/Vector.png')); ?>" alt="Vector">-->
<!--</div>-->
<!--<div class="chat">-->
<!--  <div class="card-container" id="chat">-->
<!--    <div class="chat-card" id="chat_card">-->
      
<!--    </div>-->
<!--  </div>-->
<!--</div>-->
<!-- End Chat -->


  <!-- Javascript -->
  <script src="<?php echo e(asset('assets/js/vendors/all.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/js/vendors/bootstrap.bundle.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/js/app.js')); ?>"></script>
  <!-- Javascript -->
  <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    var receiver_id = '';
    var count='';
    var my_id = <?php if(Auth::check()): ?> <?php echo e(Auth::user()->id); ?> <?php else: ?> '' <?php endif; ?>;
    $(document).ready(function () {
        // ajax setup form csrf token
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
  
        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;
  
        var pusher = new Pusher('60aaa4eb1bcf9feef7a2', {
            cluster: 'eu',
            forceTLS: true
        });
  
        var channel = pusher.subscribe('my-chat');
        channel.bind('App\\Events\\MyChat', function (data) {
            // alert(JSON.stringify(data));
            if(my_id==''){
              location.reload();
              chat_btn.classList.add("open");
              chat.classList.add("show");
              setTimeout(function() { $( ".message input" ).focus() }, 1000);
                $.ajax({
                    type: "get",
                    url: `<?php echo e(url('get/message')); ?>`, // need to create this route
                    data: "",
                    cache: false,
                    success: function (data) {
                        $('#chat_card').html(data);
                        
                    }
                });
            }else{
              if(data.to==my_id){
                chat_btn.classList.add("open");
                chat.classList.add("show");
                var audio = new Audio('https://iquick.site/soundchat.mp3'); 
                audio.play();
                if(count===''){
                    count='hello';
                    setTimeout(function() { $( ".message input" ).focus() }, 1000);
                    $.ajax({
                        type: "get",
                        url: `<?php echo e(url('get/message')); ?>`, // need to create this route
                        data: "",
                        cache: false,
                        success: function (data) {
                            $('#chat_card').html(data);
                            
                        }
                    });
                }else{
                    setTimeout(function() { $( ".message input" ).focus() }, 1000);
                    $(".append").append(`
                    <div class="left">
                        <div class="chat-track">
                            <div class="d-flex align-items-center justify-content-end gap-2">
                                <img src="<?php echo e(asset('assets/images/chat/support.svg')); ?>" alt="support">
                                <h5 class="user-name">فريق الدعم</h5>
                            </div>
                            <p class="massage">${data.message}</p>
                            <span class="time">${data.created_at}</span>
                        </div>
                    </div>
                    `);
                }
            setTimeout(function() { $( ".message input" ).focus() }, 1000);
            }else if(data.from==my_id){
                var audio = new Audio('https://iquick.site/soundchat.mp3'); 
                audio.play();
                $(".append").append(`
                    <div class="right">
                        <div class="chat-track">
                            <h5 class="user-name">أنت</h5>
                            <p class="massage">${data.message}</p>
                            <span class="time">${data.created_at}</span>
                        </div>
                    </div>
                    `);
                setTimeout(function() { $( ".message input" ).focus() }, 1000);
            }
            }
            
        });

        $('#chat-btn').on('click',function () {
            // $('.person').removeClass('active');
            // $(this).addClass('active');
            // receiver_id = $(this).attr('id');
            setTimeout(function() { $( ".message input" ).focus() }, 1000);
            $.ajax({
                type: "get",
                url: `<?php echo e(url('get/message')); ?>`, // need to create this route
                data: "",
                cache: false,
                success: function (data) {
                    $('#chat_card').html(data);
                    
                }
            });
        });
  
        $(document).on('keypress', '.message input', function (e) {
            var message = $(this).val();
            // check if enter key is pressed and message is not null also receiver is selected
            if (e.keyCode == 13 && message != '') {
                $(this).val(''); // while pressed enter text box will be empty
  
                var datastr = "receiver_id=" + receiver_id + "&message=" + message;
                $.ajax({
                    type: "post",
                    url: `<?php echo e(url("send/message")); ?>`, // need to create this post route
                    data: datastr,
                    cache: false,
                    success: function (data) {
  
                    },
                    error: function (jqXHR, status, err) {
                    },
                    complete: function () {
                        
                    }
                })
            }
        });
    });
  </script>
  <script src="<?php echo e(asset("assets/js/vendors/owl.carousel.min.js")); ?>"></script>
  <script>
    $('.owl-carousel').owlCarousel({
      loop: true,
      margin: 10,
      responsiveClass: true,
      dots: false,
      rtl: true,
      responsive: {
        0: {
          items: 1,
          nav: true
        },
        600: {
          items: 2,
          nav: false
        },
        1000: {
          items: 4,
          nav: true,
          loop: false
        }
      }
    })
  </script>
  <?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <?php echo $__env->yieldContent("ajax_front"); ?>
</body>

</html><?php /**PATH C:\Users\Ahmed\Desktop\public_html\resources\views/front/layouts/footer.blade.php ENDPATH**/ ?>