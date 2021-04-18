<?php
session_start();
if (empty($_SESSION['usertypea'])) {
      header("Location: ../index.php");
}
?>
<html>
<head>
    <title>
        SEARCH | FIR REPORT - Online Crime Reporting System
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
				<div class="main1">
                    <div class="one1">
                        <div class="register1">
                <h2><center><u>Search Criminal -> Result</u></center><br></h2>

                <center>                   
                        
                            <form action="result.php" method="POST">
                                <div></div>
                                <div>
                                    <input type="text" name="search" placeholder="Enter Name/ID no of Criminal...">
									<input type="submit" name="btn" class="btn" value="Search">									
                                </div>
                                
                            </form>
                        
                    


                </center>
				            </div></div></div>
                <br><br><br>

                <?php
                extract($_POST);
                if (isset($btn)&&!empty($search)) {
                require '../connect.php';
                $query=mysql_query("SELECT * FROM `criminal` WHERE `name` LIKE '%$search%' ||  `IDno` LIKE '$search' ");
                $row=mysql_num_rows($query);
                if ($row==0) {
                echo "Result not found";
                }
                else
                {
                echo "<table class='search'>
                    <tr style='background-color:#27ae60;color: #ffffff;'>
                        <th>ID No.</th>
                        <th>NAME</th>
                        <th>NICK-NAME</th>
                        <th>SEX</th>
                        <th>AGE</th>
                        <th>OCCUPTION</th>
                        <th>CRIME-TYPE</th>
                        <th>ADDRESS</th>
                    </tr>";
                    while ($fetch=mysql_fetch_array($query)) {
                    $name=$fetch['name'];
                    $IDno=$fetch['IDno'];
                    $nickname=$fetch['nickname'];
                    $age=$fetch['age'];
                    $sex=$fetch['sex'];
                    $occupation=$fetch['occupation'];
                    $adress=$fetch['adress'];
                    $type=$fetch['crimetype'];
                    echo "
                    <tr style='background-color:#e9e9e9;font-size: 17;'>
                        <td>$IDno</td>
                        <td>$name</td>
                        <td>$nickname</td>
                        <td>$sex</td>
                        <td>$age</td>
                        <td>$occupation</td>
                        <td>$type</td>
                        <td>$adress</td>
                    </tr>
                    ";

                    }
                    echo "
                </table>";

                }
                }
                else
                {
                echo mysql_error();
                }
                ?>

            </div>
		</div>
		
			<!-- Footer Section Starts Here -->
			<?php include_once 't_admin_footer.php'; 	?>
			<!-- Footer Section Ends Here -->
	</div>
</body>
</html>