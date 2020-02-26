<?php
require 'session_check.php';
require 'db.php';
$select= "SELECT* FROM socials";
$select_result= mysqli_query($db,$select);
?>
<?php
    require 'dashboard_part/header.php';
   ?>

    <div class="container">
      <div class="row mt-5">
         <div class="col-lg-12 m-auto">
          <div class="card-header text-center"><h2 style="color:#13b4ca;">All Socials Info </h2></div>
          <table class="table table-striped table-dark">
            <tr>
                 <th>ID</th>
                 <th>Social1</th>
                 <th>Social2</th>
                 <th>Social3</th>
                 <th>Social4</th>
                 <th>Action</th>
            </tr>
             <?php
                foreach ($select_result as $value) { ?>
                  <tr>
                    <td><?php echo $value['id']; ?></td>
                    <td><?php echo $value['social1']; ?></td>
                    <td><?php echo $value['social2']; ?></td>
                    <td><?php echo $value['social3']; ?></td>
                    <td><?php echo $value['social4']; ?></td>

                    <td>
                    <!-- <a href="single_service.php?id=<?php echo $value['id'];?>"class="btn btn-primary">View</a> -->
                    <a href="edit_icon.php?id=<?php echo $value['id'];?>"class="btn btn-warning">Edit</a>
                    <a data-toggle="modal"  data-target="#exampleModal<?php echo $value['id'];?>" class="btn btn-danger text-white" href="delete_icon.php?id=<?php echo $value['id'];?>">delete</a>
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
                           <button type="button" class="btn btn-danger"> <a class="text-white" href="delete_icon.php?id=<?php echo $value['id'];?>">Yes</a> </button>
                         </div>
                       </div>
                     </div>
                   </div>

                  </td>
                  </tr>
              <?php } ?>
            </table>
       </div>
    </div>
  </div>

<?php
    require 'dashboard_part/footer.php';
   ?>
