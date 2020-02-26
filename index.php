<?php
    session_start();
 ?>

 <?php
 require'db.php';
 $select_banner = "SELECT * FROM banners WHERE status=1";
 $select_result = mysqli_query($db , $select_banner);
 $after_assoc = mysqli_fetch_assoc($select_result);
  ?>
<?php
 require'db.php';
 $select_logo = "SELECT * FROM logos WHERE status=1";
 $logo_result = mysqli_query($db , $select_logo);
 $after_assoc2 = mysqli_fetch_assoc($logo_result);
  ?>

  <?php
  require'db.php';
  $select_about = "SELECT * FROM abouts WHERE status=1";
  $about_result = mysqli_query($db , $select_about);
  $after_assoc3 = mysqli_fetch_assoc($about_result);
   ?>

 <?php
 require'db.php';
 $select_service = "SELECT * FROM services WHERE status=1";
 $service_result = mysqli_query($db , $select_service);
  ?>

  <?php
  require'db.php';
  $select_testimonial = "SELECT * FROM testimonials WHERE status=1";
  $testimonial_result = mysqli_query($db , $select_testimonial);
   ?>

   <?php
   require'db.php';
   $select_contact = "SELECT * FROM contacts WHERE status=1";
   $contact_result = mysqli_query($db , $select_contact);
   $after_assoc4 = mysqli_fetch_assoc($contact_result);
    ?>
  <?php
    require'db.php';
    $select_icon = "SELECT * FROM socials WHERE status=1";
    $icon_result = mysqli_query($db , $select_icon);
    $after_assoc5 = mysqli_fetch_assoc($icon_result);
   ?>




<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>INNOVA</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/nivo-lightbox.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/default.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation
    ==========================================-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand page-scroll" href="#page-top">
        <img width="130" src="uploads/logos/<?php echo $after_assoc2['logo']; ?>" alt="">
      </a>
      <div class="phone"><span>Call Today</span>320-123-4321</div>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about" class="page-scroll">About</a></li>
        <li><a href="#services" class="page-scroll">Services</a></li>
        <li><a href="#testimonials" class="page-scroll">Testimonials</a></li>
        <li><a href="#contact" class="page-scroll">Contact</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
</nav>
<!-- Header -->
<header id="header">
  <div class="intro" style="background:url(uploads/banners/<?php echo $after_assoc['banner_img']; ?> )">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 intro-text">
            <h1> <?php echo $after_assoc['banner_title']; ?></h1>
            <p> <?php echo $after_assoc['banner_desp']; ?> </p>
            <a href="#about" class="btn btn-custom btn-lg page-scroll"> <?php echo $after_assoc['banner_btn']; ?> </a> </div>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- Get Touch Section -->
<div id="get-touch">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-6 col-md-offset-1">
        <h3>Cost for your home renovation project</h3>
        <p>Get started today and complete our form to request your free estimate</p>
      </div>
      <div class="col-xs-12 col-md-4 text-center"><a href="#contact" class="btn btn-custom btn-lg page-scroll">Free Estimate</a></div>
    </div>
  </div>
</div>
<!-- About Section -->
<div id="about">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-6"> <img src="uploads/abouts/<?php echo $after_assoc3['about_img']; ?>" class="img-responsive" alt=""> </div>
      <div class="col-xs-12 col-md-6">
        <div class="about-text">
          <h2><?php echo $after_assoc3['about_title']; ?></h2>
          <p><?php echo $after_assoc3['about_desp']; ?></p>
          <h3><?php echo $after_assoc3['about_sub_title']; ?></h3>
          <div class="list-style">
            <div class="col-lg-12 col-sm-12 col-xs-12">
              <ul>
                <?php
                 $all_feature=explode(',',$after_assoc3['feature']);
                 foreach ($all_feature as $value) { ?>
                    <li> <?php echo $value; ?></li>
               <?php } ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Services Section -->
<div id="services">
  <div class="container">
    <div class="section-title">
      <h2>Our Services</h2>
    </div>
    <div class="row">
      <?php foreach ($service_result as  $value) { ?>
      <div class="col-md-4">
        <div class="service-media"> <img src="uploads/services/<?php echo $value['service_img']; ?>" alt=" "> </div>
        <div class="service-desc">
          <h3><?php echo $value['service_title']; ?></h3>
          <p><?php echo $value['service_desp']; ?></p>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</div>
<!-- Testimonials Section -->
<div id="testimonials">
  <div class="container">
    <div class="section-title">
      <h2>Testimonials</h2>
    </div>
    <div class="row">
        <?php foreach ($testimonial_result as  $value1) { ?>
        <div class="col-md-4">
          <div class="testimonial">
            <div class="testimonial-image"> <img src="uploads/testimonials/<?php echo $value1['testimonial_img']; ?>" alt=""> </div>
            <div class="testimonial-content">
              <p><?php echo $value1['testimonial_desp']; ?></p>
              <div class="testimonial-meta"> <?php echo $value1['testimonial_name']; ?> </div>
            </div>
          </div>
        </div>
        <?php } ?>
    </div>
  </div>
</div>
<!-- Contact Section -->
<div id="contact">
  <div class="container">
    <div class="col-md-8">
      <div class="row">
        <div class="section-title">
          <h2>Get In Touch</h2>
          <p>Please fill out the form below to send us an email and we will get back to you as soon as possible.</p>
        </div>
        <div class="">
        <?php
           if (isset($_SESSION['succes'])) {
            echo $_SESSION['succes'];
            unset($_SESSION['succes']);
           }
         ?>
       </div>
       <form name="sentMessage" id="contactForm" action="message_post.php" method="post">
         <div class="row">
           <div class="col-md-6">
             <div class="form-group">
               <input type="text" id="name" name="fname" class="form-control" placeholder="Name" required="required">
               <p class="help-block text-danger"></p>
             </div>
           </div>
           <div class="col-md-6">
             <div class="form-group">
               <input type="email" id="email" name="email" class="form-control" placeholder="Email" required="required">
               <p class="help-block text-danger"></p>
             </div>
           </div>
         </div>
         <div class="form-group">
           <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message" required></textarea>
           <p class="help-block text-danger"></p>
         </div>
         <div id="success"></div>
         <button type="submit" class="btn btn-custom btn-lg">Send Message</button>
       </form>
      </div>
    </div>
    <div class="col-md-3 col-md-offset-1 contact-info">
      <div class="contact-item">
        <h4>Contact Info</h4>
        <p><span>Address</span><?php echo $after_assoc4['contact_address']; ?></p>
      </div>
      <div class="contact-item">
        <p><span>Phone</span> <?php echo $after_assoc4['contact_phone']; ?></p>
      </div>
      <div class="contact-item">
        <p><span>Email</span> <?php echo $after_assoc4['contact_email']; ?></p>
      </div>
    </div>
    <div class="col-md-12">
      <div class="row">
        <div class="social">
          <ul>
              <li><a href="#"><i class="<?php echo $after_assoc5['social1']?>"></i></a></li>
              <li><a href="#"><i class="<?php echo $after_assoc5['social2']?>"></i></a></li>
              <li><a href="#"><i class="<?php echo $after_assoc5['social3']?>"></i></a></li>
              <li><a href="#"><i class="<?php echo $after_assoc5['social4']?>"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Footer Section -->
<div id="footer">
  <div class="container text-center">
    <p>&copy; 2019 INNOVA. Design/Development by <a href="https://kawsar1110.github.io/" rel="nofollow">Kawsar Hasan</a></p>
  </div>
</div>
<script type="text/javascript" src="js/jquery.1.11.1.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/SmoothScroll.js"></script>
<script type="text/javascript" src="js/nivo-lightbox.js"></script>
<script type="text/javascript" src="js/jqBootstrapValidation.js"></script>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
