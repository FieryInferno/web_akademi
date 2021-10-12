<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>Admin AcompDemy</title>
    <!-- Favicon -->
    <link rel="icon" href="../img/acompdemy4.png" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="<?= base_url(); ?>asset/assets/vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url(); ?>asset/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
    <!-- Argon CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>asset/assets/css/argon.css?v=1.2.0" type="text/css">
  </head>
  
  <body>
    <!-- Sidenav -->
    <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
      <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="sidenav-header  align-items-center">
          <a class="navbar-brand" href="javascript:void(0)">
            <img src="<?= base_url(); ?>asset/img/acompdemy 2.png" class="navbar-brand-img" alt="...">
          </a>
        </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="?page=dashboard">
                <i class="ni ni-single-02 text-red"></i>
                <span class="nav-link-text">Profil</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url(); ?>admin/materi">
                <i class="ni ni-book-bookmark text-red"></i>
                <span class="nav-link-text">Materi</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url(); ?>admin/kelas">
                <i class="ni ni-badge text-red"></i>
                <span class="nav-link-text">Data Kelas</span>
              </a>
            </li>
            <li>
              <a class="nav-link" href="<?= base_url(); ?>logout">
                <i class="ni ni-user-run text-red"></i>
                <span class="nav-link-text">Logout</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  
  <?php $this->load->view($konten); ?>

  <!-- Footer -->
  <footer class="footer pt-10">
    <div class="row align-items-center justify-content-lg-between">
      <div class="col-lg-0">
      </div>
      <div class="col-lg-7">
        <ul class="nav nav-footer justify-content-center justify-content-lg-start">
          <li class="nav-item">
            <a href="../index.html" class="nav-link" target="_blank">ACompDemy &copy; 2021 </a>
          </li>
        </ul>
      </div>
    </div>
  </footer>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="<?= base_url(); ?>asset/assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="<?= base_url(); ?>asset/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url(); ?>asset/assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="<?= base_url(); ?>asset/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="<?= base_url(); ?>asset/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Argon JS -->
  <script src="<?= base_url(); ?>asset/assets/js/argon.js?v=1.2.0"></script>
  <script src="assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="assets/vendor/chart.js/dist/Chart.extension.js"></script>
</body>

</html>