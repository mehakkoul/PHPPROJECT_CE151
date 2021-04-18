<?php
session_start();
if (empty($_SESSION['usertypea'])) {
      header("Location: ../index.php");
}
?>
<html>
<head>
<title>
ALL REPORT | COMPLAINS REPORT - Online Crime Reporting System
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
			<h2><center><u>Report- Complains Report</u></center><br></h2>
          
                  
                  <center><table width="40%" class='search'>
                   <tr style='background-color:#27ae60;color: #ffffff;'>
                        <th>S.No</th><th>ID No</th><th>FULL NAME</th><th>SEX</th><th>ADDRESS</th><th>VIEW</th>
                   </tr>

                  <?php
                   include '../connect.php';
                   $query=mysql_query("SELECT * FROM `complain`");
                   $count=0;
                   while($query_run=mysql_fetch_array($query)){
                   $IDno=$query_run['IDno'];
                   $name=$query_run['name'];
                   $sex=$query_run['sex'];
                   $address=$query_run['adress'];
                   $count++;

                  echo"<tr style='background-color:#e9e9e9;font-size: 17;'>
                              
                              <td ><center>$count</center></td>
                              <td >$IDno</td>
                              <td >$name</td>
                              <td >$sex</td>
                              <td ><center>$address</center></td>
                              <td ><center><form action='viewComplainReport.php?id=$IDno' method='POST'>
							  <button class='input btn' value='$id'>View</button>
							  </form>
							  </center>
							  </td>
                                    
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