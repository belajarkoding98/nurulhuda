@extends('layouts/master')

@section('title', 'Upload Bukti Pembayaran')

@section('container')
<div class="col-xs-12">
    <div class="box-content">
        <h4 class="box-title"></h4>
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
        <form action="" method="post">
            @csrf
        <div class="form-group">
            <label for="inp-type-1" class="col-sm-3 control-label">Keterangan</label>
            <div class="col-sm-4">
                <input type="text" class="form-control margin-bottom-10" id="inp-type-1" name="keterangan"
                    placeholder="Keterangan">
            </div>
        </div>
        <!-- /.dropdown js__dropdown -->
            <input type="file" id="input-file-now" class="dropify" />

            <button href="{{ url('/validasi') }}" type="submit" class="btn btn-icon btn-icon-left btn-primary waves-effect waves-light margin-top-20"><i class="ico fa fa-upload"></i>Kirim</button>
    </form>
    </div>
    <!-- /.box-content -->
</div>
@endsection