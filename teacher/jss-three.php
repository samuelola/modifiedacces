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
                            <a id="admin" href="index.php"><!--<i class="fa fa-dashboard fa-fw"></i>--> Dashboard</a>
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
                            <a id="admin" href="#">Students Details<span class="fa arrow"></span></a>
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
                            <a id="admin" href="#">Exam Details<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">

                                <li>
                                    <a id="admin" href="view-exam-js-one.php">Jss 1 <span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                         <li>
                                            <a id="admin" href="view-exam-js-one.php">Mathematics</a>
                                        </li>
                                        <li>
                                            <a id="admin" href="view-exam-js-one.php">English</a>
                                        </li>
                                         <li>
                                            <a id="admin" href="view-exam-js-one.php">Physics</a>
                                        </li>
                                        <li>
                                            <a id="admin" href="view-exam-js-one.php">Literature in English</a>
                                        </li>
                                        <li>
                                            <a id="admin" href="view-exam-js-one.php">Government</a>
                                        </li>
                                       
                                       <li>
                                            <a id="admin" href="view-exam-js-one.php">Biology</a>
                                        </li>
                                       
                                     
                                    </ul>
                                </li>

                                <li>
                                    <a id="admin" href="view-exam-js-two.php">Jss 2 <span class="fa arrow"></span></a>

                                    <ul class="nav nav-second-level">
                                         <li>
                                            <a id="admin" href="view-exam-js-two.php">Mathematics</a>
                                        </li>
                                        <li>
                                            <a id="admin" href="view-exam-js-two.php">English</a>
                                        </li>
                                         <li>
                                            <a id="admin" href="view-exam-js-two.php">Physics</a>
                                        </li>
                                        <li>
                                            <a id="admin" href="view-exam-js-two.php">Literature in English</a>
                                        </li>
                                        <li>
                                            <a id="admin" href="view-exam-js-two.php">Government</a>
                                        </li>
                                       
                                       <li>
                                            <a id="admin" href="view-exam-js-two.php">Biology</a>
                                        </li>
                                       
                                     
                                    </ul>
                                </li>
             <!-------------------------------------------------->                   
                                 <li>
                                    <a id="admin" href="view-exam-js-three.php">Jss 3 <span class="fa arrow"></span></a>

                                    <ul class="nav nav-second-level">
                                         <li>
                                            <a id="admin" href="view-exam-js-three.php">Mathematics</a>
                                        </li>
                                        <li>
                                            <a id="admin" href="view-exam-js-three.php">English</a>
                                        </li>
                                         <li>
                                            <a id="admin" href="view-exam-js-three.php">Physics</a>
                                        </li>
                                        <li>
                                            <a id="admin" href="view-exam-js-three.php">Literature in English</a>
                                        </li>
                                        <li>
                                            <a id="admin" href="view-exam-js-three.php">Government</a>
                                        </li>
                                       
                                       <li>
                                            <a id="admin" href="view-exam-js-three.php">Biology</a>
                                        </li>
                                       
                                     
                                    </ul>
                                </li>

              <!-------------------------------------------------->

                                <li>
                                    <a id="admin" href="view-exam-ss-one.php">SS 1 <span class="fa arrow"></span></a>

                                    <ul class="nav nav-second-level">
                                         <li>
                                            <a id="admin" href="view-exam-ss-one.php">Mathematics</a>
                                        </li>
                                        <li>
                                            <a id="admin" href="view-exam-ss-one.php">English</a>
                                        </li>
                                         <li>
                                            <a id="admin" href="view-exam-ss-one.php">Physics</a>
                                        </li>
                                        <li>
                                            <a id="admin" href="view-exam-ss-one.php">Literature in English</a>
                                        </li>
                                        <li>
                                            <a id="admin" href="view-exam-ss-one.php">Government</a>
                                        </li>
                                       
                                       <li>
                                            <a id="admin" href="view-exam-ss-one.php">Biology</a>
                                        </li>
                                       
                                     
                                    </ul>
                                </li>

                  <!-------------------------------------------------->               
                                <li>
                                    <a id="admin" href="view-exam-ss-two.php">SS 2 <span class="fa arrow"></span></a>

                                    <ul class="nav nav-second-level">
                                         <li>
                                            <a id="admin" href="view-exam-ss-two.php">Mathematics</a>
                                        </li>
                                        <li>
                                            <a id="admin" href="view-exam-ss-two.php">English</a>
                                        </li>
                                         <li>
                                            <a id="admin" href="view-exam-ss-two.php">Physics</a>
                                        </li>
                                        <li>
                                            <a id="admin" href="view-exam-ss-two.php">Literature in English</a>
                                        </li>
                                        <li>
                                            <a id="admin" href="view-exam-ss-two.php">Government</a>
                                        </li>
                                       
                                       <li>
                                            <a id="admin" href="view-exam-ss-two.php">Biology</a>
                                        </li>
                                       
                                     
                                    </ul>
                                </li>


                  <!-------------------------------------------------->
                               
                               <li>
                                    <a id="admin" href="view-exam-ss-three.php">SS 3 <span class="fa arrow"></span></a>

                                    <ul class="nav nav-second-level">
                                         <li>
                                            <a id="admin" href="view-exam-ss-two.php">Mathematics</a>
                                        </li>
                                        <li>
                                            <a id="admin" href="view-exam-ss-two.php">English</a>
                                        </li>
                                         <li>
                                            <a id="admin" href="view-exam-ss-two.php">Physics</a>
                                        </li>
                                        <li>
                                            <a id="admin" href="view-exam-ss-two.php">Literature in English</a>
                                        </li>
                                        <li>
                                            <a id="admin" href="view-exam-ss-two.php">Government</a>
                                        </li>
                                       
                                       <li>
                                            <a id="admin" href="view-exam-ss-two.php">Biology</a>
                                        </li>
                                       
                                     
                                    </ul>
                                </li>
                               
                        <!-------------------------------------------------->
                            </ul>
                            <!-- /.nav-second-level -->
                        </li> 
  <!-------------------------------------------------->
                       
                        <li>
                            <a id="admin" href="add-marks.php">Record Exam Marks <span class="fa arrow"></span></a>

                            <ul class="nav nav-second-level">
                                 <li>
                                    <a id="admin" href="record-exam-jss-one.php">Jss 1</a>
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
                        </li>

                <!-------------------------------------------------->

                         <li>
                            <a id="admin" href="add-marks.php">Record Test Marks <span class="fa arrow"></span></a>

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
                        </li>

   <!-------------------------------------------------->

                         <li>
                            <a id="admin" href="#">Exam Marks Details<span class="fa arrow"></span></a>
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

                 <!-------------------------------------------------->


                        <li>
                            <a id="admin" href="#">Test Marks Details<span class="fa arrow"></span></a>
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

 <!-------------------------------------------------->
                        <!--<li>
                            <a id="admin" href="results.php"></i>Enter Results per student</a>
                        </li>-->

                        <li>
                            <a id="admin" href="#"></i>Student Attendance</a>
                        </li>

                        
                      <!-------------------------------------------------->  
                       
                       
                       
                        <li>
                            <a id="admin" href="#"><i class="fa fa-sign-out fa-fw"></i>Logout</a>

                        </li>

                <!-------------------------------------------------->
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
                
               
               
                
            </div>
            <!-- /.row -->
            <div class="row">
                
                <div class="col-lg-12">
                    

                   
                     <div class="box1">
                         
                       
                        
                            <p style="font-size: 18px">Jss 3 Student Details</p>
                            
                            <table class="table timetable_sub  table-responsive ">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Image</th>
                                        <th>Adm. No</th>
                                        <th>Firstname</th>
                                        <th>Surname</th>
                                        <th>DOB</th>
                                        <th>Class</th>
                                        <th>Address</th>
                                        <th>Gender</th>
                                        <th>Email</th>
                                        <th>Year of Adm</th>
                                        <th>View</th>
                                        <th>Edit</th>
                                        
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><img src="vendor/images/book-data-education-267495.jpg" alt="" width="60" height="60"></td>
                                        <td>ABC12020</td>
                                        <td>peter</td>
                                        <td>donald</td>
                                        <td>1/1/2019</td>
                                        <td>class7</td>
                                        <td>No 1 lewis street lagos</td>
                                        <td>Male</td>
                                        <td>peter@gmail.com</td>
                                        <td>1/1/2019</td>
                                        <td><a class="btn ddo" href="view-marks-js-three.php">View</a></td>
                                        <td><a class="btn ddo" href="#">edit</a></td>
                                         
                                        
                                    </tr>
                                </tbody> 
                           </table>
                        
                         
                    </div> 
                  
                   
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