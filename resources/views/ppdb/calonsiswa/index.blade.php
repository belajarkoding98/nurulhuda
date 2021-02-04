@extends('layouts/master')

@section('title', 'Dashboard')

@section('container')
<div class="row small-spacing">
<!-- /.col-xs-12 -->
<!-- /.col-lg-3 col-md-6 col-xs-12 -->
<div class="col-lg-6 col-md-6 col-xs-12">
    <div class="box-content">
        <h4 class="box-title">Virtual Account</h4>
        <!-- /.box-title -->
        <div class="dropdown js__drop_down">
            <a href="#" class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button"></a>
            <ul class="sub-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else there</a></li>
                <li class="split"></li>
                <li><a href="#">Separated link</a></li>
            </ul>
            <!-- /.sub-menu -->
        </div>
        <!-- /.dropdown js__dropdown -->
        <div class="content widget-stat-chart">
            <!-- /.c100 p58 -->
            <div class="p76 small blue" style="float: left; font-size: 60px;">
                <i class="fa fa-credit-card-alt text-success"></i>
            </div>
            <div class="right-content">
                <h2 class="counter">123xxxxxxxxx</h2>
                <!-- /.counter -->
                <p class="text">a.n Muhammad Jahidin</p>
                <p class="text">asal sekolah: SDN 1 Sindangagung</p>
                <p class="text">alamat: RT. 001 RW. 002, Desa Sindangagung</p>
                <!-- /.text -->
            </div>
            <!-- /.right-content -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.box-content -->
</div>
<!-- /.col-lg-3 col-md-6 col-xs-12 -->
<div class="col-lg-6 col-md-6 col-xs-12">
    <div class="box-content">
        <h4 class="box-title">
            atau Pembayaran dapat dilakukan ke rekening:</h4>
        <!-- /.box-title -->
        <div class="dropdown js__drop_down">
            <a href="#" class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button"></a>
            <ul class="sub-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else there</a></li>
                <li class="split"></li>
                <li><a href="#">Separated link</a></li>
            </ul>
            <!-- /.sub-menu -->
        </div>
        <!-- /.dropdown js__dropdown -->
        <div class="content widget-stat">
            <div class="percent bg-primary">Bank Mandiri</div>
            <!-- /.percent -->
            <div class="right-content">
                <h2 class="counter">134-00-1455330-8</h2>
                <!-- /.counter -->
                <!-- /.text -->
            </div>
            <div class="percent bg-warning">BNI Syariah</div>
            <!-- /.percent -->
            <div class="right-content">
                <h2 class="counter">0817029705</h2>
                <!-- /.counter -->
                <p class="text">a.n Yayasan Nurul Huda Kertawangunan</p>
                <!-- /.text -->
            </div>
            <!-- /.right-content -->
            <div class="clear"></div>
            <!-- /.clear -->
            <br>
            <!-- /.process-bar -->
        </div>
        <!-- /.content widget-stat -->
    </div>
    <!-- /.box-content -->
</div>
<!-- /.col-lg-3 col-md-6 col-xs-12 -->
<div class="col-lg-4 col-md-6 col-xs-12">
    <div class="box-content">
        <h4 class="box-title">Status Pembayaran</h4>
        <!-- /.box-title -->
        <div class="dropdown js__drop_down">
            <a href="#" class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button"></a>
            <ul class="sub-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else there</a></li>
                <li class="split"></li>
                <li><a href="#">Separated link</a></li>
            </ul>
            <!-- /.sub-menu -->
        </div>
        <!-- /.dropdown js__dropdown -->
        <div class="content widget-stat-chart">
            <div class="p76 small blue" style="float: left; font-size: 60px;">
                <i class="fa fa-info text-black-50"></i>
            </div>
            <!-- /.c100 p58 -->
            <div class="right-content">
                <h2 class="counter">Belum Lunas</h2>
                <!-- /.text -->
            </div>
            <!-- /.right-content -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.box-content -->
</div>
<div class="col-lg-4 col-md-6 col-xs-12">
    <div class="box-content">
        <h4 class="box-title">Status Kelulusan Ujian</h4>
        <!-- /.box-title -->
        <div class="dropdown js__drop_down">
            <a href="#" class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button"></a>
            <ul class="sub-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else there</a></li>
                <li class="split"></li>
                <li><a href="#">Separated link</a></li>
            </ul>
            <!-- /.sub-menu -->
        </div>
        <!-- /.dropdown js__dropdown -->
        <div class="content widget-stat-chart">
            <div class="p76 small blue" style="float: left; font-size: 60px;">
                <i class="fa fa-info-circle text-danger"></i>
            </div>
            <!-- /.c100 p58 -->
            <div class="right-content">
                <h2 class="counter">Belum Ada</h2>
                <!-- /.text -->
            </div>
            <!-- /.right-content -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.box-content -->
</div>
<div class="col-lg-4 col-md-6 col-xs-12">
    <div class="box-content">
        <h4 class="box-title">Status Siswa</h4>
        <!-- /.box-title -->
        <div class="dropdown js__drop_down">
            <a href="#" class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button"></a>
            <ul class="sub-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else there</a></li>
                <li class="split"></li>
                <li><a href="#">Separated link</a></li>
            </ul>
            <!-- /.sub-menu -->
        </div>
        <!-- /.dropdown js__dropdown -->
        <div class="content widget-stat-chart">
            <div class="p76 small blue" style="float: left; font-size: 60px;">
                <i class="fa fa-user text-primary"></i>
            </div>
            <!-- /.c100 p58 -->
            <div class="right-content">
                <h2 class="counter">Belum Aktif</h2>
                <!-- /.text -->
            </div>
            <!-- /.right-content -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.box-content -->
</div>

<!-- /.col-lg-6 col-xs-12 -->
</div>
@endsection