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
                <h2>Add Social Icon</h2>
              </div>
               <?php if(isset($_SESSION['success'])) { ?>
                 <div class="alert alert-success" role="alert">
                  <?php echo $_SESSION['success'];?>
                </div>
               <?php }
               unset($_SESSION['success']);
                ?>

                <?php if(isset($_SESSION['exist'])) { ?>
                  <div class="alert alert-warning" role="alert">
                   <?php echo $_SESSION['exist'];?>
                 </div>
                <?php }
                unset($_SESSION['exist']);
                 ?>

                 <div class="">
                  <p>Choose icon from here <a href="https://fontawesome.com/v4.7.0/icons/">fontawesome icon</a></p>
                </div>

                 <form action="icon_post.php" method="post" enctype="multipart/form-data">
                   <div class="form-group my-4">
                     <input type="text" class="form-control" name="icon1" placeholder="Icon1">
                   </div>

                   <div class="form-group my-4">
                     <input type="text" class="form-control" name="icon2" placeholder="Icon2">
                   </div>

                   <div class="form-group my-4">
                     <input type="text" class="form-control" name="icon3" placeholder="Icon3">
                   </div>

                   <div class="form-group my-4">
                     <input type="text" class="form-control" name="icon4" placeholder="Icon4">
                   </div>

                     <div class=" text-center my-3">
                       <button type="submit" class="btn btn-info text-white">Submit</button>
                     </div>

                 </form>
            </div>
          </div>
      </div>

 <?php
     require 'dashboard_part/footer.php';
 ?>
