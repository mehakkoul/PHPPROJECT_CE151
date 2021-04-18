<?php
session_start();
if (empty($_SESSION['usertypea'])) {
      header("Location: ../index.php");
}
?>
<html>
<head>
<title>
ALL REPORT | SUSPECTED PEOPLE'S REPORT | VIEW SUSPECTED PEOPLE'S REPORT  - Online Crime Reporting System
</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

      <div class="wrapper">
		<!-- Header Section Starts Here -->
        <?php include_once 't_admin_header.php'; 	?>
		<!-- Header Section Ends Here -->

            <div class="content21">
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
			<h2><center><u>Report ~> Suspected People's Report ~> View Report</u></center></h2>
            
            <center>
			<table  class="t">
                   <tr style='background-color: #999999'>
                   </tr>
                  <?php
                        include '../connect.php';
                   $idd=$_GET['id'];
                   $query=mysql_query("SELECT * FROM `suspect` WHERE  `name`='$idd'");
                   $query_run=mysql_fetch_array($query);
                   $id=$query_run['id'];
                   $name=$query_run['name'];
                   $age=$query_run['age'];
                   $sex=$query_run['sex'];
                   $occupation=$query_run['occupation'];
                   $adress=$query_run['address'];
                   $h=$query_run['height'];
                   $w=$query_run['weight'];
                   $date=$query_run['date'];
                   $of=$query_run['officer'];
                   $remark=$query_run['remark'];
                            
                              echo "<tr style='background-color:#27ae60;color: #ffffff;'>
                                         <td>Id</td>
                                         <td>$id</td>
                                    </tr>
                                    <tr style='background-color:#e9e9e9;font-size: 17;'>
                                         <td>FULL NAME</td>
                                         <td>$name</td>
                                    
                                    <tr style='background-color:#e9e9e9;font-size: 17;'>
                                    
                                          <td>AGE</td>
                                          <td>$age</td>
                                   </tr>
                                   <tr style='background-color:#e9e9e9;font-size: 17;'>
								          <td>SEX</td>
                                          <td>$sex</td>
                                    </tr>
                                    <tr style='background-color:#e9e9e9;font-size: 17;'>      
										  <td>OCCUPTION</td>
                                          <td>$occupation</td>
                                   </tr>
                                   <tr style='background-color:#e9e9e9;font-size: 17;'>
                                          <td>HEIGHT</td>
                                          <td>$h</td>
                                   </tr>
                                   <tr style='background-color:#e9e9e9;font-size: 17;'>
                                   
                                          <td>WWEIGHT</td>
                                          <td>$w</td>
                                  </tr>
                                  <tr style='background-color:#e9e9e9;font-size: 17;'>
                                  
                                          <td>REMARKS</td>
                                          <td>$remark</td>
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