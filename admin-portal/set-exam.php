<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Dashbord</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="vendor/css/admin.css">
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
                            <a id="admin" href="index.php"><i class="fa fa-graduation-cap"></i> School Information</a>
                        </li>
                       <!-- <li>
                            <a id="admin" href="#"><i class="fa fa-user fa-fw"></i>Users<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a id="admin" href="admin-create.php"> Create User</a>
                                </li>
                                <li>
                                    <a id="admin" href="viewall.php"> View All Users</a>
                                </li>
                                <li>
                                    <a id="admin" href="resetpass.php"> Reset Password</a>
                                </li>
                            </ul>
                            
                        </li>-->
                        
                       
                       <li>
                            <a id="admin" href="#"><i class="fa fa-book fa-fw"></i>Academics<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                 <li>
                                    <a id="admin" href="register-students.php">Register Students Details</a>
                                </li>
                                <!--<li>
                                    <a id="admin" href="#">View Students Details</a>
                                </li>-->
                                 <li>
                                    <a id="admin" href="set-exam.php">Set Exam</a>
                                </li>
                                <!--<li>
                                    <a id="admin" href="addclass.php">Add Class</a>
                                </li>
                                <li>
                                    <a id="admin" href="addsubject.php">Add Subject</a>
                                </li>-->
                               
                             
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a id="admin" href="#"><i class="fa fa-user fa-fw"></i>Staff<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                 <li>
                                    <a id="admin" href="addstaff.php">Upload Staff Details</a>
                                </li>

                                <li>
                                    <a id="admin" href="viewstaff.php">View Staff Details</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                       
                        <li>
                            <a id="admin" href="#"><i class="fa fa-sign-out fa-fw"></i>Logout</a>

                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper" style="background-color: #f0f0f0;">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Welcome sam!</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                
               
               
                
            </div>
            <!-- /.row -->
            <div class="row">
                
                <div class="col-md-6 col-md-offset-3">
                    <p style="color: #555; font-size: 17px; text-align: center;padding-top:10px;padding-bottom: 15px">Enter Exam Details</p>
                   <form action="" method="post" role="form" class="form-horizontal contactForm">
                       
                        <div class="form-group">
                          <label for="nameField" class="col-xs-3 meet">Class</label> 
                           <div class="col-xs-9"> 
                              <input type="text" class="form-control" name="class" id="class"  data-rule="email" data-msg="Please enter a valid class" />
                              <div class="validation"></div>
                           </div>
                        </div> 
                         
                        
                        <!--<div class="form-group">
                          <label for="nameField" class="col-xs-3 meet">Subject</label> 
                           <div class="col-xs-9"> 
                              <input type="text" class="form-control" name="subject" id="subject"  data-rule="email" data-msg="Please enter a valid email" />
                              <div class="validation"></div>
                           </div>
                        </div>-->

                        <div class="form-group">
                          <label for="nameField" class="col-xs-3 meet">Exam Name</label> 
                          <div class="col-xs-9">
                              <input type="text" class="form-control" name="exam_name" id="exam_name"  data-rule="email" data-msg="Please enter a valid email" />
                             <div class="validation"></div>
                          </div> 
                          
                        </div>

                         

                        <div class="form-group">
                          <label for="nameField" class="col-xs-3 meet">Term</label> 
                          <div class="col-xs-9">
                              <input type="text" class="form-control" name="term" id="term"  data-rule="email" data-msg="Please enter a valid email" />
                             <div class="validation"></div>
                          </div> 
                          
                        </div>

                         <div class="form-group">
                          <label for="nameField" class="col-xs-3 meet">Date</label> 
                          <div class="col-xs-9">
                              <input type="text" class="form-control" name="date" id="date"  data-rule="email" data-msg="Please enter a valid email" />
                             <div class="validation"></div>
                          </div> 
                          
                        </div>

                        

                         <div class="form-group">
                          <label for="nameField" class="col-xs-3 meet">Session</label> 
                          <div class="col-xs-9">
                              <input type="text" class="form-control" name="session" id="session"  data-rule="email" data-msg="Please enter a valid email" />
                             <div class="validation"></div>
                          </div> 
                          
                        </div>

                        
                        <div class="form-group">
                          <label for="" class="col-xs-3">Subjects</label>
                          <div class="col-xs-9">
                                
                                  
                                
                            <table class="jss1 table timetable_sub1  table-responsive">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Subject</th>
                                        <th>Allocate</th>
                                        
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>English</td>
                                        <td><input type="checkbox"></td>  
                                        
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Mathematics</td>
                                        <td><input type="checkbox"></td>  
                                        
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>Physics</td>
                                        <td><input type="checkbox"></td>  
                                        
                                    </tr>


                                    <tr>
                                        <td>4</td>
                                        <td>Biology</td>
                                        <td><input type="checkbox"></td>  
                                        
                                    </tr>
                                </tbody> 
                           </table>
                                 
                          
                        </div>


                       
                          <input type="submit" class="text-center btn btn-primary" value="Save Exam Details" name="parent" style="margin-bottom: 15px;margin-top: 30px; margin-left: 80px;">
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
