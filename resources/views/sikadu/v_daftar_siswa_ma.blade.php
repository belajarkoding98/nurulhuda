@extends('layout/main')

@section('title', 'Daftar Siswa MA Nurul Huda')


@section('container')
@include('plugin.toastr')
<!-- /#message-popup -->
<div id="wrapper">
    <div class="main-content">
        @if (session('status'))
        <?php echo session('status') ?>
        @endif

        <div class="row small-spacing">
            <div class="col-xs-12">
                <div class="box-content">
                    <h4 class="box-title">Data Siswa MA Nurul Huda</h4>
                    <div class="margin-bottom-20">
                        <a href="{{ url('/siswa-ma/create') }}" type="button"
                            class="btn btn-icon btn-icon-left btn-success waves-effect waves-light"><i
                                class="ico fa fa-plus"></i>Tambah Siswa</a>
                    </div>
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
                    <table id="example" class="table table-striped table-bordered display" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIS</th>
                                <th>Nama Siswa</th>
                                <th>Tahun Masuk</th>
                                <th>Tingkat</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>NIS</th>
                                <th>Nama Siswa</th>
                                <th>Tahun Masuk</th>
                                <th>Tingkat</th>
                                <th>Opsi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($data_siswa_ma as $dsma)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{$dsma->nis}}</td>
                                <td>{{$dsma->nama_siswa}}</td>
                                <td>{{$dsma->thn_masuk}}</td>
                                <td>{{$dsma->tingkat}}</td>
                                <td>
                                    <a href="{{ url('/siswa-ma', $dsma->id_siswa_ma) }}" type="button"
                                        class="btn btn-social waves-effect waves-light btn-primary" title="Detail"><i
                                            class="ico fa fa-info"></i></a>
                                    <a href="#" type="button"
                                        class="btn btn-social waves-effect waves-light btn-warning" title="Edit"><i
                                            class="ico fa fa-edit"></i></a>
                                    <form action="{{ url('/siswa-ma', $dsma->id_siswa_ma) }}" method="post"
                                        style="display:inline;">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-social waves-effect waves-light btn-danger"
                                            title="Hapus"><i class="ico fa fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.box-content -->
            </div>
        </div>
        <!-- /.row small-spacing -->
        <footer class="footer">
            <ul class="list-inline">
                <li>2021 © IT Nurul Huda Kertawangunan.</li>
                <li><a href="#">Privacy</a></li>
                <li><a href="#">Terms</a></li>
                <li><a href="#">Help</a></li>
            </ul>
        </footer>
        </script>
        <!-- /.main-content -->
    </div>
    @endsection