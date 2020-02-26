<?php
require 'session_check.php';

require 'db.php';
$id = $_GET['id'];
$select = "SELECT * FROM messages WHERE id = $id";
$select_result= mysqli_query($db, $select);
$after_assoc= mysqli_fetch_assoc($select_result);

$update_message = "UPDATE messages SET status =1 WHERE id=$id";
$update_message_result =mysqli_query($db, $update_message);
?>

 <?php
     require 'dashboard_part/header.php';
 ?>

      <div class="container">
        <div class="row">
           <div class="col-lg-12 mt-5">
            <div class="card mb-3">
              <div class="card-header text-center"><h2 style="color:#13b4ca;">Individual Message Info</h2></div>
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
                      <th>Message</th>
                    <td><?php echo $after_assoc['message']; ?></td>
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
