<div id="headerMain" class="d-none">
    
    <header id="header"
            class="navbar navbar-expand-lg navbar-fixed navbar-height navbar-flush navbar-container navbar-bordered">
        <!--<meta http-equiv="refresh" content="30">-->
        <div class="navbar-nav-wrap">
            <div class="navbar-brand-wrapper">
                <!-- Logo -->
               

                @php($store_logo=\App\Model\BusinessSetting::where(['key'=>'logo'])->first()->value)
                <a class="navbar-brand" href="{{route('admin.dashboard')}}" aria-label="">
                    <img class="navbar-brand-logo"
                         onerror="this.src='{{asset('public/assets/admin/img/160x160/img1.jpg')}}'"
                         src="{{asset('storage/app/public/store/'.$store_logo)}}" alt="Logo">
                         <!-- <img class="navbar-brand-logo-mini"
                         onerror="this.src='{{asset('public/assets/admin/img/160x160/img1.jpg')}}'"
                         src="{{asset('storage/app/public/store/'.$store_logo)}}"
                         alt="Logo"> -->

                         <img class="navbar-brand-logo-mini"
                         onerror="this.src='{{asset('public/assets/admin/img/160x160/img1.jpg')}}'"
                         src="storage/app/public/store/{{ $store_logo }}"
                         alt="Logo">
                         <!-- http://127.0.0.1:8000/storage/app/public/store/{{ $store_logo }} -->
                         
                </a>
                <!-- End Logo -->
            </div>
            
            <div class="navbar-nav-wrap-content-left">
                <!-- Navbar Vertical Toggle -->
                <button type="button" class="js-navbar-vertical-aside-toggle-invoker close mr-3">
                    <i class="tio-first-page navbar-vertical-aside-toggle-short-align" data-toggle="tooltip"
                       data-placement="right" title="Collapse"></i>
                    <i class="tio-last-page navbar-vertical-aside-toggle-full-align"
                       data-template='<div class="tooltip d-none d-sm-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
                       data-toggle="tooltip" data-placement="right" title="Expand"></i>
                </button>
                <!-- End Navbar Vertical Toggle -->
            </div>

            <!-- Secondary Content -->
            <div class="navbar-nav-wrap-content-right">
                <!-- Navbar -->
                @php($notifications_count=\App\Model\AdminNotification::where('checked', 0)->count())
                @php($roles=\App\Model\EmployeeRole::where('admin_id', auth('admin')->user()->id)->first())
             
                <ul class="navbar-nav align-items-center flex-row">
                       <!-- @if($roles->business_section == 1)
                     <li class="nav-item d-none d-sm-inline-block">
                      
                        <div class="hs-unfold">
                            <a class="js-hs-unfold-invoker btn btn-icon btn-ghost-secondary rounded-circle"
                               href="{{route('admin.admin-notification.list')}}">
                                <i class="tio-notifications"></i>
                                
                                @if($notifications_count > 0)
                                    <span class="btn-status  btn-status-danger">{{$notifications_count}}</span>
                                @endif    
                               
                            </a>
                        </div>
                         
                    </li>
                    @endif -->
                    
                    @php($roles=\App\Model\EmployeeRole::where('admin_id', auth('admin')->user()->id)->first())
                    @php($admin=\App\Model\Admin::where('id', auth('admin')->user()->id)->first())
                    @if($roles->business_section == 1)
                    <li class="nav-item d-none d-sm-inline-block">
                        <!-- Notification -->
                        <div class="hs-unfold">
                            <a class="js-hs-unfold-invoker btn btn-icon btn-ghost-secondary rounded-circle"
                               href="{{route('admin.message.list')}}">
                                <i class="tio-messages-outlined"></i>
                                @php($message=\App\Model\Conversation::where('checked',0)->count())
                                @if($message!=0)
                                    <span class="btn-status btn-sm-status btn-status-danger"></span>
                                @endif
                            </a>
                        </div>
                        <!-- End Notification -->
                    </li>
                    @endif
                    
                   

                    <li class="nav-item d-none d-sm-inline-block">
                        <!-- Notification -->
                        <div class="hs-unfold">
                            <a class="js-hs-unfold-invoker btn btn-icon btn-ghost-secondary rounded-circle"
                               href="{{route('admin.order.list',['status'=>'pending'])}}">
                                <i class="tio-shopping-cart-outlined"></i>
                                {{--<span class="btn-status btn-sm-status btn-status-danger"></span>--}}
                            </a>
                        </div>
                        <!-- End Notification -->
                    </li>


                    <li class="nav-item">
                        <!-- Account -->
                        <div class="hs-unfold">
                            <a class="js-hs-unfold-invoker navbar-dropdown-account-wrapper" href="javascript:;"
                               data-hs-unfold-options='{
                                     "target": "#accountNavbarDropdown",
                                     "type": "css-animation"
                                   }'>
                                <div class="avatar avatar-sm avatar-circle">
                                    <img class="avatar-img"
                                         onerror="this.src='{{asset('public/assets/admin/img/160x160/img1.jpg')}}'"
                                         src="{{asset('storage/app/public/admin')}}/{{auth('admin')->user()->image}}"
                                         alt="Image Description">
                                    <span class="avatar-status avatar-sm-status avatar-status-success"></span>
                                </div>
                            </a>

                            <div id="accountNavbarDropdown"
                                 class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right navbar-dropdown-menu navbar-dropdown-account"
                                 style="width: 16rem;">
                                <div class="dropdown-item-text">
                                    <div class="media align-items-center">
                                        <div class="avatar avatar-sm avatar-circle mr-2">
                                            <img class="avatar-img"
                                                 onerror="this.src='{{asset('public/assets/admin/img/160x160/img1.jpg')}}'"
                                                 src="{{asset('storage/app/public/admin')}}/{{auth('admin')->user()->image}}"
                                                 alt="Image Description">
                                        </div>
                                        <div class="media-body">
                                            <span class="card-title h5">{{auth('admin')->user()->f_name}}</span>
                                            <span class="card-text">{{auth('admin')->user()->email}}</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="dropdown-divider"></div>

                                <a class="dropdown-item" href="">
                                    <span class="text-truncate pr-2" title="Settings">{{trans('messages.settings')}}</span>
                                </a>

                                <div class="dropdown-divider"></div>

                                <a class="dropdown-item" href="javascript:" onclick="Swal.fire({
                                    title: 'Do you want to logout?',
                                    showDenyButton: true,
                                    showCancelButton: true,
                                    confirmButtonColor: '#FC6A57',
                                    cancelButtonColor: '#363636',
                                    confirmButtonText: `Yes`,
                                    denyButtonText: `Don't Logout`,
                                    }).then((result) => {
                                    if (result.value) {
                                    location.href='{{route('admin.auth.logout')}}';
                                    } else{
                                    Swal.fire('Canceled', '', 'info')
                                    }
                                    })">
                                    <span class="text-truncate pr-2" title="Sign out">{{trans('messages.sign_out')}}</span>
                                </a>
                            </div>
                        </div>
                        <!-- End Account -->
                    </li>
                </ul>
                <!-- End Navbar -->
            </div>
            <!-- End Secondary Content -->
        </div>
    </header>
</div>
<div id="headerFluid" class="d-none"></div>
<div id="headerDouble" class="d-none"></div>


