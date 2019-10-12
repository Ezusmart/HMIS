<!DOCTYPE html>
<?php  session_start(); ?>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Health Management Information System</title>

    <!-- Core CSS - Include with every page -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Page-Level Plugin CSS - Tables -->
    <link href="css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
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
                <a class="navbar-brand" href="department_details.php">Health Management Information System </a>
               </div>
            <!-- /.navbar-header -->
			<ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
                        </li>
                    </ul>
                </li>
        </ul>
</nav>
	
	
			
       <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                           
                            <span class="input-group-btn">
                               
                            </span>
                        </div>
                        <!-- /input-group -->
                    </li>
                      
										
                    <li>
                        <a href="#"> FMOH<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            
							<li>
                                <a href="#">AddisAbaba <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
								       <a href="#">Addis Ketema<span class="fa arrow"></span></a>
										<ul class="nav nav-fourth-level">
										 
										
										 
										 <li>
										   <?php echo "<a href='department_details.php?kfk=".'Addis Ketema'."&type=".'woreda_1_healthcenter'."'>woreda 1</a>";
										      
											 
										   ?>
										</li>
										 <li>
										   <?php echo "<a href='department_details.php?kfk=".'Addis Ketema'."&type=".'woreda_2_healthcenter'."'>woreda 2</a>";?>
										</li>
										 <li>
										   <?php echo "<a href='department_details.php?kfk=".'Addis Ketema'."&type=".'woreda_3_healthcenter'."'>woreda 3</a>";?>
										</li>	
										 <li>
										   <?php echo "<a href='department_details.php?kfk=".'Addis Ketema'."&type=".'woreda_4_healthcenter'."'>woreda 4</a>";?>
										</li>
										 <li>
										   <?php echo "<a href='department_details.php?kfk=".'Addis Ketema'."&type=".'woreda_5_healthcenter'."'>woreda 5</a>";?>
										</li>
										 <li>
										   <?php echo "<a href='department_details.php?kfk=".'Addis Ketema'."&type=".'woreda_6_healthcenter'."'>woreda 6</a>";?>
										</li>											
						    	         </ul>			
                                    </li>
                                    <li>
								       <a href="#">Arada<span class="fa arrow"></span></a>
										<ul class="nav nav-fourth-level">
										  <li>
										   <?php echo "<a href='department_details.php?kfk=".'Arada'."&type=".'woreda_1_healthcenter'."'>woreda 1</a>";?>
										</li>
										 <li>
										   <?php echo "<a href='department_details.php?kfk=".'Arada'."&type=".'woreda_2_healthcenter'."'>woreda 2</a>";?>
										</li>
										 <li>
										   <?php echo "<a href='department_details.php?kfk=".'Arada'."&type=".'woreda_3_healthcenter'."'>woreda 3</a>";?>
										</li>	
										 <li>
										   <?php echo "<a href='department_details.php?kfk=".'Arada'."&type=".'woreda_4_healthcenter'."'>woreda 4</a>";?>
										</li>
										 <li>
										   <?php echo "<a href='department_details.php?kfk=".'Arada'."&type=".'woreda_5_healthcenter'."'>woreda 5</a>";?>
										</li>
										 <li>
										   <?php echo "<a href='department_details.php?kfk=".'Arada'."&type=".'woreda_6_healthcenter'."'>woreda 6</a>";?>
										</li>		
										
						    	         </ul>			
                                    </li>
                                    <li>
								       <a href="#">Lideta<span class="fa arrow"></span></a>
										<ul class="nav nav-fourth-level">
										 <li>
										   <?php echo "<a href='department_details.php?kfk=".'Lideta'."&type=".'woreda_1_healthcenter'."'>woreda 1</a>";?>
										</li>
										 <li>
										   <?php echo "<a href='department_details.php?kfk=".'Lideta'."&type=".'woreda_2_healthcenter'."'>woreda 2</a>";?>
										</li>
										 <li>
										   <?php echo "<a href='department_details.php?kfk=".'Lideta'."&type=".'woreda_3_healthcenter'."'>woreda 3</a>";?>
										</li>	
										 <li>
										   <?php echo "<a href='department_details.php?kfk=".'Lideta'."&type=".'woreda_4_healthcenter'."'>woreda 4</a>";?>
										</li>
										 <li>
										   <?php echo "<a href='department_details.php?kfk=".'Lideta'."&type=".'woreda_5_healthcenter'."'>woreda 5</a>";?>
										</li>
										 <li>
										   <?php echo "<a href='department_details.php?kfk=".'Lideta'."&type=".'woreda_6_healthcenter'."'>woreda 6</a>";?>
										</li>		
						    	         </ul>			
                                    </li>
									<li>
								       <a href="#">Yeka<span class="fa arrow"></span></a>
										<ul class="nav nav-fourth-level">
										<li>
										   <?php echo "<a href='department_details.php?kfk=".'Yeka'."&type=".'woreda_1_healthcenter'."'>woreda 1</a>";?>
										</li>
										 <li>
										   <?php echo "<a href='department_details.php?kfk=".'Yeka'."&type=".'woreda_2_healthcenter'."'>woreda 2</a>";?>
										</li>
										 <li>
										   <?php echo "<a href='department_details.php?kfk=".'Yeka'."&type=".'woreda_3_healthcenter'."'>woreda 3</a>";?>
										</li>	
										 <li>
										   <?php echo "<a href='department_details.php?kfk=".'Yeka'."&type=".'woreda_4_healthcenter'."'>woreda 4</a>";?>
										</li>
										 <li>
										   <?php echo "<a href='department_details.php?kfk=".'Yeka'."&type=".'woreda_5_healthcenter'."'>woreda 5</a>";?>
										</li>
										 <li>
										   <?php echo "<a href='department_details.php?kfk=".'Yeka'."&type=".'woreda_6_healthcenter'."'>woreda 6</a>";?>
										</li>		
						    	         </ul>			
                                    </li>
                                </ul>
                                <!-- /.nav-third-level -->
                            </li>
							<li>
                                <a href="#">Afar <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                   
									
                                </ul>
                                <!-- /.nav-third-level -->
                            </li>
							<li>
                                <a href="#">Amhara <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                  </ul>
                                <!-- /.nav-third-level -->
                            </li>
							<li>
                                <a href="#">Benshangul-Gumez <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                  </ul>
                                <!-- /.nav-third-level -->
                            </li>
							<li>
                                <a href="#">Diredawa <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                  </ul>
                                <!-- /.nav-third-level -->
                            </li>
							<li>
                                <a href="#">Gambela <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                  </ul>
                                <!-- /.nav-third-level -->
                            </li>
							<li>
                                <a href="#">Harari <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                  </ul>
                                <!-- /.nav-third-level -->
                            </li>
							<li>
                                <a href="#">Oromia <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                  </ul>
                                <!-- /.nav-third-level -->
                            </li>
							<li>
                                <a href="#">Somali <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                  </ul>
                                <!-- /.nav-third-level -->
                            </li>
							<li>
                                <a href="#">Tigray <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                  </ul>
                                <!-- /.nav-third-level -->
                            </li>
							<li>
                                <a href="#">SNNP <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                  </ul>
                                <!-- /.nav-third-level -->
                            </li>
							
							
							
                        </ul>
                        <!-- /.nav-second-level -->
						
                    </li>
                  
                   
                </ul>
                <!-- /#side-menu -->
            </div>
            <!-- /.sidebar-collapse -->
        </nav>
        <!-- /.navbar-static-side -->
    <?php
			  if(isset($_GET['type']))
			  {
			   $_SESSION["type"]=$_GET['type'];
			   $_SESSION["kfk"]=$_GET['kfk'];
			  }
			   if(isset($_SESSION["type"]))
			  {
			  
			  
			?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-6">
               </br>
			  <div class="panel panel-default">
                        <div class="panel-heading">
						  					  
						  <form action="department_details.php" method="POST">
                            <div class="panel-body">
							<div class="form-group">
                                            <label> Organization Unit:</label>
                                    <input class="form-control" name="og" type="text" value="<?php echo $_SESSION['type'];?>" class="inputText" disabled />
                                </div>

								<div class="form-group">
                                            <label> Dataset:</label>
                                            <select class="form-control" name="dataset" required>
										<option value="">---select---</option>
                                               <option value="Malaria">Malaria</option>
											   <option value="HIV">HIV</option>
											   <option value="Immunization dataset">Immunization dataset</option>
											   <option value="Nutrition dataset">Nutrition dataset</option>
												<option value="Family Planning">Family Planning</option>
												<option value="Leprosy dataset">Leprosy dataset</option>
												<option value="Tuberclosis dataset">Tuberclosis dataset</option>
												
									         </select>
                                        </div>
							<div class="form-group">
                                            <label> Peroid:</label>
                                            <select class="form-control" name="period" required x-moz-errormessage="Select  Period">
										<option value="">---select---</option>
                                               <option value="2019">2019</option>
											   <option value="2018">2018</option>
											   <option value="2017">2017</option>
												<option value="2016">2016</option>
												<option value="2015">2015</option>
									         </select>
                                        </div>
                             	 
								<div class="form-group">
                                            <label> Month:</label>
                                            <select class="form-control" name="month" required x-moz-errormessage="Select  month">
										<option value="">---select---</option>
                                               <option value="January">January</option>
											   <option value="February">February</option>
											   <option value="March">March</option>
												<option value="April">April</option>
												<option value="May">May</option>
												<option value="June">June</option>
												<option value="July">July</option>
												<option value="August">August</option>
												<option value="September">September</option>
												<option value="October">October</option>
												<option value="November">November</option>
												<option value="December">December</option>
									         </select>
                                        </div>
								
                              <input type="submit" class="btn btn-outline btn-primary btn-lg btn-block" value="Confirm" name="check">
									
                            </div>
							
							</form>
							
				 </div>
              </div>
				                  
                    	
						
                          </br>
                            </br>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
			
                  <div class="row">
                <div class="col-lg-12">
                    <?php 
					   if(isset($_POST['check']))
					   {
					    $_SESSION['period']=$_POST["period"];
						$_SESSION['month']=$_POST["month"];
					      if($_POST["dataset"]=="Malaria")
					     {
						
						
					?>
                        
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
							<form action="department_details.php" method="POST">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th rowspan='2'></th>
																				
                                            <th colspan='2'>Positive</th>
                                            <th  colspan='2'>Treated</th>
											
                                        </tr>
                                    </thead>
                                    <tbody>
									<tr>
                                      <td>Malaria</td>
									  <td>M</td>
									  <td>F</td>
									 <td>M</td>
									  <td>F</td>
									  
                                  </tr>
                                    <tr>
                                      <td>Adult</td>
									  <td><input type="text" name="adultpm" value=""></td>
									 <td><input type="text" name="adultpf" value=""></td>
									 <td><input type="text" name="adulttm" value=""></td>
									 <td><input type="text" name="adulttf" value=""></td>
									 
                                  </tr>
									<tr>
                                      <td>Children</td>
									  <td><input type="text" name="childrenpm" value=""></td>
									 <td><input type="text" name="childrenpf" value=""></td>
									 <td><input type="text" name="childrentm" value=""></td>
									 <td><input type="text" name="childrentf" value=""></td>
									 
                                  </tr>
								
								 
                                    </tbody>
									
                                </table>
								  <input type="submit"  value="Submit" name="malariya_registere">
								  </form>
                            </div>
                            <!-- /.table-responsive -->
                    
                    </div>
                    <!-- /.panel -->
                </div>
				
                <!-- /.col-lg-12 -->
            </div>
			
        <div id="page-wrapper">
            <?php }?>
                <div class="row">
                <div class="col-lg-6">
               </br>
			   <?php 
			   
			   if($_POST["dataset"]=="HIV")
					     {
						 ?>
			  <div class="panel panel-default">
                        <div class="panel-heading">
						  			<h3>HIV Treatment </h3>		  
						  <form action="department_details.php" method="POST">
                            <div class="panel-body">
							
						<div class="form-group">
                                            <label> No. of Test:</label>
                                    <input class="form-control" name="test" type="text" value="" class="inputText"/>
                                </div>
								<div class="form-group">
                                            <label> Tested Negative:</label>
                                    <input class="form-control" name="negative" type="text" value="" class="inputText"/>
                                </div>
							<div class="form-group">
                                            <label> Tested Positive:</label>
                                    <input class="form-control" name="positive" type="text" value="" class="inputText"/>
                                </div>
                             	 <div class="form-group">
                                            <label> Currently on care:</label>
                                    <input class="form-control" name="care" type="text" value="" class="inputText"/>
                                </div>
								 <div class="form-group">
                                            <label> Counselling:</label>
                                    <input class="form-control" name="coun" type="text" value="" class="inputText"/>
                                </div>
								
								
                              <input type="submit" class="btn btn-outline btn-primary btn-lg btn-block" value="Submit" name="hiv_registere">
									
                            </div>
							
							</form>
							
				 </div>
              </div>
				                  
                    	
						
                          </br>
                            </br>
                </div>
                <!-- /.col-lg-12 -->
            </div>
			<?php
			}
			}
			}
	    mysql_connect("localhost","root","")or die(mysql_error());
  mysql_select_db("hmis")or die(mysql_error()); 
    mysql_set_charset('utf8');  		
			  if(isset($_POST['hiv_registere']))
			 {
			 $fmoh=$_SESSION['kfk'];
			 $org=$_SESSION['type'];
			 $dataset="Hiv";
			 $period=$_SESSION['period'];
			 $month=$_SESSION['month'];
			 $no_test=$_POST['test'];
			 $neg=$_POST['negative'];
			 $pos=$_POST['positive'];
			 $care=$_POST['care'];
			 $cons=$_POST['coun'];
			 $result = mysql_query("INSERT INTO hiv VALUES('','$fmoh','$org','$dataset','$period','$month','$no_test','$neg','$pos','$care','$cons')")or die(mysql_error());
 
	   // check for successful store
        if ($result>0) {
          echo "<script type=\"text/javascript\">
							alert(\"Successfuly Submitted\");
							window.location = \"department_details.php\"
						</script>";
        } else {
            echo "<script type=\"text/javascript\">
							alert(\"Error.\");
							window.location = \"department_details.php\"
						</script>";
        } 
			 }
			 if(isset($_POST['malariya_registere']))
			 {
			  $fmoh=$_SESSION['kfk'];
			 $org=$_SESSION['type'];
			 $dataset="Malaria";
			 $period=$_SESSION['period'];
			 $month=$_SESSION['month'];
			
			 $adultpm=$_POST['adultpm'];
			 $adultpf=$_POST['adultpf'];
			 $adulttm=$_POST['adulttm'];
			 $adulttf=$_POST['adulttf'];
			 $childrenpm=$_POST['childrenpm'];
			  $childrenpf=$_POST['childrenpf'];
			 $childrentm=$_POST['childrentm'];
			 $childrentf=$_POST['childrentf'];
			 $result = mysql_query("INSERT INTO malaria VALUES('','$fmoh','$org','$dataset','$period','$month','$adultpm','$adultpf','$adulttm','$adulttf','$childrenpm','$childrenpf','$childrentm','$childrentf')")or die(mysql_error());
 
	   // check for successful store
        if ($result>0) {
          echo "<script type=\"text/javascript\">
							alert(\"Successfuly Submitted\");
							window.location = \"department_details.php\"
						</script>";
        } else {
            echo "<script type=\"text/javascript\">
							alert(\"Error.\");
							window.location = \"department_details.php\"
						</script>";
        } 
			 
			 }
			?>
			
            <!-- /.row -->
<!-- Core Scripts - Include with every page -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Page-Level Plugin Scripts - Tables -->
    <script src="js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="js/sb-admin.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
    </script>

</body>

</html>

