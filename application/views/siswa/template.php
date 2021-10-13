<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>AcompDemy</title>
  <!-- Favicon -->
  <link rel="icon" href="<?= base_url(); ?>asset/img/acompdemy4.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="<?= base_url(); ?>asset/assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="<?= base_url(); ?>asset/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="<?= base_url(); ?>asset/assets/css/argon.css?v=1.2.0" type="text/css">

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="<?= base_url(); ?>asset/index.html">
          <img src="<?= base_url(); ?>asset/img/acompdemy 2.png" class="navbar-brand-img"> 
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="?page=dashboard">
                <i class="ni ni-single-02 text-purple"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?page=kelas">
                <i class="ni ni-book-bookmark text-purple"></i>
                <span class="nav-link-text">Class</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?page=sertifikat">
                <i class="ni ni-badge text-purple"></i>
                <span class="nav-link-text">Sertificate</span>
              </a>
            </li>
            <li>
              <a class="nav-link" href="<?= base_url(); ?>asset/aksiLogout.php">
                <i class="ni ni-user-run text-purple"></i>
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
      <div class="col-lg-6">
      </div>
      <div class="col-lg-6">
        <ul class="nav nav-footer justify-content-center justify-content-lg-start">
          <li class="nav-item">
            <a href="<?= base_url(); ?>asset/index.html" class="nav-link" target="_blank">ACompDemy &copy; 2021 </a>
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