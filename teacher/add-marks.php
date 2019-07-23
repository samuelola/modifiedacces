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

                        <!--<li>
                            <a id="admin" href="teacher-profile.php"><i class="fa fa-graduation-cap"></i> Profile</a>
                        </li>
                        <li>
                            <a id="admin" href="handle-class.php"><i class="fa fa-book fa-fw"></i>Handled Class</a>
                        </li>-->

                        <!--<li>
                            <a id="admin" href="add-student.php"><i class="fa fa-book fa-fw"></i>Add Students</a>
                        </li>-->

                         

                          <li>
                            <a id="admin" href="#"><i class="fa fa-book fa-fw"></i>View Students Details<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                 <li>
                                    <a id="admin" href="view-stud-js-one.php">Jss 1</a>
                                </li>
                                <li>
                                    <a id="admin" href="view-stud-js-two.php">Jss 2</a>
                                </li>
                                 <li>
                                    <a id="admin" href="view-stud-js-three.php">Jss 3</a>
                                </li>
                                <li>
                                    <a id="admin" href="view-stud-ss-one.php">SS 1</a>
                                </li>
                                <li>
                                    <a id="admin" href="view-stud-ss-two.php">SS 2</a>
                                </li>
                               
                               <li>
                                    <a id="admin" href="view-stud-ss-three.php">SS 3</a>
                                </li>
                               
                             
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <!--<li>
                            <a id="admin" href="set-exam.php"><i class="fa fa-book fa-fw"></i>Set Exam</a>
                        </li>-->
                        
                        
                        

                        

                          <li>
                            <a id="admin" href="#"><i class="fa fa-book fa-fw"></i>View exam Details<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                 <li>
                                    <a id="admin" href="view-exam-js-one.php">Jss 1</a>
                                </li>
                                <li>
                                    <a id="admin" href="view-exam-js-two.php">Jss 2</a>
                                </li>
                                 <li>
                                    <a id="admin" href="view-exam-js-three.php">Jss 3</a>
                                </li>
                                <li>
                                    <a id="admin" href="view-exam-ss-one.php">SS 1</a>
                                </li>
                                <li>
                                    <a id="admin" href="view-exam-ss-two.php">SS 2</a>
                                </li>
                               
                               <li>
                                    <a id="admin" href="view-exam-ss-three.php">SS 3</a>
                                </li>
                               
                             
                            </ul>
                            <!-- /.nav-second-level -->
                        </li> 

                       
                        <li>
                            <a id="admin" href="add-marks.php"><i class="fa fa-eye fa-fw"></i>Add Marks</a>
                        </li>

                         <li>
                            <a id="admin" href="#"><i class="fa fa-book fa-fw"></i>View Marks Details<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                 <li>
                                    <a id="admin" href="jss-one.php">Jss 1</a>
                                </li>
                                <li>
                                    <a id="admin" href="jss-two.php">Jss 2</a>
                                </li>
                                 <li>
                                    <a id="admin" href="jss-three.php">Jss 3</a>
                                </li>
                                <li>
                                    <a id="admin" href="ss-one.php">SS 1</a>
                                </li>
                                <li>
                                    <a id="admin" href="ss-two.php">SS 2</a>
                                </li>
                               
                               <li>
                                    <a id="admin" href="ss-three.php">SS 3</a>
                                </li>
                               
                             
                            </ul>
                            <!-- /.nav-second-level -->
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

        <div id="page-wrapper" style="background-color: #f0f0f0;">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Welcome sam!</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->


            <div class="row">
                <div class="col-md-12">
                    <div class="box">
                        <form action="" method="post" role="form" class="form-horizontal contactForm" style="margin-top: 20px;">
                           <div class="col-md-6">
                               <div class="form-group">
                                  <label for="nameField" class="col-xs-3 meet">Enter Adm.No</label> 
                                   <div class="col-xs-6"> 
                                      <input type="email" class="form-control" name="email" id="email"  data-rule="email" data-msg="Please enter a valid email" />
                                      <div class="validation"></div>
                                   </div>
                               </div>

                                <div class="form-group">
                                  <label for="nameField" class="col-xs-3 meet">Class</label> 
                                   <div class="col-xs-6"> 
                                      <input type="email" class="form-control" name="email" id="email"  data-rule="email" data-msg="Please enter a valid email" />
                                      <div class="validation"></div>
                                   </div>
                                </div>


                                <div class="form-group">
                                        <label for="nameField" class="col-xs-3 meet">Select Term</label> 
                                        <div class="col-xs-6">
                                            <select name="" id="subject" class="form-control">
                                                <option value="">--Select--</option>
                                                <option value="">1</option>
                                                <option value="">2</option>
                                                <option value="">3</option>
                                                <option value="">4</option>
                                                <option value="">5</option>
                                            </select>
                                      
                                        </div>
                                        
                                      <div class="validation"></div>
                                </div>


                                  
                           </div>
                           <div class="col-md-6">
                                       <table class="jss1 table timetable_sub table-responsive ">
                                <thead>
                                    <tr>
                                        
                                        <th>Subject</th>
                                        <th>Marks</th>
                                        
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        
                                        <td>English</td>
                                        <td><input class="marks" type="text" size="3"></td>  
                                        
                                    </tr>

                                    <tr>
                                        
                                        <td>Mathematics</td>
                                        <td><input class="marks" type="text" size="3"></td>  
                                        
                                    </tr>

                                    <tr>
                                        
                                        <td>Physics</td>
                                        <td><input class="marks" type="text" size="3"></td>  
                                        
                                    </tr>


                                    <tr>
                                        
                                        <td>Biology</td>
                                        <td><input class="marks" type="text" size="3"></td>  
                                        
                                    </tr>
                                    <tr>
                                        
                                        <td>Economics</td>
                                        <td><input class="marks" type="text" size="3"></td>  
                                        
                                    </tr>
                                </tbody> 
                           </table>
                           </div>
                           
                           <div class="row">
                               <div class="col-md-12">
                                    <input type="submit" class="btn btn-primary" value="save" style="position: relative; left: 400px; margin-top: 28px;">
                               </div>
                           </div>
                        </form>

                    </div>
                </div>
            </div>
            
            <!-- /.row -->
    
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
