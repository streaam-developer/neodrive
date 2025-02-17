<?php if(!empty($_SESSION['email'])):?>
  <script async="async" type="text/javascript" src="/assets/js/get-user-stats.js"></script>
<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Card -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Files</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800" id="usershare">loading...</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-share fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Card -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Downloads</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800" id="userdownload">loading...</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-download fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!--Total Size Card -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Drive Used</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800" id="sizeuser">loading...</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-folder fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Broken Link Card -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Broken Links</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800" id="userbroken">loading...</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-unlink fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-12 col-md-12 mb-4">

              <!-- Tankyou For Choosing Us -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Thankyou for choosing Us !</h6>
                </div>
                <div class="card-body">
                  <div class="text-center">
                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="/assets/img/going_up.png" alt="">
                  </div>
                  <div class="text-justify">
                  <p>We provide safe and easy google drive file sharing services. Also has an anti-limit feature for unlimited downloading of your files</p>
                  </div>
                </div>
              </div>

              <!-- Approach -->

            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
      
<?php else:?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          

          <!-- Content Row -->
          <div class="row">
              
              <div class="col-xl-12 col-md-12 mb-4">

              <!-- Tankyou For Choosing Us -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h4 class="m-0 font-weight-bold text-primary" align="center"><?php echo config('site.title')?></h4>
                </div>
                <div class="card-body">
                  <div class="text-center">
                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="/assets/img/neo2.png" alt="">
                  </div>
                  <div class="text-justify">
                  <p><?php echo config('site.title')?> is a sharing tool. We offer online file manager, With <?php echo config('site.title')?> you can share all your personal files on the same place. Also We provide safe and easy google drive file sharing services and has an anti-limit feature for unlimited downloading of your files. Click the login button to begin your journey with us..</p>
                  </div>
                </div>
              </div>

              <!-- Approach -->

            </div>

            <!-- Card -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Users</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800" id="totaluser">loading...</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Card -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Files</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800" id="totalshare">loading...</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-share fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!--Total Size Card -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Space Used</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800" id="totalsize">loading...</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-folder fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Broken Link Card -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Downloads</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800" id="totaldownload">loading...</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-download fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
            
<?php endif;?>
