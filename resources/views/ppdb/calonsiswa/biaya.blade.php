@extends('layouts/master')

@section('title', 'Biaya Pendaftaran')

@section('container')
<div class="row small-spacing">
    <div class="col-xs-12">
        <div class="box-content">
            <h4 class="box-title">MA Nurul Huda Kertawangunan</h4>
            <!-- /.box-title -->
            <div class="dropdown js__drop_down">
                <a href="{{ url('/validasi') }}" type="button" class="btn btn-icon btn-icon-right btn-primary waves-effect waves-light"><i class="ico fa fa-arrow-right"></i>Validasi Pembayaran</a>
                <!-- /.sub-menu -->
            </div>
            <!-- /.dropdown js__dropdown -->
            <table class="table table-bordered table-striped">
                <tbody>
                    <thead>
                        <th class="text-center">No.</th>
                        <th class="text-center">Jenis Pembayaran</th>
                        <th class="text-center">Biaya</th>
                        <th class="text-center">Status</th>
                    </thead>
                    <tr>
                        <td>1</td>
                        <td style="width: 40%">Pendaftaran</td>
                        <td style="width: 40%" class="text-right">Rp. 200.000</td>
                        <td class="text-center"><button class="btn btn-xs btn-success">Validasi</button></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Infaq Pembangunan</td>
                        <td class="text-right">Rp. 750.000</td>
                        <td class="text-center"><button class="btn btn-xs btn-danger">Belum Validasi</button></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>MOS (Masa Orientasi Siswa)</td>
                        <td class="text-right">Rp. 100.000</td>
                        <td class="text-center"><button class="btn btn-xs btn-danger">Belum Validasi</button></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>SPP Bulanan & Pesantren <br><b>(Termasuk Makan, Listrik, SPP Sekolah & Pesantren)</b></td>
                        <td class="text-right">Rp. 450.000</td>
                        <td class="text-center"><button class="btn btn-xs btn-danger">Belum Validasi</button></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Name Tag & Kartu pelajar</td>
                        <td class="text-right">Rp. 100.000</td>
                        <td class="text-center"><button class="btn btn-xs btn-danger">Belum Validasi</button></td>
                    </tr>
                    <tr>
                        <td colspan="2" class="text-center text-bold">Total Biaya</td>
                        <td class="text-right">Rp. 1.600.000</td>
                        <td class="text-center"><button class="btn btn-xs btn-danger">Belum Lunas</button></td>
                    </tr>
                </tbody>
            </table>
            <div class="col-md-8 text-right mt-3">
                <strong>Jumlah Biaya yang harus dibayarkan: </strong>
            </div>
            <div class="col-md-4">
                <div class="input-group">
                    <div class="input-group-btn"><label for="ig-3" class="btn btn-default">Rp</label></div>
                    <!-- /.input-group-btn -->
                    <input id="ig-3" type="text" class="form-control" placeholder="" value="1.400.000" readonly>
                </div>
            </div>
        </div>
        <!-- /.box-content -->
    </div>
    <!-- /.col-xs-12 -->
</div>
@endsection