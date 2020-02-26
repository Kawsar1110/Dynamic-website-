<?php
session_start();
 ?>


<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.urbanui.com/victory/pages/samples/login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Jun 2019 09:43:04 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Victory Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="dashboard_asset/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="dashboard_asset/vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="dashboard_asset/vendors/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="dashboard_asset/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="dashboard_asset/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="dashboard_asset/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper">
      <div class="row">
        <div class="content-wrapper full-page-wrapper d-flex align-items-center auth">
          <div class="row w-100">
            <div class="col-lg-8 mx-auto">
              <div class="row">
                <div class="col-lg-6 bg-white">
                  <div class="auth-form-light text-left p-5">
                    <h2>Reset Your Password</h2>
                    <h4 class="font-weight-light">Hello! let's get started</h4>
                    <?php if(isset($_SESSION['wrong_email'])) { ?>
                      <div class="alert alert-danger" role="alert">
                       <?php echo $_SESSION['wrong_email'];?>
                     </div>
                    <?php }
                    unset($_SESSION['wrong_email']);
                     ?>
                    <form class="pt-5" action="forget_pass_post.php" method="post">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Enter Your Email</label>
                          <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                          <i class="mdi mdi-account"></i>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Enter New Password</label>
                          <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                          <i class="mdi mdi-eye"></i>
                        </div>
                        <div class="mt-5">
                          <button type="sumit" name="button" class="btn btn-info">Login</button>
                        </div>
                        <div class="mt-3 text-center">
                          <a href="login.php" class="auth-link text-black" style="color:blue;">Login Now?</a>
                        </div>
                    </form>
                  </div>
                </div>
                <div class="col-lg-6 login-half-bg d-flex flex-row">
                  <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy; 2018  All rights reserved.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- row ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="dashboard_asset/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="dashboard_asset/js/off-canvas.js"></script>
  <script src="dashboard_asset/js/hoverable-collapse.js"></script>
  <script src="dashboard_asset/js/misc.js"></script>
  <script src="dashboard_asset/js/settings.js"></script>
  <script src="dashboard_asset/js/todolist.js"></script>
  <!-- endinject -->
</body>


<!-- Mirrored from www.urbanui.com/victory/pages/samples/login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Jun 2019 09:43:04 GMT -->
</html>
