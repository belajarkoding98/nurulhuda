<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Reset Password - Sistem Informasi Yayasan Nurul Huda Kertawangunan</title>
  <meta name="description" content="Admin, Dashboard, Bootstrap, Bootstrap 4, Angular, AngularJS" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- for ios 7 style, multi-resolution icon of 152x152 -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
  <link rel="apple-touch-icon" href="{!! asset('assets/assets/images/logo.png') !!}">
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
  <div class="app" id="app" style="min-height: 100%;
  background: url('../assets/images/background_gedung_black.jpg');
  overflow: hidden;
  width: 100%;
  padding: 0px 15px 110px 15px;">

<!-- ############ LAYOUT START-->
<div class="container">
<div class="row">
<div class="col-xs-12 col-sm-6 col-md-8 mt-xl-5 pt-xl-5 text-center">
  <img src="{{url('assets/images/logo_all_lembaga.png')}}" class="apps" style="width: 380px;">
  <h3 style="font-weight: bold; font-size:28pt; padding:10px; color: #fff;">
    Ahlan Wa Sahlan Peserta Didik<br><font style="color: #169b48"> Yayasan Nurul Huda Kertawangunan</font></h3>
</div>
<div class="col-xs-6 col-md-4">
  <div class="center-block w-xxl w-auto-xs p-y-md">
    <div class="navbar">
      <div class="pull-center">
        <div ui-include="'../views/blocks/navbar.brand.html'">
        </div>
      </div>
    </div>
    <div class="p-a-md box-color r box-shadow-z1 text-color shadow-side">
      <div class="text-center">
        <img src="{{url('assets/images/logo_ponpesnurulhuda.png')}}" class="apps">
      </div>
        <div class="m-b mt-xl-5">
          Lupa Password/PIN?
          <p class="text-xs m-t">Masukan email anda dan kami akan mengirimkan intruksi untuk merubah password.</p>
        </div>
        <form name="reset">
          <div class="md-form-group">
            <input type="email" class="md-input" required>
            <label>Email</label>
          </div>
          <button type="submit" class="btn primary btn-block p-x-md">Send Email</button>
        </form>
      <p id="alerts-container"></p>
      <div class="p-v-lg text-center mt-xl-5">Kembali ke halaman <a ui-sref="access.signin" href="{{ url('/login') }}" class="text-primary _600">Sign in</a></div>    
    </div>
  </div>
</div>
</div>
</div>

<!-- ############ LAYOUT END-->
<div class="app-footer">
  <div class="p-2 text-xs">
    <div class="text-center py-1" style="color: #fff;">
      &copy; 
      <script>
        var d = new Date();
        var n = d.getFullYear();
        document.write(n);
      </script>
      Copyright <strong>IT Nurul Huda Kertawangunan</strong> <span class="hidden-xs-down"></span>
    </div>
  </div>
</div>
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

  <script src="scripts/config.lazyload.js"></script>

  <script src="{!! asset('assets/scripts/palette.js') !!}"></script>
  <script src="{!! asset('assets/scripts/ui-load.js') !!}"></script>
  <script src="{!! asset('assets/scripts/ui-jp.js') !!}"></script>
  <script src="{!! asset('assets/scripts/ui-include.js') !!}"></script>
  <script src="{!! asset('assets/scripts/ui-device.js') !!}"></script>
  <script src="{!! asset('assets/scripts/ui-form.js') !!}"></script>
  <script src="{!! asset('assets/scripts/ui-nav.js') !!}"></script>
  <script src="{!! asset('assets/scripts/ui-screenfull.js') !!}"></script>
  <script src="{!! asset('assets/scripts/ui-scroll-to.js') !!}"></script>
  <script src="{!! asset('assets/scripts/ui-toggle-class.js') !!}"></script>

  <script src="scripts/app.js"></script>

  <!-- ajax -->
  <script src="{!! asset('assets/libs/jquery/jquery-pjax/jquery.pjax.js') !!}"></script>
  <script src="{!! asset('assets/scripts/ajax.js') !!}"></script>
<!-- endbuild -->
</body>
</html>
