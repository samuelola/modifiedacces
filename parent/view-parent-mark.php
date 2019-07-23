<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Parent Dashbord</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="vendor/css/parent.css">
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
                            <a id="admin" href="view-parent-exam.php"><i class="fa fa-book fa-fw"></i>View Exam</a>
                        </li>
                        
                       
                       
                         <li>
                            <a id="admin" href="view-parent-mark.php"><i class="fa fa-eye fa-fw"></i>View Marks</a>
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
                    <h1 class="page-header">Welcome </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                
                <div class="col-lg-12">
                   

                      <div class="col-md-6 col-md-offset-3">
                    <p class="create">Mark Details</p>
                   <form action="" method="post" role="form" class="form-horizontal contactForm" >
                       
                    
                         
                         
                        
                        <div class="form-group">
                          <label for="nameField" class="col-xs-3 meet">Enter Adm.No</label> 
                           <div class="col-xs-9"> 
                              <input type="text" class="form-control" name="email" id="email"  data-rule="email" data-msg="Please enter a valid email" />
                              <div class="validation"></div>
                           </div>
                        </div> 
                         <br>
                          <input type="submit" class="text-center btn btn-info" value="View Details" name="parent" style="margin-bottom: 15px; position: relative; left: 190px">
                      </form>
                               
                </div>
                 
                   


                    <div class="panel panel-default" style="margin-top: 230px">
                         <div class="panel-heading heg1">
                             <p style="font-size: 18px">Peter Donald | Class1 | Adm No:&nbsp; ABC12020</p>

                         </div>
                         <div class="panel-body bod1">
                            
                            <p style="font-size: 16px">Mark Details</p>
                            <table class="table table-striped table-bordered table-responsive table-condensed">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Term</th>
                                        <th>Subject</th>
                                        <th>Mark</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        
                                       
                                        <td>1st Term</td>
                                        
                                        <td>Mathematics</td>
                                        <td>95</td>
                                        
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        
                                        
                                        
                                        <td>1st Term</td>
                                        
                                        <td>English</td>
                                        <td>95</td>
                                        
                                    </tr>
                                </tbody> 
                           </table>
                         </div>
                         <div class="panel-footer">
                             
                         </div>
                    </div>
                  
                   
                </div>
               
                
            </div>
            <!-- /.row -->
            <div class="row">
                
               
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
