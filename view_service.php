<?php
require 'session_check.php';
require 'db.php';
$select= "SELECT* FROM services";
$select_result= mysqli_query($db,$select);
?>
<?php
    require 'dashboard_part/header.php';
   ?>

    <div class="container">
      <div class="row mt-5">
         <div class="col-lg-12 m-auto">
          <div class="card-header text-center"><h2 style="color:#13b4ca;">All Service Info </h2></div>
          <table class="table table-striped table-dark">
            <tr>
                 <th>ID</th>
                 <th width="10%">Service_title</th>
                 <th width="30%">Service_descriptionL</th>
                 <th>Status</th>
                 <th>Service_Photo</th>
                 <th>Action</th>
            </tr>
             <?php
                foreach ($select_result as $value) { ?>
                  <tr>
                    <td><?php echo $value['id']; ?></td>
                    <td><?php echo $value['service_title']; ?></td>
                    <td><?php echo substr($value['service_desp'],0,6).'....Read More'; ?></td>
                    <td>
                    <?php
                       if($value['status'] == 1){ ?>
                         <button type="button" class="btn btn-success" data-toggle="modal" data-target="#deactive<?php echo $value['id'];?>">Active</button>
                         <!-- Modal -->
                         <div class="modal fade" id="deactive<?php echo $value['id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                 <button type="button" class="btn btn-danger"> <a class="text-white" href="deactive_service.php?id=<?php echo $value['id'];?>">Yes</a> </button>
                               </div>
                             </div>
                           </div>
                         </div>
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
                                  <button type="button" class="btn btn-danger"> <a class="text-white" href="active_service.php?id=<?php echo $value['id'];?>">Yes</a> </button>
                                </div>
                              </div>
                            </div>
                          </div>

                     <?php } ?>

                    </td>
                    <td> <img src="uploads/services/<?php echo $value['service_img']; ?>" alt="" width="30px"> </td>
                    <td>
                    <a href="single_service.php?id=<?php echo $value['id'];?>"class="btn btn-primary">View</a>
                    <a href="edit_service.php?id=<?php echo $value['id'];?>"class="btn btn-warning">Edit</a>
                    <a data-toggle="modal"  data-target="#delete<?php echo $value['id'];?>" class="btn btn-danger text-white" href="delete_service.php?id=<?php echo $value['id'];?>">delete</a>
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
                           <button type="button" class="btn btn-danger"> <a class="text-white" href="delete_service.php?id=<?php echo $value['id'];?>">Yes</a> </button>
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
