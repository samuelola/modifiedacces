<?php
  if(isset($_POST['student'])){
      $username = $_GET['reg'];
      $password = $_GET['password'];

     header("Location:student/index.php"); 
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="description" content="Access College in pursuit of its academic excellence has become an household name and has been rated as one of the best schools in Ogun state. The school had won several awards in inter-schools competition, debates, spelling Bees, quiz and lots more.">
  <title>Student's Portal | Access College</title>

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
  <link href="css/wat.css" rel='stylesheet' type='text/css' />
  <link rel="stylesheet" href="css/owl.carousel.css"/>
  <!-- =======================================================
    Theme Name: Company
    Theme URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>

  
<div class="portal">
    <div class="container">
      
      <p><br><br></p>
      <div class="col-xs-11 col-md-7 wow " data-wow-duration="1000ms" data-wow-delay="300ms" id="ad">
        
        <img src="images/IMG-20181128-WA0006.jpg" class="img-responsive" />
        <p>
        </p>
      </div>

      <div class="col-xs-11 col-md-5 wow " data-wow-duration="1000ms" data-wow-delay="600ms" id="ad1">
            <!--background-->
              
               <div class="wow bounceIn"  style="margin-top:0px;">
                    <div class="panel panel-info">
                        
                            
                        <div style="padding-top:30px" class="panel-body">

                           <a class="brandd" href="index.php"><img src="images/newaccess2.png" alt="image"></a>
                            <p class="aim">Aiming for the best</p>
                           <div class="panel-titlle">Welcome to Student Portal Account</div>
                           <div class="panel-titlee">login to access your account</div>
                         
                            <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            <form id="loginform" class="form-horizontal" action="#" method="post">
                                <div style="margin-bottom: 25px" class="input-group">
                                    <span class="input-group-addon">
                                        <i class="glyphicon glyphicon-user"></i>
                                    </span>
                                    <input id="login-username" type="text" class="form-control" name="reg" value="" placeholder="Admission Number" required="">
                                </div>

                                <div style="margin-bottom: 25px" class="input-group">
                                    <span class="input-group-addon">
                                        <i class="glyphicon glyphicon-lock"></i>
                                    </span>
                                    <input id="login-password" type="password" class="form-control" name="password" placeholder="password" required="">
                                </div>
                                <div class="input-group">
                                    <div class="checkbox">
                                        <p style="margin-left: 22px;font-size: 0.85em;padding-left: -10px;" id="remberme">
                                          <input style="position: relative;top: 2px;" id="login-remember"  type="checkbox" name="remember" value="1">&nbsp; Remember me
                                        </p>
                                            
                                        <div id="fpassword" class="fpassword">
                                          <a href="#">Forgot password?</a>
                                      </div>
                                    </div>
                                </div>
                                <br>
                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->
                                    <div class="col-sm-12 controls">
                                        
                                        
                                        <input type="submit" class="btn btn-default" value="Student Sign In" id="btn-fbloginn" name="student">
                                    </div>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
  
  
  <!-- //Calendar Js -->
      </div>


    </div>
  </div>


 
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

</body>

</html>
