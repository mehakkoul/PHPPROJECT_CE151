<?php
error_reporting(E_ERROR);
session_start();
if (empty($_SESSION['usertypea'])) {
      header("Location: ../index.php");
}
?>
<html>
<head>
    <title>
        ADD NEW USER - Online Crime Reporting System
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
 <?php include_once 't_admin_menu_AddUser.php'; 	?>
 <!-- Menu Section Ends Here -->
 
 <hr>
            <div class="area1"><br>
                <div class="main1">
                    <div class="one1">
                        <div class="register1">
                            <h1><center><u>Add User</u></center><br></h1>
                            <center>
                                <form action="add_user.php" method="POST" class="form1">
                                 <!--   added starts here -->
											<div class="row">
                                                    <label>NAME</label>
                                                    <input type="text" name="fname" placeholder="Full Name" required>  
                                                                                               
                                            </div>
                                            <div class="row">
                                                <label>SEX</label>
                                                <select name="sex" style="width:282px">
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                </select>
                                            </div>
                                            <div class="row">
                                                <label>AGE</label>
                                                <input type="number" name="age" placeholder="Age" min="12" max="100" required style="width:282px">
                                            </div>
                                            <div class="row">
                                                <label> DOB </label>
                                                <input type="text" name="dob" placeholder="Date of Birth" required>
                                            </div>
                                            <div class="row">
                                                <label>PHONE NO.</label>
                                                <input type="phone" name="phone" placeholder="Phone No." required>
                                            </div>
                                            <div class="row">
                                                <label>ADDRESS</label>
                                                <input type="text" name="address" placeholder="Address" required>
                                            </div>
											<div class="row">
                                                <label>EMAIL ID</label>
                                                <input type="text" name="emailid" placeholder="Email Id" required>
                                            </div>
											<div class="row">
                                                <label> USERNAME </label>
                                                <input type="text" name="username" placeholder="Username" required>
                                            </div>
											<div>
                                            <label>Type of User</label>
                                            <select name="usertype" type="select" style="width:320px" required>
                                                <option>user</option>
                                                <option>admin</option>
                                            </select>
                                        </div>
                                            <div class="row">
                                                <label> PASSWORD </label>
                                                <input type="password" name="pass" placeholder="Password" required> 
                                            </div> 
											<div><label></label><input type="submit" name="btn" class="btn" value="Add User"></div>
                                        
                                        
                                    


                                </form>
                            </center>


                            <?php
								extract($_POST);
								if (isset($btn))
								{
									require '../connect.php';
									$query=mysql_query("INSERT INTO `login` (`name`, `sex`, `age`,  `dob`,  `phone`, `address`, `email`, `username`, `usertype`, `password`) VALUES
										 ('$fname', '$sex', '$age', '$dob', '$phone', '$address', '$emailid', '$username', 'user', '$pass')");

									if (!empty($query)) 
									{
										echo "<script>alert('Registered Successfully. <br>');</script>";
										echo "New User is Successful Added. <br>";    		
									}
									else
									{
										echo "<script>alert('Username Already Registered');</script>";
										echo "Username Already Registered. <br>";;
											
									} 
								}
                            ?>
                            </div></div></div>
                            <!--here-->
                        </div>
                    </div>

                    <!-- Footer Section Starts Here -->
 		<?php include_once 't_admin_footer.php'; 	?>
 		<!-- Footer Section Ends Here -->



                </div>
</body>
</html>