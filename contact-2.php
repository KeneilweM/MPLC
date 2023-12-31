<?php


if(isset($_POST['submit'])){

$to = "info@mplcprojects.co.za";
$subject = $_POST['subject'];
$message = $_POST['message'];
$from = $_POST['email'];


// Additional headers
$headers = 'From: ' . $from;


// Send the email
if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully.";
} else {
    echo "Failed to send email.";
}

}

?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themes.potenzaglobalsolutions.com/html/constro/contact-2.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Jun 2023 06:54:43 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="HTML5 Template" />
<meta name="description" content="Constro - Construction Business HTML5 Template" />
<meta name="author" content="potenzaglobalsolutions.com" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>MPLC PROJECTS - CONTACT</title>

<!-- Favicon -->
<link rel="shortcut icon" href="images/favicon.ico" />

<!-- bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

<!--  Roboto font -->
<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet" />

<!-- mega menu -->
<link href="css/mega-menu/mega_menu.css" rel="stylesheet" type="text/css" />

<!-- font-awesome -->
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />

<!-- Flaticon -->
<link href="css/flaticon.css" rel="stylesheet" type="text/css" />

<!-- owl-carousel -->
<link href="css/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css" />

<!-- General style -->
<link href="css/general.css" rel="stylesheet" type="text/css" />

<!-- main style -->
<link href="css/style.css" rel="stylesheet" type="text/css" />

<!-- Style customizer -->
<link rel="stylesheet" type="text/css" href="#" data-style="styles" />
<link rel="stylesheet" type="text/css" href="css/style-customizer.css" />

</head>

<body>

<!--=================================
 preloader -->

<!-- <div id="preloader">
  <div class="clear-loading loading-effect"><span><img width="200" src="images/logo-bw.png" alt="bw-logo"></span><img src="images/loading.gif" width="100" alt=""></div>
</div> -->
<!--=================================
header -->
<header id="header" class="fancy">
  <div class="topbar">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="topbar-left text-start">
             <ul class="list-inline">
               <li class="list-inline-item"> <i class="fa fa-map-marker"></i> 384 York Street Ferndale Randburg</li>
               <li class="list-inline-item"> <i class="fa fa-clock-o"></i> Mon - Sun 24hrs </li>
             </ul>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="topbar-right text-end">
             <ul class="list-inline">
               <li class="list-inline-item"> <i class="fa fa-envelope-o"> </i> info@mplcprojects.co.za</li>
               <li class="list-inline-item"> <i class="fa fa-phone"></i> +27(63) 145 5343 </li>
               <li class="list-inline-item"><a href="https://www.facebook.com/profile.php?id=100076081891214&mibextid=LQQJ4d"><i class="fa fa-facebook"></i></a></li>
               <li class="list-inline-item"><a href="https://instagram.com/mlpc_projects?igshid=OGQ5ZDc2ODk2ZA=="><i class="fa fa-instagram"></i></a></li>
               <li class="list-inline-item"><a href="https://www.linkedin.com/company/uno-electrical-projects/"><i class="fa fa-linkedin"></i></a></li>
             </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!--=================================
   mega menu -->
  <div class="menu">
    <div class="container">
      <div class="row">
       <div class="col-lg-12 col-md-12 position-relative">
       <!-- menu start -->
         <nav id="menu" class="mega-menu">
          <!-- menu list items container -->
          <section class="menu-list-items">
              <!-- menu logo -->
              <ul class="menu-logo">
                  <li><a href="index.html"><img id="logo_dark_img" src="images/logo.jpg" width="94" height="59" alt="logo"> </a></li>
              </ul>
              <!-- menu links -->
              <ul class="menu-links">
              <!-- active class -->
              <li class="active"><a href="index.html"> Home </a>
                   <!-- drop down multilevel  -->
                  
              </li>
  
              <li class="active"><a href="about-2.html"> About </a>
                  <!-- drop down multilevel  -->
              </li>
              <li class="active"><a href="services-1.html"> Services </a>
                  <!-- drop down multilevel  -->
              </li>
              <li class="active"><a href="contact-2.php"> Contact </a>
                  <!-- drop down multilevel  -->
              </li>
             </section>
           </nav>
         </div>
       </div>
      </div>
     </div>
  
  
  </header>
  
<!--=================================
 header -->


<!--=================================
 banner -->

<section class="inner-intro bg bg-fixed bg-overlay-black-70" style="background-image:url(images/bg/bg-2.jpg);">
  <div class="container">
     <div class="row intro-title text-center">
           <div class="col-sm-12">
				<div class="section-title"><h1 class="title text-white">Contact</h1></div>
           </div>
           <div class="col-sm-12">
             <ul class="page-breadcrumb">
                <li><a href="index.html"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
                <li><a href="contact-2.php">pages</a> <i class="fa fa-angle-double-right"></i></li>
                <li><span>Contact </span> </li>
             </ul>
        </div>
     </div>
  </div>
</section>

<!--=================================
 banner -->



<!--=================================
 Page Section -->


 <section class="contact-sec page-section-pt"><div class="container"><div class="row">
  <div class="col-sm-12"><div class="section-title text-center">
      <h2 class="title">Get in Touch With us</h2>
      <p>Contact us today for all your electrical, plumbing, and solar needs. Whether you require installations, repairs, or routine maintenance, MLPC Projects here to serve you. Let us help you make your property safe, energy-efficient, and comfortable.</p>
  </div></div>

  <div class="col-sm-12 pb-30">
     <div class="defoult-form contact-2 form-2">
      <div id="formmessage" style="display:none">Success/Error Message Goes Here</div>
         <form class="row" id="contactform" role="form" method="post" action="#">
            <div class="form-group mb-3 half-group ms-0">
                <label class="form-label">Name*</label>
                  <div class="input-group">
                    <input id="name" type="text" placeholder="" class="form-control"  name="name">
                  </div>
            </div>
            <div class="form-group mb-3 half-group ms-0">
              <label class="form-label">Last Name*</label>
                  <div class="input-group">
                    <input type="text" placeholder="" class="form-control" name="Last">
                  </div>
            </div>
            <div class="form-group mb-3 half-group">
              <label class="form-label">Email*</label>
                  <div class="input-group">
                  <input type="email" placeholder="" class="form-control" name="email">
                  </div>
            </div>
            <div class="form-group mb-3 half-group">
              <label class="form-label">Subject*</label>
                  <div class="input-group">
                  <input type="text" placeholder="" class="form-control" name="subject">
                  </div>
            </div>
            
            <div class="form-group mb-3">
              <label class="form-label">Message*</label>
                  <div class="input-group">
                    <textarea class="form-control input-message" placeholder="Comment*" rows="7" name="message"></textarea>
                  </div>
              </div>
              <div class="form-group">
                <input type="hidden" name="action" value="sendEmail"/>
              <button id="submit" name="submit" type="submit" value="Send" class="button border animated middle-fill mb-0"><span>Submit Now</span></button>
              </div>
          </form>
          <div id="ajaxloader" style="display:none"><img class="center-block" src="images/loading.gif" alt=""></div>
          </div>
    </div>
  </div>
</div>


       
	</div>
</div></div></div>
</section>

<section>
<!-- <div class="container-fluid px-0"><div class="row g-0"><div class="col-sm-12 ">
<iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8351288872545!2d144.9556518!3d-37.8173306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sin!4v1443621171568" style="vertical-align:top; border:0; width: 100%; height: 400px;" allowfullscreen></iframe>
</div></div></div> -->

</section>

<!--=================================
 page-section -->


<!--=================================
footer -->

<footer class="footer page-section-pt dark-bg"><div class="container"><div class="row">
  <div class="col-md-5 mb-30">
     <div class="section-title"><h4 class="title">About Us</h4></div>
   <div class="footer-about">
     <p>MPLC Projects Management is the overall planning, coordination, and control of a project from beginning to completion. MPLC Projects is aimed at meeting a client's requirement in order to produce a functionally and financially viable project.</p>
     <div class="social-icons social-white color-hover mt-20">
           <ul>
              <li class="social-facebook"><a href="https://www.facebook.com/profile.php?id=100076081891214&mibextid=LQQJ4d"><i class="fa fa-facebook"></i></a></li>
              <li class="social-twitter"><a href="https://instagram.com/mlpc_projects?igshid=OGQ5ZDc2ODk2ZA=="><i class="fa fa-instagram"></i></a></li>
              <li class="social-linkedin"><a href="https://www.linkedin.com/company/uno-electrical-projects/"><i class="fa fa-linkedin"></i></a></li>
              
          </ul>
</div>
   </div>
  </div>

    <div class="col-md-4 mb-30">
     <div class="footer-usefull">
       <div class="section-title"><h4 class="title">Usefull Links</h4></div>
       <ul class="list-mark list-2">
         <li><a href="index.html">Home </a></li>
         <li><a href="about-2.html">About </a></li>
         <li><a href="services-1.html">Services</a></li>
         <li><a href="contact-2.php">Contact Us</a></li>
       </ul>
    </div>
  </div>
  <div class="col-md-3">
      <div class="footer-address">
       <div class="section-title"><h4 class="title">Get in Touch</h4></div>
       <ul class="list-inline">
         <li><i class="fa fa-map-marker"></i> <span> 384 York Street Ferndale Randburg</span></li>
         <li><i class="fa fa-phone"></i> <span>+27 63 145 5343</span></li>
         <li><i class="fa fa-home"></i> <span>www.mplcprojects.co.za</span></li>
         <li><i class="fa fa-envelope"></i> <span>info@mplcprojects.co.za</span></li>
       </ul>
    </div>
  </div>
</div>
</div>

<div class="footer-widget mt-20">
  <div class="container"><div class="center">

    <p> &copy;Copyright MPLC <span id="copyright"> <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script></span> <a href="#"> Made with ♥ by Ikusasa Technology Solutoins </a> All Rights Reserved </p>
  </div>
   </div>
  </div></div>
</footer>
 <!--=================================
footer -->



<div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-chevron-up"></i></a></div>

<!--=================================
 jquery -->


<!-- jquery  -->
<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>

<!-- popper.min -->
<script type="text/javascript" src="js/popper.min.js"></script>

<!-- bootstrap -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<!-- bootstrap -->
<script type="text/javascript" src="js/mega-menu/mega_menu.js"></script>

<!-- owl-carousel -->
<script type="text/javascript" src="js/owl-carousel/owl.carousel.min.js"></script>

<!-- style customizer  -->
<script type="text/javascript" src="js/style-customizer.js"></script>

<!-- custom -->
<script type="text/javascript" src="js/custom.js"></script>

</body>

<!-- Mirrored from themes.potenzaglobalsolutions.com/html/constro/contact-2.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Jun 2023 06:54:43 GMT -->
</html>
