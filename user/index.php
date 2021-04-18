<?php
error_reporting(E_ERROR);
session_start();
if (empty($_SESSION['usertypeu']))
{
       header("location: ../index.php");
}
?>
<html>
<head>
    <title>
        HOME - Online Crime Reporting System
    </title>
    <link rel="stylesheet" type="text/css" href="user_style.css">
</head>
<body>
 <? 
					
                $nameErr = $idErr =  $genderErr = $pherr = "";
               // define variables and set to empty values
					
					//$emailErr = $genderErr = $websiteErr $name = $email = $gender = $comment = $website = "";

					if ($_SERVER["REQUEST_METHOD"] == "POST") {
					  if (empty($_POST["IDno"])) {
						$idErr = "pincode is required";
					  } 
					  else {
						$idErr = test_input($_POST["IDno"]);
					  }
					  if (!preg_match("/[^0-9]/", '', $IDno)) {
						  $idErr = "Only numbers allowed";
						}
					  if (empty($_POST["name"])) {
						$nameErr = "Name is required";
					  } else {
						$name = test_input($_POST["name"]);}
						// check if name only contains letters and whitespace
						if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
						  $nameErr = "Only letters and white space allowed";
						}
					  
					 if (empty($_POST["sex"])) {
						$genderErr = "Gender is required";
					  } else {
						$gender = test_input($_POST["sex"]);
					  }
					  if (empty($_POST["sex"])) {
						$genderErr = "Gender is required";
					  } else {
						$gender = test_input($_POST["sex"]);
					  }
					  if (empty($_POST["phone"])) {
						$pherr = "phone no. is required";
					  } 
					  else {
						$pherr = test_input($_POST["phone"]);
					  }
					  if (!preg_match("/[^0-9]/", '', $phone)) {
						  $pherr = "Only numbers allowed";
						}
					  
					}
					
					function test_input($data) {
					  $data = trim($data);
					  $data = stripslashes($data);
					  $data = htmlspecialchars($data);
					  return $data;
					}

?>

    <div class="wrapper">

        <!-- Header Section Starts Here -->
        <?php include_once 't_user_header.php'; 	?>
		<!-- Header Section Ends Here -->

        <div class="content">
			<!-- Menu Section Starts Here -->
			<?php include_once 't_user_menu_h.php'; 	?>
			<!-- Menu Section Ends Here -->
			
			
			<hr>
            <div class="area1">
			<br>
                <div class="main1">
                    <div class="one1">
                        <div class="register1">
                            <center><h2><u>Add Complain Status</u><br></h2></center>
							<br><br>
                            <form action="index.php" method="POST" class="form1">
                                <center>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>PINCODE.</label>
                                            <input type="text" name="IDno" class="input" placeholder="PINCODE" required>
													  <font size="1" face="verdana" color="red">
                                                      <span class="error">* <?php echo $idErr;?></span> </font>
                                        </div>

                                        <div class="col-md-6">
                                            <label>FULL NAME</label>
                                            <input type="text" name="name" class="input" placeholder="Full Name" required>
											  <font size="1" face="verdana" color="red">
                                              <span class="error">* <?php echo $nameErr;?></span> </font>
									
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>SEX</label>
                                            <select name="sex" style="width:250px">
                                                <option></option>
                                                <option>Male</option>
                                                <option>Female</option>
												

                                            </select>
											<font size="1" face="verdana" color="red">
                            
											<span class="error">* <?php echo $genderErr;?></span> </font>
									  
                                        </div>
                                        <div class="col-md-6">
                                            <label>ADDRESS</label>
                                            <input type="text" name="adress" class="input" placeholder="Address" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                           <label> Phone No</label>
                                            <input type="text" name="phone" class="input" placeholder="Phone Number" required>
											<font size="1" face="verdana" color="red">
											<span class="error">* <?php echo $pherr;?></span> </font>
									
                                        </div>
                                        <div class="col-md-6">
                                            <label>OCCUPATION</label>
                                            <input type="text" name="occupation" class="input" placeholder="Occupation" required>
                                        </div>
                                    </div>
                                    
                                </center>
                                <div class="row">
								    <label>Complain</label>
                                    <textarea class="textarea1" placeholder="Add Complain Here." name="complain" required></textarea>
                                </div>
                                
                                <div class="row">  <br>                                  
                                    <center><input type="submit" name="btn" class="btn" value="Add"></center>
                                </div>
                            </form>

							<font size="1" face="verdana" color="red">
                            <?php

                            extract($_POST);
                            if (isset($btn)&&!empty($IDno)&&!empty($name)&&!empty($sex)&&!empty($adress)&&!empty($phone)&&!empty($occupation)&&!empty($complain))
                            {
                            require '../connect.php';
                            $date=date('Y.m.d');
                            $query=mysql_query("INSERT INTO `complain` VALUES ('','$IDno','$name','$sex','$adress','$phone','$occupation','time()','$date','$complain')");
                            if (!empty($query)) {
								?>
								<font size="1" face="verdana" color="green">
							<?php	
                            echo "Complain is Successfully Added.<br>";
							?></font>
                           
							<?php	
                            }
                            else
                            {
                            echo mysql_error();
                            }
                            }
                            elseif (isset($btn)&&empty($IDno)||empty($name)||empty($sex)||empty($adress)||empty($phone)||empty($occupation)||empty($complain))
                            {
								?>
								<font size="1" face="verdana" color="red">
							<?php
                            echo "All Fields Required.";
							?>
								</font>
							<?php
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
                <!--ADD HERE-->
            </div>
        </div>

        <!-- Footer Section Starts Here -->
		<?php include_once 't_user_footer.php'; 	?>
		<!-- Footer Section Ends Here -->



    </div>
</body>
</html>