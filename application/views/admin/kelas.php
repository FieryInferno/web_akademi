
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Navbar links -->
        <ul class="navbar-nav align-items-md-center  ml-md-auto ">
          <li class="nav-item d-xl-none">
            <!-- Sidenav toggler -->
            <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin"
              data-target="#sidenav-main">
              <div class="sidenav-toggler-inner">
                <i class="sidenav-toggler-line"></i>
                <i class="sidenav-toggler-line"></i>
                <i class="sidenav-toggler-line"></i>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <!-- Header -->
    <!-- Header -->
    <div class="header pb-6 d-flex align-items-center"
      style="min-height: 200px; background-image: url(<?= base_url(); ?>asset/assets/img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
        <div class="row">
          <div class="col-lg-12 col-md-10">
            <h1 class="display-2 text-white">Hello Admin</h1>
            <p class="text-white mt-0 mb-5">Disini Anda Bisa Melihat Daftar Kelas yang Anda Miliki.</p>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <?php
          foreach ($kelas as $key) { ?>
            <div class="col-xl-4 order-xl-2">
              <div class="card card-profile">
                <img src="<?= base_url(); ?>asset/assets/img/as.jpg" alt="Image placeholder" class="card-img-top" height="180" width="200">
                <div class="row justify-content-center">
                  <div class="col-lg-3 order-lg-2">
                    <div class="card-profile-image">
                      <a href="<?= base_url('admin/kelas/materi?id=' . $key['id']); ?>">
                        <img src="<?= base_url(); ?>asset/assets/img/cc.jpg" class="rounded-circle">
                      </a>
                    </div>
                  </div>
                </div>
                <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col">
                      <div class="card-profile-stats d-flex justify-content-center">
                        <div>
                          <span class="heading"><?= $key['jumlah_materi']; ?></span>
                          <span class="description">Materi</span>
                        </div>
                        <div>
                          <span class="heading"><?= $key['jumlah_quiz']; ?></span>
                          <span class="description">Quiz</span>
                        </div>
                        <div>
                          <span class="heading"><?= $key['jumlah_peserta']; ?></span>
                          <span class="description">Peserta</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="text-center">
                    <h5 class="h1"><?= $key['nama_kelas']; ?><span class="font-weight-light"></span></h5>
                    <div class="h5 mt-1">
                      <i class="ni business_briefcase-24 mr-2"></i>Kelas - <?= $key['tingkat_kelas']; ?>
                    </div>
                    <div>
                      <i class="ni education_hat mr-2"></i>Computer Academy
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php }
        ?>
      </div>
    </div>
  </div>