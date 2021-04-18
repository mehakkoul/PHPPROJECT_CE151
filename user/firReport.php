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
        Add FIR - Online Crime Reporting System
    </title>
    <link rel="stylesheet" type="text/css" href="user_style.css">
</head>
<body>
<?php
    $naErr = $idErr =  $nErr = $pherr = "";
	
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

        <div class="content">
            
			<!-- Menu Section Starts Here -->
			<?php include_once 't_user_menu_firReport.php'; 	?>
			<!-- Menu Section Ends Here -->
			
			
			<hr>
            <div class="area1">
                <br>
                <div class="main1">
                    <div class="one1">
                        <div class="register1">
                            <center> <h2><u>Add First Information Report (FIR)</u><br></h2></center>
							<br><br>

                            <form action="firReport.php" method="POST" class="form1">
                                <center>

                                    <div>
                                        <label>PINCODE.</label>
                                        <input type="text" name="firno" placeholder="PINCODE." >
													  <font size="1" face="verdana" color="red">
                                     <span class="error">* <?php echo $idErr;?></span> </font>
                                        
                                    </div>

                                    <div>
                                        <label>ADDRESS</label>
                                        <input type="text" name="address" placeholder="INFORMATION ADDRESS" >
                                    </div>
                                    <div>
                                        <label>DISTRICT</label>
                                        <input type="text" name="district" placeholder="District">
                                    </div>
                                    <div>
                                        <label>NATIONALITY</label>
                                        <select name="choose" placeholder="INDIAN/OTHER" style="width:250px">
                                            <option></option>
                                            <option value="Foreign">INDIAN</option>
                                            <option value="Local">OTHER</option>
                                        </select>
										<font size="1" face="verdana" color="red">
                            
											<span class="error">* <?php echo $nErr;?></span> </font>
									  
                                    </div>

                                    <div>
                                        <label>PLACE</label>
                                        <input type="text" name="place" placeholder="Place of Occurance">
                                    </div>

                                    <div>
                                        <label>TYPE OF CRIME</label>
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
                                        <label style="width: 500px;text-align: left;">DESCRIPTION</label>
                                        </div> 
										<div><textarea class="textarea1" placeholder="Add Information Here" name="info"></textarea>
                                    </div>
                                    <div><br>
                                        <input type="submit" name="btn" class="btn" value="Add">

                                    </div>


                                </center>
                            </form>


							<font size="1" face="verdana" color="red">
                            <?php
                            extract($_POST);
                            if (isset($btn)) {
                            require '../connect.php';
                            $date=date('Y.m.d');
                            $query=mysql_query("INSERT INTO `fir` VALUES ('','$firno','$date','$address','$district','$choose','$place','$infotype','$info')");
                            if (!empty($query))
                            {
								?>
								<font size="1" face="verdana" color="green">
                            <?php
                            echo "F.I.R is Successful Added<br>";
							
                            }
                            else
                            {
                            echo mysql_error();
                            }
                            }
                            elseif (empty($firno)&&empty($date)&&empty($address)&&empty($district)&&empty($choose)&&empty($place)&&empty($infotype)&&empty($info))
                            {
                            echo "All Fields Required.";
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
		<?php include_once 't_user_footer.php'; 	?>
		<!-- Footer Section Ends Here -->

    </div>
</body>
</html>
