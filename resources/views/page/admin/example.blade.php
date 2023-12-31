
<!doctype html>
<html lang="en" class="no-focus">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title>Codebase - Bootstrap 4 Admin Template &amp; UI Framework</title>

        <meta name="description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <!-- Open Graph Meta -->
        <meta property="og:title" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework">
        <meta property="og:site_name" content="Codebase">
        <meta property="og:description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:image" content="">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="assets/media/favicons/favicon.png">
        <link rel="icon" type="image/png" sizes="192x192" href="assets/media/favicons/favicon-192x192.png">
        <link rel="apple-touch-icon" sizes="180x180" href="assets/media/favicons/apple-touch-icon-180x180.png">
        <!-- END Icons -->

        <!-- Stylesheets -->

        <!-- Fonts and Codebase framework -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,400i,600,700">
        <link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
        <!-- END Stylesheets -->
    </head>
    <body>

        <!-- Page Container -->
        <!--
            Available classes for #page-container:

        GENERIC

            'enable-cookies'                            Remembers active color theme between pages (when set through color theme helper Template._uiHandleTheme())

        SIDEBAR & SIDE OVERLAY

            'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
            'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
            'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
            'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
            'sidebar-inverse'                           Dark themed sidebar

            'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
            'side-overlay-o'                            Visible Side Overlay by default

            'enable-page-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens

            'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

        HEADER

            ''                                          Static Header if no class is added
            'page-header-fixed'                         Fixed Header

        HEADER STYLE

            ''                                          Classic Header style if no class is added
            'page-header-modern'                        Modern Header style
            'page-header-inverse'                       Dark themed Header (works only with classic Header style)
            'page-header-glass'                         Light themed Header with transparency by default
                                                        (absolute position, perfect for light images underneath - solid light background on scroll if the Header is also set as fixed)
            'page-header-glass page-header-inverse'     Dark themed Header with transparency by default
                                                        (absolute position, perfect for dark images underneath - solid dark background on scroll if the Header is also set as fixed)

        MAIN CONTENT LAYOUT

            ''                                          Full width Main Content if no class is added
            'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
            'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)
        -->
        <div id="page-container" class="sidebar-o enable-page-overlay side-scroll page-header-fixed page-header-modern main-content-boxed">

            <!-- Side Overlay-->
            <aside id="side-overlay">
                <!-- Side Header -->
                <div class="content-header content-header-fullrow">
                    <div class="content-header-section align-parent">
                        <!-- Close Side Overlay -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <button type="button" class="btn btn-circle btn-dual-secondary align-v-r" data-toggle="layout" data-action="side_overlay_close">
                            <i class="fa fa-times text-danger"></i>
                        </button>
                        <!-- END Close Side Overlay -->

                        <!-- User Info -->
                        <div class="content-header-item">
                            <a class="img-link mr-5" href="javascript:void(0)">
                                <img class="img-avatar img-avatar32" src="assets/media/avatars/avatar11.jpg" alt="">
                            </a>
                            <a class="align-middle link-effect text-body-color-dark font-w600" href="javascript:void(0)">Dr. Stone</a>
                        </div>
                        <!-- END User Info -->
                    </div>
                </div>
                <!-- END Side Header -->

                <!-- Emergency Notification -->
                <div class="content-side content-side-full bg-danger-light text-center">
                    <i class="fa fa-exclamation-triangle fa-2x text-danger animated swing infinite"></i>
                    <p class="font-size-h5 font-w700 text-danger mt-10 mb-0">
                        There is an emergency, please proceed to surgery immediately!
                    </p>
                </div>
                <!-- END Emergency Notification -->

                <!-- Side Content -->
                <div class="content-side">
                    <!-- Mini Stats -->
                    <div class="block pull-r-l">
                        <div class="block-content block-content-full block-content-sm bg-body-light">
                            <div class="row text-center">
                                <div class="col-6">
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">Patients</div>
                                    <a class="link-effect font-w600 font-size-h4" href="javascript:void(0)">5</a>
                                </div>
                                <div class="col-6">
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">Appointments</div>
                                    <a class="link-effect font-w600 font-size-h4" href="javascript:void(0)">6</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Mini Stats -->

                    <!-- Notifications -->
                    <div class="block pull-r-l">
                        <div class="block-header bg-body-light">
                            <h3 class="block-title">Recent Notifications</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                    <i class="si si-refresh"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <ul class="list list-activity">
                                <li>
                                    <i class="fa fa-exclamation-triangle text-danger"></i>
                                    <div class="font-w600">There is an emergency!</div>
                                    <div>
                                        <a class="font-w600 text-danger" href="javascript:void(0)">Event Details</a>
                                    </div>
                                    <div class="font-size-xs text-muted">just now</div>
                                </li>
                                <li>
                                    <i class="fa fa-check text-success"></i>
                                    <div class="font-w600">New patient was added successfully</div>
                                    <div>
                                        <a class="font-w600 text-success" href="javascript:void(0)">Jose Parker</a>
                                    </div>
                                    <div class="font-size-xs text-muted">15 min ago</div>
                                </li>
                                <li>
                                    <i class="fa fa-pencil text-info"></i>
                                    <div class="font-w600">You edited a file</div>
                                    <div>
                                        <a class="font-w600 text-info" href="javascript:void(0)">
                                            <i class="fa fa-file-text-o"></i> Prescription#2.doc
                                        </a>
                                    </div>
                                    <div class="font-size-xs text-muted">1 day ago</div>
                                </li>
                                <li>
                                    <i class="fa fa-paypal text-primary"></i>
                                    <div class="font-w600">New payment received!</div>
                                    <div>
                                        From <a class="font-w600" href="javascript:void(0)">Thomas Riley</a>
                                    </div>
                                    <div class="font-size-xs text-muted">1 day ago</div>
                                </li>
                                <li>
                                    <i class="fa fa-check text-success"></i>
                                    <div class="font-w600">New appointment was scheduled successfully</div>
                                    <div>
                                        Tomorrow with <a class="font-w600 text-success" href="javascript:void(0)">Justin Hunt</a>
                                    </div>
                                    <div class="font-size-xs text-muted">2 days ago</div>
                                </li>
                            </ul>
                            <a class="btn btn-block btn-alt-secondary" href="javascript:void(0)">
                                Load more..
                            </a>
                            <a class="btn btn-block btn-hero btn-alt-primary" href="javascript:void(0)">
                                <i class="fa fa-flag mr-5"></i>
                                View All Notifications
                            </a>
                        </div>
                    </div>
                    <!-- END Notifications -->
                </div>
                <!-- END Side Content -->
            </aside>
            <!-- END Side Overlay -->

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
                                <a class="link-effect font-w700" href="index.html">
                                    <i class="si si-fire text-primary"></i>
                                    <span class="font-size-xl text-dual-primary-dark">code</span><span class="font-size-xl text-primary">base</span>
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
                            <img class="img-avatar img-avatar32" src="assets/media/avatars/avatar11.jpg" alt="">
                        </div>
                        <!-- END Visible only in mini mode -->

                        <!-- Visible only in normal mode -->
                        <div class="sidebar-mini-hidden-b text-center">
                            <a class="img-link" href="javascript:void(0)">
                                <img class="img-avatar" src="assets/media/avatars/avatar11.jpg" alt="">
                            </a>
                            <ul class="list-inline mt-10">
                                <li class="list-inline-item">
                                    <a class="link-effect text-dual-primary-dark font-size-xs font-w600 text-uppercase" href="javascript:void(0)">Dr. Stone</a>
                                </li>
                                <li class="list-inline-item">
                                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                                    <a class="link-effect text-dual-primary-dark" data-toggle="layout" data-action="sidebar_style_inverse_toggle" href="javascript:void(0)">
                                        <i class="fa fa-cog"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="link-effect text-dual-primary-dark" href="javascript:void(0)">
                                        <i class="fa fa-unlock-alt"></i>
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
                                <a class="active" href="db_medical.html"><i class="fa fa-hospital-o"></i><span class="sidebar-mini-hide">Overview</span></a>
                            </li>
                            <li class="nav-main-heading"><span class="sidebar-mini-visible">MG</span><span class="sidebar-mini-hidden">Manage</span></li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fa fa-user-circle-o"></i><span class="sidebar-mini-hide">Patients</span></a>
                                <ul>
                                    <li>
                                        <a href="">Current</a>
                                    </li>
                                    <li>
                                        <a href="">Manage</a>
                                    </li>
                                    <li>
                                        <a href="">Add Patient</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fa fa-calendar"></i><span class="sidebar-mini-hide">Appointments</span></a>
                                <ul>
                                    <li>
                                        <a href="">Active</a>
                                    </li>
                                    <li>
                                        <a href="">Manage</a>
                                    </li>
                                    <li>
                                        <a href="">Add Appointment</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fa fa-paypal"></i><span class="sidebar-mini-hide">Payments</span></a>
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
                            </li>
                            <li class="nav-main-heading"><span class="sidebar-mini-visible">ST</span><span class="sidebar-mini-hidden">Settings</span></li>
                            <li>
                                <a href=""><i class="fa fa-pencil"></i><span class="sidebar-mini-hide">Profile</span></a>
                            </li>
                            <li>
                                <a href=""><i class="fa fa-lock"></i><span class="sidebar-mini-hide">Security</span></a>
                            </li>
                            <li>
                                <a href=""><i class="fa fa-flag"></i><span class="sidebar-mini-hide">Notifications</span></a>
                            </li>
                            <li class="nav-main-heading"><span class="sidebar-mini-visible">HP</span><span class="sidebar-mini-hidden">Help</span></li>
                            <li>
                                <a href=""><i class="fa fa-book"></i><span class="sidebar-mini-hide">Knowledge Base</span></a>
                            </li>
                            <li>
                                <a href=""><i class="fa fa-comments"></i><span class="sidebar-mini-hide">Hospital Forum</span></a>
                            </li>
                        </ul>
                    </div>
                    <!-- END Side Navigation -->
                </div>
                <!-- Sidebar Content -->
            </nav>
            <!-- END Sidebar -->

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

                        <!-- Open Search Section -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <button type="button" class="btn btn-circle btn-dual-secondary d-sm-none" data-toggle="layout" data-action="header_search_on">
                            <i class="fa fa-search"></i>
                        </button>
                        <!-- END Open Search Section -->

                        <!-- Full Search -->
                        <div class="content-header-item d-none d-sm-inline-block">
                            <form action="db_medical.html" method="post" onsubmit="return false;">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search..">
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="fa fa-search"></i>
                                        </span>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- END Full Search -->
                    </div>
                    <!-- END Left Section -->

                    <!-- Right Section -->
                    <div class="content-header-section">
                        <!-- User Dropdown -->
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-rounded btn-dual-secondary" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-user-md d-sm-none"></i>
                                <span class="d-none d-sm-inline-block">Dr. Stone</span>
                                <i class="fa fa-angle-down ml-5"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right min-width-200" aria-labelledby="page-header-user-dropdown">
                                <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                    <span>
                                        <i class="fa fa-user-circle-o mr-5"></i> Patients
                                    </span>
                                    <span class="badge badge-primary">5</span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                    <span>
                                        <i class="fa fa-calendar mr-5"></i> Appointments
                                    </span>
                                    <span class="badge badge-info">6</span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                    <span>
                                        <i class="fa fa-paypal mr-5"></i> Payments
                                    </span>
                                    <span class="badge badge-warning">2</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fa fa-pencil mr-5"></i> Profile
                                </a>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fa fa-cog mr-5"></i> Settings
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fa fa-unlock-alt mr-5"></i> Sign Out
                                </a>
                            </div>
                        </div>
                        <!-- END User Dropdown -->

                        <!-- Toggle Side Overlay -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <button type="button" class="btn btn-rounded btn-dual-secondary" data-toggle="layout" data-action="side_overlay_toggle">
                            <span class="badge badge-danger mr-5 animated swing infinite">
                                <i class="fa fa-exclamation-triangle"></i>
                            </span>
                            <i class="fa fa-flag"></i>
                        </button>
                        <!-- END Toggle Side Overlay -->
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

            <!-- Main Container -->
            <main id="main-container">

                <!-- Quick Navigation -->
                <div class="bg-body-dark">
                    <div class="content">
                        <div class="row">
                            <div class="col-6 col-md-4 col-xl-2">
                                <a class="block block-rounded text-center" href="javascript:void(0)">
                                    <div class="block-content">
                                        <p class="mt-5 mb-10">
                                            <i class="fa fa-envelope-o text-gray fa-2x d-xl-none"></i>
                                            <i class="fa fa-envelope-o text-gray fa-3x d-none d-xl-inline-block"></i>
                                        </p>
                                        <p class="font-w600 font-size-sm text-uppercase">Inbox</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 col-md-4 col-xl-2">
                                <a class="block block-rounded text-center" href="javascript:void(0)">
                                    <div class="block-content">
                                        <p class="mt-5 mb-10">
                                            <i class="fa fa-pencil text-gray fa-2x d-xl-none"></i>
                                            <i class="fa fa-pencil text-gray fa-3x d-none d-xl-inline-block"></i>
                                        </p>
                                        <p class="font-w600 font-size-sm text-uppercase">Profile</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 col-md-4 col-xl-2">
                                <a class="block block-rounded text-center" href="javascript:void(0)">
                                    <div class="block-content">
                                        <p class="mt-5 mb-10">
                                            <i class="fa fa-wrench text-gray fa-2x d-xl-none"></i>
                                            <i class="fa fa-wrench text-gray fa-3x d-none d-xl-inline-block"></i>
                                        </p>
                                        <p class="font-w600 font-size-sm text-uppercase">Settings</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 col-md-4 col-xl-2">
                                <a class="block block-rounded text-center" href="javascript:void(0)">
                                    <div class="block-content">
                                        <p class="mt-5 mb-10">
                                            <i class="fa fa-plus-square-o text-gray fa-2x d-xl-none"></i>
                                            <i class="fa fa-plus-square-o text-gray fa-3x d-none d-xl-inline-block"></i>
                                        </p>
                                        <p class="font-w600 font-size-sm text-uppercase">Add Patient</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 col-md-4 col-xl-2">
                                <a class="block block-rounded text-center" href="javascript:void(0)">
                                    <div class="block-content">
                                        <p class="mt-5 mb-10">
                                            <i class="fa fa-plus-square-o text-gray fa-2x d-xl-none"></i>
                                            <i class="fa fa-plus-square-o text-gray fa-3x d-none d-xl-inline-block"></i>
                                        </p>
                                        <p class="font-w600 font-size-sm text-uppercase">Add Event</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 col-md-4 col-xl-2">
                                <a class="block block-rounded text-center" href="javascript:void(0)">
                                    <div class="block-content">
                                        <p class="mt-5 mb-10">
                                            <i class="fa fa-plus-square-o text-gray fa-2x d-xl-none"></i>
                                            <i class="fa fa-plus-square-o text-gray fa-3x d-none d-xl-inline-block"></i>
                                        </p>
                                        <p class="font-w600 font-size-sm text-uppercase">Add Payment</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Quick Navigation -->

                <!-- Page Content -->
                <div class="content">
                    <!-- Overview -->
                    <div class="row invisible" data-toggle="appear">
                        <div class="col-md-4">
                            <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
                                <div class="block-content block-content-full">
                                    <div class="py-20 text-center">
                                        <div class="mb-10">
                                            <i class="fa fa-user-circle-o fa-3x text-corporate"></i>
                                        </div>
                                        <div class="font-size-h4 font-w600">5 Patients</div>
                                        <div class="text-muted">2 were added today!</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
                                <div class="block-content block-content-full">
                                    <div class="py-20 text-center">
                                        <div class="mb-10">
                                            <i class="fa fa-calendar fa-3x text-elegance"></i>
                                        </div>
                                        <div class="font-size-h4 font-w600">6 Appointments</div>
                                        <div class="text-muted">4 are scheduled for today!</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
                                <div class="block-content block-content-full">
                                    <div class="py-20 text-center">
                                        <div class="mb-10">
                                            <i class="fa fa-paypal fa-3x text-primary"></i>
                                        </div>
                                        <div class="font-size-h4 font-w600">2 Payments</div>
                                        <div class="text-muted">Pending for tomorrow.</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- END Overview -->

                    <!-- Patients -->
                    <div class="block block-rounded block-bordered invisible" data-toggle="appear">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Current Patients</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                    <i class="si si-refresh"></i>
                                </button>
                                <button type="button" class="btn-block-option">
                                    <i class="si si-wrench"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content block-content-full">
                            <div class="table-responsive">
                                <table id="table-product" class="table table-borderless table-hover table-striped table-vcenter mb-0">
                                    <thead>
                                        <tr>
                                            <th style="width: 100px;">ID</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Condition</th>
                                            <th>Actions</th>
                                            <th>Added</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a class="font-w600" href="javascript:void(0)">54874</a>
                                            </td>
                                            <td>
                                                <strong>Roy</strong>
                                            </td>
                                            <td>
                                                <strong>Obrien</strong>
                                            </td>
                                            <td>
                                                <span class="badge badge-success">Normal</span>
                                            </td>
                                            <td>
                                                <a class="btn btn-sm btn-secondary" href="javascript:void(0)">
                                                    <i class="fa fa-heartbeat text-danger mr-5"></i> Medical History
                                                </a>
                                            </td>
                                            <td>
                                                <span class="text-muted font-italic">today</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a class="font-w600" href="javascript:void(0)">54873</a>
                                            </td>
                                            <td>
                                                <strong>Bobby</strong>
                                            </td>
                                            <td>
                                                <strong>Lane</strong>
                                            </td>
                                            <td>
                                                <span class="badge badge-info">Stable</span>
                                            </td>
                                            <td>
                                                <a class="btn btn-sm btn-secondary" href="javascript:void(0)">
                                                    <i class="fa fa-heartbeat text-danger mr-5"></i> Medical History
                                                </a>
                                            </td>
                                            <td>
                                                <span class="text-muted font-italic">today</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a class="font-w600" href="javascript:void(0)">54872</a>
                                            </td>
                                            <td>
                                                <strong>Amanda</strong>
                                            </td>
                                            <td>
                                                <strong>Ray</strong>
                                            </td>
                                            <td>
                                                <span class="badge badge-danger">Critical</span>
                                            </td>
                                            <td>
                                                <a class="btn btn-sm btn-secondary" href="javascript:void(0)">
                                                    <i class="fa fa-heartbeat text-danger mr-5"></i> Medical History
                                                </a>
                                            </td>
                                            <td>
                                                <span class="text-muted font-italic">3 days ago</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a class="font-w600" href="javascript:void(0)">54871</a>
                                            </td>
                                            <td>
                                                <strong>Rose</strong>
                                            </td>
                                            <td>
                                                <strong>Alvarado</strong>
                                            </td>
                                            <td>
                                                <span class="badge badge-warning">Pending..</span>
                                            </td>
                                            <td>
                                                <a class="btn btn-sm btn-secondary" href="javascript:void(0)">
                                                    <i class="fa fa-heartbeat text-danger mr-5"></i> Medical History
                                                </a>
                                            </td>
                                            <td>
                                                <span class="text-muted font-italic">4 days ago</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a class="font-w600" href="javascript:void(0)">54870</a>
                                            </td>
                                            <td>
                                                <strong>Jose</strong>
                                            </td>
                                            <td>
                                                <strong>Fowler</strong>
                                            </td>
                                            <td>
                                                <span class="badge badge-info">Stable</span>
                                            </td>
                                            <td>
                                                <a class="btn btn-sm btn-secondary" href="javascript:void(0)">
                                                    <i class="fa fa-heartbeat text-danger mr-5"></i> Medical History
                                                </a>
                                            </td>
                                            <td>
                                                <span class="text-muted font-italic">5 days ago</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- END Patients -->

                    <!-- Appointments -->
                    <div class="block block-rounded block-bordered invisible" data-toggle="appear">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Appointments</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                    <i class="si si-refresh"></i>
                                </button>
                                <button type="button" class="btn-block-option">
                                    <i class="si si-wrench"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content block-content-full">
                            <div class="table-responsive">
                                <table class="table table-borderless table-hover table-striped table-vcenter mb-0">
                                    <thead>
                                        <tr>
                                            <th style="width: 100px;">ID</th>
                                            <th>Patient</th>
                                            <th>First time?</th>
                                            <th>Date</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a class="font-w600" href="javascript:void(0)">36986</a>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0)">Alice Moore</a>
                                            </td>
                                            <td>
                                                <i class="fa fa-check-circle text-success"></i>
                                            </td>
                                            <td>
                                                Today at 10:00
                                            </td>
                                            <td>
                                                <a class="btn btn-sm btn-secondary m-5" href="javascript:void(0)">
                                                    <i class="fa fa-refresh text-primary mr-5"></i> Reschedule
                                                </a>
                                                <a class="btn btn-sm btn-secondary m-5" href="javascript:void(0)">
                                                    <i class="fa fa-times text-danger mr-5"></i> Cancel
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a class="font-w600" href="javascript:void(0)">36985</a>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0)">Henry Harrison</a>
                                            </td>
                                            <td>
                                                <i class="fa fa-check-circle text-success"></i>
                                            </td>
                                            <td>
                                                Today at 12:00
                                            </td>
                                            <td>
                                                <a class="btn btn-sm btn-secondary m-5" href="javascript:void(0)">
                                                    <i class="fa fa-refresh text-primary mr-5"></i> Reschedule
                                                </a>
                                                <a class="btn btn-sm btn-secondary m-5" href="javascript:void(0)">
                                                    <i class="fa fa-times text-danger mr-5"></i> Cancel
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a class="font-w600" href="javascript:void(0)">36984</a>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0)">Brian Stevens</a>
                                            </td>
                                            <td>
                                                <i class="fa fa-check-circle text-success"></i>
                                            </td>
                                            <td>
                                                Today at 14:00
                                            </td>
                                            <td>
                                                <a class="btn btn-sm btn-secondary m-5" href="javascript:void(0)">
                                                    <i class="fa fa-refresh text-primary mr-5"></i> Reschedule
                                                </a>
                                                <a class="btn btn-sm btn-secondary m-5" href="javascript:void(0)">
                                                    <i class="fa fa-times text-danger mr-5"></i> Cancel
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a class="font-w600" href="javascript:void(0)">36983</a>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0)">Sara Fields</a>
                                            </td>
                                            <td>
                                                <i class="fa fa-times-circle text-danger"></i>
                                            </td>
                                            <td>
                                                Today at 16:00
                                            </td>
                                            <td>
                                                <a class="btn btn-sm btn-secondary m-5" href="javascript:void(0)">
                                                    <i class="fa fa-refresh text-primary mr-5"></i> Reschedule
                                                </a>
                                                <a class="btn btn-sm btn-secondary m-5" href="javascript:void(0)">
                                                    <i class="fa fa-times text-danger mr-5"></i> Cancel
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a class="font-w600" href="javascript:void(0)">36982</a>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0)">Jeffrey Shaw</a>
                                            </td>
                                            <td>
                                                <i class="fa fa-check-circle text-success"></i>
                                            </td>
                                            <td>
                                                Tomorrow at 08:00
                                            </td>
                                            <td>
                                                <a class="btn btn-sm btn-secondary m-5" href="javascript:void(0)">
                                                    <i class="fa fa-refresh text-primary mr-5"></i> Reschedule
                                                </a>
                                                <a class="btn btn-sm btn-secondary m-5" href="javascript:void(0)">
                                                    <i class="fa fa-times text-danger mr-5"></i> Cancel
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a class="font-w600" href="javascript:void(0)">36981</a>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0)">David Fuller</a>
                                            </td>
                                            <td>
                                                <i class="fa fa-times-circle text-danger"></i>
                                            </td>
                                            <td>
                                                Tomorrow at 10:00
                                            </td>
                                            <td>
                                                <a class="btn btn-sm btn-secondary m-5" href="javascript:void(0)">
                                                    <i class="fa fa-refresh text-primary mr-5"></i> Reschedule
                                                </a>
                                                <a class="btn btn-sm btn-secondary m-5" href="javascript:void(0)">
                                                    <i class="fa fa-times text-danger mr-5"></i> Cancel
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- END Appointments -->

                    <!-- Payments -->
                    <div class="block block-rounded block-bordered invisible" data-toggle="appear">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Open Payments</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                    <i class="si si-refresh"></i>
                                </button>
                                <button type="button" class="btn-block-option">
                                    <i class="si si-wrench"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content block-content-full">
                            <div class="table-responsive">
                                <table class="table table-borderless table-hover table-striped table-vcenter mb-0">
                                    <thead>
                                        <tr>
                                            <th style="width: 100px;">ID</th>
                                            <th>Patient</th>
                                            <th>Invoice</th>
                                            <th>Due</th>
                                            <th>Actions</th>
                                            <th class="text-right">Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a class="font-w600" href="javascript:void(0)">158214</a>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0)">Carl Wells</a>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0)">
                                                    INV_158214.pdf
                                                </a>
                                            </td>
                                            <td>
                                                <span class="badge badge-primary">tomorrow</span>
                                            </td>
                                            <td>
                                                <a class="btn btn-sm btn-secondary m-5" href="javascript:void(0)">
                                                    <i class="fa fa-pencil text-primary mr-5"></i> Edit
                                                </a>
                                                <a class="btn btn-sm btn-secondary m-5" href="javascript:void(0)">
                                                    <i class="fa fa-times text-danger mr-5"></i> Cancel
                                                </a>
                                            </td>
                                            <td class="text-right">
                                                $3.500,00
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a class="font-w600" href="javascript:void(0)">158213</a>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0)">Jack Estrada</a>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0)">
                                                    INV_158213.pdf
                                                </a>
                                            </td>
                                            <td>
                                                <span class="badge badge-primary">tomorrow</span>
                                            </td>
                                            <td>
                                                <a class="btn btn-sm btn-secondary m-5" href="javascript:void(0)">
                                                    <i class="fa fa-pencil text-primary mr-5"></i> Edit
                                                </a>
                                                <a class="btn btn-sm btn-secondary m-5" href="javascript:void(0)">
                                                    <i class="fa fa-times text-danger mr-5"></i> Cancel
                                                </a>
                                            </td>
                                            <td class="text-right">
                                                $1.280,00
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="5" class="text-right">
                                                <strong class="text-uppercase">Total Due</strong>
                                            </td>
                                            <td class="text-right">
                                                <strong>$4.780,00</strong>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- END Payments -->
                </div>
                <!-- END Page Content -->

            </main>
            <!-- END Main Container -->

            <!-- Footer -->
            <footer id="page-footer" class="opacity-0">
                <div class="content py-20 font-size-xs clearfix">
                    <div class="float-right">
                        Crafted with <i class="fa fa-heart text-pulse"></i> by <a class="font-w600" href="https://1.envato.market/ydb" target="_blank">pixelcave</a>
                    </div>
                    <div class="float-left">
                        <a class="font-w600" href="https://1.envato.market/95j" target="_blank">Codebase 3.2</a> &copy; <span class="js-year-copy"></span>
                    </div>
                </div>
            </footer>
            <!-- END Footer -->
        </div>
        <!-- END Page Container -->

        <!--
            Codebase JS Core

            Vital libraries and plugins used in all pages. You can choose to not include this file if you would like
            to handle those dependencies through webpack. Please check out assets/_es6/main/bootstrap.js for more info.

            If you like, you could also include them separately directly from the assets/js/core folder in the following
            order. That can come in handy if you would like to include a few of them (eg jQuery) from a CDN.

            assets/js/core/jquery.min.js
            assets/js/core/bootstrap.bundle.min.js
            assets/js/core/simplebar.min.js
            assets/js/core/jquery-scrollLock.min.js
            assets/js/core/jquery.appear.min.js
            assets/js/core/jquery.countTo.min.js
            assets/js/core/js.cookie.min.js
        -->
        <script src="assets/js/codebase.core.min.js"></script>

        <!--
            Codebase JS

            Custom functionality including Blocks/Layout API as well as other vital and optional helpers
            webpack is putting everything together at assets/_es6/main/app.js
        -->
        <script src="assets/js/codebase.app.min.js"></script>
        <script src="{{asset('assets/js/plugins/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('assets/js/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>

        <script>
            $(document).ready(function () {
                $('#table-product').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('admin.product') }}",
                    columns: [{
                        data: 'DT_RowIndex',
                        name: 'no',
                        // className: 'dt-center'
                    }, 
                    {
                        data: 'nama',
                        name: 'nama'
                    }, 
                    {
                        data: 'harga',
                        name: 'harga'
                    }, 
                    {
                        data: 'gambar',
                        name: 'gambar'
                    },
                    {
                        data: 'created_at',
                        name: 'dibuat'
                    },  
                    {
                        data: 'action',
                        name: 'action',
                    }]
                });
                $('#btn_refresh_product').on('click', function () {
                    refreshProduct();
                });
            });

            function refreshProduct() {
                $.ajax({
                    url: "{{route('admin.product')}}",
                    type: "GET",
                    dataType: "JSON",
                    beforeSend: function () {
                        $('#product').addClass('block-mode-loading');
                    },
                    success: function (res) {
                        $('#product').removeClass('block-mode-loading');
                    }, 
                    error: function (err) {

                    }
                })
            }
        </script>
    </body>
</html>