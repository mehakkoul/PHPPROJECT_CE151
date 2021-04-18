<?php
session_start();
if (empty($_SESSION['usertypea'])) {
      header("Location: ../index.php");
}
?>
<html>
<head>
<title>
 ALL REPORT | FIR REPORT | VIEW FIR REPORT - Online Crime Reporting System
</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

      <div class="wrapper">
	        <!-- Header Section Starts Here -->
			<?php include_once 't_admin_header.php'; 	?>
			<!-- Header Section Ends Here -->

            <div class="content">
                  <div class="menu">
                       				<nav>
                    <ul>
                        <li>
                            <a href="index.php" data-caption="Home">Home</a>
                        </li>
                        <li>
                            <a href="add_user.php" data-caption="Add User">Add User</a>
                        </li>
                        <li>
                            <a href="delete_user.php" data-caption="Delete User">Delete User</a>
                        </li>
                        <li>
                            <a href="search_criminal.php" data-caption="Search">Search</a>
                        </li>
                        <li>
                            <a href="report.php" data-caption="Report">Report</a>
                        </li>
                        <li>
                            <a href="logout.php" data-caption="Logout">Logout</a>
                        </li>
                    </ul>
                </nav>
            </div><hr>
            <div class="area1">
			<br>
			<h2><center><u>Report ~&gt; F.I.R ~&gt; View F.I.R</u></center></h2>
            <center>			
			<table  class="t">
                   <tr style='background-color: #999999'>
                   </tr>
                  <?php
                        include '../connect.php';
                   $idd=$_GET['id'];
                   $query=mysql_query("SELECT * FROM `fir` WHERE  `firno`='$idd'");
                   $query_run=mysql_fetch_array($query);
                   $firno=$query_run['firno'];
                   $date=$query_run['date'];
                   $adress=$query_run['address'];
                   $district=$query_run['district'];
                   $choose=$query_run['choose'];
                   $place=$query_run['place'];
                   $infotype=$query_run['infotype'];
                   $info=$query_run['info'];
                              echo "
                              
                              <tr style='background-color:#27ae60;color: #ffffff;'>
                              
                              <td>PINCODE</td>
                                    <td>$firno</td>
                              </tr>
                              <tr style='background-color:#e9e9e9;font-size: 17;'>
                              <td>DATE</td>
                                    <td>$date</td>
                              </tr>
                              <tr style='background-color:#e9e9e9;font-size: 17;'>
							  <td>ADDRESS</td>
                                    <td>$adress</td>
                              </tr>
                              <tr style='background-color:#e9e9e9;font-size: 17;'>
							  <td>DISTRICT</td>
                                    <td>$district</td>
                              </tr>
                              <tr style='background-color:#e9e9e9;font-size: 17;'>
							  <td>CHOOSE</td>
                                    <td>$choose</td>
                              </tr>
                              <tr style='background-color:#e9e9e9;font-size: 17;'>
							  <td>PLACE</td>
                                    <td>$place</td>
                              </tr>
                              <tr style='background-color:#e9e9e9;font-size: 17;'>
							  <td>CRIME-TYPE</td>
                                    <td>$infotype</td>
                              </tr>
                              <tr style='background-color:#e9e9e9;font-size: 17;'>
							  <td>DESCRIPTION</td>
                                    <td>$info</td>
                              </tr>";
                  ?>
                   </table>
                    <input onclick="window.print()" id="Button1" type="button" value="PRINT" style="background-color:#27ae60;" />                
                  </center>


            </div>
        </div>

            <!-- Footer Section Starts Here -->
			<?php include_once 't_admin_footer.php'; 	?>
			<!-- Footer Section Ends Here -->
      </div>
</body>
</html>