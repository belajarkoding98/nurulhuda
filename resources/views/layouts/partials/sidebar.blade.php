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