<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title') - SIKADU Yayasan Nurul Huda Kertawangunan</title>

    <!-- icon -->
    <link rel="shortcut icon" href="{!! asset('assets/images/yayasannurulhuda.ico') !!}">

    <!-- Main Styles -->
    <link rel="stylesheet" href="{!! asset('assets/styles/style.min.css') !!}">

    <!-- mCustomScrollbar -->
    <link rel="stylesheet" href="{!! asset('assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.min.css') !!}">

    <!-- Waves Effect -->
    <link rel="stylesheet" href="{!! asset('assets/plugin/waves/waves.min.css') !!}">

    <!-- Sweet Alert -->
    <link rel="stylesheet" href="{!! asset('assets/plugin/sweet-alert/sweetalert.css') !!}">

    <!-- Percent Circle -->
    <link rel="stylesheet" href="{!! asset('assets/plugin/percircle/css/percircle.css') !!}">

    <!-- Chartist Chart -->
    <link rel="stylesheet" href="{!! asset('assets/plugin/chart/chartist/chartist.min.css') !!}">

    <!-- FullCalendar -->
    <link rel="stylesheet" href="{!! asset('assets/plugin/fullcalendar/fullcalendar.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/plugin/fullcalendar/fullcalendar.print.css') !!}" media='print'>

    <!-- Dark Themes -->
    <link rel="stylesheet" href="{!! asset('assets/styles/style-dark.min.css') !!}">

    <!-- Data Tables -->
    <link rel="stylesheet" href="{!! asset('assets/plugin/datatables/media/css/dataTables.bootstrap.min.css') !!}">
    <link rel="stylesheet"
        href="{!! asset('assets/plugin/datatables/extensions/Responsive/css/responsive.bootstrap.min.css') !!}">

    <!-- Datepicker -->
    <link rel="stylesheet" href="{!! asset('assets/plugin/datepicker/css/bootstrap-datepicker.min.css') !!}">

    <!-- Select2 -->
    <link rel="stylesheet" href="{!! asset('assets/plugin/select2/css/select2.min.css') !!}">

    <!-- Sweet Alert -->
    <link rel="stylesheet" href="{!! asset('assets/plugin/sweet-alert/sweetalert.css') !!}">

</head>

<body>
    <div class="main-menu">
        <header class="header">
            <a href="{{ url('/') }}" class="logo">SIKADU NHK</a>
            <button type="button" class="button-close fa fa-times js__menu_close"></button>
            <div class="user">
                <a href="#" class="avatar"><img src="{!! asset('assets/images/profile.png') !!}" alt=""><span
                        class="status online"></span></a>
                <h5 class="name"><a href="profile.html">Jahidin</a></h5>
                <h5 class="position">Staff IT</h5>
                <!-- /.name -->
                <div class="control-wrap js__drop_down">
                    <i class="fa fa-caret-down js__drop_down_button"></i>
                    <div class="control-list">
                        <div class="control-item"><a href="profile.html"><i class="fa fa-user"></i> Profile</a></div>
                        <div class="control-item"><a href="#"><i class="fa fa-gear"></i> Settings</a></div>
                        <div class="control-item"><a href="#"><i class="fa fa-sign-out"></i> Log out</a></div>
                    </div>
                    <!-- /.control-list -->
                </div>
                <!-- /.control-wrap -->
            </div>
            <!-- /.user -->
        </header>
        <!-- /.header -->
        <div class="content">

            <div class="navigation">
                <!-- /.title -->
                <ul class="menu js__accordion">
                    <li class="current">
                        <a class="waves-effect" href="{{ url('/') }}"><i
                                class="menu-icon fa fa-home"></i><span>Dashboard</span></a>
                    </li>
                    <li>
                        <a class="waves-effect parent-item js__control" href="#"><i
                                class="menu-icon fa fa-archive"></i><span>Data Siswa</span><span
                                class="menu-arrow fa fa-angle-down"></span></a>
                        <ul class="sub-menu js__content">
                            <li><a href="{{ url('/siswa-paud') }}">PAUD Al-Huda</a></li>
                            <li><a href="{{ url('/siswa-sdit') }}">SDIT Al-Huda</a></li>
                            <li><a href="{{ url('/siswa-smpit') }}">SMPIT Al-Huda</a></li>
                            <li><a href="{{ url('/siswa-ma') }}">MA Nurul Huda</a></li>
                        </ul>
                        <!-- /.sub-menu js__content -->
                    </li>
                    <li>
                        <a class="waves-effect parent-item js__control" href="#"><i
                                class="menu-icon fa fa-adjust"></i><span>Data Siswa Baru</span><span
                                class="notice notice-yellow m-r-3">6</span><span
                                class="menu-arrow fa fa-angle-down"></span></a>
                        <ul class="sub-menu js__content">
                            <li><a href="ui-buttons.html">PAUD & SDIT</a></li>
                            <li><a href="ui-cards.html">SMPIT Al-Huda</a></li>
                            <li><a href="ui-checkbox-radio.html">MA Nurul Huda</a></li>
                        </ul>
                        <!-- /.sub-menu js__content -->
                    </li>
                </ul>
                <!-- /.menu js__accordion -->
                <h5 class="title">Data Pegawai</h5>
                <!-- /.title -->
                <ul class="menu js__accordion">
                    <li>
                        <a class="waves-effect" href="calendar.html"><i class="menu-icon fa fa-users"></i><span>Daftar
                                Guru/Staff</span></a>
                    </li>
                    <li>
                        <a class="waves-effect" href="calendar.html"><i class="menu-icon fa fa-users"></i><span>Daftar
                                Asatidz</span></a>
                    </li>
                </ul>
                <!-- /.menu js__accordion -->
                <h5 class="title">Additions</h5>
                <!-- /.title -->
                <ul class="menu js__accordion">
                    <li>
                        <a class="waves-effect" href="profile.html"><i
                                class="menu-icon fa fa-user"></i><span>Profile</span></a>
                    </li>
                    <li>
                        <a class="waves-effect" href="inbox.html"><i
                                class="menu-icon fa fa-envelope"></i><span>Mail</span><span
                                class="notice notice-danger">New</span></a>
                    </li>
                    <li>
                        <a class="waves-effect parent-item js__control" href="#"><i
                                class="menu-icon fa fa-file-text"></i><span>Page</span><span
                                class="menu-arrow fa fa-angle-down"></span></a>
                        <ul class="sub-menu js__content">
                            <li><a href="page-starter.html">Starter Page</a></li>
                            <li><a href="page-login.html">Login</a></li>
                            <li><a href="page-register.html">Register</a></li>
                            <li><a href="page-recoverpw.html">Recover Password</a></li>
                            <li><a href="page-lock-screen.html">Lock Screen</a></li>
                            <li><a href="page-confirm-mail.html">Confirm Mail</a></li>
                            <li><a href="page-404.html">Error 404</a></li>
                            <li><a href="page-500.html">Error 500</a></li>
                        </ul>
                        <!-- /.sub-menu js__content -->
                    </li>
                    <li>
                        <a class="waves-effect parent-item js__control" href="#"><i
                                class="menu-icon fa fa-folder-open"></i><span>Extra Pages</span><span
                                class="menu-arrow fa fa-angle-down"></span></a>
                        <ul class="sub-menu js__content">
                            <li><a href="extras-contact.html">Contact list</a></li>
                            <li><a href="extras-email-template.html">Email template</a></li>
                            <li><a href="extras-faq.html">FAQ</a></li>
                            <li><a href="extras-gallery.html">Gallery</a></li>
                            <li><a href="extras-invoice.html">Invoice</a></li>
                            <li><a href="extras-maps.html">Maps</a></li>
                            <li><a href="extras-pricing.html">Pricing</a></li>
                            <li><a href="extras-projects.html">Projects</a></li>
                            <li><a href="extras-taskboard.html">Taskboard</a></li>
                            <li><a href="extras-timeline.html">Timeline</a></li>
                            <li><a href="extras-tour.html">Tour</a></li>
                        </ul>
                        <!-- /.sub-menu js__content -->
                    </li>
                </ul>
                <!-- /.menu js__accordion -->
            </div>
            <!-- /.navigation -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.main-menu -->

    <div class="fixed-navbar">
        <div class="pull-left">
            <button type="button"
                class="menu-mobile-button glyphicon glyphicon-menu-hamburger js__menu_mobile"></button>
            <h1 class="page-title">Sistem Informasi Akademik Terpadu Yayasan Nurul Huda Kertawangunan</h1>
            <!-- /.page-title -->
        </div>
        <!-- /.pull-left -->
        <div class="pull-right">
            <div class="ico-item">
                <a href="#" class="ico-item fa fa-search js__toggle_open" data-target="#searchform-header"></a>
                <form action="#" id="searchform-header" class="searchform js__toggle"><input type="search"
                        placeholder="Search..." class="input-search"><button class="fa fa-search button-search"
                        type="submit"></button></form>
                <!-- /.searchform -->
            </div>
            <!-- /.ico-item -->
            <div class="ico-item fa fa-arrows-alt js__full_screen"></div>
            <!-- /.ico-item fa fa-fa-arrows-alt -->
            <div class="ico-item toggle-hover js__drop_down ">
                <span class="fa fa-th js__drop_down_button"></span>
                <div class="toggle-content">
                    <ul>
                        <li><a href="#"><i class="fa fa-github"></i><span class="txt">Github</span></a></li>
                        <li><a href="#"><i class="fa fa-bitbucket"></i><span class="txt">Bitbucket</span></a></li>
                        <li><a href="#"><i class="fa fa-slack"></i><span class="txt">Slack</span></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i><span class="txt">Dribbble</span></a></li>
                        <li><a href="#"><i class="fa fa-amazon"></i><span class="txt">Amazon</span></a></li>
                        <li><a href="#"><i class="fa fa-dropbox"></i><span class="txt">Dropbox</span></a></li>
                    </ul>
                    <a href="#" class="read-more">More</a>
                </div>
                <!-- /.toggle-content -->
            </div>
            <!-- /.ico-item -->
            <a href="#" class="ico-item fa fa-envelope notice-alarm js__toggle_open" data-target="#message-popup"></a>
            <a href="#" class="ico-item pulse"><span class="ico-item fa fa-bell notice-alarm js__toggle_open"
                    data-target="#notification-popup"></span></a>
            <a href="#" class="ico-item fa fa-power-off js__logout"></a>
        </div>
        <!-- /.pull-right -->
    </div>
    <!-- /.fixed-navbar -->

    <div id="notification-popup" class="notice-popup js__toggle" data-space="75">
        <h2 class="popup-title">Your Notifications</h2>
        <!-- /.popup-title -->
        <div class="content">
            <ul class="notice-list">
                <li>
                    <a href="#">
                        <span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
                        <span class="name">John Doe</span>
                        <span class="desc">Like your post: “Contact Form 7 Multi-Step”</span>
                        <span class="time">10 min</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
                        <span class="name">Anna William</span>
                        <span class="desc">Like your post: “Facebook Messenger”</span>
                        <span class="time">15 min</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="avatar bg-warning"><i class="fa fa-warning"></i></span>
                        <span class="name">Update Status</span>
                        <span class="desc">Failed to get available update data. To ensure the please contact us.</span>
                        <span class="time">30 min</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="avatar"><img src="http://placehold.it/128x128" alt=""></span>
                        <span class="name">Jennifer</span>
                        <span class="desc">Like your post: “Contact Form 7 Multi-Step”</span>
                        <span class="time">45 min</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
                        <span class="name">Michael Zenaty</span>
                        <span class="desc">Like your post: “Contact Form 7 Multi-Step”</span>
                        <span class="time">50 min</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
                        <span class="name">Simon</span>
                        <span class="desc">Like your post: “Facebook Messenger”</span>
                        <span class="time">1 hour</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="avatar bg-violet"><i class="fa fa-flag"></i></span>
                        <span class="name">Account Contact Change</span>
                        <span class="desc">A contact detail associated with your account has been changed.</span>
                        <span class="time">2 hours</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
                        <span class="name">Helen 987</span>
                        <span class="desc">Like your post: “Facebook Messenger”</span>
                        <span class="time">Yesterday</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="avatar"><img src="http://placehold.it/128x128" alt=""></span>
                        <span class="name">Denise Jenny</span>
                        <span class="desc">Like your post: “Contact Form 7 Multi-Step”</span>
                        <span class="time">Oct, 28</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
                        <span class="name">Thomas William</span>
                        <span class="desc">Like your post: “Facebook Messenger”</span>
                        <span class="time">Oct, 27</span>
                    </a>
                </li>
            </ul>
            <!-- /.notice-list -->
            <a href="#" class="notice-read-more">See more messages <i class="fa fa-angle-down"></i></a>
        </div>
        <!-- /.content -->
    </div>
    <!-- /#notification-popup -->

    <div id="message-popup" class="notice-popup js__toggle" data-space="75">
        <h2 class="popup-title">Recent Messages<a href="#" class="pull-right text-danger">New message</a></h2>
        <!-- /.popup-title -->
        <div class="content">
            <ul class="notice-list">
                <li>
                    <a href="#">
                        <span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
                        <span class="name">John Doe</span>
                        <span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere
                            repellat voluptates.</span>
                        <span class="time">10 min</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
                        <span class="name">Harry Halen</span>
                        <span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere
                            repellat voluptates.</span>
                        <span class="time">15 min</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
                        <span class="name">Thomas Taylor</span>
                        <span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere
                            repellat voluptates.</span>
                        <span class="time">30 min</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="avatar"><img src="http://placehold.it/128x128" alt=""></span>
                        <span class="name">Jennifer</span>
                        <span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere
                            repellat voluptates.</span>
                        <span class="time">45 min</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
                        <span class="name">Helen Candy</span>
                        <span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere
                            repellat voluptates.</span>
                        <span class="time">45 min</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="avatar"><img src="http://placehold.it/128x128" alt=""></span>
                        <span class="name">Anna Cavan</span>
                        <span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere
                            repellat voluptates.</span>
                        <span class="time">1 hour ago</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="avatar bg-success"><i class="fa fa-user"></i></span>
                        <span class="name">Jenny Betty</span>
                        <span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere
                            repellat voluptates.</span>
                        <spazn class="time">1 day ago</spazn>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="avatar"><img src="http://placehold.it/128x128" alt=""></span>
                        <span class="name">Denise Peterson</span>
                        <span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere
                            repellat voluptates.</span>
                        <span class="time">1 year ago</span>
                    </a>
                </li>
            </ul>
            <!-- /.notice-list -->
            <a href="#" class="notice-read-more">See more messages <i class="fa fa-angle-down"></i></a>
        </div>
        <!-- /.content -->
    </div>

    @yield('container')

    <!-- 
	================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{!! asset('assets/scripts/jquery.min.js') !!}"></script>
    <script src="{!! asset('assets/scripts/modernizr.min.js') !!}"></script>
    <script src="{!! asset('assets/plugin/bootstrap/js/bootstrap.min.js') !!}"></script>
    <script src="{!! asset('assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js') !!}"></script>
    <script src="{!! asset('assets/plugin/nprogress/nprogress.js') !!}"></script>
    <script src="{!! asset('assets/plugin/sweet-alert/sweetalert.min.js') !!}"></script>
    <script src="{!! asset('assets/plugin/waves/waves.min.js') !!}"></script>
    <!-- Full Screen Plugin -->
    <script src="{!! asset('assets/plugin/fullscreen/jquery.fullscreen-min.js') !!}"></script>

    <!-- Percent Circle -->
    <script src="{!! asset('assets/plugin/percircle/js/percircle.js') !!}"></script>

    <!-- Google Chart -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js') !!}"></script>

    <!-- Chartist Chart -->
    <script src="{!! asset('assets/plugin/chart/chartist/chartist.min.js') !!}"></script>
    <script src="{!! asset('assets/scripts/chart.chartist.init.min.js') !!}"></script>

    <!-- FullCalendar -->
    <script src="{!! asset('assets/plugin/moment/moment.js') !!}"></script>
    <script src="{!! asset('assets/plugin/fullcalendar/fullcalendar.min.js') !!}"></script>
    <script src="{!! asset('assets/scripts/fullcalendar.init.js') !!}"></script>

    <script src="{!! asset('assets/scripts/main.min.js') !!}"></script>

    <!-- Data Tables -->
    <script src="{!! asset('assets/plugin/datatables/media/js/jquery.dataTables.min.js') !!}"></script>
    <script src="{!! asset('assets/plugin/datatables/media/js/dataTables.bootstrap.min.js') !!}"></script>
    <script src="{!! asset('assets/plugin/datatables/extensions/Responsive/js/dataTables.responsive.min.js') !!}">
    </script>
    <script src="{!! asset('assets/plugin/datatables/extensions/Responsive/js/responsive.bootstrap.min.js') !!}">
    </script>
    <script src="{!! asset('assets/scripts/datatables.demo.min.js') !!}"></script>


    <!-- Timepicker -->
    <script src="{!! asset('assets/plugin/timepicker/bootstrap-timepicker.min.js') !!}"></script>

    <!-- Datepicker -->
    <script src="{!! asset('assets/plugin/datepicker/js/bootstrap-datepicker.min.js') !!}"></script>

    <!-- Demo Scripts -->
    <script src="{!! asset('assets/scripts/form.demo.min.js') !!}"></script>

    <!-- Select2 -->
    <script src="{!! asset('assets/plugin/select2/js/select2.min.js') !!}"></script>

    <!-- Flex Datalist -->
    <script src="{!! asset('assets/plugin/flexdatalist/jquery.flexdatalist.min.js') !!}"></script>





</body>

</html>