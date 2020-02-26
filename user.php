<?php
require 'session_check.php';
require 'db.php';

$select= "SELECT* FROM users";
$select_result= mysqli_query($db,$select);
?>
<?php
    require 'dashboard_part/header.php';
 ?>
 <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

    <div class="container">
      <div class="row mt-5">
         <div class="col-lg-12 m-auto">
          <div class="card-header text-center"><h2 style="color:#13b4ca;">All users Info </h2></div>
          <table class="table table-striped" id="myTable">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <!-- <th scope="col">Password</th> -->
                <th scope="col">Age</th>
                <th scope="col">Gender</th>
                <th scope="col">Role</th>
                <th scope="col">Photo</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
               if ($_SESSION['role']==1 || $_SESSION['role']==2) {
                 foreach ($select_result as $value) { ?>
                     <tr>
                       <td><?php echo $value['id']; ?></td>
                       <td><?php echo $value['name']; ?></td>
                       <td><?php echo $value['email']; ?></td>
                       <!-- <td><?php echo $value['password']; ?></td> -->
                       <td><?php echo $value['age']; ?></td>
                       <td><?php echo $value['gender']; ?></td>
                       <td>
                         <?php
                         if ($value['role']== 1) {
                           echo "Admin";
                         }
                         elseif ($value['role']== 2) {
                           echo "Moderator";
                         }
                         else {
                           echo "Editor";
                         }
                          ?>
                       </td>
                       <td> <img src="uploads/users/<?php echo $value['photo']; ?>" alt="" width="30px"> </td>
                       <td>
                       <a href="single_user.php?id=<?php echo $value['id'];?>"class="btn btn-primary">View</a>
                       <a href="edit_user.php?id=<?php echo $value['id'];?>"class="btn btn-warning">Edit</a>
                       <a data-toggle="modal"  data-target="#exampleModal<?php echo $value['id'];?>" class="btn btn-danger text-white" href="delete_user.php?id=<?php echo $value['id'];?>">delete</a>
                      <!-- Modal -->
                      <div class="modal fade" id="exampleModal<?php echo $value['id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title text-danger" id="exampleModalLabel">You went to delete?</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                              <button type="button" class="btn btn-danger"> <a class="text-white" href="delete_user.php?id=<?php echo $value['id'];?>">Yes</a> </button>
                            </div>
                          </div>
                        </div>
                      </div>

                     </td>
                     </tr>
              <?php } ?>
              <?php } ?>
                </tbody>
            </table>
       </div>
    </div>
  </div>


<?php
    require 'dashboard_part/footer.php';
   ?>
   <script type="text/javascript" src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js">

   </script>
   <script type="text/javascript">
      $('#myTable').DataTable();
   </script>
