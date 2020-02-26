<?php
require 'session_check.php';
require 'session_check.php';
require 'db.php';
$id = $_GET['id'];
$select = "SELECT * FROM users WHERE id = $id";
$select_result= mysqli_query($db, $select);
$after_assoc= mysqli_fetch_assoc($select_result);
 ?>

 <?php
     require 'dashboard_part/header.php';
 ?>

      <div class="container">
        <div class="row">
           <div class="col-lg-12 mt-5">
            <div class="card mb-3">
              <div class="card-header text-center"><h2>Individual users Info</h2></div>
              <!-- <div class="card-body"> -->
                <table class="table table-dark">
                   <tr>
                      <th>ID</th>
                      <td><?php echo $after_assoc['id']; ?></td>
                   </tr>
                   <tr>
                      <th>Name</th>
                    <td><?php echo $after_assoc['name']; ?></td>
                   </tr>
                   <tr>
                      <th>Email</th>
                      <td><?php echo $after_assoc['email']; ?></td>
                   </tr>
                   <tr>
                      <th>Password</th>
                    <td><?php echo $after_assoc['password']; ?></td>
                   </tr>
                   <tr>
                      <th>Age</th>
                    <td><?php echo $after_assoc['age']; ?></td>
                   </tr>
                   <tr>
                      <th>Gender</th>
                      <td><?php echo $after_assoc['gender']; ?></td>
                   </tr>
                   <tr>
                      <th>Role</th>
                      <td>
                        <?php
                        if ($after_assoc['role']== 1) {
                          echo "Admin";
                        }
                        elseif ($after_assoc['role']== 2) {
                          echo "Moderator";
                        }
                        else {
                          echo "Editor";
                        }
                         ?>
                      </td>
                   </tr>
                   <tr>
                    <th>Photo</th>
                    <td> <img src="uploads/users/<?php echo $after_assoc['photo']; ?>" alt="" width="150px"> </td>
                  </tr>
                </table>
              <!-- </div> -->
            </div>
            </div>
           </div>
        </div>
      </div>

      <?php
          require 'dashboard_part/footer.php';
      ?>
