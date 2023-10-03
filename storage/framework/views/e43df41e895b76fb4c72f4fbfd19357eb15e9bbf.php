<?php echo $__env->make('admin.layouts.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- BEGIN LOADER -->
<div id="load_screen">
    <div class="loader">
        <div class="loader-content">
            <div class="spinner-grow align-self-center"></div>
        </div>
    </div>
</div>
<!--  END LOADER -->
<!--  BEGIN NAVBAR  -->
<div class="header-container fixed-top">
    <header class="header navbar navbar-expand-sm expand-header">
        <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg
                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-menu">
                <line x1="3" y1="12" x2="21" y2="12"></line>
                <line x1="3" y1="6" x2="21" y2="6"></line>
                <line x1="3" y1="18" x2="21" y2="18"></line>
            </svg>
        </a>
        <a href="#!">
            <img src="<?php echo e(asset('assets\images\FINAL-2.png')); ?>" alt="" style="    width: 100px;
            margin-right: 25px;">
        </a>
        <ul class="navbar-item flex-row ml-auto">
            <?php if(request()->is('dashborad/chats')): ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('chat-chatReply')): ?>
                <li class="nav-item dropdown notification-dropdown">
                    <div class="chat-action-btn align-self-center mr-2" style="    margin-top: 12px;
                    margin-right: 20px; margin-left:0 !important;">
                        <label class="switch s-icons s-outline s-outline-primary mr-2 mb-0">
                            <input type="checkbox" name="chat_reply" <?php if(Auth::user()->chat_reply=='1'): ?> checked  value="0" <?php else: ?> value="1" <?php endif; ?>>
                            <span class="slider round"></span>
                        </label>
                    </div>
                </li>
                <?php endif; ?>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('chat-list')): ?>
            <li class="nav-item dropdown notification-dropdown">
                <a href="<?php echo e(url('dashborad/chats')); ?>" target="_blank" class="nav-link dropdown-toggle helper">
                    <i class="fas fa-comment-dots"></i>
                </a>
            </li>
            <?php endif; ?>
            <li class="nav-item dropdown message-dropdown">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="messageDropdown"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-mail">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                        <polyline points="22,6 12,13 2,6"></polyline>
                    </svg><span class="badge badge-primary" id="addcount"></span>
                </a>
                <div id="mydatanmessage" style="    overflow: auto;
                height: 338px;" class="dropdown-menu position-absolute e-animated e-fadeInUp" aria-labelledby="messageDropdown">
                    <div class="" >
                        <div id="mymessage"></div>
                        <?php if (isset($component)) { $__componentOriginal0718f54accaa813e1e5a10d3105eec1dc6ef75de = $component; } ?>
<?php $component = App\View\Components\Admincontact::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admincontact'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Admincontact::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0718f54accaa813e1e5a10d3105eec1dc6ef75de)): ?>
<?php $component = $__componentOriginal0718f54accaa813e1e5a10d3105eec1dc6ef75de; ?>
<?php unset($__componentOriginal0718f54accaa813e1e5a10d3105eec1dc6ef75de); ?>
<?php endif; ?>
                    </div>
                </div>
            </li>

            <li class="nav-item dropdown notification-dropdown">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="notificationDropdown"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-bell">
                        <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                        <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                    </svg><span class="badge badge-success"></span>
                </a>
                <div class="dropdown-menu position-absolute e-animated e-fadeInUp over" style="    overflow: auto;
                height: 338px;"
                    aria-labelledby="notificationDropdown" id="mydatanotif">
                    <div class="notification-scroll">
                        <div id="mynotification"></div>
                        <?php if (isset($component)) { $__componentOriginal2434deaa685dc599ea8f6b0f24298005b9cba0bf = $component; } ?>
<?php $component = App\View\Components\Adminmessages::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('adminmessages'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Adminmessages::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2434deaa685dc599ea8f6b0f24298005b9cba0bf)): ?>
<?php $component = $__componentOriginal2434deaa685dc599ea8f6b0f24298005b9cba0bf; ?>
<?php unset($__componentOriginal2434deaa685dc599ea8f6b0f24298005b9cba0bf); ?>
<?php endif; ?>
                    </div>
                </div>
            </li>

            <li class="nav-item dropdown user-profile-dropdown  order-lg-0 order-1">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-user-check">
                        <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                        <circle cx="8.5" cy="7" r="4"></circle>
                        <polyline points="17 11 19 13 23 9"></polyline>
                    </svg>
                </a>
                <div class="dropdown-menu position-absolute e-animated e-fadeInUp"
                    aria-labelledby="userProfileDropdown">
                    <div class="user-profile-section">
                        <div class="media mx-auto">
                            <img src="<?php echo e(asset('assets\images\images.jpg')); ?>" class="img-fluid mr-2"
                                alt="avatar">
                            <div class="media-body">
                                <h5><?php echo e(Auth::user()->firstname.' '.Auth::user()->lastname); ?></h5>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown-item">
                        <a href="<?php echo e(route('admin.contacts.index')); ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-inbox">
                                <polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline>
                                <path
                                    d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z">
                                </path>
                            </svg> <span><?php echo app('translator')->get("admin.My_Inbox"); ?></span>
                        </a>
                    </div>
                    <div class="dropdown-item">
                        <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out">
                                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                <polyline points="16 17 21 12 16 7"></polyline>
                                <line x1="21" y1="12" x2="9" y2="12"></line>
                            </svg> <span><?php echo app('translator')->get("admin.Log_Out"); ?></span>
                        </a>
                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                            <?php echo csrf_field(); ?>
                        </form>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown user-profile-dropdown  order-lg-0 order-2">
                <a href="<?php echo e(route("home")); ?>" class="nav-link dropdown-toggle user">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                        </svg>
                </a>
            </li>
            
        </ul>
    </header>
</div>
<!--  END NAVBAR  --><?php /**PATH D:\public_html\resources\views/admin/layouts/header.blade.php ENDPATH**/ ?>