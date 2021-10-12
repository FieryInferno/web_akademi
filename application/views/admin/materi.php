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
  <div class="header pb-4 d-flex align-items-center"
    style="min-height: 200px; background-image: url(<?= base_url(); ?>asset/assets/img/as.jpg); background-size: cover; background-position: center;">
    <!-- Mask -->
    <span class="mask bg-gradient-default opacity-6"></span>
    <!-- Header container -->
    <div class="container-fluid d-flex align-items-center">
      <div class="row">
        <div class="col-lg-12 col-md-8">
          <h1 class="display-2 text-white"><?= $kelas['nama_kelas']; ?></h1>
          <p class="text-white mt-0 mb--1"><?= $kelas['tingkat_kelas']; ?></p>
        </div>
      </div>
    </div>
  </div>
  <!-- Page content -->
  <div class="container-fluid mt--5">
    <div class="row">
      <div class="col">
        <div class="card bg-default shadow">
          <div class="card-header bg-transparent border-0">
            <h3 class="text-white mb-0">Data Kelas</h3>
          </div>
          <div class="table-responsive">
            <table class="table align-items-center table-dark table-flush">
              <thead class="thead-dark">
                <tr>
                  <th scope="col" class="sort" data-sort="name">Material</th>
                  <th scope="col" class="sort" data-sort="budget">Description</th>
                  <th scope="col" class="sort" data-sort="status">Status</th>
                  <th scope="col" class="sort" data-sort="completion">Completion</th>
                </tr>
              </thead>
              <tbody class="list">
                <?php
                  foreach ($kelas['materi'] as $key) { ?>
                    <tr>
                      <th scope="row">
                        <div class="media align-items-center">
                          <div class="media-body">
                            <span class="name mb-0 text-sm"><?= $key['judul_materi']; ?></span>
                          </div>
                        </div>
                      </th>
                      <td class="budget">
                        <?= $key['keterangan']; ?>
                      </td>
                      <td>
                        <span class="badge badge-dot mr-4">
                          <i class="bg-success"></i>
                          <span class="status">buka</span>
                        </span>
                      </td>
                      <td>
                        <div class="d-flex align-items-center">
                          <span class="completion mr-2"><?= $key['completion']; ?>%</span>
                        <div>
                          <div class="progress">
                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="<?= $key['completion']; ?>" aria-valuemin="0"
                              aria-valuemax="100" style="width: <?= $key['completion']; ?>%;"></div>
                          </div>
                        </div>
                      </td>
                    </tr>
                  <?php }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>