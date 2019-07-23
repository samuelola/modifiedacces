<?php
 session_start();
 include 'database.php';

 if(isset($_POST['forgotpass'])){
     
     $email = $_POST['email'];
     $sql = "SELECT * FROM admin_access WHERE admin_email = '$email'";
     $result = mysqli_query($conn,$sql);
     $count = mysqli_num_rows($result);

     if($count > 0){
        
         $str = '0123456789asdnhrfuewvxzoptyhjiklqb';
         $str = str_shuffle($str);
         $str = substr($str,0,10);
         $url = "resetpassword.php?token=$str&email=$email";
         $_SESSION['token'] = $str;
         $_SESSION['email'] = $email;

         $update_token = "UPDATE admin_access SET admin_token = '$str' WHERE admin_email = '$email'";
         $result = mysqli_query($conn,$update_token);

         header('Location:link.php?link=1');
     }
        
  }

  // Note this link would have been sent to the user email , but testing purpose

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin's Portal | Access College</title>

  <!-- Bootstrap -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="csss/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="csss/font-awesome.min.css">
  <link rel="stylesheet" href="csss/animate.css">
  <link href="csss/prettyPhoto.css" rel="stylesheet">
  <link rel="stylesheet" href="css/responsive.css">
  <link href="csss/style.css" rel="stylesheet" />
  <link href="csss/use.css" rel="stylesheet" />
  <link rel="stylesheet" href="csss/staff.css">
  <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="csss/easy-responsive-tabs.css">
  <link rel="stylesheet" href="csss/themify-icons.css"/>
  <link rel="stylesheet" href="csss/magnific-popup.css"/>
  <link rel="stylesheet" href="csss/access.css"/>
  <link href="csss/wat.css" rel='stylesheet' type='text/css' />
  <link rel="stylesheet" href="csss/owl.carousel.css"/>
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
        
        <img src="imagess/academics/IMG-20181128-WA0006.jpg" class="img-responsive" />
        <p>
        </p>
      </div>

     <div class="col-xs-11 col-md-5 wow " data-wow-duration="1000ms" data-wow-delay="600ms" id="ad1">
            <!--background-->
              
               <div class="wow bounceIn" style="margin-top:0px;">
                    <div class="panel panel-info">
                        
                            
                        <div style="padding-top:30px" class="panel-body">

                           <a class="brandd" href="index.php"><img src="imagess/newaccess2.png" alt="image"></a>
                            <p class="aim">Aiming for the best</p>
                            
                            <div class="panel-title">Welcome to Admin Portal Account</div>
                           <div class="panel-titlee">login to access your account</div>

                            
                             <form id="loginform" class="form-horizontal" action="" method="post">
                                <div style="margin-bottom: 25px" class="input-group">
                                    <span class="input-group-addon">
                                        <i class="glyphicon glyphicon-user"></i>
                                        
                                    </span>
                                    <input id="login-username" type="text" class="form-control" name="email"  placeholder="Email" >
                                </div>

                                
                       
                                 <br>
                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->
                                    <div class="col-sm-12 controls">
                                        <input type="submit" class="btn btn-success" id="btn-login" value="Request Password" name="forgotpass">
                                        
                                        
                                    </div>

                                   <div style="margin-top:-25px;margin-bottom:50px"  id="fpassword" class="fpassword">
                                        <a class="btn btn-success" style="color: #fff!important" href="admin-login.php">Admin SignIp</a>
                                        
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
  <script src="jss/jquery-2.1.1.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="jss/bootstrap.min.js"></script>
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
  <script src="jss/jquery.prettyPhoto.js"></script>
  <script src="jss/jquery.isotope.min.js"></script>
  <script src="jss/wow.min.js"></script>
  <script src="jss/functions.js"></script>

</body>

</html>
