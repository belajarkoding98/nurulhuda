@extends('layout/main')

@section('title', 'Tambah Siswa MA Nurul Huda')


@section('container')
<div id="wrapper">
    <div class="main-content">
        <div class="row small-spacing">
            <div class="col-lg-12 col-xs-12">
                <div class="box-content card white">
                    <h4 class="box-title">Tambah Siswa MA Nurul Huda</h4>
                    <!-- /.box-title -->
                    <div class="card-content">
                        <form class="form-horizontal" method="POST" action="{{ url('/siswa-ma') }}">
                            @csrf
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="inp-type-1" class="col-sm-3 control-label">NIS</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control is-invalid" id="inp-type-1" name="nis"
                                            placeholder="Nomor Induk Siswa" value="{{ old('nis') }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inp-type-1" class="col-sm-3 control-label">Nama Siswa</label>
                                    <div class="col-sm-9 @error('nama_siswa') has-error form-with-icon @enderror">
                                        <input type="text" class="form-control" id="inp-type-1" name="nama_siswa"
                                            placeholder="Nama Lengkap siswa" alue="{{ old('nama_siswa') }}">
                                        @error('nama_siswa')
                                        <i class="fa fa-times item-icon item-icon-right"></i>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inp-type-1" class="col-sm-3 control-label">Tempat Tanggal Lahir</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="inp-type-1" name="tempat"
                                            placeholder="Tempat" alue="{{ old('tempat') }}">
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="dd/mm/yyyy"
                                                name="tgl_lahir" id="datepicker-autoclose">
                                            <span class="input-group-addon bg-success text-white"><i
                                                    class="fa fa-calendar"></i></span>
                                        </div>
                                        <!-- /.input-group -->
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inp-type-1" class="col-sm-3 control-label">Tahun Masuk & jalur</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="inp-type-1" name="thn_masuk"
                                            placeholder="Tahun">
                                    </div>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="program">
                                            <option value="">Pilih Jalur</option>
                                            <option value="1">Reguler</option>
                                            <option value="2">Beasiswa</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inp-type-2" class="col-sm-3 control-label">Program</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="program">
                                            <option value="">Pilih Program/Jurusan</option>
                                            <option value="1">Keagamaan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inp-type-2" class="col-sm-3 control-label">Tingkat</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="tingkat">
                                            <option value="">Pilih Tingkat/Kelas</option>
                                            <option value="1">Kelas 1</option>
                                            <option value="2">Kelas 2</option>
                                            <option value="3">Kelas 3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inp-type-3" class="col-sm-3 control-label">No Telepon</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inp-type-3" name="no_telp"
                                            placeholder="Nomor Telepon">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inp-type-4" class="col-sm-3 control-label">Alamat</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inp-type-4" placeholder="Alamat"
                                            name="alamat">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inp-type-4" class="col-sm-3 control-label">Provinsi</label>
                                    <div class="col-sm-9">
                                        <select class="form-control select2_1" name="provinsi">
                                            <option value="-">Pilih Provinsi</option>
                                            @foreach ($data_provinsi['provinsi'] as $d_provinsi)
                                            <option value="{{ $d_provinsi['nama'] }}">{{ $d_provinsi['nama'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inp-type-4" class="col-sm-3 control-label">Kabupaten/Kota</label>
                                    <div class="col-sm-9">
                                        <select class="form-control select2_1" name="kabupaten_kota">
                                            <option value="-">Pilih Kabupaten/Kota</option>
                                            @foreach ($data_kota['kota_kabupaten'] as $d_kota)
                                            <option value="{{ $d_kota['nama'] }}">{{ $d_kota['nama'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inp-type-4" class="col-sm-3 control-label">Kecamatan & Desa</label>
                                    <div class="col-sm-4">
                                        <select class="form-control select2_1" name="kecamatan">
                                            <option value="-">Pilih Kecamatan</option>
                                            @foreach ($data_kecamatan['kecamatan'] as $d_kec)
                                            <option value="{{ $d_kec['nama'] }}">{{ $d_kec['nama'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="inp-type-1"
                                            placeholder="Masukan Nama Desa" name="desa">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="inp-type-1" class="col-sm-3 control-label">Nama Ayah</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inp-type-1" name="nama_ayah"
                                            placeholder="Nama Lengkap Ayah">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inp-type-1" class="col-sm-3 control-label">Pekerjaan Ayah</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inp-type-1" name="pekerjaan_ayah"
                                            placeholder="Pekerjaan Ayah">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inp-type-1" class="col-sm-3 control-label">No Telepon Ayah</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inp-type-1" name="no_telp_ayah"
                                            placeholder="Nomor Telepon Ayah">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inp-type-1" class="col-sm-3 control-label">Nama Ibu</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inp-type-1" name="nama_ibu"
                                            placeholder="Nama Lengkap Ibu">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inp-type-1" class="col-sm-3 control-label">Pekerjaan Ibu</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inp-type-1" name="pekerjaan_ibu"
                                            placeholder="Pekerjaan Ibu">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inp-type-1" class="col-sm-3 control-label">No Telepon Ibu</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inp-type-1" name="no_telp_ibu"
                                            placeholder="Nomor Telepon Ibu">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inp-type-5" class="col-sm-3 control-label">Alamat Orang Tua</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" id="inp-type-5" name="alamat_ortu"
                                            placeholder="Alamat Lengkap Orang Tua"></textarea>
                                    </div>
                                </div>
                                <div class="form-group margin-top-10">
                                    <div class="col-sm-12">
                                        <button type="submit"
                                            class="btn btn-icon btn-icon-left btn-success waves-effect waves-light"><i
                                                class="ico fa fa-save"></i>Simpan</button>
                                        <button type="reset"
                                            class="btn btn-icon btn-icon-left btn-danger waves-effect waves-light"><i
                                                class="ico fa fa-close"></i>Batal</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.card-content -->
                </div>
                <!-- /.box-content card white -->
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
    </div>
    <!-- /.main-content -->
</div>

@endsection