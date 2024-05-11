 <!--	Fonts
	========================================================-->
 <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
 <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&amp;display=swap" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flaticon@1.0.0/dist/flaticon.css">
 <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

 <!--	Css Link-->
 <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="css/bootstrap-slider.css">
 <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
 <link rel="stylesheet" type="text/css" href="css/layerslider.css">
 <link rel="stylesheet" type="text/css" href="css/color.css" id="color-change">
 <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
 <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
 <link rel="stylesheet" type="text/css" href="fonts/flaticon/flaticon.css">
 <link rel="stylesheet" type="text/css" href="css/style.css">



 <header id="header" class="transparent-header-modern fixed-header-bg-#994FEE w-100">
     <div class="top-header bg-secondary bg-gradient">
         <div class="container">
             <div class="row">
                 <div class="col-md-8">
                     <ul class="top-contact list-text-white  d-table">
                         <li><a href="tel:8010545021"><i class="fas fa-phone-alt text-primary mr-1"></i>+917249728391</a></li>
                         <li><a href="contact.php"><i class="fas fa-envelope text-primary mr-1"></i>professionAdvisor@gmail.com</a></li>
                     </ul>
                 </div>
                 <div class="col-md-4">
                     <div class="top-contact float-right">
                         <ul class="list-text-white d-table">
                             <li><i class="fas fa-user text-primary mr-1"></i>
                                 <?php if (isset($_SESSION['uemail'])) { ?>
                                     <a href="logout.php">Logout</a>&nbsp;&nbsp;<?php } else { ?>
                                     <a href="login.php">Login</a>&nbsp;&nbsp;

                                     |
                             </li>
                             <li><i class="fas fa-user-plus text-primary mr-1"></i><a href="register.php">Register</li><?php } ?>


                         </ul>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div class="main-nav secondary-nav hover-success-nav py-2 " id="q" >
         <div class="container">
             <div class="row">
                 <div class="col-lg-12">
                     <nav class="navbar navbar-expand-lg navbar-light p-0"> <a class="navbar-brand position-relative" href="index.php"><img class="nav-logo" src="img/logo.jpg" alt=""></a>
                         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                         <div class="collapse navbar-collapse" id="navbarSupportedContent">
                             <ul class="navbar-nav mr-auto">
                                 <li class="nav-item dropdown"> <a class="nav-link" href="index.php" role="button" aria-haspopup="true" aria-expanded="false">Home</a></li>

                                 <li class="nav-item"> <a class="nav-link" href="about.php">About</a> </li>

                                 <li class="nav-item"> <a class="nav-link" href="contact.php">Contact</a> </li>
                                 <li class="nav-item dropdown">
                                     <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>

                                     <ul class="dropdown-menu">
                                         <li class="nav-item"> <a class="nav-link" href="careerpredict.php">Career Prediction</a> </li>
                                         <li class="nav-item"> <a class="nav-link" href="stream.php">Stream</a> </li>
                                         <li class="nav-item"> <a class="nav-link" href="knowledge.php">Knowledge Network</a> </li>
                                         <li class="nav-item"> <a class="nav-link" href="competitiveexam.php">Competitive Exam</a> </li>
                                     </ul>




                                     <?php if (isset($_SESSION['uemail'])) { ?>
                                 <li class="nav-item dropdown">
                                     <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">My Account</a>
                                     <ul class="dropdown-menu">
                                         <li class="nav-item"> <a class="nav-link" href="feedback.php">FeedBack</a> </li>

                                         <li class="nav-item"> <a class="nav-link" href="logout.php">Logout</a> </li>
                                     </ul>
                                 </li>
                             <?php } else { ?>
                                 <li class="nav-item"> <a class="nav-link" href="login.php">Login/Register</a> </li>
                             <?php } ?>



                             </ul>


                             <a class="btn btn-primary d-none d-xl-block" style="border-radius:30px;" href="register.php">Get Started</a>
                         </div>
                     </nav>
                 </div>
             </div>
         </div>
     </div>
 </header>