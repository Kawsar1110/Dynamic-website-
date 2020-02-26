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
                <h2>Add About Part</h2>
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
                 <form action="about_post.php" method="post" enctype="multipart/form-data">
                   <div class="form-group my-4">
                     <input type="text" class="form-control" name="about-title" placeholder="Enter About Title">
                   </div>
                   <div class="form-group my-4">
                     <textarea name="about-desp" rows="5" class="form-control"  placeholder="Enter About description"></textarea>
                   </div>
                   <div class="form-group my-4">
                     <input type="text" class="form-control" name="about-sub-title" placeholder="Enter About Sub Title">
                   </div>
                   <div class="form-group my-4">
                     <input type="text" class="form-control" name="feature" placeholder="About Feature">
                   </div>

                    <div class="form-group my-4">
                      <select class="form-control" name="status">
                        <option value="">Slect Your Status</option>
                        <option value="1">Active</option>
                        <option value="0">Deactive</option>
                      </select>
                    </div>

                     <div class="form-group my-4">
                         <input type="file" name="about-img" class="form-control" >
                     </div>
                   </div>

                     <div class=" text-center m-auto pt-3">
                       <button type="submit" class="btn btn-success text-white">Submit</button>
                     </div>

                 </form>
            </div>
          </div>
      </div>

 <?php
     require 'dashboard_part/footer.php';
 ?>
