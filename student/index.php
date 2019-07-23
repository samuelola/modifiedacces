<?php
session_start();
if(isset($_SESSION['name'])){

}
else{

    header('Location:student-login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Student Dashbord</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="vendor/css/student.css">
    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="vendor/morrisjs/morris.css" rel="stylesheet">
    
    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><img src="../images/newaccess2.png" alt="image">
                    <p class="mars">access college</p>
                </a>

            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="student-logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <!-- <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                           
                        </li>-->
                        <li>
                            <a id="admin" href="#"><i class="fa fa-dashboard fa-fw "></i> Dashboard</a>
                        </li>

                        

                        <li>
                            <a id="admin" href="view-your-exam.php"><i class="fa fa-book fa-fw"></i>View Exam Detais</a>
                        </li>

                         <li>
                            <a id="admin" href="view-stud-mark.php"><i class="fa fa-book fa-fw"></i>View Marks</a>
                        </li>
                       
                        <li>
                            <a id="admin" href="student-logout.php"><i class="fa fa-sign-out fa-fw"></i>Logout</a>

                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Welcome <?php echo $_SESSION['name']; ?></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
            <!-- /.row -->
            <div class="row">
                
                 <div class="col-md-6 col-md-offset-3">
                    <p class="create"> Your Details</p>
                    <div class="image">
                        <img src="vendor/images/book-data-education-267495.jpg" alt="">
                    </div>
                               
                </div>
                <!-- /.col-lg-8 -->
                
                <div class="row">
                  <div class="col-md-6 col-md-offset-3">
                    <p><br><br></p>
                    <table class="table  table-striped table-condensed table-responsive">
                        <thead>
                           <tr>
                               <th>Student</th>
                               <th>Details</th>
                           </tr>
                           
                        </thead>
                        <tbody>
                           <tr>
                             <td>Surname</td>
                             <td>Roland</td>
                           </tr>

                           <tr>
                             <td>Firstname</td>
                             <td>Jude</td>
                           </tr>

                            <tr>
                             <td>Adm No</td>
                             <td>ABC22001</td>
                           </tr>

                            <tr>
                             <td>DOB</td>
                             <td>1/1/2019</td>
                           </tr>

                            <tr>
                             <td>Gender</td>
                             <td>Male</td>
                           </tr>

                            <tr>
                             <td>Current Class</td>
                             <td>class 1</td>
                           </tr>

                            <tr>
                             <td>Address</td>
                             <td>No 15 johnson street</td>
                           </tr>
                           
                           <tr>
                             <td>State</td>
                             <td>Lagos</td>
                           </tr>

                           <tr>
                             <td>Country</td>
                             <td>Nigeria</td>
                           </tr>


                           <tr>
                             <td>Parent Name</td>
                             <td>Mr Roland</td>
                           </tr>

                           <tr>
                             <td>Parent Address</td>
                             <td>No 15 johnson street</td>
                           </tr>

                            <tr>
                             <td>Parent Phone No</td>
                             <td>080-XXX-XXX</td>
                           </tr>

                           <tr>
                             <td>Parent Occupation</td>
                             <td>Teacher</td>
                           </tr>
                            <tr>
                             <td>Parent Email</td>
                             <td>example @ gmail.com</td>
                           </tr>
                        </tbody>
                    </table>

                    
                  </div>
                </div>
                
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

     <link rel="stylesheet" href="vendor/css/student.css">

    <!-- Metis Menu Plugin JavaScript -->
    <script src="vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="vendor/raphael/raphael.min.js"></script>
    <script src="vendor/morrisjs/morris.min.js"></script>
    <script src="data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
