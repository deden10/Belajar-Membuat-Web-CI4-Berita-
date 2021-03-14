<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Prian D News | Admin</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('plugins/fontawesome-free/css/all.min.css')?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet"
    href="<?= base_url('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= base_url('plugins/icheck-bootstrap/icheck-bootstrap.min.css')?>">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?= base_url('plugins/jqvmap/jqvmap.min.css')?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('dist/css/adminlte.min.css')?>">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= base_url('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')?>">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?= base_url('plugins/daterangepicker/daterangepicker.css')?>">
  <!-- summernote -->
  <link rel="stylesheet" href="<?= base_url('plugins/summernote/summernote-bs4.min.css')?>">
  <?= $this->renderSection('css') ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">

      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="index3.html" class="nav-link">Home</a>
        </li>
      </ul>
      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <b class="hidden-xs"><?= session()->get('nama') ?></b>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-envelope mr-2"></i><?= session()->get('email')?>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-users mr-2"></i><?= session()->get('no_telp') ?>
            </a>
          </div>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="<?= base_url('dist/img/AdminLTELogo.png')?>" alt="AdminLTE Logo"
          class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Prian D News</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="<?= base_url('dist/img/user2-160x160.jpg')?>" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block"><?= session()->get('nama') ?></a>
          </div>
        </div>


        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="<?= base_url('dashboard')?>" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('kategori')?>" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                <p>
                  Kategori
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('post')?>" class="nav-link">
                <i class="nav-icon fas fa-pen-alt"></i>
                <p>
                  Post
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('user')?>" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                  User
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('changepassword')?>" class="nav-link">
                <i class="nav-icon fas fa-user-cog"></i>
                <p>
                  Pengaturan Akun
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a data-toggle="modal" data-target="#logout" class="nav-link">
                <i class="nav-icon fas fa-sign-out-alt"></i>
                <p>
                  Keluar
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>

      <!-- /.sidebar -->
    </aside>
    <div class="modal fade" id="logout" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Konfirmasi</h5>
          </div>
          <div class="modal-body">
            <p>Apakah anda yakin akan keluar ?</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            <a href="<?= base_url('auth/logout') ?>" class="btn btn-primary">Ya, Keluar</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <?= $this->renderSection('breadcrumb') ?>
      <section class="content">
        <?= $this->renderSection('content') ?>
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.1.0-rc
      </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="<?= base_url('plugins/jquery/jquery.min.js')?>"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="<?= base_url('plugins/jquery-ui/jquery-ui.min.js')?>"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url('plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
  <!-- ChartJS -->
  <script src="<?= base_url('plugins/chart.js/Chart.min.js')?>"></script>
  <!-- Sparkline -->
  <script src="<?= base_url('plugins/sparklines/sparkline.js')?>"></script>
  <!-- JQVMap -->
  <script src="<?= base_url('plugins/jqvmap/jquery.vmap.min.js')?>"></script>
  <script src="<?= base_url('plugins/jqvmap/maps/jquery.vmap.usa.js')?>"></script>
  <!-- jQuery Knob Chart -->
  <script src="<?= base_url('plugins/jquery-knob/jquery.knob.min.js')?>"></script>
  <!-- daterangepicker -->
  <script src="<?= base_url('plugins/moment/moment.min.js')?>"></script>
  <script src="<?= base_url('plugins/daterangepicker/daterangepicker.js')?>"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="<?= base_url('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')?>"></script>
  <!-- Summernote -->
  <script src="<?= base_url('plugins/summernote/summernote-bs4.min.js')?>"></script>
  <!-- overlayScrollbars -->
  <script src="<?= base_url('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')?>"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url('dist/js/adminlte.js')?>"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?= base_url('dist/js/demo.js')?>"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="<?= base_url('dist/js/pages/dashboard.js')?>"></script>
  <?= $this->renderSection('js') ?>
</body>

</html>