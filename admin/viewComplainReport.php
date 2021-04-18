<?php
session_start();
if (empty($_SESSION['usertypea'])) {
      header("Location: ../index.php");
}
?>
<html>
<head>
    <title>
        ALL REPORT | Complains Report - Online Crime Reporting System
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
                <h2><center><u>Report - Complains Report - View Complain Report</u></center></h2>
                <center>
                    <table class="t">
                        <tr style='background-color: #999999'></tr>
                        <?php
                        include '../connect.php';
                        $idd=$_GET['id'];
                        $query=mysql_query("SELECT * FROM `complain` WHERE  `IDno`='$idd'");
                        $query_run=mysql_fetch_array($query);
                        $ido=$query_run['IDno'];
                        $name=$query_run['name'];
                        $sex=$query_run['sex'];
                        $adress=$query_run['adress'];
                        $phone=$query_run['phone'];
                        $occupation=$query_run['occupation'];

                        $complain=$query_run['complain'];

                        echo "
                        <tr style='background-color:#27ae60;color: #ffffff;'>
                            <td>PINCODE.</td>
                            <td>$ido</td>
                        </tr>
                        <tr style='background-color:#e9e9e9;font-size: 17;'>
                            <td>NAME</td>
                            <td>$name</td>
                        </tr>
                        <tr style='background-color:#e9e9e9;font-size: 17;'>
                            <td>SEX</td>
                            <td>$sex</td>
                        </tr>
                        <tr style='background-color:#e9e9e9;font-size: 17;'>
                            <td>ADDRESS</td>
                            <td>$adress</td>
                        </tr>
                        <tr style='background-color:#e9e9e9;font-size: 17;'>
                            <td>PHONE NO.</td>
                            <td>$phone</td>
                        </tr>
                        <tr style='background-color:#e9e9e9;font-size: 17;'>
                            <td>OCCUPTION</td>
                            <td>$occupation</td>
                        </tr>

                        </tr>
                        <tr style='background-color:#e9e9e9;font-size: 17;'>
                            <td>COMPLAIN</td>
                            <td>$complain</td>
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