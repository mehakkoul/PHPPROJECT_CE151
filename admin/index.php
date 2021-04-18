<?php
session_start();
if (empty($_SESSION['usertypea'])) {
      header("Location: ../index.php");
}
?>
<html>
<head>
<title>
ADMIN PANEL - Online Crime Reporting System
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
			<?php include_once 't_admin_menu_h.php'; 	?>
			<!-- Menu Section Ends Here -->
			
			
			<hr>
            <div class="area1"><br>
			<h1><center><u>Welcome Adminstrator</u></center><br></h1>
            	
            	<divclass="registry">
            		




            	</div>
                
            	
            	
            	<?php
            	extract($_POST);
            	if (isset($btn)) {
            		require '../connect.php';
            		$date=date('Y.m.d');
            		$query=mysql_query("INSERT INTO `postmortem` VALUES ('','$name','$sex','$FirNo','$ResultMortem','$DateDeath','$info','$House','$Doctor')");
            		if (!empty($query)) {
            			echo "Postmortem Successfull Added...<br>";
            		}
            		else	
            		{
            			echo mysql_error();
            		}
            	}
            	else
            	{
            		echo mysql_error();
            	}
            	?>


            
        </div>

			<!-- Footer Section Starts Here -->
			<?php include_once 't_admin_footer.php'; 	?>
			<!-- Footer Section Ends Here -->



	</div>
</body>
</html>