<?php
error_reporting(E_ERROR);
session_start();
if (empty($_SESSION['usertypeu']))
{
       header("location: ../index.php");
}
?>
<html>
<html>
<head>
    <title>
        ADD MOST WANTED RECORD - Online Crime Reporting System
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
					  if (empty($_POST["age"])) {
						$pherr = "age is required";
					  } 
					  else {
						$pherr = test_input($_POST["age"]);
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
			<?php include_once 't_user_menu_wanted.php'; 	?>
			<!-- Menu Section Ends Here -->
			
			<hr>
            <div class="area1">
                <br>
                <div class="main1">
                    <div class="one1">
                        <div class="register1">
                            <center><h2><u>Missing Persons</u></h2></center>

                            <form action="wanted.php" method="POST" enctype="multipart/form-data" class="form1">
                                <center>
                                    <div>
                                            <label>UPLOAD PICTURE</label>
                                                <input type="file" name="file">
                                        </div>
                                        <div>
                                            <label>FULL NAME Name</label>
                                                <input type="text" placeholder="Full Name" name="name" required>
																<font size="1" face="verdana" color="red">
																		<span class="error">* <?php echo $nameErr;?></span> </font>
									
                                        </div>
                                        <div>
                                            <label>NICK NAME</label>
                                                <input type="text" placeholder="Nick Name" name="nickname" required>
                                        </div>
                                        <div>
                                            <label>AGE</label>
                                                <input type="text" placeholder="Age" name="age" required>
												<font size="1" face="verdana" color="red">
                            	<span class="error">* <?php echo $pherr;?></span> </font>
									
                                        </div>
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
                                        <div>
                                            <label>PLACE</label>
                                                <input type="text" placeholder="Place" name="place" required>
                                        </div>

                                        <div>
                                            <label>DESCRIPTION</label>
                                                <textarea class="textarea3" placeholder="Description" name="description" required></textarea>
                                        </div>

                                    <div><input type="submit" name="btn" class="btn" value="Add"></div>
                                    
                                </center>


                            </form>

                            <?php
                            require '../connect.php';
                            if (isset($_POST['btn'])) {

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
                            $name=$_POST['name'];
                            $date=date("Y/m/d");
                            $price=$_POST['price'];
                            $type=$_POST['type'];
                            $nickname=$_POST['nickname'];
                            $upload=$_FILES["file"]["name"];
                            $age=$_POST['age'];
                            $sex=$_POST['sex'];
                            $place=$_POST['place'];
                            $description=$_POST['description'];
                            $query=mysql_query("INSERT INTO `wanted` VALUES ('','$name','$nickname','$sex','$age','$date','$place','$description','$upload')");
                            if (!$query) {
                            echo mysql_error();
                            }

                            if (file_exists("upload/" . $_FILES["file"]["name"]))
                            {

                            }
                            else
                            {
                            move_uploaded_file($_FILES["file"]["tmp_name"],
                            "../upload" . $_FILES["file"]["name"]);
							?>
                            <font size="1" face="verdana" color="green">
                                <?php
                            echo " Record is Successfully Added.";
							?>
                            </font><?php
                            }
                            }
                            }
                            else
                            {?>
                            <font size="1" face="verdana" color="red">
                                <?php
                            echo "Error! Invalid  Image File ";
                            }
                            }

                            ?></font>
                        </div>
                    </div>
                </div>
                <!--added Here-->
            </div>
        </div>

        <!-- Footer Section Starts Here -->
		<?php include_once 't_user_footer.php'; 	?>
		<!-- Footer Section Ends Here -->



    </div>
</body>
</html>

