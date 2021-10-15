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
  <div class="header bg-white pb-6">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-4">
          <div class="col-lg-6 col-7">
            <h3 class="h1 text-black-50 d-inline-block mb-0">Materi</h3>
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Page content -->
  <div class="container-fluid  mt--6">
    <div class="row">
      <div class="col">
        <div class="card bg-default shadow">
          <div class="card-header bg-transparent border-0">
            <h1 class="text-white mb-0"><?= $judul_materi; ?></h1>
          </div>
          <div class="card-body">
            <?= $isi_materi; ?>
          </div>
          <div class="card-footer">
            <?php
              if ($next !== NULL) {
                $link = base_url() . 'siswa/kelas/' . $id_kelas . '/' . $next;
              } else {
                $link = base_url() . 'siswa/kelas/' . $id_kelas;
              }
            ?>
            <a href="<?= $link . '?id=' . $this->uri->segment(4); ?>" class="btn btn-primary float-right">Next</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>