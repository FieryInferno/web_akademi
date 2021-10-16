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
  <div class="header bg-white pb-6">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-4">
          <div class="col-lg-6 col-7">
            <h7 class="h2 text-black-50 d-inline-block mb-0">E-Sertificate</h7>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Page content -->
  <div class="container-fluid mt--6">
    <div class="row">
      <div class="col">
        <div class="card border-0 bg-white">
          <?php
            if ($this->input->get()) { ?>
              <div style="background-image: url('http://localhost/web_akademi/asset/img/sertifikat.jpeg');height: 50rem;width: 70rem;background-size: cover;background-repeat: no-repeat;">
                <div style="margin-top: 25rem;" class="text-center">
                  <h1><?= $this->session->nama; ?></h1>
                  <h1><?= $nama_kelas; ?></h1>
                </div>
              </div>
              <div class="col-lg-12 col-0 text-center mt-1 ">
                <a href="<?= base_url('siswa/sertifikat/cetak?kelas=' . $this->input->get('kelas')); ?>" class="btn btn-lg btn-twitter" target="_blank">Cetak</a>
              </div>
            <?php } else { ?>
              <form action="<?= base_url(); ?>siswa/sertifikat" method="get">
                <div class="form-group">
                  <label class="form-control-label" for="input-email">Kelas</label>
                  <select class="form-control" name="kelas" required>
                    <?php
                      foreach ($kelas as $key) { ?>
                        <option value="<?= $key['kelas_id']; ?>"><?= $key['nama_kelas']; ?></option>
                      <?php }
                    ?>
                  </select>
                </div>
                <button type="submit" class="btn btn-primary">Lihat</button>
              </form>
            <?php }
          ?>
        </div>
      </div>
    </div>
  </div>
</div>