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
  </nav>
  <!-- Header -->
  <!-- Header -->
  <div class="header pb-9 d-flex align-items-center"
    style="min-height: 370px; background-image: url(<?= base_url(); ?>asset/assets/img/dd.jpg); background-size: cover; background-position: center;">
    <!-- Mask -->
    <span class="mask bg-gradient-default opacity-5"></span>
    <!-- Header container -->
    <div class="container-fluid d-flex align-items-center">
      <div class="row">
        <div class="col-lg-7 col-md-10">
          <h1 class="display-2 text-white">Hello Admin</h1>
          <p class="text-white mt-0 mb-5">Anda Bisa Menambahkan Materi Anda di sIni.
            Jangan Lupa Untuk Menyimpan</p>
        </div>
      </div>
    </div>
  </div>
  <!-- Page content -->
  <div class="container-fluid mt--9">
    <div class="row ml-6">
      <div class="col-xl-11 order-xl-1">
        <div class="card">
          <div class="card-header">
            <div class="row align-items-center">
              <div class="col-8">
                <h2 class="mb--5">Tambah Materi</h2>
              </div>
            </div>
          </div>
          <div class="card-body">
            <?php
              if ($this->session->sukses) { ?>
                <div class="alert alert-success">
                  <?= $this->session->sukses; ?>
                </div>
              <?php }

              if ($this->session->error) { ?>
                <div class="alert alert-danger">
                  <?= $this->session->error; ?>
                </div>
              <?php }
            ?>
            <form method="post" action="<?= base_url(); ?>admin/materi" enctype="multipart/form-data">
              <h6 class="heading-small text-muted mb-4">Detail</h6>
              <div class="pl-lg-4">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="input-username">Judul Materi</label>
                      <input type="text" class="form-control" placeholder="Judul" name="judul_materi" required>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="input-email">Keterangan</label>
                      <select class="form-control" name="keterangan" required>
                        <option value="materi">Materi</option>
                        <option value="quiz">Quiz</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="input-first-name">Kelas</label>
                      <select class="form-control" name="kelas" required>
                        <?php
                          foreach ($kelas as $key) { ?>
                            <option value="<?= $key['id']; ?>"><?= $key['nama_kelas']; ?></option>
                          <?php }
                        ?>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="input-last-name">Tingkat</label>
                      <select class="form-control" name="tingkat" required>
                        <option value="dasar">Dasar</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <hr class="my-4" />
              <!-- Description -->
              <h6 class="heading-small text-muted mb-1">Materi</h6>
              <div class="pl-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Isi Materi</label>
                  <textarea rows="4" class="form-control" placeholder="Tulis isi materi di sini" name="isi_materi"></textarea>
                </div>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" name="file" lang="en">
                  <label class="custom-file-label" for="customFileLang">Upload file</label>
                </div>
              </div>
              <div class="mt-3 col-11 text-right">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahMateri">Simpan</button>
              </div>
              <div class="modal fade" id="tambahMateri" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Tambah</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      Apakah anda yakin akan menambah data?
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>