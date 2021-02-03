<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title') - Sistem Informasi Yayasan Nurul Huda Kertawangunan</title>

    <!-- icon -->
    <link rel="shortcut icon" href="{!! asset('assets/images/yayasannurulhuda.ico') !!}">

    {{-- CSS External --}}
    @include('layouts.partials.css')
   
</head>
    <body>
        
        {{-- Sidebar --}}
        @include('layouts.partials.sidebar')

        {{-- Navbar --}}
        @include('layouts.partials.navbar')

        <div id="wrapper">
            <div class="main-content">
                @yield('container')
            </div>
        </div>

        @include('layouts.partials.footer')
    </body>

    {{-- Script External --}}
    @include('layouts.partials.script')
    </html>