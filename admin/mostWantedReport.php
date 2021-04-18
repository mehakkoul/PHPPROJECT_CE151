<?php
session_start();
if (empty($_SESSION['usertypea'])) {
      header("Location: ../index.php");
}
?>
<html>
<head>
<title>
ALL REPORT | MOST WANTED REPORT - Online Crime Reporting System
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
            <div class="area1"><br>
			<h2><center><u>Report- Missing Persons Report</u></center></h2>
          
                  
                  <center><table width="40%" class='search'>
                   <tr style='background-color:#27ae60;color: #ffffff;'>
                   <th>S.No.</th><th>NAME</th><th>NICK-NAME</th><th>AGE</th><th>SEX</th><th>PLACE</th><th>VIEW</th>
                   </tr>

                  <?php
                   include '../connect.php';
                   $query=mysql_query("SELECT * FROM `wanted`");
                   $count=0;
                   while($query1=mysql_fetch_array($query)){
                   $name=$query1['name'];
                   $nick=$query1['nickname'];
                   $sex=$query1['sex'];
                   $age=$query1['age'];
                   $place=$query1['location'];
                   $count++;

                  echo"<tr style='background-color:#e9e9e9;font-size: 17;'>
                             
                                                      <td>$count</td>
                                                      <td>$name</td>
                                                      <td>$nick</td>
                                                      <td>$sex</td>
                                                      <td><center>$age</center></td>
                                                      <td><center>$place</center></td>
                                                     <td><center><form action='viewMostWantedReport.php?id=$name' method='POST'><button class='input' value='$id'>View</button></form></center></td>
                                    
                        </tr>";
                  
                  }
                  ?>
                   </table></center>


            </div>
        </div>

            <!-- Footer Section Starts Here -->
			<?php include_once 't_admin_footer.php'; 	?>
			<!-- Footer Section Ends Here -->



      </div>
</body>
</html>