@extends('layouts/master')

@section('title', 'Validasi Pembayaran')

@section('container')
<div class="col-lg-4 col-md-6 col-xs-12">
    <div class="box-content card bordered-all primary js__card">
        <h4 class="box-title bg-primary with-control">
            <i class="fa fa-upload"></i>
            Via Upload Website
            <span class="controls">
                <button type="button" class="control fa fa-minus js__card_minus"></button>
                <button type="button" class="control fa fa-times js__card_remove"></button>
            </span>
            <!-- /.controls -->
        </h4>
        <!-- /.box-title -->
        <div class="card-content js__card_content text-center">
            <p>Klik Tombol berikut untuk upload bukti pembayaran melalui halaman ini, maksimak 2 kali validasi (upload pembayaran) dengan jangka waktu pembayaran 14 hari. <br><strong>Setelah dinyatakan diterima.</strong><br><br></p>
            <a title="Upload Bukti Pembayaran" href="{{url('/upload')}}" type="button" target="_blank" class="btn btn-sm btn-primary"><i class="fa fa-upload"></i> Upload Bukti</a>
        </div>
    </div>
    <!-- /.box-content -->
</div>
<div class="col-lg-4 col-md-6 col-xs-12">
    <div class="box-content card bordered-all success js__card">
        <h4 class="box-title bg-success with-control">
            <i class="fa fa-whatsapp"></i>
            Via WhatsApp
            <span class="controls">
                <button type="button" class="control fa fa-minus js__card_minus"></button>
                <button type="button" class="control fa fa-times js__card_remove"></button>
            </span>
            <!-- /.controls -->
        </h4>
        <!-- /.box-title -->
        <div class="card-content js__card_content text-center">
            <p>Klik Tombol berikut untuk mengirimkan bukti pembayaran ke Call Center WhatsApp PSB Yayasan Nurul Huda Kertawangunan atau menghubungi <strong style="color: #00bf4f">0813 1350 4694</strong><br><br><br></p>
            <a title="Kirim dengan WhatsApp" href="https://api.whatsapp.com/send?phone=6281313504694&text=Assalamu'alaikum pak/bu, saya mau mengirimkan bukti pembayaran atas nama siswa Muhammad Jahidin dengan nomor VA 123xxxxxxxxx" target="_blank" class="btn btn-sm btn-success"><i class="fa fa-whatsapp"></i> Kirim</a>
        </div>
    </div>
    <!-- /.box-content -->
</div>
<div class="col-lg-4 col-md-6 col-xs-12">
    <div class="box-content card bordered-all danger js__card">
        <h4 class="box-title bg-danger with-control">
            <i class="fa fa-google"></i>
            Via Alamat Kantor
            <span class="controls">
                <button type="button" class="control fa fa-minus js__card_minus"></button>
                <button type="button" class="control fa fa-times js__card_remove"></button>
            </span>
            <!-- /.controls -->
        </h4>
        <!-- /.box-title -->
        <div class="card-content js__card_content text-center">
            <p>Klik Tombol berikut untuk membuka lokasi Google Maps kantor Yayasan Nurul Huda Kertawangunan atau Alamat: Komplek PonPes Nurul Huda Dusun II Blok Tarikolot, RT.003/RW.002, Kertawangunan, Sindangagung, Kuningan</p>
            <a title="Lokasi Kantor" href="https://goo.gl/maps/y2Yr2A4SUm5rt8X26" target="_blank" type="button" class="btn btn-sm btn-danger"><i class="fa fa-location-arrow"></i> Alamat Kantor</a>
        </div>
    </div>
    <!-- /.box-content -->
</div>
@endsection