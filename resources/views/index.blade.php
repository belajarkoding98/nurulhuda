<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login - SIKADU Yayasan Nurul Huda Kertawangunan</title>

    <!-- icon -->
    <link rel="shortcut icon" href="{!! asset('assets/images/yayasannurulhuda.ico') !!}">

    <link rel="stylesheet" href="assets/styles/style.min.css">

    <!-- Waves Effect -->
    <link rel="stylesheet" href="assets/plugin/waves/waves.min.css">

</head>

<body>

    <div id="single-wrapper">
        <form action="#" class="frm-single">
            <div class="inside">
                <div class="title">
                    <img src="{!! asset('assets/images/yayasannurulhuda.ico') !!}" alt="" style="width:30%">
                </div>
                <!-- /.title -->
                <div class="frm-title">Yayasan Nurul Huda Kertawangunan</div>
                <!-- /.frm-title -->
                <div class="frm-input"><input type="text" placeholder="Username" class="frm-inp"><i
                        class="fa fa-user frm-ico"></i></div>
                <!-- /.frm-input -->
                <div class="frm-input"><input type="password" placeholder="Password" class="frm-inp"><i
                        class="fa fa-lock frm-ico"></i></div>
                <!-- /.frm-input -->
                <div class="clearfix margin-bottom-20">
                    <div class="pull-left">
                        <div class="checkbox primary"><input type="checkbox" id="rememberme"><label
                                for="rememberme">Ingat saya</label></div>
                        <!-- /.checkbox -->
                    </div>
                    <!-- /.pull-left -->
                    <div class="pull-right"><a href="page-recoverpw.html" class="a-link"><i
                                class="fa fa-unlock-alt"></i>Lupa password?</a></div>
                    <!-- /.pull-right -->
                </div>
                <!-- /.clearfix -->
                <button type="submit" class="frm-submit" style="background-color: #078b28;">Login<i
                        class="fa fa-arrow-circle-right"></i></button>
                <div class="row small-spacing">
                    <!-- /.col-sm-6 -->
                </div>
                <!-- /.row -->
                <!-- <a href="page-register.html" class="a-link"><i class="fa fa-key"></i>Belum punya akun? daftar
                    disini.</a> -->
                <div class="frm-footer text-center">IT Nurul Huda Kertawangunan © <script>
                    document.write(new Date().getFullYear())
                    </script>
                </div>
                <!-- /.footer -->
            </div>
            <!-- .inside -->
        </form>
        <!-- /.frm-single -->
    </div>
    <!--/#single-wrapper -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
		<script src="assets/script/html5shiv.min.js"></script>
		<script src="assets/script/respond.min.js"></script>
	<![endif]-->
    <!-- 
	================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/scripts/jquery.min.js"></script>
    <script src="assets/scripts/modernizr.min.js"></script>
    <script src="assets/plugin/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugin/nprogress/nprogress.js"></script>
    <script src="assets/plugin/waves/waves.min.js"></script>

    <script src="assets/scripts/main.min.js"></script>
</body>

</html>