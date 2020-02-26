<?php
require 'session_check.php';

require 'db.php';
$id=$_GET['id'];
$select= "SELECT* FROM users WHERE id=$id";
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
                <h2>Edit User</h2>
              </div>
              <form action="update_user.php" method="post" enctype="multipart/form-data">

                <div class="form-group mt-4">
                  <input type="hidden" class="form-control" name="id" placeholder="Enter Your name" value="<?php echo $after_assoc['id'];?>">
                  <input type="text" class="form-control" name="fname" placeholder="Enter Your name" value="<?php echo $after_assoc['name'];?>">
                </div>
                <div class="form-group mt-4">
                  <input type="email" class="form-control" name="email" placeholder="Enter Your Email" value="<?php echo $after_assoc['email'];?>">
                </div>

                 <div class="form-group mt-4">
                   <input type="password" name="password" class="form-control" placeholder="Enter your password" value="<?php echo $after_assoc['password'];?>">
                 </div>

                <div class="form-group mt-4">
                  <input type="number" class="form-control" name="age" placeholder="Enter your Age" value="<?php echo $after_assoc['age'];?>">

                </div>
                <div class="form-group mt-4">
                  <select class="form-control" name="gender">
                     <option>Select your Gender</option>
                     <option value="male" <?=($after_assoc['gender']=='male')?'selected':''; ?>>Male</option>
                     <option value="female" <?=($after_assoc['gender']=='female')?'selected':''; ?>>Female</option>
                     <option value="other" <?=($after_assoc['gender']=='other')?'selected':''; ?>>Other</option>
                  </select>
                </div>
                <div class="form-group mt-4">
                  <select class="form-control" name="role">
                     <option>Select your Role</option>
                     <option value="1" <?=($after_assoc['role']==1)?'selected':''; ?>>Admin</option>
                     <option value="2" <?=($after_assoc['role']==2)?'selected':''; ?>>Moderator</option>
                     <option value="3" <?=($after_assoc['role']==3)?'selected':''; ?>>Editor</option>
                  </select>
                </div>

                <div class="form-group mt-4">
                  <input type="file" name="photo" class="form-control">
                </div>

                <div class="form-group my-4">
                  <p class="text-white">prasent photo</p>
                  <img src="uploads/users/<?php echo $after_assoc['photo'];?>" alt="" width="100px">
                </div>

                  <div class="text-center my-4">
                       <button type="submit" class="btn btn-primary bg-light text-success">Submit</button>
                  </div>

              </form>
          </div>
        </div>
      </div>

      <?php
          require 'dashboard_part/footer.php';
      ?>
