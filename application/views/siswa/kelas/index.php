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
  <h1 class="text-xl-left mt-4 pl-4">KELAS DASAR</h1>
  <!-- Page content -->
  <div class="container-fluid mt-3">
    <div class="row pl-4 pr-4">
      <?php
        foreach ($dasar as $key) { ?>
          <div class=" col-lg-6">
            <div class="card bg-gradient-gray">
              <div class="btn dt-button-background">
                <a href="<?= base_url('siswa/kelas/' . $key['id']); ?>">
                  <div class="card-header bg-gradient-gray border-3">
                    <div class="fa fa-7x fa-laptop mb-4" style="color:rgb(255, 255, 255)"></div>
                    <h1 class="mb--1 text-center text-white"><?= $key['nama_kelas']; ?></h1>
                  </div>
                </a>
              </div>
            </div>
          </div>
        <?php }
      ?>
    </div>
  </div>
</div>