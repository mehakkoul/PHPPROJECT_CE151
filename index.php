<?php
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
			<?php include_once 't_menu_h.php'; 	?>
			<!-- Menu Section Ends Here -->
			
			<br>
            <div class="row">
                <br>

                <div class="col-sm-8">
					<!-- Main Content Section Starts Here -->
					<?php include_once 't_main_content_h.php'; 	?>
					<!-- Main Content Section Ends Here -->
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