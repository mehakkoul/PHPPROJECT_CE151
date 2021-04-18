<?php
session_start();
if (empty($_SESSION['usertypea'])) {
      header("Location: ../index.php");
}
?>
<html>
<html>
<head>
<title>
ALL REPORT - Online Crime Reporting System
</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="wrapper">

		<!-- Header Section Starts Here -->
        <?php include_once 't_admin_header.php'; 	?>
		<!-- Header Section Ends Here -->

		<div class="content">
			<!-- Menu Section Starts Here -->
			<?php include_once 't_admin_menu_Report.php'; 	?>
			<!-- Menu Section Ends Here -->
				
				<hr>
            <div class="area1">
			<br>
			<h1><center><u>Report</u></center><br></h1>
           
            	
            	
            	<table class="report" style="background-color:#27ae60;padding:5px;">
				<tr>
                              <td>Total Registered Criminal</td>
                              <td>
                                    <?php
                                    require '../connect.php';
                                    $query=mysql_query("SELECT * FROM `criminal`");
                                    $row=mysql_num_rows($query);
                                    echo $row;
                                    ?>
                              </td>

                              <td><center><form action="RegCriminalReport.php" methode="POST">
                                                <input type="submit" name="btn" class="btn" value="view">
                                          </form></center></td>
                        </tr>
						<tr><div></div></tr>
                        <tr>
                              <td>Total First Information Report (FIR)</td>
                              <td>
                                    <?php
                                    $query=mysql_query("SELECT * FROM `fir`");
                                    $row=mysql_num_rows($query);
                                    echo $row;
                                    ?>
                              </td>
                              <td><center><form action="firReport.php" methode="POST">
                                               <div> <input type="submit" name="btn" class="btn" value="view"><div>
                                          </form></center></td>
                        </tr>
						<tr><div></div></tr>
                        <tr>
                              <td>Total Complains Report</td>
                              <td>
                                    <?php
                                    $query=mysql_query("SELECT * FROM `complain`");
                                    $row=mysql_num_rows($query);
                                    echo $row;
                                    ?>
                              </td>
                            <td><center><form action="complainsReport.php" methode="POST">
                                             <div>   <input type="submit" name="btn" class="btn" value="view"></div>
                                          </form></center></td>
                        </tr>
						<tr><div></div></tr>
                        <tr>
                              <td>Total PostMortem Report</td>
                              <td>
                                    <?php
                                    $query=mysql_query("SELECT * FROM `postmortem`");
                                    $row=mysql_num_rows($query);
                                    echo $row;
                                    ?>
                              </td>
                              <td><center><form action="postmortemReport.php" methode="POST">
                                                <div><input type="submit" name="btn" class="btn" value="view"></div>
                                          </form></center></td>
                        </tr>
						<tr><div></div></tr>
                        <tr>
                              <td>Total Missing persons Report</td>
                              <td>
                                    <?php
                                    $query=mysql_query("SELECT * FROM `wanted`");
                                    $row=mysql_num_rows($query);
                                    echo $row;
                                    ?>
                                    
                              </td>
                              <td><center><form action="mostWantedReport.php" methode="POST">
                                              <div>   <input type="submit" name="btn" class="btn" value="view"></div>
                                          </form></center></td>                      
                         </tr>
						 <tr><div></div></tr>
                        <tr>
                              <td>Total Suspected People Report</td>
                              <td>
                                    <?php
                                    $query=mysql_query("SELECT * FROM `suspect`");
                                    $row=mysql_num_rows($query);
                                    echo $row;
                                    ?>
                              </td>
                              <td><center><form action="suspectedReport.php" methode="POST">
                                                <div><input type="submit" name="btn" class="btn" value="view"></div>
                                          </form></center></td>
                                 
                              
                        </tr>
                  </table>
            	


            </div>
        </div>

			<!-- Footer Section Starts Here -->
			<?php include_once 't_admin_footer.php'; 	?>
			<!-- Footer Section Ends Here -->



	</div>
</body>
</html>