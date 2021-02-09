<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
    <title>@yield('title') - Sistem Informasi Yayasan Nurul Huda Kertawangunan</title>
  <meta name="description" content="Sistem Informasi Yayasan Nurul Huda Kertawangunan" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- for ios 7 style, multi-resolution icon of 152x152 -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
  <link rel="apple-touch-icon" href="{!! asset('assets/images/yayasannurulhuda.ico') !!}">
  <meta name="apple-mobile-web-app-title" content="Flatkit">
  <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
  <meta name="mobile-web-app-capable" content="yes">
  <!-- icon -->
  <link rel="shortcut icon" href="{!! asset('assets/images/yayasannurulhuda.ico') !!}">

    {{-- CSS External --}}
    @include('layouts.partials.css')
   
</head>
    <body>
        
        {{-- Sidebar --}}
        @include('layouts.partials.sidebar')

        <div id="content" class="app-content box-shadow-z0" role="main">
                {{-- Navbar --}}
                @include('layouts.partials.navbar')
                {{-- Container --}}
                @yield('container')
                {{-- Footer --}}
                @include('layouts.partials.footer')
        </div>   

    </body>

    {{-- Script External --}}
    @include('layouts.partials.script')
    </html>