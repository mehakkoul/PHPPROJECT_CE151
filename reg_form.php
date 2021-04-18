<?php
require("PHPMailer_5.2.0/class.phpmailer.php");
error_reporting(E_ERROR);
session_start();
	if ($_SESSION['usertypea']) {
		header("Location: ./admin");
	}
	else if ($_SESSION['usertypeu']) {
		header("Location: ./user");
	}
?>
<html>
<head>
    <title>
        Online Crime Reporting System
    </title>
    <link rel="stylesheet" type="text/css" href="mainstyle.css">
</head>
<body>

    <div class="wrapper">
        <!-- Header Section Starts Here -->
        <?php include_once 't_header.php'; 	?>
		<!-- Header Section Ends Here -->
		
		
        <div class="content">
            <!-- Menu Section Starts Here -->
			<?php include_once 't_menu_reg_form.php'; 	?>
			<!-- Menu Section Ends Here -->
			
			<br>
            <div class="row">
                <br>

                <div class="col-sm-8">
                    <div class="row">
                        <div class="col-sm-12 register1" style="border: 1px solid #72b372; padding: 1px;">
                            <div style="background-color:antiquewhite; border: 7px solid #72b372; border-radius: 1px; padding: 10px; background-color: #F0F0F0;">

                                <center>
                                    <!--	Reg_Form -->
                                    <h3 class="form-signin-heading">
                                       <p><font size="5" face="verdana" color="black" ><strong><u>Registration Form</u></strong><br><br> </font></p>
                                    </h3>									
                                    <form action="reg_form.php" method="POST" class="form1">

                                        <div class="row">
                                            <!--<div class="row">
                                                <label>UPLOAD PICTURE</label>
                                                 <input type="file" name="file">
                                            </div>-->
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
											
											<h3 class="form-signin-heading">
                                             </h3>
											<h3 class="form-signin-heading">
                                            <center><p><font size="3" face="verdana" color="black" ><strong><u>Log-in details</u></strong><br><br> </font></p>
                                            </center>
											</h3>
									
											 
                                            <div class="row">
                                                <label>EMAIL ID</label>
                                                <input type="text" name="emailid" placeholder="Email Id" required>
                                            </div>
                                            <div class="row">
                                                <label> USERNAME </label>
                                                <input type="text" name="username" placeholder="Username" required>
                                            </div>
                                            <div class="row">
                                                <label> PASSWORD </label>
                                                <input type="password" name="pass" placeholder="Password" required> 
                                            </div>
                                            <div class="row">
												<!--<label> RETYPE PASSWORD</label>-->
												<!--<input type="password" name="rpass" placeholder="Retype-Password" required>-->
                                            </div>
                                            <div class="row">
                                                <center> <input type="submit" name="btn" class="btn" value="Submit"></center>
                                            </div>

											<!--Added starts-->
											<font size="1" face="verdana" color="red">
                                            <?php
											
                                            extract($_POST);
                                            if (isset($btn)) 
											{
												require 'connect.php';
												$queryCheck=mysql_query("SELECT * FROM `login` WHERE email = '$emailid'");
												

												if (mysqli_num_rows($queryCheck) > 0) 
												{
													//echo "<script>alert('Email Id Already Registered');</script>";
													echo "Email Id Already Registered. <br>";
												}
												else
												{
													//echo "<script>alert('Email Id not Registered');</script>";
													$query=mysql_query("INSERT INTO `login` (`name`, `sex`, `age`,  `dob`,  `phone`, `address`, `email`, `username`, `usertype`, `password`) VALUES
																					  ('$fname', '$sex', '$age', '$dob', '$phone', '$address', '$emailid', '$username', 'user', '$pass')");

													if (!empty($query)) 
													{
													//	echo "<script>alert('Registered Successfully. <br>');</script>";
														echo "Registered Successfully. <br>";														
													}
													else
													{
													//	echo "<script>alert('Username Already Registered');</script>";
														echo "Username Already Registered. <br>";;
														
													}
												}												
											}
											
											?>
											
											
                                            <br><br>
                                        </font></p>
										
										<!-- added  ends-->
											
											
											
                                        </div>

                                    </form>



                                </center>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">

                        <div class="col-md-offset-1 col-sm-10" style="background-color:palevioletred; border: 1px solid yellow; padding: 10px;">
                            <!-- Login Panel Section Starts Here -->
							<?php include_once 't_login_panel.php'; 	?>
							<!-- Login Panel Section Ends Here -->
							
                            <br><br><br>

								<!-- NewsFlash Section Starts Here -->
								<?php include_once 't_news_flash.php'; 	?>
								<!-- NewsFlash Section Ends Here -->
                        </div>


                    </div>
                </div>
                <br>


            </div>


        </div>
			<!-- Footer Section Starts Here -->
			<?php include_once 't_footer.php'; 	?>
			<!-- Footer Section Ends Here -->




    </div>

</body>
</html>

