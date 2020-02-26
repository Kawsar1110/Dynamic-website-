<?php
require 'session_check.php';
 ?>
 <?php
     require 'dashboard_part/header.php';
 ?>

      <div class="container">
        <div class="row mt-5">
          <div class="col-lg-12 bg-success m-auto" style="background: linear-gradient(88deg, #13b4ca, #18cabe);">
              <div class="mt-3 text-center text-white py-1">
                <h2>Registration From</h2>
              </div>
               <?php if(isset($_SESSION['success'])) { ?>
                 <div class="alert alert-success text-white" role="alert">
                  <?php echo $_SESSION['success'];?>
                </div>
               <?php }
               unset($_SESSION['success']);
                ?>

                <?php if(isset($_SESSION['exist'])) { ?>
                  <div class="alert alert-warning text-white" role="alert">
                   <?php echo $_SESSION['exist'];?>
                 </div>
                <?php }
                unset($_SESSION['exist']);
                 ?>
                <?php if(isset($_SESSION['unregis'])) { ?>
                  <div class="alert alert-warning text-white" role="alert">
                   <?php echo $_SESSION['unregis'];?>
                 </div>
                <?php }
                unset($_SESSION['unregis']);
                 ?>

              <form action="register_post.php" method="post" enctype="multipart/form-data" >

                <div class="form-group mt-4">
                  <input type="text" class="form-control" name="fname" placeholder="Enter Your name" value="<?= (isset($_SESSION['fname']))?$_SESSION['fname']:''; ?>">
                  <div class="text-center text-white py-2">
                      <?php
                        if (!empty($_GET['name_err'])) {
                          echo $_GET['name_err'];
                        }
                       ?>
                    </div>
                </div>
                <div class="form-group mt-4">
                  <input type="email" class="form-control" name="email" placeholder="Enter Your Email" value="<?= (isset($_SESSION['email']))?$_SESSION['email']:''; ?>">
                  <div class="text-center text-white py-2">
                      <?php
                        if (!empty($_GET['email_err'])) {
                          echo $_GET['email_err'];
                        }
                       ?>
                    </div>
                </div>

                 <div class="form-group mt-4">
                   <input type="password" name="password" class="form-control" placeholder="Enter your password"
                   value="<?= (isset($_SESSION['password']))?$_SESSION['password']:''; ?>">
                   <div class="text-center text-white py-2">
                     <?php
                       if (!empty($_GET['pass_err'])) {
                         echo $_GET['pass_err'];
                       }
                      ?>
                   </div>
                 </div>

                   <!-- <div class="form-group mt-4">
                     <input type="password" name="repassword" class="form-control" placeholder="Enter your repassword"
                     value="<?= (isset($_SESSION['repassword']))?$_SESSION['repassword']:''; ?>">
                     <div class="text-center text-white py-2">
                       <?php
                         if (!empty($_GET['repass_err'])) {
                           echo $_GET['repass_err'];
                         }
                        ?>
                     </div>
                   </div> -->

                <div class="form-group mt-4">
                  <input type="number" class="form-control" name="age" placeholder="Enter your Age"
                  value="<?= (isset($_SESSION['age']))?$_SESSION['age']:''; ?>">
                  <div class="text-center text-white py-2">
                      <?php
                        if (!empty($_GET['age_err'])) {
                          echo $_GET['age_err'];
                        }
                       ?>
                   </div>
                </div>
                <div class="form-group mt-4">
                  <select class="form-control" name="gender">
                     <option>Select your Gender</option>
                     <option value="male" <?=(isset($_SESSION['gender']))?'selected':''; ?>>Male</option>
                     <option value="female" <?=(isset($_SESSION['gender']))?'selected':''; ?>>Female</option>
                     <option value="other" <?=(isset($_SESSION['gender']))?'selected':''; ?>>Other</option>
                  </select>
                  <div class="text-center text-white py-2">
                      <?php
                        if (!empty($_GET['gender_err'])) {
                          echo $_GET['gender_err'];
                        }
                       ?>
                    </div>
                </div>
                <div class="form-group mt-4">
                  <select class="form-control" name="role">
                     <option>Select your Role</option>
                     <option value="1" <?=(isset($_SESSION['Role']))?'selected':''; ?> > Admin </option>
                     <option value="2" <?=(isset($_SESSION['Role']))?'selected':''; ?>>Moderator</option>
                     <option value="3" <?=(isset($_SESSION['Role']))?'selected':''; ?>>Editor</option>
                  </select>
                   <div class="text-center text-white py-2">
                      <?php
                        if (!empty($_GET['role_err'])) {
                          echo $_GET['role_err'];
                        }
                       ?>
                    </div>
                </div>

                <div class="form-group mt-4">
                  <input type="file" name="photo" class="form-control">
                </div>



                  <div class="text-center my-4">
                       <button type="submit" class="btn btn-primary bg-light text-success">Submit</button>
                  </div>

              </form>
          </div>
        </div>
      </div>

<?php
unset($_SESSION['fname']);
unset($_SESSION['email']);
unset($_SESSION['password']);
unset($_SESSION['repassword']);
unset($_SESSION['age']);
unset($_SESSION['gender']);
unset($_SESSION['Role']);
 ?>
 <?php
     require 'dashboard_part/footer.php';
 ?>
