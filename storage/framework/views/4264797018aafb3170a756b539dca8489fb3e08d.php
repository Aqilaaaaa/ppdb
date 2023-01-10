<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-00R8F6D0PD"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-00R8F6D0PD');
  </script>
  <title>Dashboard Siswa</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  
  <!-- CSS Libraries -->
  
  <link rel="stylesheet" type="text/css" href="https://ppdb.smkwikrama.sch.id/assets/admin/dataTables/css/datatables-bootstrap.min.css"/>
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


  <!-- Template CSS -->
  <link rel="stylesheet" href="../../../assets/admin/css/style.css">
  <link rel="stylesheet" href="../../../assets/admin/css/components.css">
  <link rel="stylesheet" href="../../../assets/admin/css/progres.css">
  <link rel="stylesheet" href="../../../assets/admin/css/card.css">

  <link href="https://ppdb.smkwikrama.sch.id/img/Logo.png" rel='shortcut icon'>

</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="../../../assets/admin/img/avatar/avatar-1.png" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Hi, <?php echo e(Auth::user()->name); ?></div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <a href="<?php echo e(route('indexStudentPembayaran')); ?>" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="#">PPDB 2023 - 2024</a>
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header">Dashboard</li>
              <li class="nav-item dropdown active">
                <a href=""><i class="fas fa-home"></i><span>Dashboard</span></a>
              </li>
              <li class="nav-item dropdown  ">
                <a href="<?php echo e(route('indexStudentPembayaran')); ?>"><i class="fas fa-money-bill"></i> <span>Pembayaran</span></a>
              </li>
              
            </ul>
        </aside>
      </div>

      <div class="main-content">
        <section class="content">
                  <section class="section">
          <div class="section-header">
            <h1>Profile</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item">Profile</div>
            </div>
          </div>
          <div class="section-body">
            <h2 class="section-title">Hi, <?php echo e(Auth::user()->name); ?>!</h2>
            <p class="section-lead">
             Selamat datang
            </p>
            <div class="content">
                <ul id="progressbar"> 
                    <li class="active"><i class="fa fa-check"></i>Pendaftaran</li>
                    <li class="">  Pembayaran</li>
                </ul> 
            </div>

            
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2022 <div class="bullet"><a>SMK Wikrama Bogor</a></div>
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="https://ppdb.smkwikrama.sch.id/assets/admin/js/stisla.js"></script>

  <!-- JS Libraies -->
  
  
  
  
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

  <!-- Template JS File -->
  <script src="https://ppdb.smkwikrama.sch.id/assets/admin/js/scripts.js"></script>
  <script src="https://ppdb.smkwikrama.sch.id/assets/admin/js/custom.js"></script>
  <script src="https://ppdb.smkwikrama.sch.id/assets/admin/js/newCustom.js"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\PPDB-Wikrama\resources\views/student/pembayaran.blade.php ENDPATH**/ ?>