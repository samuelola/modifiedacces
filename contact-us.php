<?php
session_start();
require 'phpmailer/PHPMailerAutoload.php';
require 'helpers.php';

$message = '';

 if(isset($_POST['submit'])){

     // filter

     $name = test_input($_POST['name']);
     $email = test_input($_POST['email']);
     $subject = test_input($_POST['subject']);
     $yourmessage = test_input($_POST['message']);
     
    // validation

     if(empty($name)){

           $message .= '<p class="enable">Enter Your name!</p>';
     }
     

     else{

      if(strlen($name) < 3){
         
        $message .= '<p class="enable">Name must be greater than 2!</p>';
        
      }

      }


      if(empty($email)){
         
           $message .= '<p class="enable">Enter Your email!</p>';
      }

      else{

         if(!filter_var($email,FILTER_VALIDATE_EMAIL)){

          $message .='<p class="enable">Your email is not valid!</p>';

         }
      }

      if(empty($subject)){

          $message .= '<p class="enable">Enter Your subject!</p>';
      }

      
     else{

      if(strlen($subject) < 3){
         
        $message .= '<p class="enable">Subject must be greater than 2!</p>';
        
      }

     }


     if(empty($yourmessage)){

          $message .= '<p class="enable">Enter Your message!</p>';
      }


      //if there are no errors


      if($message == ''){

            $mail = new PHPMailer ();
            $mail->SMTPDebug = 0; 
            //$mail->IsSMTP();
            $mail->Host='mail.accesscollege.ng';  
            $mail->Port= 465;
            $mail->SMTPAuth= true;
            $mail->SMTPSecure ='ssl';
            $mail->isHTML(true);
            $mail->Username = 'info@accesscollege.ng'; // authentication
            $mail->Password = 'accesscollege1@';
            $mail->setFrom($email,$name); // who is sending the mail
            $mail->addAddress('info@accesscollege.ng'); // where we are sending the to (recepient)
            $mail->addReplyTo($email,$name);
            
            //$mail->addAttachment('Samuel.jpg');         
            
            $mail->Subject= $subject;
            $mail->Body= $yourmessage;
              
              if($mail->send()){
               
                 // $message .= '';
                  echo "<script>alert('Your message has been sent. Thank you!')</script>";
                  echo "<script>window.open('contact-us.php','_self')</script>";
              }

              else{
                 //$message .= "";

                  echo "<script>alert('Your message is not sent, please try again')</script>";
                  echo "<script>window.open('contact-us.php','_self')</script>";
              }
            }


 }

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="description" content="Access College in pursuit of its academic excellence has become an household name and has been rated as one of the best schools in Ogun state. The school had won several awards in inter-schools competition, debates, spelling Bees, quiz and lots more.">
  <title>Contact-Us | Access College</title>

  <!-- Bootstrap -->

  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link href="css/prettyPhoto.css" rel="stylesheet">
  <link rel="stylesheet" href="css/responsive.css">
  <link href="css/style.css" rel="stylesheet" />
  <link href="css/use.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/staff.css">
  <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="css/easy-responsive-tabs.css">
  <link rel="stylesheet" href="css/themify-icons.css"/>
  <link rel="stylesheet" href="css/magnific-popup.css"/>
  <link rel="stylesheet" href="css/access.css"/>
  <link rel="stylesheet" href="css/admin.css"/>
  <link rel="stylesheet" href="css/owl.carousel.css"/>
  
  <!-- =======================================================
    Theme Name: Company
    Theme URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>

  
  

  
   <header>
           
          <!-- header section -->
            <header class="header-section">
              <div class="container">
                <!-- logo -->
                 <a href="http://accesscollege.ng/" class="site-logo"><img src="images/newaccess2.png" alt="image">
                   <p class="dive1">Access College</p>
                   <p class="dive2">Aiming for the best</p>
                </a>
                
                

                <div class="nav-switch">
                  <i class="fa fa-bars"></i>
                </div>
                <div class="header-info">
                  <div class="hf-item">
                    <i class="fa fa-phone boo"></i>
                    <p class="dav1"><span class="tel">Telephone:</span>08033482964,08075907695,<br>08023543782</p>
                  </div>

                  <div class="hf-item">
                    <i class="fa fa-clock-o"></i>
                    <p class="dav2"><span>Working time:</span>Monday - Friday: 8 AM - 4 PM</p>
                  </div>

                  <div class="hf-item">
                    <i class="fa fa-map-marker"></i>
                    <p class="dav3"><span>Find us:</span>50, Idiroko Rd, Joju Bye Pass Ota</p>
                  </div>
                </div>
              </div>
            </header>
            <!-- header section end-->


                <!-- Header section  -->
            <nav class="nav-section">
              <div class="container">
                <!--<div class="nav-right">
                  <a href=""><i class="fa fa-search"></i></a>
                  <a href=""><i class="fa fa-shopping-cart"></i></a>
                </div>-->
                <ul class="main-menu nav navbar-nav navbar-left cl-effect-15">
                  <li><a href="index.php">Home</a></li>

                  <li class="dropdown">
                     <a href="#" class="dropdown-toggle effect-3" data-toggle="dropdown">About Us
                          <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu" id="dropdown-menu">
                           <li>
                              <a href="message.php">Chairman's Message</a>
                           </li>
                           <li>
                              <a href="values.php">Our Values</a>
                           </li>
                      
                 
                        </ul>
                  </li>
                  <li class="dropdown">
                        <a href="#" class="dropdown-toggle effect-3" data-toggle="dropdown">Administration
                          <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu" id="dropdown-menu">
                           <li>
                              <a href="principal.php">Principal</a>
                           </li>
                           <li>
                              <a href="hods.php">HODS</a>
                           </li>
                           <li>
                              <a href="management-staff.php">Management Staff</a>
                           </li>
                 
                        </ul>
                    </li>

                  
                  <li>
                    <a href="academics.php">Academics</a>
                  </li>

                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle effect-3 " data-toggle="dropdown">Admissions
                          <b class="caret"></b>
                      </a>
                          <ul class="dropdown-menu" id="dropdown-menu">
                              <li>
                                <a href="school-admissions.php">School Admission</a>
                              </li>
                              <li>
                                <a href="entry-procedure.php">Entry Procedure</a>
                              </li>
                              <li>
                                <a href="how-to-apply.php">How to Apply</a>
                              </li>
                              <li>
                                <a href="entrance-exam.php">Entrance Exam</a>
                              </li>
                              <li>
                                <a href="tuition-fees.php">Tuition & fees</a>
                              </li>
                           </ul>
                    </li>

                    <li>
                       <a href="gallery.php">gallery</a>
                    </li>

                    <li class="active">
                       <a href="contact-us.php">Contact us</a>
                    </li>

                    <li class="dropdown">
                                <a href="#" class="dropdown-toggle effect-3 " data-toggle="dropdown">Portal
                                    <b class="caret"></b>
                                </a>
                        <ul class="dropdown-menu" id="dropdown-menu">
                           <li>
                              <a href="admin/admin-login.php">Admin Login</a>
                            </li>
                            <li>
                               <a href="teacher/teacher-login.php">Teacher Login</a>
                            </li>
                            <li>
                               <a href="student/student-login.php">Student Login</a>
                            </li>
                            <li>
                               <a href="parent/parent-login.php">Parent Login</a>
                            </li>
                                    
                          </ul>
                     </li>
                            
                             
                </ul>
              </div>
            </nav>
            <!-- Header section end -->
    
    
  </header>


  <!--<div id="breadcrumb">
    <div class="container">
      <div class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
        <li>Contact Us</li>
        
      </div>
    </div>
  </div>-->


 <div class="container" id="contain">
    <h4 id="poce" class="poce" >Contact Us</h4>
     <div class="row">
        <div class="col-md-3" id="cont">
            <p><br></p>

            <i class="con  fa fa-map-marker" aria-hidden="true"></i>

             <p class="got">Address <br>
               <p class="nw">50, Idiroko Rd, Joju Bye Pass Ota.</p>
             </p>

             <i class=" con fa fa-phone" aria-hidden="true"></i>

             <p class="got">phone <br>
               <p class="nw">08033482964,08075907695,08023543782.</p>

             </p>

             <i class=" con fa fa-envelope" aria-hidden="true"></i>

             <p class="got">Email <br>
               <p class="nw">accesscollege.ng@gmail.com</p>
             </p>

             <i class=" con fa fa-clock-o" aria-hidden="true"></i>

             <p class="got">Working Hours  <br>
               <p class="nw">Monday - Friday : 8:00AM - 4:00PM.</p>

             </p>

        </div>
        <div class="col-md-9">
           <p class="location">Location on map</p>
          <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.5765019044925!2d3.235994014771679!3d6.699255395156562!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b984a78142b1b%3A0x5b48a8c9cb98e270!2sAccess+College!5e0!3m2!1sen!2sng!4v1543588868805" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
     </div>

 </div>
  

  <section id="contact-page">
    <div class="container">
      <div class="center">
        <h4 id="get3" class="get3">Send us a  Message</h4>
        
      </div>
      <div class="row contact-wrap">
        <div class="status alert alert-success" style="display: none"></div>
        <div class="col-md-6 col-md-offset-3">

          <p class="text-danger"><?php echo  $message ?></p>

          <!--<form action="" method="post" role="form" class="contactForm">
            <div class="form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center">
            <input type="submit" name="submit" id="btn-primary" class="btn btn-primary " required="" value="Submit Message">

            </div>
          </form>-->


          <form action="" method="post" role="form" class="contactForm">
            <div class="form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" />
             
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" />
              
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"  />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" placeholder="Message"></textarea>
              
            </div>
            <div class="text-center">
            <input type="submit" name="submit" id="btn-primary" class="btn btn-primary " required="" value="Submit Message">

            </div>
          </form>

        </div>
      </div>
     
    </div>
    
  </section>
  

  <footer>
      
          <div class="footer">
          <div class="container">
            <div class="col-md-3 cha1">
                <p  class="touch1" >Access College</p>
            <p id="his" class="his">Access College began September, 2007 with 25 students in JSS and 10 teachers. Unlike other schools that will want to fill all the classes at once, Access College wanted to have its own groomed students from the scratch and nurture them to the apex class i.e. SS3. This is exactly what the school did till 2013 when the school produced and graduated its pioneer students.</p>
            </div>

            <div class="col-md-3 ">
                <p class="touch1" id="leav">Contact Info</p>
                <i class=" bin fa fa-map-marker" aria-hidden="true"></i>
                <h6 class="our">Our address</h6>
                <p class="touch"> 50, Idiroko Rd, Joju Bye Pass Ota. Ogun state</p>
                <i class=" bin fa fa-phone" aria-hidden="true"></i>
                <h6 class="our">Telephone</h6>  
                <p class="touch">08033482964, 08075907695,<br>08023543782</p>
                <i class=" bin fa fa-envelope" aria-hidden="true"></i>
                <h6 class="our">Email</h6>
                <p class="touch">accesscollege.ng@gmail.com</p>
            </div>

            <div class="col-md-4">
              
                <p class="touch1" id="leav1" style="margin-left: 14px;">Testimonials</p>
                
                <blockquote id="sif">
                  &ldquo; We are impressed by the standard of education and other facilities provided by Access College, Ota...&rdquo;
                   <small id="source">
                   
                   <cite title="Source Title"><a href="testimonials.php">Mr and Mrs Nwokorie</a></cite>
                   </small>
                </blockquote>

                 <blockquote id="sif">
                  &ldquo; My name is Mr. ODEBIYI O. Clement, the chairman of the PTA forum. I can attest that Access College has a good standard of education . It's the best among... &rdquo;
                   <small id="source">
                   
                   <cite title="Source Title"><a href="testimonials4.php">Mr Odebiyi  O. Clement</a></cite>
                   </small>
                </blockquote>

                
            </div>

           <div class="col-md-2 " id="touch1">
                 <p class="touch1" id="leav2">Get In Touch</p>
                 <ul class="social-network">
                  <li><a href="https://web.facebook.com/accesscollege.ng/" class="fb tool-tip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#" class="twitter tool-tip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#" class="gplus tool-tip" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
                  <li><a href="https://www.instagram.com/accesscollegeota" class="instagram tool-tip" title="instagram"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="#" class="ytube tool-tip" title="You Tube"><i class="fa fa-youtube-play"></i></a></li>
                </ul>
            </div>
            

            <div class="pull-right">
              <a href="#home" class="scrollup"><i class="fa fa-angle-up fa-3x"></i></a>
            </div>

          </div>
      </div>

          <div class="copy-right">
             <div class="container">
                 <div class="row">
                  <div class="col-md-6">
                    <p class="copy">@ <script>document.write(new Date().getFullYear());</script>  Access College , Ota</p>
                  </div>

                   <div class="col-md-6" id="touch2">
                    <p class="right">designed by Sanucom</p>
                  </div>
                    
                 </div>
                
             </div>
          </div>
  </footer>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery-2.1.1.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  <!-- dropdown nav -->
    <script>
        $(document).ready(function () {
            $(".dropdown").hover(
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
    <!-- //dropdown nav -->
  <script src="js/jquery.prettyPhoto.js"></script>
  <script src="js/jquery.isotope.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/functions.js"></script>
  <!--====== Javascripts & Jquery ======-->
  
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.countdown.js"></script>
  <script src="js/masonry.pkgd.min.js"></script>
  <script src="js/magnific-popup.min.js"></script>
  <script src="js/main.js"></script>

</body>

</html>
