<?php
  require 'session_check.php';
  require 'cookie_check.php';
  require 'dashboard_part/header.php';
 ?>
 <div class="content-wrapper">
   <h2 class="text-center pb-2" style="color:#13b4ca;">Wellcome to dashboard</h2>
   <div class="row">
     <div class="col-md-6 col-lg-3 grid-margin stretch-card">
       <div class="card">
         <div class="card-body">
           <div class="d-flex align-items-center justify-content-md-center">
             <i class="mdi mdi-basket icon-lg text-success"></i>
             <div class="ml-3">
               <p class="mb-0">Daily Order</p>
               <h6>12569</h6>
             </div>
           </div>
         </div>
       </div>
     </div>
     <div class="col-md-6 col-lg-3 grid-margin stretch-card">
       <div class="card">
         <div class="card-body">
           <div class="d-flex align-items-center justify-content-md-center">
             <i class="mdi mdi-rocket icon-lg text-warning"></i>
             <div class="ml-3">
               <p class="mb-0">Tasks Completed</p>
               <h6>2346</h6>
             </div>
           </div>
         </div>
       </div>
     </div>
     <div class="col-md-6 col-lg-3 grid-margin stretch-card">
       <div class="card">
         <div class="card-body">
           <div class="d-flex align-items-center justify-content-md-center">
             <i class="mdi mdi-diamond icon-lg text-info"></i>
             <div class="ml-3">
               <p class="mb-0">Monthly Sales</p>
               <h6>896546</h6>
             </div>
           </div>
         </div>
       </div>
     </div>
     <div class="col-md-6 col-lg-3 grid-margin stretch-card">
       <div class="card">
         <div class="card-body">
           <div class="d-flex align-items-center justify-content-md-center">
             <i class="mdi mdi-chart-line-stacked icon-lg text-danger"></i>
             <div class="ml-3">
               <p class="mb-0">Total Revenue</p>
               <h6>$ 56000</h6>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>

<?php
  require 'dashboard_part/footer.php';
 ?>
