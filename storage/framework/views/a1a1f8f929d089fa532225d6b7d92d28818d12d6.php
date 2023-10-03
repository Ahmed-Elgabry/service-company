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
    var count = '';
    var my_id =
        <?php if(Auth::check()): ?>
            <?php echo e(Auth::user()->id); ?>

        <?php else: ?>
            ''
        <?php endif; ?> ;
    $(document).ready(function() {
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
        channel.bind('App\\Events\\MyChat', function(data) {
            // alert(JSON.stringify(data));
            if (my_id == '') {
                location.reload();
                chat_btn.classList.add("open");
                chat.classList.add("show");
                setTimeout(function() {
                    $(".message input").focus()
                }, 1000);
                $.ajax({
                    type: "get",
                    url: `<?php echo e(url('get/message')); ?>`, // need to create this route
                    data: "",
                    cache: false,
                    success: function(data) {
                        $('#chat_card').html(data);

                    }
                });
            } else {
                if (data.to == my_id) {
                    chat_btn.classList.add("open");
                    chat.classList.add("show");
                    var audio = new Audio('https://iquick.site/soundchat.mp3');
                    audio.play();
                    if (count === '') {
                        count = 'hello';
                        setTimeout(function() {
                            $(".message input").focus()
                        }, 1000);
                        $.ajax({
                            type: "get",
                            url: `<?php echo e(url('get/message')); ?>`, // need to create this route
                            data: "",
                            cache: false,
                            success: function(data) {
                                $('#chat_card').html(data);

                            }
                        });
                    } else {
                        setTimeout(function() {
                            $(".message input").focus()
                        }, 1000);
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
                    setTimeout(function() {
                        $(".message input").focus()
                    }, 1000);
                } else if (data.from == my_id) {
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
                    setTimeout(function() {
                        $(".message input").focus()
                    }, 1000);
                }
            }

        });

        $('#chat-btn').on('click', function() {
            // $('.person').removeClass('active');
            // $(this).addClass('active');
            // receiver_id = $(this).attr('id');
            setTimeout(function() {
                $(".message input").focus()
            }, 1000);
            $.ajax({
                type: "get",
                url: `<?php echo e(url('get/message')); ?>`, // need to create this route
                data: "",
                cache: false,
                success: function(data) {
                    $('#chat_card').html(data);

                }
            });
        });

        $(document).on('keypress', '.message input', function(e) {
            var message = $(this).val();
            // check if enter key is pressed and message is not null also receiver is selected
            if (e.keyCode == 13 && message != '') {
                $(this).val(''); // while pressed enter text box will be empty

                var datastr = "receiver_id=" + receiver_id + "&message=" + message;
                $.ajax({
                    type: "post",
                    url: `<?php echo e(url('send/message')); ?>`, // need to create this post route
                    data: datastr,
                    cache: false,
                    success: function(data) {

                    },
                    error: function(jqXHR, status, err) {},
                    complete: function() {

                    }
                })
            }
        });
    });
</script>
<script src="<?php echo e(asset('assets/js/vendors/owl.carousel.min.js')); ?>"></script>
<script>
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 20,
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
                items: 3,
                nav: true,
                loop: false
            }
        }
    })
</script>
<?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->yieldContent('ajax_front'); ?>
</body>

</html>
<?php /**PATH D:\public_html\resources\views/front/layouts/footer.blade.php ENDPATH**/ ?>