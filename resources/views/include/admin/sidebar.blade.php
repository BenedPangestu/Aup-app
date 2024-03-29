<!-- Sidebar -->
<nav id="sidebar">
    <!-- Sidebar Content -->
    <div class="sidebar-content">
        <!-- Side Header -->
        <div class="content-header content-header-fullrow px-15">
            <!-- Mini Mode -->
            <div class="content-header-section sidebar-mini-visible-b">
                <!-- Logo -->
                <span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
                    <span class="text-dual-primary-dark">c</span><span class="text-primary">b</span>
                </span>
                <!-- END Logo -->
            </div>
            <!-- END Mini Mode -->

            <!-- Normal Mode -->
            <div class="content-header-section text-center align-parent sidebar-mini-hidden">
                <!-- Close Sidebar, Visible only on mobile screens -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
                    <i class="fa fa-times text-danger"></i>
                </button>
                <!-- END Close Sidebar -->

                <!-- Logo -->
                <div class="content-header-item">
                    <a class="link-effect font-w700" href="{{route('dashboard')}}">
                        <i class="si si-fire text-primary"></i>
                        <span class="font-size-xl text-dual-primary-dark">SPV</span><span class="font-size-xl text-primary">AUP</span>
                    </a>
                </div>
                <!-- END Logo -->
            </div>
            <!-- END Normal Mode -->
        </div>
        <!-- END Side Header -->

        <!-- Side User -->
        <div class="content-side content-side-full content-side-user px-10 align-parent">
            <!-- Visible only in mini mode -->
            <div class="sidebar-mini-visible-b align-v animated fadeIn">
                <img class="img-avatar img-avatar32" src="{{asset('assets/media/avatars/avatar11.jpg')}}" alt="">
            </div>
            <!-- END Visible only in mini mode -->

            <!-- Visible only in normal mode -->
            <div class="sidebar-mini-hidden-b text-center">
                <a class="img-link" href="javascript:void(0)">
                    <img class="img-avatar" src="{{asset('assets/media/avatars/avatar11.jpg')}}" alt="">
                </a>
                <ul class="list-inline mt-10">
                    <li class="list-inline-item">
                        <a class="link-effect text-dual-primary-dark font-size-xs font-w600 text-uppercase" href="javascript:void(0)">{{auth()->user()->username}}</a>
                    </li>
                    <li class="list-inline-item">
                        <a class="link-effect text-dual-primary-dark" href="javascript:void(0)">
                            <i class="fa fa-sign-out"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- END Visible only in normal mode -->
        </div>
        <!-- END Side User -->

        <!-- Side Navigation -->
        <div class="content-side content-side-full">
            <ul class="nav-main">
                <li>
                    <a class="{{ (request()->is('admin/dashboard')) ? 'active' : '' }}" href="{{ route('dashboard') }}"><i class="fa fa-hospital-o"></i><span class="sidebar-mini-hide">Overview</span></a>
                </li>
                <li class="nav-main-heading"><span class="sidebar-mini-visible">MG</span><span class="sidebar-mini-hidden">Manage</span></li>
                <li class="{{ (request()->segment(2) == 'product') ? 'open' : '' }}">
                    <a class="nav-submenu" data-toggle="nav-submenu" href="#">
                        <i class="fa fa-user-circle-o"></i><span class="sidebar-mini-hide">Produk</span>
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('admin.product')}}">Manage</a>
                        </li>
                        <li>
                            <a href="{{route('admin.product.create')}}">Add Produk</a>
                        </li>
                    </ul>
                </li>
                <li class="{{ (request()->segment(2) == 'kegiatan') ? 'open' : '' }}">
                    <a class="nav-submenu" data-toggle="nav-submenu" href="#">
                        <i class="fa fa-calendar"></i><span class="sidebar-mini-hide">Kegiatan</span>
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('admin.kegiatan')}}">Manage</a>
                        </li>
                        <li>
                            <a href="{{route('admin.kegiatan.create')}}">Add Kegiatan</a>
                        </li>
                    </ul>
                </li>
                <li class="{{ (request()->segment(2) == 'berita') ? 'open' : '' }}">
                    <a class="nav-submenu" data-toggle="nav-submenu" href="#">
                        <i class="fa fa-newspaper-o"></i><span class="sidebar-mini-hide">Berita</span>
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('admin.berita')}}">Manage</a>
                        </li>
                        <li>
                            <a href="{{route('admin.berita.create')}}">Add berita</a>
                        </li>
                    </ul>
                </li>
                <li class="{{ (request()->segment(2) == 'kerjasama') ? 'open' : '' }}">
                    <a class="nav-submenu" data-toggle="nav-submenu" href="#">
                        <i class="fa fa-newspaper-o"></i><span class="sidebar-mini-hide">Kerjasama</span>
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('admin.kerjasama')}}">Manage</a>
                        </li>
                        <li>
                            <a href="{{route('admin.kerjasama.create')}}">Add kerjasama</a>
                        </li>
                    </ul>
                </li>
                {{-- <li class="">
                    <a class="nav-submenu" data-toggle="nav-submenu" href="#">
                        <i class="fa fa-paypal"></i><span class="sidebar-mini-hide">Payments</span>
                    </a>
                    <ul>
                        <li>
                            <a href="">Pending</a>
                        </li>
                        <li>
                            <a href="">Manage</a>
                        </li>
                        <li>
                            <a href="">Add Payment</a>
                        </li>
                    </ul>
                </li> --}}
                <li class="nav-main-heading"><span class="sidebar-mini-visible">ST</span><span class="sidebar-mini-hidden">Settings</span></li>
                <li>
                    <a href=""><i class="fa fa-pencil"></i><span class="sidebar-mini-hide">Profile</span></a>
                </li>
                <li>
                    <a href="{{route('admin.setting')}}"><i class="fa fa-wrench"></i><span class="sidebar-mini-hide">Settings</span></a>
                </li>
            </ul>
        </div>
        <!-- END Side Navigation -->
    </div>
    <!-- Sidebar Content -->
</nav>
<!-- END Sidebar -->