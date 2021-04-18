<?php
session_start();
if (empty($_SESSION['usertypea'])) {
      header("Location: ../index.php");
}
?>
<html>
<html>
<head>
    <title>
        SEARCH CRIMINAL - Online Crime Reporting System
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
			<?php include_once 't_admin_menu_Search.php'; 	?>
			<!-- Menu Section Ends Here -->
			
			
			<hr>
            <div class="area1">
                <br>
                <div class="main1">
                    <div class="one1">
                        <div class="register1">
                            <h1><center><u>Search Criminal</u></center><br></h1>

                            <center>
                               
                                        <form action="result.php" method="POST">
                                            
                                            <div>
                                                <input type="text" name="search" placeholder="Enter Name/ID no of Criminal">
                                                <input type="submit" name="btn" class="btn" value="Search">
                                            </div>
                                            
                                        </form>
                                 


                            </center>
                            <!--here-->

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
