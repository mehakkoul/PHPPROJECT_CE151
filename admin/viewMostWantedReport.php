<?php
session_start();
if (empty($_SESSION['usertypea'])) {
      header("Location: ../index.php");
}
?>
<html>
<head>
<title>
 ALL REPORT | MISSING PERSONS REPORT | VIEW MOST WANTED REPORT - Online Crime Reporting System
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
			<h2><center><u>Report ~> Missing Persons Report ~> View Missing Persons Report</u></center></h2>
            <center>
            <table  >
                  <?php
                   include '../connect.php';
                   $idd=$_GET['id'];
                    $query=mysql_query("SELECT * FROM `wanted` WHERE  `name`='$idd'");
                   $query_run=mysql_fetch_array($query);
                    $photo1=$query_run['image'];
                    
                    echo"<tr><td><img src='../upload/".$photo1."' id='tb'></td></tr>";


                  ?>
                 

             </table>
             <table class="t">
                  <?php
                        include '../connect.php';

                   $idd=$_GET['id'];
                   $query=mysql_query("SELECT * FROM `wanted` WHERE  `name`='$idd'");
                   $query_run=mysql_fetch_array($query);
                   $ido=$query_run['IDno'];
                   $name=$query_run['name'];
                   $nickname=$query_run['nickname'];
                   $age=$query_run['age'];
                   $sex=$query_run['sex'];
                   $place=$query_run['location'];
                   $Descr=$query_run['description'];
                  
                  
                             
                              
                               echo "<tr style='background-color:#27ae60;color: #ffffff;'>
                              
                              <td>ID</td>
                                    <td>$ido</td>
                              </tr>
                              <tr style='background-color:#e9e9e9;font-size: 17;'>
							  <td>FULL NAME</td>
                                    <td>$name</td>
                              </tr>
                              <tr style='background-color:#e9e9e9;font-size: 17;'>
							  <td>NICK-NAME</td>
                                    <td>$nickname</td>
                              </tr>
                              <tr style='background-color:#e9e9e9;font-size: 17;'>
							  <td>AGE</td>
                                    <td>$age</td>
                              </tr>
                              <tr style='background-color:#e9e9e9;font-size: 17;'>
							  <td>SEX</td>
                                    <td>$sex</td>
                              </tr>
                              <tr style='background-color:#e9e9e9;font-size: 17;'>
							  <td>PLACE</td>
                                    <td>$place</td>
                              </tr>
                              <tr style='background-color:#e9e9e9;font-size: 17;'>
                              <td>DESCRIPTION</td>
                                    <td>$Descr</td>
                              </tr>";
                  ?>
                   </table>
                   <input onclick="window.print()" id="Button1" type="button" value="PRINT" style="background-color:#27ae60;" />                
                   
                 </center>
				 <br><br>


            </div>
        </div>

            <!-- Footer Section Starts Here -->
			<?php include_once 't_admin_footer.php'; 	?>
			<!-- Footer Section Ends Here -->



      </div>
</body>
</html>