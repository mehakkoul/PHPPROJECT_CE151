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
        SEARCH - Online Crime Reporting System
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
			<?php include_once 't_user_menu_search.php'; 	?>
			<!-- Menu Section Ends Here -->

			
			<hr>
            <div class="area1">
                <br>
                <div class="main1">
                    <div class="one1">
                        <div class="register1">
                            <center><h2><u>Search</u><br><br></h2></center>
                                <center>                                    
                                        <form action="result.php" method="POST">
                                            <div>
                                                <input type="text" name="search" placeholder="Enter Name/ID no of Criminal...">
                                                <input type="submit" name="btn" class="btn" value="Search">
                                                
                                            </div>
                                        </form>
                                </center>



                        </div>
                    </div>
                </div>
                <!-- ADDED HERE-->
            </div>
        </div>

        <!-- Footer Section Starts Here -->
		<?php include_once 't_user_footer.php'; 	?>
		<!-- Footer Section Ends Here -->



    </div>
</body>
</html>
