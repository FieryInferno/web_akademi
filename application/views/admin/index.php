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
  <!-- Page content -->
  <div class="card card-profile">
    <img src="<?= base_url(); ?>asset/assets/img/theme/img-1-1000x600.jpg" width="1000px" height="250px" alt="Image placeholder"
      class="card-img-top">
    <div class="row justify-content-center">
      <div class="col-lg-3 order-lg-2">
        <div class="card-profile-image">
          <a href="#">
            <img src="<?= base_url(); ?>asset/assets/img/theme/team-1.jpg" class="rounded-circle">
          </a>
        </div>
      </div>
    </div>
    <div class="card-header text-center border-0 pt-2 pt-md-4 pb-0 pb-md-4">
      <div class="d-flex justify-content-between">

      </div>
    </div>
    <div class="card-body pt-0">
      <div class="row">

      </div>
      <div class="text-center">
        <h1 class="h1"><br><?= $this->session->nama; ?><span class="font-weight-light"></span>
        </h1>
        <div class="h5 font-weight-300">
          <i class="ni location_pin mr-2"></i><?= $this->session->email; ?>
        </div>
        <div class="h5 mt-4">
          <i class="ni business_briefcase-24 mr-2"></i>Pengajar
        </div>
        <div>
          <i class="ni education_hat mr-2"></i>UMS
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid ">
    <div class="row">
      <div class="col">
        <div class="card-header border-2">
          <div class="row align-items-center">
        </div>
        <div class="table-responsive">
          <!-- Projects table -->
          <table class="table align-items-center table-flush">
            <thead class="thead-light">
              <tr>
                <th scope="col">Class</th>
                <th scope="col">Student Progress</th>
                <th scope="col">Percentage</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">
                  Hardware
                </th>
                <td>
                  1,480
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <span class="mr-2">60%</span>
                    <div>
                      <div class="progress">
                        <div class="progress-bar bg-gradient-danger" role="progressbar" aria-valuenow="60"
                          aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  Network
                </th>
                <td>
                  5,480
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <span class="mr-2">70%</span>
                    <div>
                      <div class="progress">
                        <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="70"
                          aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>