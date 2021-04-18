<?php
session_start();
if (empty($_SESSION['usertypea'])) {
      header("Location: ../index.php");
}
?>
<html>
<head>
    <title>
        DELETE USER - Online Crime Reporting System
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
			<?php include_once 't_admin_menu_DeleteUser.php'; 	?>
			<!-- Menu Section Ends Here -->
			<hr>
            <div class="area1">
                <br>
                <div class="main1">
                    <div class="one1">
                        <div class="register1">

                            <center><h1><u>Delete User</u><br></h1></center>
                            <center>
                                <form action="delete_user.php" method="POST" class="form1">

                                    <div>
                                        <label style="width:40%">Select User Id</label>
                                        <select placeholder="enter user name">
                                            <option></option>
                                            <?php
                                            require '../connect.php';
                                            $query=mysql_query("SELECT * FROM `login` WHERE `usertype`='user'");
                                            while ($row=mysql_fetch_array($query)) {
                                            $username=$row['username'];
                                            echo "
                                            <option>$username</option>";
                                            }
                                            ?>

                                        </select>

                                    </div>
									<div>
									<label style="width:40%"></label>
									<input type="submit" name="btn" class="btn" value="Delete User">
									</div>
                                    



                                </form>
                            </center>

                            <font size="2" face="verdana" color="green">
                                <?php
                                extract($_POST);
                                if (isset($btn)) {
                                $query=mysql_query("DELETE FROM `login` WHERE `username`='$username'");
                                if (!empty($query)) {
                                echo "User Deleted Successfully<br><br>

                                <a href='delete_user.php'>Click Here to Refresh page</a>";
                                }
                                else
                                {
                                echo mysql_error();
                                }
                                }
                                else
                                {
                                echo mysql_error();
                                }
                                ?>
                            </font>
                        </div>
                    </div>
                </div>

            </div>
        </div>

			<!-- Footer Section Starts Here -->
			<?php include_once 't_admin_footer.php'; 	?>
			<!-- Footer Section Ends Here -->



    </div>
</body>
</html>