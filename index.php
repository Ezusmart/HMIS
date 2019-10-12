
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Health Management Information System </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/sb-admin.css" rel="stylesheet">
	
	
</head>

<body>
  <div id="wrapper">

       <nav class="navbar navbar-inverse navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Health Management Information System</a>
               </div>
            <!-- /.navbar-header -->

          <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                <li class="dropdown">
                <ul class="dropdown-menu dropdown-alerts">
                        <li>
                        </li>
                        <li class="divider"></li>
                        <li>
                        </li>
                        <li class="divider"></li>
                        <li>
                        </li>
                        <li class="divider"></li>
                        <li>
                        </li>
                        <li class="divider"></li>
                        <li>
                        </li>
                        <li class="divider"></li>
                        <li>
                        </li>
                  </ul>
                </li>
                
        </ul>
</nav>
 <div class="modal fade" id="myModal"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog" style="width:300px">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <div class="panel-heading">
							
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                                        </div>
                                         <div class="panel-body">
                        <form role="form" name="login" action="" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="username" type="text" autofocus required x-moz-errormessage="Enter Username">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="" required x-moz-errormessage="Enter Password">
                                </div>
                             
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" name="login" value="Login" class="btn btn-lg btn-success btn-block">
                            </fieldset>
                        </form>
						<?php 
						if(isset($_POST['login']))
						{
						$user_name=$_POST['username'];
						$password=$_POST['password'];
                       $connect = mysqli_connect("localhost", "root", "", "hmis");
$query = "SELECT * FROM account where user='$user_name' AND password='$password'";
$result = mysqli_query($connect, $query);
$no_of_rows = mysqli_num_rows($result);
        if ($no_of_rows > 0) {
		   $row = mysqli_fetch_array($result);
		         if($row["Type"]=="Focal")
				 {
				header('Location: report.php');
				 }
				 else if($row["Type"]=="DataClerck")
				 {
				 header('Location: department_details.php');
				 }
             }
			 else
			     echo "Incorrect Username/Password";
						
						}?>
                    </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
       <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                          
                        
                    </li>
                    <li>
                        <a href="index.php"> Home </a>
                    </li>
                    
				 
                        </ul>
                        <!-- /.nav-second-level -->
                  </li>
                </ul>
        </div>
        </nav> --->
        <div id="page-wrapper">
		</br>
            
            

     <div class="col-lg-4">
                   <div class="panel panel-default">
                        <div class="panel-heading">
                        <form role="form" name="login" action="" method="post">
                            <fieldset>
                                <div class="form-group">
                                 <input class="form-control" placeholder="Username" name="username" type="text" autofocus required x-moz-errormessage="Enter Username">
                                </div>
                                <div class="form-group">
                                   <input class="form-control" placeholder="Password" name="password" type="password" value="" required x-moz-errormessage="Enter Password">
                                </div>
                             
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" name="login" value="Login" class="btn btn-lg btn-success btn-block">
								<input type="submit" name="login" value="ForgetPassword" class="btn btn-lg btn-danger btn-block">
                            </fieldset>
                        </form>
						
                    </div>
					</div> 
			

			
			</div>
  		
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Page-Level Plugin Scripts - Dashboard -->
    <script src="js/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="js/plugins/morris/morris.js"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="js/sb-admin.js"></script>

    <!-- Page-Level Demo Scripts - Dashboard - Use for reference -->
    <script src="js/demo/dashboard-demo.js"></script>

</body>

</html>
