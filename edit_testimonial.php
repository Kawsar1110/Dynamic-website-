<?php
require 'session_check.php';

require 'db.php';
$id=$_GET['id'];
$select= "SELECT* FROM testimonials WHERE id=$id";
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
                <h2>Edit Testimonial</h2>
              </div>
              <form action="edit_testimonial_post.php" method="post" enctype="multipart/form-data">
                  <div class="form-group my-4">
                    <input type="hidden" class="form-control" name="id" value="<?php echo $after_assoc['id']; ?>">
                    
                      <textarea name="testimonial-desp" rows="5" class="form-control" value=""><?php echo $after_assoc['testimonial_desp'];?> </textarea>

                  </div>
                  <div class="form-group my-4">
                     <input type="text" class="form-control" name="testimonial-name" placeholder="Enter testimonials title" value="<?php echo $after_assoc['testimonial_name']; ?>">
                  </div>
                  <div class="form-group my-4">
                    <select class="form-control" name="status">
                      <option>Slect Status</option>
                      <option value="1" <?=($after_assoc['status']==1)?'selected':''; ?>>Active</option>
                      <option value="0" <?=($after_assoc['status']==0)?'selected':''; ?>>Deactive</option>
                    </select>
                  </div>
                  <div class="form-group my-4">
                    <p>update photo</p>
                    <input type="file" name="testimonial_img" class="form-control">
                  </div>
                  <div class="form-group my-4">
                    <p>prasent photo</p>
                    <img src="uploads/testimonials/<?php echo $after_assoc['testimonial_img'];?>" alt="" width="200px">
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
