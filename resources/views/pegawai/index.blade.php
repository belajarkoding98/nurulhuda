@extends('layout/main')

@section('title', 'Daftar Pegawai')


@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1>Daftar Pegawai</h1>
            <table class="table">
                <thead class="table-dark">
                    <th scope="col">#</th>
                    <th scope="col">NIK</th>
                    <th scope="col">Nama Pegawai</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Tempat Tanggal Lahir</th>
                    <th scope="col">Aksi</th>
                </thead>
                <tbody>

                    @foreach($pegawai as $peg)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $peg->nik }}</td>
                        <td>{{ $peg->nama_pegawai }}</td>
                        <td><?php if ($peg->jenis_kelamin == 'L') {
                                echo "Laki-laki";
                            } else {
                                echo "Perempuan";
                            } ?></td>
                        <td>{{ $peg->tempat}}, {{ $peg->tgl_lahir }}</td>
                        <td>
                            <a href="" class="btn btn-success">Detail</a>
                            <a href="" class="btn btn-warning">Edit</a>
                            <a href="" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>
@endsection