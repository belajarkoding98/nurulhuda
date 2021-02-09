<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Sign Up - Sistem Informasi Yayasan Nurul Huda Kertawangunan</title>
  <meta name="description" content="Admin, Dashboard, Bootstrap, Bootstrap 4, Angular, AngularJS" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- for ios 7 style, multi-resolution icon of 152x152 -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
  <link rel="apple-touch-icon" href="{!! asset('assets/images/logo.png') !!}">
  <meta name="apple-mobile-web-app-title" content="Flatkit">
  <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
  <meta name="mobile-web-app-capable" content="yes">
    <!-- icon -->
    <link rel="shortcut icon" href="{!! asset('assets/images/yayasannurulhuda.ico') !!}">
  <!-- style -->
  <link rel="stylesheet" href="{!! asset('assets/animate.css/animate.min.css') !!}" type="text/css" />
  <link rel="stylesheet" href="{!! asset('assets/glyphicons/glyphicons.css" type="text/css') !!}" />
  <link rel="stylesheet" href="{!! asset('assets/font-awesome/css/font-awesome.min.css') !!}" type="text/css" />
  <link rel="stylesheet" href="{!! asset('assets/material-design-icons/material-design-icons.css') !!}" type="text/css" />

  <link rel="stylesheet" href="{!! asset('assets/bootstrap/dist/css/bootstrap.min.css') !!}" type="text/css" />
  <!-- build:css ../assets/styles/app.min.css -->
  <link rel="stylesheet" href="{!! asset('assets/styles/app.css') !!}" type="text/css" />
  <!-- endbuild -->
  <link rel="stylesheet" href="{!! asset('assets/styles/font.css') !!}" type="text/css" />
</head>
<body>
  <div class="app" id="app">

<!-- ############ LAYOUT START-->
  <div class="center-block full-w-xxl w-auto-xs p-y-md">
    <div class="navbar">
      <div class="pull-center">
        <div class="text-center">
          <img src="{{url('assets/images/logo_ponpesnurulhuda.png')}}" class="apps">
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="p-a-md box-color r box-shadow-z1 text-color m-a">
          <div class="m-b text-lg text-center">
            Pendaftaran Calon Peserta Didik <strong>Gelombang 2, 2020/2021</strong>
          </div>
          <form ui-jp="parsley">
            <div class="box">
              <div class="box-body">                    
                <div class="form-group row">
                  <label class="col-sm-3 form-control-label text-bold">Tingkat/Kelas<span class="text-red">*</span></label>
                  <div class="col-sm-5">
                    <select required class="form-control c-select">
                        <option value="">Pilih Tingkat/kelas</option>
                        <option value="1">TIngkat Kelas 1</option>
                        <option value="2">TIngkat Kelas 2</option>
                        <option value="3">TIngkat Kelas 3</option>
                        <option value="4">TIngkat Kelas 4</option>
                        <option value="5">TIngkat Kelas 5</option>
                        <option value="6">TIngkat Kelas 6</option>
                    </select>
                  </div>
                </div>
                <hr>
                <div class="form-group row mt-5">
                  <label class="col-sm-3 form-control-label text-bold">Email<span class="text-red">*</span></label>
                  <div class="col-sm-7">
                    <input type="email" name="email" minlength="6" class="form-control" placeholder="Masukan Email" required>
                    <p style="font-size: 8pt;">Email harus email aktif, karena link informasi & validasi akan dikirimkan melalui email</p>
                  </div>
                </div>
                
                <div class="form-group row">
                  <label class="col-sm-3 form-control-label text-bold">Password/PIN<span class="text-red">*</span></label>
                  <div class="col-sm-6">
                    <input type="password" name="password1" minlength="6" class="form-control" placeholder="Masukan Password/PIN minimal 6 digit" required>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-3 form-control-label text-bold">Konrirmasi Password/PIN<span class="text-red">*</span></label>
                  <div class="col-sm-6">
                    <input type="password" name="password2" minlength="6" class="form-control" placeholder="Masukan Password/PIN minimal 6 digit" required>
                  </div>
                </div>

                <hr class="mt-5">
                <div class="form-group row">
                  <label class="col-sm-3 form-control-label text-bold">NISN</label>
                  <div class="col-sm-7">
                    <input type="text" name="nisn" data-parsley-length="[6, 10]" class="form-control" placeholder="Nomor Induk Siswa Nasional">
                    <p style="font-size: 8pt;">Silahkan klik <a href="https://referensi.data.kemdikbud.go.id/nisn/" class="text-bold">disini</a> untuk mengecek NISN anda </p>
                  </div>
                </div>
                
                <div class="form-group row">
                  <label class="col-sm-3 form-control-label text-bold">Nama Lengkap Peserta Didik<span class="text-red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" name="nama_siswa" class="form-control" placeholder="Nama Lengkap" required>
                    <p style="font-size: 8pt;">Isikan nama lengkap sesuai dengan akta / ijazah terakhir</p>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-3 form-control-label text-bold">Jenjang yang dituju<span class="text-red">*</span></label>
                  <div class="col-sm-5">
                    <select required name="provinsi" class="form-control c-select">
                        <option value="">Pilih Jenjang</option>
                        <option value="1">SDIT Al-Huda</option>
                        <option value="2">SMPIT Al-Huda</option>
                        <option value="3">MA Nurul Huda</option>
                    </select>
                  </div>
                </div>
                
                <div class="form-group row">
                  <label class="col-sm-3 form-control-label text-bold">Tempat / Tanggal Lahir<span class="text-red">*</span></label>
                  <div class="col-sm-4">
                    <input type="text" name="tempat"  class="form-control" placeholder="Tempat" required>
                  </div>
                  <div class="col-sm-4">
                    
                    <div class="form-group">
                      <div class='input-group date' ui-jp="datetimepicker" ui-options="{
                            icons: {
                              time: 'fa fa-clock-o',
                              date: 'fa fa-calendar',
                              up: 'fa fa-chevron-up',
                              down: 'fa fa-chevron-down',
                              previous: 'fa fa-chevron-left',
                              next: 'fa fa-chevron-right',
                              today: 'fa fa-screenshot',
                              clear: 'fa fa-trash',
                              close: 'fa fa-remove'
                            }
                          }">
                          <input type='text' class="form-control" >
                          <span class="input-group-addon">
                              <span class="fa fa-calendar"></span>
                          </span>
                      </div>
                  </div>
                  </div>
                </div>
                
                <div class="form-group row">
                  <label class="col-sm-3 form-control-label text-bold">Jenis Kelamin<span class="text-red">*</span></label>
                  <div class="col-sm-9">
                    <div class="radio">
                      <label class="ui-check">
                        <input type="radio" name="jk" value="1" class="has-value">
                        <i class="dark-white"></i>
                        Laki-laki
                      </label>
                      <label class="ui-check ml-3">
                        <input type="radio" name="jk" value="2" class="has-value">
                        <i class="dark-white"></i>
                        Perempuan
                      </label>
                    </div>
                  </div>
                </div>
                
                <div class="form-group row">
                  <label class="col-sm-3 form-control-label text-bold">Alamat<span class="text-red">*</span></label>
                  <div class="col-sm-7">
                    <textarea class="form-control" name="alamat" rows="3" data-minwords="6" required placeholder="Masukan alamat"></textarea>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-3 form-control-label text-bold">Provinsi<span class="text-red">*</span></label>
                  <div class="col-sm-5">
                    <select required name="provinsi" class="form-control c-select">
                        <option value="">Pilih Provinsi</option>
                        <option value="1">Jawa Barat</option>
                        <option value="2">TIngkat Kelas 2</option>
                        <option value="3">TIngkat Kelas 3</option>
                        <option value="4">TIngkat Kelas 4</option>
                        <option value="5">TIngkat Kelas 5</option>
                        <option value="6">TIngkat Kelas 6</option>
                    </select>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-3 form-control-label text-bold">Kabupaten/Kota<span class="text-red">*</span></label>
                  <div class="col-sm-5">
                    <select required name="kabupaten_kota" class="form-control c-select" disabled>
                        <option value="">Pilih Kabupaten/Kota</option>
                        <option value="1">Kuningan</option>
                        <option value="2">TIngkat Kelas 2</option>
                        <option value="3">TIngkat Kelas 3</option>
                        <option value="4">TIngkat Kelas 4</option>
                        <option value="5">TIngkat Kelas 5</option>
                        <option value="6">TIngkat Kelas 6</option>
                    </select>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-3 form-control-label text-bold">Nomor HP (Whatsapp)<span class="text-red">*</span></label>
                  <div class="col-sm-5">
                    <input type="text" name="no_hp" class="form-control" placeholder="format (089123456789)" required>
                    <p style="font-size: 8pt;">Nomer Handphone harus aktif dengan format (08123456789))</p>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-3 form-control-label text-bold">Asal Sekolah<span class="text-red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" name="asal_sekolah" class="form-control" placeholder="Asal Sekolah sebelumnya" required>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-3 form-control-label text-bold">Nama Ibu Kandung<span class="text-red">*</span></label>
                  <div class="col-sm-9">
                    <input type="text" name="nama_ibu" class="form-control" placeholder="Nama Lengkap Ibu Kandung" required>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-3 form-control-label text-bold">Jalur<span class="text-red">*</span></label>
                  <div class="col-sm-5">
                    <select required name="jalur" class="form-control c-select">
                        <option value="">Pilih Jalur</option>
                        <option value="1">Umum</option>
                        <option value="2">Prestasi</option>
                    </select>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-3 form-control-label text-bold">Program Kelas<span class="text-red">*</span></label>
                  <div class="col-sm-5">
                    <select required name="program" class="form-control c-select" disabled>
                        <option value="">Pilih Program kelas</option>
                        <option value="1">Reguler</option>
                    </select>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-3 form-control-label text-bold"></label>
                  <div class="col-sm-9">
                    <div class="checkbox">
                      <label class="checkbox ui-check">
                        <input type="checkbox" name="inlineCheckbox1" value="option1" required data-parsley-error-message="Untuk melanjutkan kamu harus setuju." required><i></i> Ya, saya setuju dengan persyaratan dan ketentuan, bahwa seluruh data yang saya isikan adalah benar, sah, legal dan sesuai dengan keadaan kenyataan.
                      </label>
                    </div>
                  </div>
                </div>

              </div>
              <div class="dker p-a text-right">
              <div class="form-group row">
                <label class="col-sm-3 form-control-label text-bold"></label>
                <div class="col-sm-9">
                    <button type="submit" class="btn info" style="float: left; cursor: pointer;">Mendaftar</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="p-v-lg text-center">
      <div>Sudah punya akun? silahkan <a ui-sref="access.signin" href="{{url('/login')}}" class="text-primary _600">Login</a></div>
    </div>
  </div>

<!-- ############ LAYOUT END-->

  </div>
<!-- build:js scripts/app.html.js -->
<!-- jQuery -->
<script src="{!! asset('assets/libs/jquery/jquery/dist/jquery.js') !!}"></script>
<!-- Bootstrap -->
  <script src="{!! asset('assets/libs/jquery/tether/dist/js/tether.min.js') !!}"></script>
  <script src="{!! asset('assets/libs/jquery/bootstrap/dist/js/bootstrap.js') !!}"></script>
<!-- core -->
  <script src="{!! asset('assets/libs/jquery/underscore/underscore-min.js') !!}"></script>
  <script src="{!! asset('assets/libs/jquery/jQuery-Storage-API/jquery.storageapi.min.js') !!}"></script>
  <script src="{!! asset('assets/libs/jquery/PACE/pace.min.js') !!}"></script>

  <script src="{!! asset('assets/libs/scripts/config.lazyload.js') !!}"></script>

  <script src="{!! asset('assets/libs/scripts/palette.js') !!}"></script>
  <script src="{!! asset('assets/libs/scripts/ui-load.js') !!}"></script>
  <script src="{!! asset('assets/libs/scripts/ui-jp.js') !!}"></script>
  <script src="{!! asset('assets/libs/scripts/ui-include.js') !!}"></script>
  <script src="{!! asset('assets/libs/scripts/ui-device.js') !!}"></script>
  <script src="{!! asset('assets/libs/scripts/ui-form.js') !!}"></script>
  <script src="{!! asset('assets/libs/scripts/ui-nav.js') !!}"></script>
  <script src="{!! asset('assets/libs/scripts/ui-screenfull.js') !!}"></script>
  <script src="{!! asset('assets/libs/scripts/ui-scroll-to.js') !!}"></script>
  <script src="{!! asset('assets/libs/scripts/ui-toggle-class.js') !!}"></script>

  <script src="{!! asset('assets/libs/scripts/app.js') !!}"></script>

  <!-- ajax -->
  <script src="{!! asset('assets/libs/jquery/jquery-pjax/jquery.pjax.js') !!}"></script>
  <script src="{!! asset('assets/libs/scripts/ajax.js') !!}"></script>


  <script type="text/script">
    $('#datetimepicker').datetimepicker({

    })
  </script>
<!-- endbuild -->
</body>
</html>
