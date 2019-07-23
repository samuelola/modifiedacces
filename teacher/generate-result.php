<?php
 if(isset($_GET['sel'])){
      $sel1 = $_GET['sel1'];
      $sel2 = $_GET['sel2'];
      $sel3 = $_GET['sel3'];
     

     header("Location:view-generated-results.php"); 
     
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

    <title>Teacher Dashbord</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="vendor/css/teacher.css">
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
                    <p class="noon">access college</p>
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
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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
                            <a id="admin" href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>

                        <li>
                            <a id="admin" href="teacher-profile.php"><i class="fa fa-graduation-cap"></i> Profile</a>
                        </li>
                        <li>
                            <a id="admin" href="handle-class.php"><i class="fa fa-book fa-fw"></i>Handled Class</a>
                        </li>

                        <li>
                            <a id="admin" href="add-student.php"><i class="fa fa-book fa-fw"></i>Add Students</a>
                        </li>

                          <li>
                            <a id="admin" href="view-stud.php"><i class="fa fa-book fa-fw"></i>View Students</a>
                        </li>

                        <li>
                            <a id="admin" href="set-exam.php"><i class="fa fa-book fa-fw"></i>Set Exam</a>
                        </li>
                        
                        
                        <li>
                            <a id="admin" href="view-examm.php"><i class="fa fa-eye fa-fw"></i>View Exam</a>
                        </li>
                       
                       <li>
                            <a id="admin" href="add-marks.php"><i class="fa fa-eye fa-fw"></i>Add Marks</a>
                        </li>
                         <li>
                            <a id="admin" href="view-marks.php"><i class="fa fa-eye fa-fw"></i>View Marks</a>
                        </li>

                        <li>
                            <a id="admin" href="results.php"><i class="fa fa-eye fa-fw"></i>Enter Results per student</a>
                        </li>

                       
                       
                       
                       
                       
                        <li>
                            <a id="admin" href="#"><i class="fa fa-sign-out fa-fw"></i>Logout</a>

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
                    <h1 class="page-header">Welcome sam!</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
                 <div class="row">
                
                
                <!-- /.col-lg-8 -->
                
               <div class="row">
                
                <div class="col-md-6 col-md-offset-3">
                    <p class="create">Generate Results</p>
                   <form action="" method="get" role="form" class="form-horizontal contactForm">
                       
                        <div class="form-group">
                            <label for="nameField" class="col-xs-3 meet"> Class</label> 
                            <div class="col-xs-9">
                                <select name="sel1" id="subject" class="form-control">
                                    <option value="">--Select--</option>
                                    <option value="">Class1</option>
                                    <option value="">Class2</option>
                                    <option value="">Class3</option>
                                    <option value="">Class4</option>
                                    <option value="">Class5</option>
                                </select>
                          
                            </div>
                            
                          <div class="validation"></div>
                        </div>

                         
                        
                        <div class="form-group">
                            <label for="nameField" class="col-xs-3 meet">Section</label>
                            <div class="col-xs-9">
                                <select name="sel2" id="subject" class="form-control">
                                    <option value="">--Select--</option>
                                    <option value="">A</option>
                                    <option value="">B</option>
                                    <option value="">C</option> 
                                </select>
                            </div>
                            
                          
                          <div class="validation"></div>
                        </div>
                        


                        <div class="form-group">
                            <label for="nameField" class="col-xs-3 meet">Term</label>
                            <div class="col-xs-9">
                                <select name="sel3" id="subject" class="form-control">
                                    <option value="">--Select--</option>
                                    <option value="">2018/2019</option>
                                    <option value="">2017/2018</option>
                                    <option value="">2016/2017</option>
                                </select>
                            </div>
                            
                          
                          <div class="validation"></div>
                        </div>


                         <br>
                          <input type="submit" class="text-center btn btn-primary" value="Submit" name="sel" style="margin-bottom: 15px;">
                      </form>
                               
                </div>
                <!-- /.col-lg-8 -->
                
            
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
