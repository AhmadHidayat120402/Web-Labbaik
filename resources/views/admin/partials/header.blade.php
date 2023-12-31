<div class="navbar-custom">
    <ul class="list-unstyled topbar-menu float-end mb-0">
        {{-- <li class="dropdown notification-list d-lg-none">
            <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button"
                aria-haspopup="false" aria-expanded="false">
                <i class="dripicons-search noti-icon"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
                <form class="p-3">
                    <input type="text" class="form-control" placeholder="Search ..."
                        aria-label="Recipient's username">
                </form>
            </div>
        </li> --}}
        <li class="dropdown notification-list topbar-dropdown">
            <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button"
                aria-haspopup="false" aria-expanded="false">
                {{-- <img src="{{ URL::asset('admin/assets/images/flags/us.jpg') }}" alt="user-image" class="me-0 me-sm-1"
                    height="12"> --}}
                <span class="align-middle d-none d-sm-inline-block">Departement</span> <i
                    class="mdi mdi-chevron-down d-none d-sm-inline-block align-middle"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu">

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    {{-- <img src="{{ URL::asset('admin/assets/images/flags/germany.jpg') }}" alt="user-image" class="me-1"
                        height="12">  --}}
                    <span class="align-middle">Kominfo</span>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    {{-- <img src="{{ URL::asset('admin/assets/images/flags/italy.jpg') }}" alt="user-image" class="me-1"
                        height="12">  --}}
                    <span class="align-middle">Syiar</span>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    {{-- <img src="{{ URL::asset('admin/assets/images/flags/spain.jpg') }}" alt="user-image" class="me-1"
                        height="12"> --}}
                    <span class="align-middle">Kemuslimahan</span>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    {{-- <img src="{{ URL::asset('admin/assets/images/flags/russia.jpg') }}" alt="user-image" class="me-1"
                        height="12">  --}}
                    <span class="align-middle">PSDM</span>
                </a>
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    {{-- <img src="{{ URL::asset('admin/assets/images/flags/russia.jpg') }}" alt="user-image" class="me-1"
                        height="12">  --}}
                    <span class="align-middle">KWU</span>
                </a>

            </div>
        </li>



        {{-- <li class="dropdown notification-list d-none d-sm-inline-block mt-3">
            <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button"
                aria-haspopup="false" aria-expanded="false">
                <i class="dripicons-view-apps noti-icon"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg p-0">

                <div class="p-2">
                    <div class="row g-0">
                        <div class="col">
                            <a class="dropdown-icon-item" href="#">
                                <img src="{{ URL::asset('admin/assets/images/brands/slack.png') }}" alt="slack">
                                <span>Slack</span>
                            </a>
                        </div>
                        <div class="col">
                            <a class="dropdown-icon-item" href="#">
                                <img src="{{ URL::asset('admin/assets/images/brands/github.png') }}" alt="Github">
                                <span>GitHub</span>
                            </a>
                        </div>
                        <div class="col">
                            <a class="dropdown-icon-item" href="#">
                                <img src="{{ URL::asset('admin/assets/images/brands/dribbble.png') }}" alt="dribbble">
                                <span>Dribbble</span>
                            </a>
                        </div>
                    </div>

                    <div class="row g-0">
                        <div class="col">
                            <a class="dropdown-icon-item" href="#">
                                <img src="{{ URL::asset('admin/assets/images/brands/bitbucket.png') }}" alt="bitbucket">
                                <span>Bitbucket</span>
                            </a>
                        </div>
                        <div class="col">
                            <a class="dropdown-icon-item" href="#">
                                <img src="{{ URL::asset('admin/assets/images/brands/dropbox.png') }}" alt="dropbox">
                                <span>Dropbox</span>
                            </a>
                        </div>
                        <div class="col">
                            <a class="dropdown-icon-item" href="#">
                                <img src="{{ URL::asset('admin/assets/images/brands/g-suite.png') }}" alt="G Suite">
                                <span>G Suite</span>
                            </a>
                        </div>
                    </div> <!-- end row-->
                </div>

            </div>
        </li> --}}

        {{-- <li class="notification-list mt-3">
            <a class="nav-link end-bar-toggle" href="javascript: void(0);">
                <i class="dripicons-gear noti-icon"></i>
            </a>
        </li> --}}

        <li class="dropdown notification-list">
            <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown" href="#"
                role="button" aria-haspopup="false" aria-expanded="false">
                <span class="account-user-avatar">
                    <img src="{{ URL::asset('admin/assets/images/logo_LABAIK.png') }}" alt="user-image"
                        class="rounded-circle">
                </span>
                <span>
                    <span class="account-user-name">UKM</span>
                    <span class="account-position">Labbaik</span>
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                <!-- item-->
                <div class=" dropdown-header noti-title">
                    <h6 class="text-overflow m-0">Welcome !</h6>
                </div>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="mdi mdi-account-circle me-1"></i>
                    <span>My Account</span>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item end-bar-toggle">
                    <i class="mdi mdi-account-edit me-1"></i>
                    <span>Settings</span>
                </a>

                {{-- <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="mdi mdi-lifebuoy me-1"></i>
                    <span>Support</span>
                </a> --}}

                {{-- <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="mdi mdi-lock-outline me-1"></i>
                    <span>Lock Screen</span>
                </a> --}}

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="mdi mdi-logout me-1"></i>
                    <span>Logout</span>
                </a>
            </div>
        </li>

    </ul>
    <button class="button-menu-mobile open-left">
        <i class="mdi mdi-menu"></i>
    </button>

</div>
