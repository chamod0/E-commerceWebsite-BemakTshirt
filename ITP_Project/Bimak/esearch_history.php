 <!DOCTYPE html>
<html lang="en">

<head>
	

    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Expences History</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
     <link href="css/expence_history.css" rel="stylesheet">
 
</head>



<body class="animsition">

	<!-- ============= Link php file ======================== -->
	<?php error_reporting(0);  ?>
	<!-- ==================================================== -->

    <div class="page-wrapper">

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a class="js-arrow" href="dashboard.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                       <li >
                            <a href="#" class="js-arrow">
                                <i class="fas fa-list-alt"></i>Stock Management</a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="stock_admin.php">Stock Summary</a>
                                </li>
                                <li>
                                    <a href="add_item.php">Add Item</a>
                                </li>
                                <li>
                                    <a href="list_item.php">Stock Details</a>
                                </li>                                
                            </ul>
                        </li>
                        <li >
                            <a  class="js-arrow"  href="#">
                                <i class="fas fa-users"></i>Employee Handling</a>
                                
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="employee_admin.php">Employee Summary</a>
                                </li>
                                <li>
                                    <a href="add_employee.php">Add Employee</a>
                                </li>
                                <li>
                                    <a href="list_employee.php">Employee Details</a>
                                </li>
                                <li>
                                    <a href="sal_employee.php">Salary Calculation</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a  class="js-arrow"  href="#">
                                <i class="fas fa-user"></i>Customer Management</a>
                                
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="customer_admin.php">Customer Summary</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="admin_vehicle.php">
                                <i class="fas fa-keyboard-o"></i>Vehicle Management</a>
                        </li>
                        
						<li class="active has-sub">
                            <a href="#" class="js-arrow">
                                <i class="fas fa-list-alt"></i>Finance Management</a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li class="active has-sub">
                                    <a href="admin_finance.php">Add Expences</a>
                                </li>
                                <li>
                                    <a href="exp_history.php?view">Show Expences</a>
                                </li>
                                                                
                            </ul>
                        </li>
						
						
						
						
                        <li>
                            <a href="admin_report.php">
                                <i class="fas fa-clipboard"></i>Reports</a>
                        </li>
                        <li>
                            <a href="admin_emp_index.php">
                                <i class="fas fa-unlock-alt"></i>Log out</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    
                                   
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">.</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>Notifications</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Check E-mails now!</p>
                                                    <span class="date"><?php echo date("y/m/d"); ?> </span>
                                                </div>
                                            </div>                                            
                                        </div>
                                    </div>
                                </div>
                                <?php 

                                     $conn = new mysqli("localhost","root","","bimak");

                                    $get_admin = "select * from admin where id = 1";

                                    $run_edit_admin = mysqli_query($conn , $get_admin);
                                    $row_admin = mysqli_fetch_array($run_edit_admin);
                                    $name = $row_admin['name'];
                                    $email = $row_admin['email'];
                                    $photo = $row_admin['aphoto'];
                                    $loc = "php/";                                    

                                    echo "





                                <div class='account-wrap'>
                                    <div class='account-item clearfix js-item-menu'>
                                        <div class='image'>
                                            <img src='$loc$photo'/>
                                        </div>
                                        <div class='content'>
                                            <a class='js-acc-btn' href='#''>$name</a>
                                        </div>
                                        <div class='account-dropdown js-dropdown'>
                                            <div class='info clearfix'>
                                                <div class='image'>
                                                    <a href='#'>
                                                        <img src='$loc$photo'/>
                                                    </a>
                                                </div>
                                                <div class='content'>
                                                    <h5 class='name'>
                                                        <a href='#'>$name</a>
                                                    </h5>
                                                    <span class='email'>$email</span>
                                                </div>
                                            </div>
                                            <div class='account-dropdown__body'>
                                                <div class='account-dropdown__item'>
                                                    <a href='admin_account.php'>
                                                        <i class='zmdi zmdi-account'></i>Account</a>
                                                </div>                                                
                                            </div>
                                            <div class='account-dropdown__footer'>
                                                <a href='admin_emp_index.php'>
                                                    <i class='zmdi zmdi-power'></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                ";

                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                            <div class="overview-wrap">
                                   <center> <h1><i class="fas fa-plus"></i> &nbsp Expences History (Filtered) </h1> </center>
                                </div>
                                <hr><br>                                
                            </div>
                        </div>                   


                       

            <center>

                    <!-- ---------------------SHOW FILTERED HISTORY----------------------------------->
                    <h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="exp_history.php?view">> View full history</a></h2>
					<br>
                    
                    
                    		<?php
                    		
							require 'php/bimak_conn.php';
							$value = $_POST["search"];


								$search_qry = "SELECT * FROM expences WHERE date = '$value'";
                				$run_search = $conn->query($search_qry);


                				if($run_search && $run_search -> num_rows > 0){
							?>				
											<div class="row">
												
													<div class="table-responsive table--no-card m-b-30">
														<table class="table table-borderless table-striped table-earning">

															<thead>
																<tr>
																	<th>ID</th>
																	<th>Date</th>
																	<th>Category</th>
																	<th class="text-right">Amount</th>
																	<th>Description</th>
																	
																</tr>
															</thead>
															<?php

															while($row=$run_search ->fetch_assoc()){
																	$s_id = $row['id'];
																	$s_date = $row['date'];
																	$s_category = $row['category'];
																	$s_amount = $row['amount'];
																	$s_note = $row['note'];


															?>		
															<tbody>
																<?php			
																			echo "
																				<tr>
																					<td> $s_id </td>
																					<td> $s_date </td>
																					<td> $s_catgry </td>
																					<td> $s_amount </td>
																					<td> $s_note </td>
																					
																				</tr>
																				";
																?>				
															</tbody>
															
	
														<?php			
														}	
																			
								}			
								else{
									echo "No Records ! ";
																			
									}

													
													     ?>
														 
														</table>
													</div>
												</div>			 


					<!-- ------------------------------------------------------------------------------------>

					<!-- -----------------------CALCULATIONS ------------------------------------------------>

						<div class="table_entry">
        					<p> Numbers of Entries : 
                			<?php

                    			// calculate total entries
                    			$total_entries = "SELECT count(id) FROM expences WHERE date = '$value'";
                    			$run_entries = mysqli_query($conn, $total_entries);

                    			while($entries = mysqli_fetch_array($run_entries)){
                        			echo $entries['count(id)']; 
                    			}
                			?>
        					</p>

    					</div>

    					<div class="table_total">
        				<p> Total Amount &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp: Rs 

                		<?php

                    			// calculate total amount
                    		$total_amount = "SELECT sum(amount) FROM expences WHERE date = '$value'";
                    		$run_total = mysqli_query($conn, $total_amount);

                    		while($total = mysqli_fetch_array($run_total)){
                        		echo $total['sum(amount)'];
                    		}
                		?>
        				</p>

    					</div>


					<!--------------------------------------------------------------------------------------->

					<!---------------------------PIE CHART VIEW --------------------------------------------->

				<!-- insert PIE chart -->
				<div class="table-responsive table--no-card m-b-30">
					<div id="piechart">

						<p>Chart of Expences - Total </p>

								<?php
								//fetching data
							    $query = "SELECT category, SUM(amount)as s_amount FROM expences WHERE date = '$value' GROUP BY category";
								$chart_qry = mysqli_query($conn, $query);

								?> 

								<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
								<script type="text/javascript">

									google.charts.load("current", {packages:["corechart"]});
									google.charts.setOnLoadCallback(drawChart);
									function drawChart() {
										var data = google.visualization.arrayToDataTable([
										['Expence', 'Amount'],

										<?php
										// insert data into pie chart
											while($row = mysqli_fetch_array($chart_qry)){
											echo "[' ".$row["category"]." ', ".$row["s_amount"]." ],";
											}

										?>
							  
									]);

									var options = {
									//title: 'Expences chart',
									pieHole: 0.4,
									is3D: true,
									pieSliceText: 'label',
							  
									};

									var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
									chart.draw(data, options);
									}
								</script>
						<div id="donutchart" style="width: 900px; height: 600px;"></div>
				  

					</div> 


					<!--------------------------------------------------------------------------------------->
                         
			</center>

                         <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2019 Zanity Web Devs (pvt) Ltd. All rights reserved.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->

























