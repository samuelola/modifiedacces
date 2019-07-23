<?php
 session_start();

 if(isset($_SESSION['name'])){

    $name = $_SESSION['name'] ;
 }
 else{
  
    header('Location:index.php');

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

    <link rel="stylesheet" href="css/clndr.css" type="text/css" />

    <link href="css/flipclock.css" rel="stylesheet" type="text/css" media="all" />
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
                <a class="navbar-brand" href="../index.php"><img src="images/newas.jpg" alt="image">
                    <p class="noon">access college</p>
                       <!--<p class="noon1">Access college</p>-->
                     <p class="noon2">Welcome <?php echo $name; ?> </p>  
                </a>

            </div>
            <!-- /.navbar-header -->



            <ul class="nav navbar-top-links navbar-right">
                
                <li class="dropdown">
                    <a class=" dropdown-toggle" data-toggle="dropdown" href="#">
                        <!--<i class="usee fa fa-user fa-fw"></i><-->
                        </--><i class="cas fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw" ></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="admin-logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="samee navbar-default sidebar" role="navigation">
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
                        <li class="quick">
                            <a id="admin" href="#"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>

                       
                        <li>
                            <a id="admin" href="#"><i class="fa fa-user fa-fw">&nbsp;&nbsp;&nbsp;&nbsp;</i>Administrator<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a id="admin" href="#"> Create User</a>
                                </li>
                                <li>
                                    <a id="admin" href="#"> View All Users</a>
                                </li>
                                <li>
                                    <a id="admin" href="#"> Reset User Password</a>
                                </li>
                            </ul>
                            
                        </li>
                        

                         <li>
                            <a id="admin" href="#"><i class="fa fa-user fa-fw">&nbsp;&nbsp;&nbsp;&nbsp;</i>Profile<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a id="admin" href="#">My profile</a>
                                </li>
                                <li>
                                    <a id="admin" href="#">Reset password</a>
                                </li>
                                <li>
                                    <a id="admin" href="admin-logout.php">Logout</a>
                                </li>
                            </ul>
                            
                        </li>
                        

                        <li>
                            <a id="admin" href="#">Teacher</a>

                        </li>

                         <li>
                            <a id="admin" href="#">Class</a>

                        </li>

                        <li>
                            <a id="admin" href="#"><i class="fa fa-book fa-fw"></i>Subject<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                 <li>
                                    <a id="admin" href="#">JSS One</a>
                                </li>
                                <!--<li>
                                    <a id="admin" href="#">View Students Details</a>
                                </li>-->
                                 <li>
                                    <a id="admin" href="#">JSS Two</a>
                                </li>
                                <li>
                                    <a id="admin" href="#">JSS Three</a>
                                </li>
                                <li>
                                    <a id="admin" href="#">SSS One</a>
                                </li>

                                <li>
                                    <a id="admin" href="#">SSS Two</a>
                                </li>
                               
                                <li>
                                    <a id="admin" href="#">SSS Three</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a id="admin" href="#"><i class="fa fa-book fa-fw"></i>Student<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                 <li>
                                    <a id="admin" href="#">Add Student</a>
                                </li>
                                <!--<li>
                                    <a id="admin" href="#">View Students Details</a>
                                </li>-->
                                 <li>
                                    <a id="admin" href="#">Student JSS One</a>
                                </li>
                                <li>
                                    <a id="admin" href="#">Student JSS Two</a>
                                </li>
                                <li>
                                    <a id="admin" href="#">Student JSS Three</a>
                                </li>

                                <li>
                                    <a id="admin" href="#">Student SSS One</a>
                                </li>
                               
                                <li>
                                    <a id="admin" href="#">Student SSS Two</a>
                                </li>

                                 <li>
                                    <a id="admin" href="#">Student SSS Three</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a id="admin" href="#"><i class="fa fa-book fa-fw"></i>Attendance<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                 <li>
                                    <a id="admin" href="#">Student Attendance</a>
                                </li>
                                <!--<li>
                                    <a id="admin" href="#">View Students Details</a>
                                </li>-->
                                 <li>
                                    <a id="admin" href="#">Teacher Attendance</a>
                                </li>
                                <li>
                                    <a id="admin" href="#">Employee Attendance</a>
                                </li>
                               
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>


                         <li>
                            <a id="admin" href="#"><i class="fa fa-book fa-fw"></i>Exam<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                 <li>
                                    <a id="admin" href="#">Exam Grade<span class="fa arrow"></span></a>
                                     
                                     <ul class="nav nav-second-level">
                                         <li>
                                            <a id="admin" href="#">Exam Grade List</a>
                                        </li>
                                        <!--<li>
                                            <a id="admin" href="#">View Students Details</a>
                                        </li>-->
                                         <li>
                                            <a id="admin" href="#">Add Exam Grade</a>
                                        </li>
                                        
                                       
                                    </ul>

                                </li>
                                <!--<li>
                                    <a id="admin" href="#">View Students Details</a>
                                </li>-->
                                 <li>
                                    <a id="admin" href="#">Exam Term<span class="fa arrow"></span></a>
                                     
                                     <ul class="nav nav-second-level">
                                         <li>
                                            <a id="admin" href="#">Exam List</a>
                                        </li>
                                        <!--<li>
                                            <a id="admin" href="#">View Students Details</a>
                                        </li>-->
                                         <li>
                                            <a id="admin" href="#">Add Exam </a>
                                        </li>
                                        
                                       
                                    </ul>

                                </li>

                                <li>
                                    <a id="admin" href="#">Exam Attendance</a>
                                </li>

                                 <li>
                                    <a id="admin" href="#">Exam Mark</a>
                                </li>

                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                       <li>
                            <a id="admin" href="#"><i class="fa fa-user fa-fw"></i>Announcement<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                 <li>
                                    <a id="admin" href="addstaff.php">News</a>
                                </li>

                                <li>
                                    <a id="admin" href="viewstaff.php">Notice</a>
                                </li>
                                
                            </ul>
                            
                        </li>
                        
                        <li>
                            <a id="admin" href="#"><i class="fa fa-sign-out fa-fw"></i>Event</a>

                        </li>
                       
                        <li>
                            <a id="admin" href="admin-logout.php"><i class="fa fa-sign-out fa-fw"></i>Logout</a>

                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper" >
            <div class="row">
                <div class="col-lg-12">
                    

                    <div class="alert alert-success page-header" role="alert">
                       <button type="button" class="close" data-dismiss="alert">&times;</button>
                         <p>You have successfully logged in.</p>
                    </div>

                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                
                <div class="col-lg-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms"">

                     <div class="row">
                         <div class="col-md-12">
                              <div class="col-md-3">
                                  <div class="counter_box">
                                     <h5>Total Students</h5> 
                                     <h4>--</h4>
                                  </div>
                              </div>

                              <div class="col-md-3">
                                  <div class="counter_box">
                                     <h5>Total Teachers</h5> 
                                     <h4>--</h4>
                                  </div>
                              </div>

                              <div class="col-md-3">
                                  <div class="counter_box">
                                     <h5>Total Employees</h5> 
                                     <h4>--</h4>
                                  </div>
                              </div>

                              <div class="col-md-3">
                                  <div class="counter_box">
                                     <h5>Users</h5> 
                                     <h4>--</h4>
                                  </div>
                              </div>

                         </div>   
                     </div>


                     <div class="row">
                         <div class="col-md-12">
                             <div class="col-md-6">
                                 <div class="counter_box1">
                                     <div class="cal1 cal_2"><div class="clndr"><div class="clndr-controls"><div class="clndr-control-button"><p class="clndr-previous-button">previous</p></div><div class="month">July 2015</div><div class="clndr-control-button rightalign"><p class="clndr-next-button">next</p></div></div><table class="clndr-table" border="0" cellspacing="0" cellpadding="0"><thead><tr class="header-days"><td class="header-day">S</td><td class="header-day">M</td><td class="header-day">T</td><td class="header-day">W</td><td class="header-day">T</td><td class="header-day">F</td><td class="header-day">S</td></tr></thead><tbody><tr><td class="day adjacent-month last-month calendar-day-2015-06-28"><div class="day-contents">28</div></td><td class="day adjacent-month last-month calendar-day-2015-06-29"><div class="day-contents">29</div></td><td class="day adjacent-month last-month calendar-day-2015-06-30"><div class="day-contents">30</div></td><td class="day calendar-day-2015-07-01"><div class="day-contents">1</div></td><td class="day calendar-day-2015-07-02"><div class="day-contents">2</div></td><td class="day calendar-day-2015-07-03"><div class="day-contents">3</div></td><td class="day calendar-day-2015-07-04"><div class="day-contents">4</div></td></tr><tr><td class="day calendar-day-2015-07-05"><div class="day-contents">5</div></td><td class="day calendar-day-2015-07-06"><div class="day-contents">6</div></td><td class="day calendar-day-2015-07-07"><div class="day-contents">7</div></td><td class="day calendar-day-2015-07-08"><div class="day-contents">8</div></td><td class="day calendar-day-2015-07-09"><div class="day-contents">9</div></td><td class="day calendar-day-2015-07-10"><div class="day-contents">10</div></td><td class="day calendar-day-2015-07-11"><div class="day-contents">11</div></td></tr><tr><td class="day calendar-day-2015-07-12"><div class="day-contents">12</div></td><td class="day calendar-day-2015-07-13"><div class="day-contents">13</div></td><td class="day calendar-day-2015-07-14"><div class="day-contents">14</div></td><td class="day calendar-day-2015-07-15"><div class="day-contents">15</div></td><td class="day calendar-day-2015-07-16"><div class="day-contents">16</div></td><td class="day calendar-day-2015-07-17"><div class="day-contents">17</div></td><td class="day calendar-day-2015-07-18"><div class="day-contents">18</div></td></tr><tr><td class="day calendar-day-2015-07-19"><div class="day-contents">19</div></td><td class="day calendar-day-2015-07-20"><div class="day-contents">20</div></td><td class="day calendar-day-2015-07-21"><div class="day-contents">21</div></td><td class="day calendar-day-2015-07-22"><div class="day-contents">22</div></td><td class="day calendar-day-2015-07-23"><div class="day-contents">23</div></td><td class="day calendar-day-2015-07-24"><div class="day-contents">24</div></td><td class="day calendar-day-2015-07-25"><div class="day-contents">25</div></td></tr><tr><td class="day calendar-day-2015-07-26"><div class="day-contents">26</div></td><td class="day calendar-day-2015-07-27"><div class="day-contents">27</div></td><td class="day calendar-day-2015-07-28"><div class="day-contents">28</div></td><td class="day calendar-day-2015-07-29"><div class="day-contents">29</div></td><td class="day calendar-day-2015-07-30"><div class="day-contents">30</div></td><td class="day calendar-day-2015-07-31"><div class="day-contents">31</div></td><td class="day adjacent-month next-month calendar-day-2015-08-01"><div class="day-contents">1</div></td></tr></tbody></table></div></div>
                                 </div>
                             </div>

                             <div class="col-md-6 ">
                                 <div class="counter_box2">
                                     <div class="caller">
                                         
                                          <div class="main-example">
                                             <div class="clock"></div>
                                             <div class="message"></div>

                                         </div>
                                     </div>
                                      
                                   
                                 </div>
                             </div>

                            
                         </div>
                     </div>

                     <div class="row">
                         <div class="col-md-12">
                             <div class="counter_box3">
                                 <a class="weatherwidget-io" href="https://forecast7.com/en/6d523d38/lagos/" data-label_1="LAGOS" data-label_2="WEATHER" data-theme="original" >LAGOS WEATHER</a>
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement

(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script>
                             </div>
                         </div>
                     </div>

                   <!--<div class="mybox">
                        <p class="admin1">
                        <img src="images/book-data-education-267495.jpg" class="img-responsive" />
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus interdum erat libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque libero,
                      pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesqueLorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus interdum erat libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque libero,Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus interdum erat libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque
                        libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesqueLorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus interdum erat libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque
                        libero, pulvinar tincidunt leo consectetur eget.
                        Phasellus interdum erat libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque libero,Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus interdum erat libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque
                        libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesqueLorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus interdum erat libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque
                        libero, pulvinar tincidunt leo consectetur eget.
                    </p>
                    </div>-->
                    
                    
                   
                </div> 
                
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-8">
                    
                
                   
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

     <!----Calender -------->
            
            <script src="js/underscore-min.js" type="text/javascript"></script>
            <script src= "js/moment-2.2.1.js" type="text/javascript"></script>
            <script src="js/clndr.js" type="text/javascript"></script>
            <script src="js/site.js" type="text/javascript"></script>
    <!----End Calender -------->

    <script src="js/flipclock.js"></script>

    <script type="text/javascript">
        var clock;
        
        $(document).ready(function() {
            
           var clock = $('.clock').FlipClock({
                clockFace: 'TwelveHourClock'
            });
        });
    </script>

</body>

</html>


