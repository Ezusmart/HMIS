<!DOCTYPE html>
<?php  session_start(); ?>

<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Health Management Information System</title>

	 <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
	
	
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
                <a class="navbar-brand" href="report.php">Health Management Information System </a>
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
										   <?php echo "<a href='report.php?kfk=".'Addis Ketema'."&type=".'woreda_1_healthcenter'."'>woreda 1</a>";
										      
											 
										   ?>
										</li>
										 <li>
										   <?php echo "<a href='report.php?kfk=".'Addis Ketema'."&type=".'woreda_2_healthcenter'."'>woreda 2</a>";?>
										</li>
										 <li>
										   <?php echo "<a href='report.php?kfk=".'Addis Ketema'."&type=".'woreda_3_healthcenter'."'>woreda 3</a>";?>
										</li>	
										 <li>
										   <?php echo "<a href='report.php?kfk=".'Addis Ketema'."&type=".'woreda_4_healthcenter'."'>woreda 4</a>";?>
										</li>
										 <li>
										   <?php echo "<a href='report.php?kfk=".'Addis Ketema'."&type=".'woreda_5_healthcenter'."'>woreda 5</a>";?>
										</li>
										 <li>
										   <?php echo "<a href='report.php?kfk=".'Addis Ketema'."&type=".'woreda_6_healthcenter'."'>woreda 6</a>";?>
										</li>											
						    	         </ul>			
                                    </li>
                                    <li>
								       <a href="#">Arada<span class="fa arrow"></span></a>
										<ul class="nav nav-fourth-level">
										  <li>
										   <?php echo "<a href='report.php?kfk=".'Arada'."&type=".'woreda_1_healthcenter'."'>woreda 1</a>";?>
										</li>
										 <li>
										   <?php echo "<a href='report.php?kfk=".'Arada'."&type=".'woreda_2_healthcenter'."'>woreda 2</a>";?>
										</li>
										 <li>
										   <?php echo "<a href='report.php?kfk=".'Arada'."&type=".'woreda_3_healthcenter'."'>woreda 3</a>";?>
										</li>	
										 <li>
										   <?php echo "<a href='report.php?kfk=".'Arada'."&type=".'woreda_4_healthcenter'."'>woreda 4</a>";?>
										</li>
										 <li>
										   <?php echo "<a href='report.php?kfk=".'Arada'."&type=".'woreda_5_healthcenter'."'>woreda 5</a>";?>
										</li>
										 <li>
										   <?php echo "<a href='report.php?kfk=".'Arada'."&type=".'woreda_6_healthcenter'."'>woreda 6</a>";?>
										</li>		
										
						    	         </ul>			
                                    </li>
                                    <li>
								       <a href="#">Lideta<span class="fa arrow"></span></a>
										<ul class="nav nav-fourth-level">
										 <li>
										   <?php echo "<a href='report.php?kfk=".'Lideta'."&type=".'woreda_1_healthcenter'."'>woreda 1</a>";?>
										</li>
										 <li>
										   <?php echo "<a href='report.php?kfk=".'Lideta'."&type=".'woreda_2_healthcenter'."'>woreda 2</a>";?>
										</li>
										 <li>
										   <?php echo "<a href='report.php?kfk=".'Lideta'."&type=".'woreda_3_healthcenter'."'>woreda 3</a>";?>
										</li>	
										 <li>
										   <?php echo "<a href='report.php?kfk=".'Lideta'."&type=".'woreda_4_healthcenter'."'>woreda 4</a>";?>
										</li>
										 <li>
										   <?php echo "<a href='report.php?kfk=".'Lideta'."&type=".'woreda_5_healthcenter'."'>woreda 5</a>";?>
										</li>
										 <li>
										   <?php echo "<a href='report.php?kfk=".'Lideta'."&type=".'woreda_6_healthcenter'."'>woreda 6</a>";?>
										</li>		
						    	         </ul>			
                                    </li>
									<li>
								       <a href="#">Yeka<span class="fa arrow"></span></a>
										<ul class="nav nav-fourth-level">
										<li>
										   <?php echo "<a href='report.php?kfk=".'Yeka'."&type=".'woreda_1_healthcenter'."'>woreda 1</a>";?>
										</li>
										 <li>
										   <?php echo "<a href='report.php?kfk=".'Yeka'."&type=".'woreda_2_healthcenter'."'>woreda 2</a>";?>
										</li>
										 <li>
										   <?php echo "<a href='report.php?kfk=".'Yeka'."&type=".'woreda_3_healthcenter'."'>woreda 3</a>";?>
										</li>	
										 <li>
										   <?php echo "<a href='report.php?kfk=".'Yeka'."&type=".'woreda_4_healthcenter'."'>woreda 4</a>";?>
										</li>
										 <li>
										   <?php echo "<a href='report.php?kfk=".'Yeka'."&type=".'woreda_5_healthcenter'."'>woreda 5</a>";?>
										</li>
										 <li>
										   <?php echo "<a href='report.php?kfk=".'Yeka'."&type=".'woreda_6_healthcenter'."'>woreda 6</a>";?>
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
						  					  
						  <form action="report.php" method="POST">
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
                             	 
								
								
                              <input type="submit" class="btn btn-outline btn-primary btn-lg btn-block" value="Report" name="report">
									
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
					   if(isset($_POST['report']))
					   {
					   $fmoh=$_SESSION["kfk"];
			   $typess=$_SESSION["type"];
					    $_SESSION['period']=$_POST["period"];
						$period=$_SESSION['period'];
					      if($_POST["dataset"]=="Malaria")
					     {
						echo "<div id='chart'></div>";
$connect = mysqli_connect("localhost", "root", "", "hmis");
$query = "SELECT * FROM malaria where Fmoh='$fmoh' AND Organization='$typess' AND Period='$period'";
$result = mysqli_query($connect, $query);
$chart_data = '';
while($row = mysqli_fetch_array($result))
{
$total = $row["adultpm"]+$row["adultpf"]+$row["childrenpm"]+$row["childrenpf"];
 $chart_data .= "{ month:'".$row["Month"]."',AdultM:'".$row["adultpm"]."',AdultF:'".$row["adultpf"]."', ChildrenM:".$row["childrenpm"].", ChildrenF:".$row["childrenpf"].", Total:".$total."}, ";
}
$chart_data = substr($chart_data, 0, -2);

						
						
						
					?>
                        
                       
                    <!-- /.panel -->
                </div>
				
                <!-- /.col-lg-12 -->
            </div>
			
       
            <?php }
			 if($_POST["dataset"]=="HIV")
					     {
						
echo "<div id='chart_2'></div>";
$connect = mysqli_connect("localhost", "root", "", "hmis");
$query = "SELECT * FROM hiv where Fmoh='$fmoh' AND Organization='$typess' AND Period='$period'";
$result = mysqli_query($connect, $query)or mysqli_error();
$chart_data = '';

while($row = mysqli_fetch_array($result))
{


 $chart_data .= "{ month:'".$row["Month"]."', Negative:".$row["Negative"].", Positive:".$row["Positive"]."}, ";
 }

$chart_data = substr($chart_data, 0, -2);

					
									
			?>
               
			<?php
			}
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
<script>
Morris.Bar({
 element : 'chart',
 data:[<?php echo $chart_data; ?>],
 xkey:'month',
 ykeys:['AdultM', 'AdultF','ChildrenM','ChildrenF'],
 labels:['AdultM', 'AdultF', 'ChildrenM', 'ChildrenF'],
 hideHover:'auto',
 
});
</script>
<script>
Morris.Bar({
 element : 'chart_2',
 data:[<?php echo $chart_data; ?>],
 xkey:'month',
 ykeys:['Negative', 'Positive'],
 labels:['Negative', 'Positive'],
 hideHover:'auto',
 
});
</script>