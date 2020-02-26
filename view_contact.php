<?php
require 'session_check.php';
require 'db.php';
$select= "SELECT* FROM contacts";
$select_result= mysqli_query($db,$select);
?>
<?php
    require 'dashboard_part/header.php';
   ?>

    <div class="container">
      <div class="row mt-5">
         <div class="col-lg-12 m-auto">
          <div class="card-header text-center"><h2 style="color:#13b4ca;">All Contacts  Info </h2></div>
          <table class="table table-striped table-dark">
            <tr>
                 <th>ID</th>
                 <th >Contact Address</th>
                 <th >Contact Phone</th>
                 <th >Contact Email</th>
                 <th>Status</th>
                 <th>Action</th>
            </tr>
             <?php
                foreach ($select_result as $value) { ?>
                  <tr>
                    <td><?php echo $value['id']; ?></td>
                    <td><?php echo $value['contact_address']; ?></td>
                    <td><?php echo $value['contact_phone']; ?></td>
                    <td><?php echo $value['contact_email']; ?></td>
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
                                  <button type="button" class="btn btn-danger"> <a class="text-white" href="active_contact.php?id=<?php echo $value['id'];?>">Yes</a> </button>
                                </div>
                              </div>
                            </div>
                          </div>

                     <?php } ?>

                    </td>
                    <td>
                    <a href="single_contact.php?id=<?php echo $value['id'];?>"class="btn btn-primary">View</a>
                    <a href="edit_contact.php?id=<?php echo $value['id'];?>"class="btn btn-warning">Edit</a>
                    <a data-toggle="modal"  data-target="#delete<?php echo $value['id'];?>" class="btn btn-danger text-white" href="delete_contact.php?id=<?php echo $value['id'];?>">delete</a>
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
                           <button type="button" class="btn btn-danger"> <a class="text-white" href="delete_contact.php?id=<?php echo $value['id'];?>">Yes</a> </button>
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
