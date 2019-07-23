<?php
 session_start();
 include 'database.php';


 $message = '';

  if(isset($_POST['admin_login'])){
     
     $email = mysqli_real_escape_string($conn,$_POST['email']);
     $pass = mysqli_real_escape_string($conn,$_POST['password']);
     
     $sql = " SELECT admin_email,admin_password FROM admin_access WHERE admin_email = '$email'";
     $result = mysqli_query($conn,$sql);
     $check = mysqli_num_rows($result);
     $row = mysqli_fetch_assoc($result);

     

        if(empty($email)){

            $message .= '<p class="enable">Enter Your email!</p>';
         }

         else if($email != $row['admin_email']){

            $message .= '<p class="enable">Wrong email!</p>';
         }

         else{

             if(!filter_var($email,FILTER_VALIDATE_EMAIL)){

               $message .= '<p class="enable">Invalid email!</p>'; 
             }
         }


         if(empty($pass)){
            
            $message .= '<p class="enable">Enter your password!</p>';
         }
         else{

            if($pass != $row['admin_password']){
              
                $message .= '<p class="enable">Wrong password!</p>';
            }
         }

         if(!empty($_POST['remember_me'])){
               
               setcookie("email",$email,time()+(10*365*24*60*60));
               setcookie("password",$pass,time()+(10*365*24*60*60));
            }
            else{

               if(isset($_COOKIE['email'])){

                   setcookie("email","");
               }
               if(isset($_COOKIE['password'])){

                  setcookie("password","");
               }
            } 

        if(password_verify($pass, $row['admin_password'])){
             
              $sam = $row['admin_password'];
              $sql = "SELECT * FROM admin_access WHERE admin_password ='$sam'";
              $result = mysqli_query($conn,$sql);
              $rowme = mysqli_fetch_assoc($result);
              $_SESSION['name'] = $rowme['admin_name'];
              
              header('Location:welcome.php');
        }
        
     }
?>


<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>

<head>
	<title>Access college | Admin Portal Account</title>
	<!-- Meta tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="OP Registration Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements"
	/>
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta tags -->
	<!-- Stylesheet -->
	<link rel="stylesheet" href="css/jquery-ui.css" />
	 <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<!-- //Stylesheet -->
	<!--fonts-->
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600" rel="stylesheet">
	<!--//fonts-->
</head>

<body>
	<!--background-->
	<h1 class="editr"><a href="../index.php">Home</a> | Welcome to Admin portal Account </h1>

	<div class="register-form-w3layouts">
		<!-- Form starts here -->
		 
		<form action="" method="post">
			<img src="images/newas.jpg" alt="">
			<h3 class="sub-heading-agileits">Aiming for the best</h3>
			<p class="aaa">Login to access your account</p>
			<p class="enable"><?php echo $message; ?></p>
			<br>
			<div style="margin-bottom: 25px" class="input-group">
                 <span class="input-group-addon">
                   <i class="glyphicon glyphicon-user"></i>
                 </span>
                  <input id="login-username" type="text" class="form-control" name="email" value="<?php if(isset($_COOKIE['email'])) echo $_COOKIE['email'] ?>" placeholder="Email" >
            </div>

            <div style="margin-bottom: 25px" class="input-group">
                <span class="input-group-addon">
                   <i class="glyphicon glyphicon-lock"></i>
                </span>
                <input id="login-password" type="password" class="form-control" name="password" value="<?php if(isset($_COOKIE['password'])) echo $_COOKIE['password'] ?>" placeholder="password">
            </div>

			
			<div class="input-group">
                <div class="checkbox">
                    <p id="remberme">
                      <input style="position: relative;top: 2px;" id="login-remember"  type="checkbox" name="remember_me" <?php if(isset($_COOKIE['email'])) {?>checked <?php }   ?> >&nbsp; Remember me
                    </p>
                                            
                    <div id="fpassword" class="fpassword">
                      <a href="admin_fpassword.php">Forgot password?</a>
                    </div>
                </div>
            </div>
			
			<div class="clear"></div>
			
			
			
			
			
			<input type="submit" name="admin_login" value="Login">
			<input type="reset" value="Clear Form">
			<div class="clear"></div>
		</form>
		<!--// Form starts here -->
	</div>
	<!--copyright-->
	<div class="copyright">
		<p>&copy; <script>document.write(new Date().getFullYear());</script> | Design by Sanucom
			
		</p>
		
	</div>
	<!--//copyright-->
	<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!-- Calendar Js -->
	<script src="js/jquery-ui.js"></script>
	<script>
		$(function () {
			$("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
		});
	</script>
	<!-- //Calendar Js -->

</body>

</html>