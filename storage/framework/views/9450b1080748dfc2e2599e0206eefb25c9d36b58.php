<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">
    <link href="<?php echo e(asset('assets/landing-page/images/logo.png')); ?>" rel='shortcut icon'>

    <title>PPDB SMK Wikrama Bogor || LOGIN</title>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

   <!-- PLUGINS CSS STYLE -->
   <link rel="stylesheet" href="<?php echo e(asset('assets/template/plugins/bootstrap/bootstrap.min.css')); ?>">
   <link rel="stylesheet" type="text/css" href="assets/landing-page/css/font-awesome.css') }}">

    <!-- custom css -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/template/css/login.css')); ?>">
    <link href="<?php echo e(asset('assets/template/css/preloader.css')); ?>" rel="stylesheet">
</head>

<body>
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <div class="content-sign">
        <div class="d-flex flex row g-0">
            <div class="col-lg-6">
                <div class="card card2">
                    <img src="<?php echo e(asset('assets/landing-page/images/hero2.jpg')); ?>" class="w-100">
                </div>
            </div>
            <form method="POST" action="<?php echo e(route('auth')); ?>" class="col-lg-6">
            <?php echo csrf_field(); ?>
                <h2 class="title">Login</h2>
                    <p>Masuk ke Akun PPDB-mu</p>
                        <div class="d-flex flex-column mt-3"> 
                        <div class="input-field">
                            <label>Email</label> 
                            <span class="fa fa-user p-2"></span>
                            <input class="form-control" type="email" name="email" placeholder="Masukkan email terdaftar"> 
                        </div>
                        <div class="input-field password">
                            <label>Password</label> 
                            <span class="fa fa-lock"></span>
                            <input class="form-control password-field" type="password" name="password" placeholder="Masukkan password anda" id="password">
                            <span onclick="toggle('password')"><i class="fa fa-eye toggle-hide" onclick="myFunction(this)"></i> </span>
                        </div>
                        <button class="mt-4 btn btn-blue gradient sign d-flex justify-content-center align-items-center">Login</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- JAVASCRIPTS -->
    <script src="<?php echo e(asset('assets/template/plugins/jquery/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/template/plugins/bootstrap/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/landing-page/js/scrollreveal.min.js')); ?>"></script>

    <script src="<?php echo e(asset('assets/template/js/script.js')); ?>"></script>
    <!-- Global Init -->
    <script src="<?php echo e(asset('assets/landing-page/js/custom.js')); ?>"></script>

    <script type="text/javascript">
        function toggle(id) {
            var x = document.getElementById(id);
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }

        function myFunction(show) {
            show.classList.toggle("fa-eye-slash");
        }
    </script>
</body>

</html><?php /**PATH C:\xampp\htdocs\PPDB-Wikrama\resources\views/student/student-login.blade.php ENDPATH**/ ?>