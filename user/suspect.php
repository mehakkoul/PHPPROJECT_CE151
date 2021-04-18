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
        ADD SUSPECT RECORD - Online Crime Reporting System
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
			<?php include_once 't_user_menu_suspect.php'; 	?>
			<!-- Menu Section Ends Here -->
			
			<hr>
            <div class="area1">
                <br>
                <div class="main1">
                    <div class="one1">
                        <div class="register1">
                            <center> <h2><u>Add Suspected People</u><br></h2></center>

                            <form action="suspect.php" method="POST" class="form1">
                                <center>
                                    <div>
                                        <label>FULL NAME</label>
                                        <input type="text" name="name" placeholder="Full Name" required>
										<font size="1" face="verdana" color="red">
                                     <span class="error">* <?php echo $nameErr;?></span> </font>
									
                                    </div>
                                    <div>
                                        <label>AGE</label>
                                        <input type="number" name="age" placeholder="Age" required max="100" min="17" style="width:253px">
                                    </div>
                                    <div>
                                        <label>SEX</label>
                                        <select name="sex" style="width:253px">
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
										<font size="1" face="verdana" color="red">
                            
											<span class="error">* <?php echo $genderErr;?></span> </font>
									  
                                    </div>
                                    <div>
                                        <label>OCCUPATION</label>
                                        <input type="text" name="occupation" placeholder="Occupation" required>
                                    </div>
                                    <div>
                                        <label>ADDRESS</label>
                                        <input type="text" name="address" placeholder="Address" required style="width:253px">
                                    </div>
                                    <div>
                                        <label>HEIGHT</label>
                                        <input type="number" name="height" placeholder="Height" required style="width:253px">
                                    </div>
                                    <div>
                                        <label>WEIGHT</label>
                                        <input type="number" name="weight" placeholder="Weight" required style="width:253px">
                                    </div>
                                    <div>
                                        <label>OFFICIER IN CHARGE</label>
                                        <input type="text" name="officer" placeholder="Officer in Charge" required>
                                    </div>
                                    <div>
                                        <label>ARREST DATE</label>
                                        <input type="text" name="arrestdate" placeholder="Arrest Date" required>

                                    </div>
                                    <div>
                                        <label>REMARKS</label>
                                        <textarea class="textarea4" placeholder="Add Comment" name="remack" required style="width:253px">
                                        </textarea>
                                    </div>
                                    <div>
                                        <input type="submit" name="btn" class="btn" value="Add">
                                    </div>
                                </center>


                            </form>


                            <?php
                            extract($_POST);
                            if (isset($btn)&&!empty($name)&&!empty($age)&&!empty($sex)&&!empty($occupation)&&!empty($address)&&!empty($height)&&!empty($weight)&&!empty($officer)&&!empty($remack))
                            {
                            require '../connect.php';
                            $date=date('Y.m.d');
                            $query=mysql_query("INSERT INTO `suspect` VALUES ('','$name','$age','$sex','$occupation','$address','$height','$weight','time()','$date','$officer','$remack')");
                            if (!empty($query)) {?>
								<font size="1" face="verdana" color="green">
							<?php
                            echo "Suspect Record is Successfully Added.";
							?>
								</font>
							<?php
                            
                            }
                            else
                            {
                            echo mysql_error();
                            }
                            }
                            if (isset($btn)&&empty($name)||empty($age)||empty($sex)||empty($occupation)||empty($address)||empty($height)||empty($weight)||empty($officer)||empty($remack)) 
							{?>
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
                        </div>
                    </div>
                </div>
                <!--added here-->
            </div>
        </div>

        <!-- Footer Section Starts Here -->
		<?php include_once 't_user_footer.php'; 	?>
		<!-- Footer Section Ends Here -->



    </div>
</body>
</html>
