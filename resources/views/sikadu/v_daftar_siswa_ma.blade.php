@extends('layout/main')

@section('title', 'Daftar Siswa MA Nurul Huda')


@section('container')
@include('plugin.toastr')
<!-- /#message-modal -->


<div class="modal fade" id="boostrapModal-3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel-2">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel-2">Hapus Data</h4>
            </div>
            <div class="modal-body">
                <p>Apakah anda yakin akan menghapus data siswa <strong id="name-student"></strong> ?</p>
            </div>
            <div class="modal-footer">
                <form action="" id="formdelete" method="post" style="display:inline;">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm waves-effect waves-light">Hapus</button>
                    <!-- </form> -->
                    <button type="button" class="btn btn-default btn-sm waves-effect waves-light"
                        data-dismiss="modal">Batal</button>
                </form>

            </div>
        </div>
    </div>
</div>


<!-- end message modal -->
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
                                    <button type="button" data-toggle="modal" data-target="#boostrapModal-3"
                                        data-id="{{$dsma->id_siswa_ma}}" data-name="{{$dsma->nama_siswa}}"
                                        class="btn btn-social waves-effect waves-light btn-danger addAttr"
                                        title="Hapus"><i class="ico fa fa-trash"></i></button>
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
    <script>
    $('.addAttr').click(function() {
        var id = $(this).data('id');
        var name = $(this).data('name');
        var action = "{{ url('/siswa-ma') }}/" + id;
        $('#formdelete').prop('action', decodeURIComponent(action));
        $('#name-student').text(name);
    });
    </script>
    @endsection