<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa_ma_model;
use Illuminate\Support\Facades\Http;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_siswa_ma()
    {
        $data_siswa_ma = Siswa_ma_model::all();
        return view('sikadu/v_daftar_siswa_ma', compact('data_siswa_ma'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_siswa_ma()
    {
        $response_provinsi = Http::get('https://dev.farizdotid.com/api/daerahindonesia/provinsi');
        $response_kota = Http::get('https://dev.farizdotid.com/api/daerahindonesia/kota?id_provinsi=32');
        $response_kecamatan = Http::get('https://dev.farizdotid.com/api/daerahindonesia/kecamatan?id_kota=3208');
        $data_provinsi = $response_provinsi->json();
        $data_kota = $response_kota->json();
        $data_kecamatan = $response_kecamatan->json();
        // dd($response_provinsi);
        return view('sikadu/c_siswa_ma', compact('data_provinsi', 'data_kota', 'data_kecamatan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_siswa_ma(Request $request)
    {
        //validasi
        $request->validate([
            'nis' => 'required',
            'nama_siswa' => 'required',
            'tempat' => 'required',
        ]);

        //Cara pertama
        Siswa_ma_model::create([
            'nis' => $request->nis,
            'thn_masuk' => $request->thn_masuk,
            'nama_siswa' => $request->nama_siswa,
            'tempat' => $request->tempat,
            'tgl_lahir' => $request->tgl_lahir,
            'program' => $request->program,
            'jalur' => $request->tingkat,
            'no_telp' => $request->no_telp,
            'tingkat' => $request->tingkat,
            'alamat' => $request->alamat,
            'provinsi' => $request->provinsi,
            'kota' => $request->kabupaten_kota,
            'kecamatan' => $request->kecamatan,
            'desa' => $request->desa,
            'nama_ayah' => $request->nama_ayah,
            'pekerjaan_ayah' => $request->pekerjaan_ayah,
            'no_telp_ayah' => $request->no_telp_ayah,
            'nama_ibu' => $request->nama_ibu,
            'pekerjaan_ibu' => $request->pekerjaan_ibu,
            'no_telp_ibu' => $request->no_telp_ibu,
            'alamat_ortu' => $request->alamat_ortu,
        ]);

        return redirect('/siswa-ma')->with('status', '<script>toastr["success"]("Data Siswa Madrasah Aliyah atasnama ' . $request->nama_siswa . ' Berhasil ditambahkan!", "Data Disimpan")</script>');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_siswa_ma($id)
    {
        // $data_siswa_ma = Siswa_ma_model::
        $data_siswa_ma = Siswa_ma_model::where('id_siswa_ma', $id)->first();
        return view('sikadu.v_detail_siswa_ma', compact('data_siswa_ma'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy_siswa_ma($id)
    {
        Siswa_ma_model::where('id_siswa_ma', $id)->delete();
        $data_siswa_ma = Siswa_ma_model::where('id_siswa_ma', $id)->first();
        return redirect('/siswa-ma')->with('status', '<script>toastr["error"]("Data Siswa Madrasah Aliyah atasnama ' . $data_siswa_ma['nama_siswa'] . ' Berhasil dihapus!", "Data Dihapus")</script>');
    }
}