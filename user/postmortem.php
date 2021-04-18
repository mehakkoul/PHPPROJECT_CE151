<?php
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
        ADD POSTMORTEM RECORD - Online Crime Reporting System
    </title>
    <link rel="stylesheet" type="text/css" href="user_style.css">
</head>
<body>

    <div class="wrapper">

		<!-- Header Section Starts Here -->
        <?php include_once 't_user_header.php'; 	?>
		<!-- Header Section Ends Here -->

        <div class="content">
			<!-- Menu Section Starts Here -->
			<?php include_once 't_user_menu_postmortem.php'; 	?>
			<!-- Menu Section Ends Here -->
			
			<hr>
            <div class="area1">
                              <div class="main1">
                    <div class="one1">
                        <div class="register1">
                            <center> <h2><u>Add PostMortem</u></h2></center>

                            <form action="postmortem.php" method="POST" enctype="multipart/form-data" class="form1">
                                <center>
                                    <div>
									<label>PICTURE</label>
									<input type="file" name="file">
									</div>
                                    <div>
                                        <label>FULL NAME</label>
                                        <input type="text" placeholder="Full Name" name="name" required>
                                    </div>
                                    <div>
                                        <label>SEX</label>
                                        <select name="sex" style="width:253px">
                                            <option>Male</option>
                                            <option>Female</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label>F.I.R No</label>
                                        <input type="text" placeholder="FIR No." name="FirNo" required>
                                    </div>
                                    <div>
                                        <label>RESULT OF MORTEM</label>
                                        <textarea class="textarea3" placeholder="Result of Mortem" name="ResultMortem" required></textarea>
                                    </div>
                                    <div>
                                        <label>DATE OF DEATH</label>
                                        <input type="text" placeholder="Date of death" name="DateDeath" required>
                                    </div>
                                    <div>
                                        <label>DESCRIPTION OF CASE</label>
                                        <textarea class="textarea3" placeholder="Descriptipn of Case" name="info" required></textarea>
                                    </div>
                                    <div>
                                        <label>PLACE</label>
                                        <input type="text" placeholder="Place" name="House" required>
                                    </div>
                                    <div>
                                        <label>DOCTOR's NAME</label>
                                        <input type="text" placeholder="Doctor's Name" name="Doctor" required>
                                    </div>
                                    <div>
                                        <input type="submit" name="btn" class="btn" value="Add">
                                    </div>
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
                            $sex=$_POST['sex'];
                            $name=$_POST['name'];
                            $FirNo=$_POST['FirNo'];
                            $ResultMortem=$_POST['ResultMortem'];
                            $DateDeath=date("Y/m/d");
                            $info=$_POST['info'];
                            $House=$_POST['House'];
                            $Doctor=$_POST['Doctor'];
                            $photo=$_FILES["file"]["name"];
                            $query=mysql_query("INSERT INTO `postmortem` VALUES ('','$photo', '$name','$sex','$FirNo','$ResultMortem','$DateDeath','$info','$House','$Doctor')");
                            if (!empty($query)) {
                            ?>
                            <font size="1" face="verdana" color="green">
                                <?php
                                echo "PostMortem Record is Successfully Added.";
                                ?>
                            </font><?php
                            }

                            if (file_exists("upload/" . $_FILES["file"]["name"]))
                            {

                            }
                            else
                            {
                            move_uploaded_file($_FILES["file"]["tmp_name"],
                            "../upload/" . $_FILES["file"]["name"]);


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

                                ?>
                            </font>

                        </div>
                    </div>
                </div>
                <!--ADDED HERE-->
            </div>
        </div>

		<!-- Footer Section Starts Here -->
		<?php include_once 't_user_footer.php'; 	?>
		<!-- Footer Section Ends Here -->



    </div>
</body>
</html>
