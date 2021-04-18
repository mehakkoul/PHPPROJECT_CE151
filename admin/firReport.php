<?php
session_start();
if (empty($_SESSION['usertypea'])) {
      header("Location: ../index.php");
}
?>
<html>
<head>
<title>
ALL REPORT | FIR REPORT - Online Crime Reporting System
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
			<h2><center><u>Report ~&gt; First Information Report (FIR)</u></center></h2>

          
                  
                  <center><table  width="40%" class='search'>
                   <tr style='background-color:#27ae60;color: #ffffff;'>
                   <th>S.No.</th><th>PINCODE.</th><th>INFORMAL ADDRESS</th><th>DISTRICT</th><th>VIEW</th>
                   </tr>

                  <?php
                   include '../connect.php';
                   $query=mysql_query("SELECT * FROM `fir`");
                   $count=0;
                   while($query_run=mysql_fetch_array($query)){
                   $firno=$query_run['firno'];
                   $address=$query_run['address'];
                   $district=$query_run['district'];
                   $count++;

                  echo"<tr style='background-color:#e9e9e9;font-size: 17;'>
                              
                                                      <td>$count</td>
                                                      <td>$firno</td>
                                                      <td>$address</td>
                                                      <td><center>$district</center></td>
                                                      <td><center><form action='viewfirReport.php?id=$firno' method='POST'><button class='input' value='$id'>View</button></form></center></td>
                                
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