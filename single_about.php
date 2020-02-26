<?php
require 'session_check.php';

require 'db.php';
$id = $_GET['id'];
$select = "SELECT * FROM abouts WHERE id = $id";
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
              <div class="card-header text-center"><h2 style="color:#13b4ca;">Individual Abouts Info</h2></div>
              <!-- <div class="card-body"> -->
                <table class="table table-dark">
                   <tr>
                      <th>ID</th>
                      <td><?php echo $after_assoc['id']; ?></td>
                   </tr>
                   <tr>
                      <th>About Title</th>
                    <td><?php echo $after_assoc['about_title']; ?></td>
                   </tr>
                   <tr>
                      <th>About Description</th>
                      <td><?php echo $after_assoc['about_desp']; ?></td>
                   </tr>
                   <tr>
                      <th>About Sub Title</th>
                    <td><?php echo $after_assoc['about_sub_title']; ?></td>
                   </tr>
                   <tr>
                      <th>Feature</th>
                    <td><?php echo $after_assoc['feature']; ?></td>
                   </tr>
                   <tr>
                    <th>Status</th>
                    <td><?php echo $after_assoc['status']; ?></td>
                   </tr>
                   <tr>
                    <th>About Photo</th>
                    <td> <img src="uploads/abouts/<?php echo $after_assoc['about_img']; ?>" alt="" width="150px"> </td>
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
