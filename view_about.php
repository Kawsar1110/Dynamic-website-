<?php
require 'session_check.php';
require 'db.php';
$select= "SELECT* FROM abouts";
$select_result= mysqli_query($db,$select);
?>
<?php
    require 'dashboard_part/header.php';
   ?>

    <div class="container">
      <div class="row mt-5">
         <div class="col-lg-12 m-auto">
          <div class="card-header text-center"><h2 style="color:#13b4ca;">All About Info </h2></div>
          <table class="table table-striped table-dark">
            <tr>
              <th scope="col">ID</th>
              <th width:"5px" scope="col">About Title</th>
              <th scope="col">About Description</th>
              <th scope="col">About Sub Title</th>
              <th scope="col">Feature</th>
              <th scope="col">Status</th>
              <th scope="col">Photo</th>
              <th scope="col">Action</th>

            </tr>
             <?php
                foreach ($select_result as $value) { ?>
                  <tr>
                    <td><?php echo $value['id']; ?></td>
                    <td><?php echo $value['about_title']; ?></td>
                    <td><?php echo substr($value['about_desp'],0,6).'....Read More'; ?></td>
                    <td><?php echo $value['about_sub_title']; ?></td>
                    <td><?php echo substr($value['feature'],0,6).'....Read More'; ?></td>
                    <td>
                    <?php
                       if($value['status'] == 1){ ?>
                         <button type="button" class="btn btn-success">Active</button>
                     <?php }
                      else {
                        ?>
                          <button type="button" class="btn btn-danger" data-toggle="modal"  data-target="#exampleModal<?php echo $value['id'];?>">Deactive</button>
                          <!-- Modal -->
                          <div class="modal fade" id="exampleModal<?php echo $value['id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title text-danger" id="exampleModalLabel">You went to Change Status</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                  <button type="button" class="btn btn-danger"> <a class="text-white" href="active_about.php?id=<?php echo $value['id'];?>">Yes</a> </button>
                                </div>
                              </div>
                            </div>
                          </div>

                     <?php } ?>

                    </td>
                    <td> <img src="uploads/abouts/<?php echo $value['about_img']; ?>" alt="" width="30px"> </td>
                    <td>
                    <a href="single_about.php?id=<?php echo $value['id'];?>"class="btn btn-primary">View</a>
                    <a href="edit_about.php?id=<?php echo $value['id'];?>"class="btn btn-warning">Edit</a>
                    <a data-toggle="modal"  data-target="#delete<?php echo $value['id'];?>" class="btn btn-danger text-white" href="delete_about.php?id=<?php echo $value['id'];?>">delete</a>
                   <!-- Modal -->
                   <div class="modal fade" id="delete<?php echo $value['id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                           <button type="button" class="btn btn-danger"> <a class="text-white" href="delete_about.php?id=<?php echo $value['id'];?>">Yes</a> </button>
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
