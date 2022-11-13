<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from jobie.dexignzone.com/codeigniter/demo/page_login by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 30 Oct 2022 16:19:06 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="utf-8">
    <meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
    <meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="description" content="Jobie - Crypto Codeigniter Admin Dashboard" />
	<meta property="og:title" content="Jobie - Crypto Codeigniter Admin Dashboard" />
	<meta property="og:description" content="Jobie - Crypto Codeigniter Admin Dashboard" />
	<meta property="og:image" content="../social-image.png" />
	<meta name="format-detection" content="telephone=no">
    <title>Jobie - {{ $title ?? '' }} Login</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="public/assets/images/favicon.png">
    <link href="public/assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="public/assets/css/style.css" rel="stylesheet">
	
</head>

<body class="vh-100">
	<div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
									<div class="text-center mb-3">
										<a href="index.html"><img src="public/assets/images/logo-full.png" alt=""></a>
									</div>
                                    <h4 class="text-center mb-4 text-white">Sign in your account</h4>
                                        @yield('login_form');
                                    <div class="new-account mt-3">
                                        <p class="text-white">Don't have an account? <a class="text-white" href="page_register.html">Sign up</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--**********************************
	Scripts
***********************************-->
<!-- Required vendors -->
<script src="public/assets/vendor/global/global.min.js"></script>
<script src="public/assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="public/assets/js/deznav-init.js"></script>
<script src="public/assets/js/custom.js"></script> 
<script src="public/assets/js/demo.js"></script>
<script src="public/assets/js/styleSwitcher.js"></script>
</body>

<!-- Mirrored from jobie.dexignzone.com/codeigniter/demo/page_login by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 30 Oct 2022 16:19:07 GMT -->
</html>