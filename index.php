<?php

function clean_text($string)
{
  $string = trim($string);
  $string = stripslashes($string);
  $string = htmlspecialchars($string);
  return $string;
}
if(isset($_POST['submit'])){
$name = clean_text($_POST['name']);
$email = clean_text($_POST['email']);
$subject = clean_text($_POST['subject']);

$to = "festechsolutions@gmail.com";
$headers = "MIME-VERSION: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" ."\r\n";
$headers = "From : <$email> \r\n "; 

$message = "Received Email from: $name\n\n";
$message .= clean_text($_POST['message']);
$message .= "\n\nTo send a reply, please click-> $email";
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Festech Solutions</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#fff"/>
    <meta name="description" content="Festech Solutions">

    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">
    <link data-require="sweet-alert@*" data-semver="0.4.2" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
  </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    <header class="site-navbar fixed-top py-3 bg-white" role="banner">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-11 col-xl-2">
            <a href="https://festech.in"><img src="images/company_logo.png" height="50px" width="200px"></a>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="active"><a href="#home">Home</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#about-us">About</a></li>
                <li><a href="#clients">Clients</a></li>
                <li><a href="#contact">Contact</a></li>
              </ul>
            </nav>
          </div>
          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" 
               style="position: relative; top: 3px;">
               <a href="#" class="site-menu-toggle js-menu-toggle text-black">
                <span class="icon-menu h3"></span>
               </a>
          </div>
        </div>
      </div>
    </header>
  </div>

  <div id="home" class="site-blocks-cover overlay" style="background-image: url(images/hero_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row align-items-center justify-content-center text-center">
        <div class="col-md-12" data-aos="fade-up" data-aos-delay="400">         
          <div class="row justify-content-center mb-4">
            <div class="col-md-8 text-center">
              <br><br><br><br><br>
              <h1 style="color:white;"> We <span class="typed-words"></span></h1>
              <h1 style="color:white;">Websites, Web & Mobile Apps</h1>
              <p class="lead mb-5"><b>We are here for you</b></p>
              <div><a href="#contact" class="btn btn-primary btn-md">Contact Us</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>  

  <!--Services We Offer Section-->
  <section id="services" class="site-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-8 text-center">
            <h2 class="text-black h1 site-section-heading text-center">Services We Offer</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4">
            <div class="p-3 box-with-humber">
              <div class="number-behind">01.</div>
              <h2>Website Designing</h2>
              <p>Websites are the face of a brand, we help you by designing your website. Get to know more about the service <a href="#contact">contact us.</a></p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="p-3 box-with-humber">
              <div class="number-behind">02.</div>
              <h2>Web Application</h2>
              <p>We design and develop web based applications which inturn help you expand your business online. Get to know more about the service <a href="#contact">contact us.</a></p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="p-3 box-with-humber">
              <div class="number-behind">03.</div>
              <h2>Android/IOS Apps</h2>
              <p>We assist you in delivering seamless user experience on mobile apps. Get to know more about the service <a href="#contact">contact us.</a></p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4">
            <div class="p-3 box-with-humber">
              <div class="number-behind">04.</div>
              <h2>Vendor Management Service</h2>
              <p>Vendor management system is an application that automates the vendors billing model. Get to know more about the service <a href="#contact">contact us.</a></p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="p-3 box-with-humber">
              <div class="number-behind">05.</div>
              <h2>Restaurant Automation</h2>
              <p>A digital captain of a restaurant that takes the orders from the customer and connects to the kitchen and admin. Get to know more about the service <a href="#contact">contact us.</a></p>
            </div>
          </div>
        </div>
      </div>
  </section>

  <!--About Us Section-->
  <section id="about-us" class="site-section bg-light">
    <div class="container">
      <div class="row mb-5 justify-content-center">
        <div class="col-md-8 text-center">
          <h2 class="text-black h1 site-section-heading text-center">About Us</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-6">
              <h3>Mission</h3>
              <p>To provide viable technical solutions in the form of mobile applications to build and support your digital network. We aim to bring forth the best service for years to come.</p>
            </div>
            <div class="col-md-6">
              <h3>Vision</h3>
              <p>To offer quality service and build value for clients by becoming an integral web and mobile applications service provider.</p>
            </div>
            <div class="col-md-6">
              <h3>Future</h3>
              <p>To be the first choice of clients to help meet their goals through our services, people, and solutions. While using modern and highly sophisticated technologies to build solutions.</p>
            </div>
            <div class="col-md-6">
              <h3>Scope for Learning</h3>
              <p>We are a team of 7 +uber-cool, enthusiastic, computer geeks who learn, teach and grow together. Our only motto is “Do better what you can do the best”. ##SO WE ARE OUT HERE LOOKING FOR ENJOYING EACH DAY AS FUN AS A FESTIVAL WITH TECHNOLOGY.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--Our Clients Section-->
  <section id="clients" class="site-section">
    <div class="container">
      <div class="row mb-5 justify-content-center">
        <div class="col-md-8 text-center">
          <h2 class="text-black h1 site-section-heading text-center">Our Clients</h2>
        </div>
      </div>
      <div class="row text-center">
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
          <div class="h-entry">
            <img src="images/networkforcause.png" alt="Image" height="60px" width="200px">
            <h2><b>Network For Cause</b></h2>
          </div> 
        </div>
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
          <div class="h-entry">
            <img src="images/icontechpro.png" alt="Image" height="60px" width="50px">
            <h2><b>IconTech Pro</b></h2>
          </div> 
        </div>
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
          <div class="h-entry">
            <img src="images/drycleaners.png" alt="Image" height="60px" width="60px">
            <h2><b>Billing Software for Laundry Franchaise</b></h2>
          </div> 
        </div>
      </div>
    </div>
  </section>

  <!--Contact Section -->
  <section id="contact" class="site-section bg-light">
    <div class="container">
      <div class="row mb-5 justify-content-center">
        <div class="col-md-8 text-center">
          <h2 class="text-black h1 site-section-heading text-center">Contact Us</h2>
          <p>Send us a message and we would love to connect with you !</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-3">
              <div class="contact-address">
                <h4>Address</h4>
                <p><span class="glyphicon glyphicon-map-marker"></span>Hyderabad, India</p>
              </div>
              <div class="contact-phone">
                <i class="ion-ios-telephone-outline"></i>
                <h4>Phone Number</h4>
                <p><a href="https://api.whatsapp.com/send?phone=+917075003026">+91 7075003026</a></p>
              </div>
              <div class="contact-email">
                <i class="ion-ios-email-outline"></i>
                <h4>Email</h4>
                <p><a href="mailto:festechsolutions@gmail.com">festechsolutions@gmail.com</a></p>
              </div>
            </div>
            <div class="col-md-9 ml-auto">
              <div class="col-md-12 form">
                <form action="" method="post" role="form" class="contactForm">
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required/>
                    </div>
                    <div class="form-group col-md-6">
                      <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" required/>
                    </div>
                    <div class="form-group col-md-12">
                      <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" required/>
                    </div>
                    <div class="form-group col-md-12">
                      <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message" required></textarea>
                    </div>
                    <div class=" col-md-12 text-center"><input type="submit" name="submit" value="Contact Us" class="btn btn-primary btn-md"></div>
                  </div>
                  <?php
                  if (isset ($_POST['submit']))
                  {
                    if(mail($to,$subject,$message,$headers))
                    {
                      echo '<script type="text/javascript">';
                      echo 'setTimeout(function () { swal("Hurray!","Your response has been received, Relax and sit back we will contact you soon.","success");';
                      echo '}, 1000);</script>';
                    }
                    else{
                      echo '<script type="text/javascript">';
                      echo 'setTimeout(function () { swal("Oops","There is an error, our engineers are working on the issue. Apologies for the Inconvenience","error");';
                      echo '}, 1000);</script>';
                    }
                  }
                  ?>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--Footer Section-->
  <footer id="footer" class="site-footer">
    <div class="container">
     <div class="row justify-content-center">
         <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script>  Festech solutions, All rights reserved | made in association with <a href="https://colorlib.com" target="_blank" >Colorlib</a></p>
      </div> 
    </div>
  </footer>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/typed.js"></script>
            <script>
            var typed = new Typed('.typed-words', {
            strings: ["Design","Create","Deploy"],
            typeSpeed: 80,
            backSpeed: 80,
            backDelay: 1000,
            startDelay: 1000,
            loop: true,
            showCursor: true
            });
            </script>

  <script src="js/main.js"></script>
    
  </body>
</html>