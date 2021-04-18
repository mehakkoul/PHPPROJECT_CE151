<?php
session_start();
if (empty($_SESSION['usertypeu']))
{
       header("location: ../index.php");
}
?>
<html>
<head>
    <title>
        ADD CRIMINAL RECORD - Online Crime Reporting System
    </title>
    <link rel="stylesheet" type="text/css" href="user_style.css">
</head>
<body>
		<?php
    $naErr = $nameErr  = $idErr =  $nErr = $pherr = "";
	
					if ($_SERVER["REQUEST_METHOD"] == "POST") {
					  if (empty($_POST["IDno"])) {
						$idErr = "pincode is required";
						echo $idErr;
					  } 
					  
					  if (!preg_match("/[^0-9]/", '', $IDno)) {
						  $idErr = "Only numbers allowed";
						  echo $idErr;
						}
					  if (empty($_POST["name"])) {
						$nameErr = "Name is required";
					  } else {
						$name = test_input($_POST["name"]);}
						// check if name only contains letters and whitespace
						if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
						  $nameErr = "Only letters and white space allowed";
						}
					  
					 
					 if (empty($_POST["choose"])) {
						$nErr = "Gender is required";
					  } else {
						$nErr = test_input($_POST["choose"]);
					  }
					  if (empty($_POST["choose"])) {
						$nErr = "Gender is required";
					  } else {
						$nErr = test_input($_POST["choose"]);
					  }
					  if (empty($_POST["infotype"])) {
						$naErr = "crime type is required";
					  } else {
						$naErr = test_input($_POST["infotype"]);
					  }
					  if (empty($_POST["infotype"])) {
						$naErr = "crime type  is required";
					  } else {
						$naErr = test_input($_POST["infotype"]);
					  }
					  if (empty($_POST["phone"])) {
						$pherr = "crime type  is required";
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

        <div class="content1">
            
			<!-- Menu Section Starts Here -->
			<?php include_once 't_user_menu_criminalform.php'; 	?>
			<!-- Menu Section Ends Here -->
			
			<hr>
            <div class="area1">
                <br><div class="main1">
						<div class="one1">
							<div class="register1">
								<center><h2><u>Add Criminal</u><br></h2></center>
								

								<form action="criminalform.php" method="POST" class="form1" enctype="multipart/form-data">
									
										<div>
											<div class="row">
												<label>PHOTO 1.</label>
												<input type="file" name="file" value="Capture">	
												<br>	
												<label>PHOTO 2.</label>
												<input type="file" name="file1" value="Capture">
												<br>
												<label>PHOTO 3.</label> 
												<input type="file" name="file2" value="Capture">
												<br>
											</div>
										</div>
										
											<div>
												<div>
													<label>PINCODE.</label>
													<input type="text" name="IDno" placeholder="PINCODE" required>
													  <span class="error">*</span> </font>
												</div>
												<div>
													<label>NAME</label>
													<input type="text" name="name" placeholder="Criminal Name" required>
													<font size="1" face="verdana" color="red">
													 <span class="error">* <?php echo $nameErr;?></span> </font>
													
												</div>
												<div>
													<label>NICKNAME</label>
													<input type="text" name="nickname" placeholder="Nickname" required>
												</div>
												<div>
													<label>SEX</label>
													<select name="sex" style="width:250px">
														<option>Male</option>
														<option>FemalE</option>
													</select>
													<font size="1" face="verdana" color="red">
											
															<span class="error">* <?php echo $nErr;?></span> </font>
												</div>
												<div>
													<label>AGE</label>
													<input type="number" name="age" placeholder="Age"  min="12" max="100" required style="width:250px">
												</div>
												<div>
													<label>OCCUPTION</label>
													<input type="text" name="occupation" placeholder="Occupation" required>
												</div>
												<div>
													<label>CRIME TYPE</label>
													<select name="infotype" placeholder="CRIME TYPE"  style="width:250px" >
														
															<option></option>
															<option value="Murdere">MURDER</option>
															<option value="Robbery">ROBBERY</option>
															<option value="Fraud">FRAUD</option>
															<option value="Theft">THEFT</option>
															<option value="Other">OTHER</option>
															
														</select>
														<font size="1" face="verdana" color="red">
											
															<span class="error">* <?php echo $naErr;?></span> </font>
												</div>
												<div>
													<label>ADDRESS</label>
													<input type="text" name="adress" placeholder="Address" required>
												</div>
												<div>
														
													<label>MOST WANTED</label> 
													<font size="1" face="verdana" color="green">  							
														<input type="radio" name="wanted" value="MostWanted" style="width:auto;">Yes &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;                      
														<input type="radio" name="wanted" value="NotMostWanted" style="width:auto;">No  
														</font>                                  
												</div>
												<div>
													<center> <input type="submit" name="btn" class="btn" value="Add"></center>
												</div>
										
											</div>
										
								</form>


								<?php


								if (isset($_POST['btn']))
								{

								if ((($_FILES["file"]["type"] == "image/gif")
								|| ($_FILES["file"]["type"] == "image/jpeg")
								|| ($_FILES["file"]["type"] == "image/jpg")
								|| ($_FILES["file"]["type"] == "image/png")
								|| ($_FILES["file"]["type"] == "image/pjpeg"))
								&& ($_FILES["file"]["size"] < 900000))
								{
								if ($_FILES["file"]["error"] > 0)
								{
								echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
								}
								else
								{
								extract($_POST);
								$image1=$_FILES["file"]["name"];
								$image2=$_FILES["file1"]['name'];
								$image3=$_FILES["file2"]['name'];

								require '../connect.php';
								$query=mysql_query("INSERT INTO `criminal` VALUES ('','$IDno','$name','$nickname','$sex','$age','$occupation','$crimetype','$adress','$wanted','$image1','$image2','$image3')");
								if (!empty($query)) {
									?>
									<font size="1" face="verdana" color="green">
											<?php
								echo "Criminal Record is Successful Added.<br>";
								?></font><?php
								}
								if (file_exists("../upload" . $_FILES["file"]["name"]))
								{

								}
								else
								{
								move_uploaded_file($_FILES["file"]["tmp_name"],
								"../upload/" . $_FILES["file"]["name"]);
								move_uploaded_file($_FILES["file1"]["tmp_name"],
								"../upload/" . $_FILES["file1"]["name"]);
								move_uploaded_file($_FILES["file2"]["tmp_name"],
								"../upload/" . $_FILES["file2"]["name"]);

								echo "";
								}
								}
								}
								else
								{?>
								<font size="1" face="verdana" color="red">
											<?php
								echo "Error! Invalid  Image File ";
								?></font><?php
								}
								}


								?>

							</div>
						</div>
						</div>
            </div>
        </div>

		<!-- Footer Section Starts Here -->
		<?php include_once 't_user_footer.php'; 	?>
		<!-- Footer Section Ends Here -->



    </div>
</body>
</html>