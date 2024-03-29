<!-- Header -->
<header id="page-header">
    <!-- Header Content -->
    <div class="content-header">
        <!-- Left Section -->
        <div class="content-header-section">
            <!-- Toggle Sidebar -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none" data-toggle="layout" data-action="sidebar_toggle">
                <i class="fa fa-navicon"></i>
            </button>
            <!-- END Toggle Sidebar -->
            <!-- User Dropdown -->
            @yield('breadcrumb')
            <!-- END User Dropdown -->
        </div>
        <!-- END Left Section -->

        <!-- Right Section -->
        <div class="content-header-section">
            <!-- User Dropdown -->
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-rounded btn-dual-secondary" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-user-md d-sm-none"></i>
                    <span class="d-none d-sm-inline-block">{{auth()->user()->username}}</span>
                    <i class="fa fa-angle-down ml-5"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right min-width-200" aria-labelledby="page-header-user-dropdown">
                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="{{route('admin.product')}}">
                        <span>
                            <i class="fa fa-user-circle-o mr-5"></i> Product
                        </span>
                        {{-- <span class="badge badge-primary">5</span> --}}
                    </a>
                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="{{route('admin.kegiatan')}}">
                        <span>
                            <i class="fa fa-calendar mr-5"></i> Kegiatan
                        </span>
                    </a>
                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="{{route('admin.berita')}}">
                        <span>
                            <i class="fa fa-paypal mr-5"></i> Berita
                        </span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{route('admin.setting')}}">
                        <i class="fa fa-cog mr-5"></i> Settings
                    </a>
                    <div class="dropdown-divider"></div>
                    <form action="{{route('logout.action')}}" method="post">
                        @csrf
                        <button class="dropdown-item" type="submit">
                            <i class="fa fa-unlock-alt mr-5"></i> Sign Out
                        </button>
                        {{-- <a class="dropdown-item" href="{{route('logout.action')}}">
                            <i class="fa fa-unlock-alt mr-5"></i> Sign Out
                        </a> --}}
                    </form>
                </div>
            </div>
            <!-- END User Dropdown -->
        </div>
        <!-- END Right Section -->
    </div>
    <!-- END Header Content -->

    <!-- Header Search -->
    <div id="page-header-search" class="overlay-header">
        <div class="content-header content-header-fullrow">
            <form>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <!-- Close Search Section -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <button type="button" class="btn btn-secondary px-15" data-toggle="layout" data-action="header_search_off">
                            <i class="fa fa-times"></i>
                        </button>
                        <!-- END Close Search Section -->
                    </div>
                    <input type="text" class="form-control" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-secondary px-15">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- END Header Search -->

    <!-- Header Loader -->
    <div id="page-header-loader" class="overlay-header bg-primary">
        <div class="content-header content-header-fullrow text-center">
            <div class="content-header-item">
                <i class="fa fa-sun-o fa-spin text-white"></i>
            </div>
        </div>
    </div>
    <!-- END Header Loader -->
</header>
<!-- END Header -->