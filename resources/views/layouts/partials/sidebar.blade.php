<div class="main-menu">
    <header class="header">
        <a href="{{ url('/') }}" class="logo">PPDB NHK</a>
        <button type="button" class="button-close fa fa-times js__menu_close"></button>
        <div class="user">
            <a href="#" class="avatar"><img src="{!! asset('assets/images/profile.png') !!}" alt=""><span
                    class="status online"></span></a>
            <h5 class="name"><a href="profile.html">Jahidin</a></h5>
            <h5 class="position">Calon Siswa Baru</h5>
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
                    <a class="waves-effect" href="{{ url('/biaya') }}"><i
                            class="menu-icon fa fa-money"></i><span>Biaya Pendaftaran</span></a>
                </li>
                <li>
                    <a class="waves-effect" href="{{ url('/validasi') }}"><i
                            class="menu-icon fa fa-check-circle-o"></i><span>Validasi Pembayaran</span></a>
                </li>
                <li>
                    <a class="waves-effect" href="{{ url('/ujian') }}"><i
                            class="menu-icon fa fa-credit-card"></i><span>Ujian</span></a>
                </li>

            </ul>
            
        </div>
        <!-- /.navigation -->
    </div>
    <!-- /.content -->
</div>