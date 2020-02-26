<?php
require 'session_check.php';

require 'db.php';
$id=$_GET['id'];
$select= "SELECT* FROM socials WHERE id=$id";
$select_result= mysqli_query($db, $select);
$after_assoc= mysqli_fetch_assoc($select_result);
 ?>

     <?php
         require 'dashboard_part/header.php';
     ?>

      <div class="container">
        <div class="row mt-5">
          <div class="col-lg-10 m-auto" style="background: linear-gradient(88deg, #13b4ca, #18cabe);">
              <div class="mt-3 text-center text-white py-1">
                <h2>Edit Icon</h2>
              </div>
              <form action="edit_icon_post.php" method="post" enctype="multipart/form-data">
                  <div class="form-group my-4">
                    <input type="hidden" class="form-control" name="id" placeholder="Enter Your Name" value="<?php echo $after_assoc['id']; ?>">
                    <input type="text" class="form-control" name="social1" placeholder="Enter banner title" value="<?php echo $after_assoc['social1']; ?>">
                  </div>
                  <div class="form-group my-4">
                    <input type="text" class="form-control" name="social2" placeholder="Enter Your Password"  value="<?php echo $after_assoc['social2'];?>">
                  </div>
                  <div class="form-group my-4">
                    <input type="text" class="form-control" name="social3" placeholder="Enter Your Password"  value="<?php echo $after_assoc['social3'];?>">
                  </div>
                  <div class="form-group my-4">
                    <input type="text" class="form-control" name="social4" placeholder="Enter Your Password"  value="<?php echo $after_assoc['social4'];?>">
                  </div>

                  <div class="text-center mb-3">
                    <button type="submit" class="btn btn-info text-white">Submit</button>
                  </div>
              </form>
          </div>
        </div>
      </div>

      <?php
          require 'dashboard_part/footer.php';
      ?>
