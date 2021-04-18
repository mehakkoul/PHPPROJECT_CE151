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
				<form action="result.php" method="POST">
                        
                        <div>
                              <input type="text" name="search" placeholder="Enter Name/ID no of Criminal...">
							  <input type="submit" name="btn" class="btn" value="Search">
                        </div>
                        
                  </form>    
            </center>
                  </div></div></div>
				                  <br><br><br>
<!--Added Here-->
                  
                  <?php
                  extract($_POST);
                  if (isset($btn)&&!empty($search)) {
                        require '../connect.php';
                        $query=mysql_query("SELECT * FROM `criminal` WHERE `name` LIKE '%$search%' ||  `IDno` LIKE '$search' ");
                        $row=mysql_num_rows($query);
                        if ($row==0) {
                              echo "Result not found";
                        }
                        else
                        {
                              echo "<table class='search'>
									<tr style='background-color:#27ae60;color: #ffffff;'>
												<th>IDno</th>
                                                <th>NAME</th>
                                                <th>NICK NAME</th>
                                                <th>SEX</th>
                                                <th>AGE</th>
                                                <th>OCCUPATION</th>
                                                <th>CRIME TYPE</th>
                                                <th>ADDRESS</th>
                                            </tr>";
                              while ($fetch=mysql_fetch_array($query)) {
                                    $name=$fetch['name'];
                                    $IDno=$fetch['IDno'];
                                    $nickname=$fetch['nickname'];
                                    $age=$fetch['age'];
                                    $sex=$fetch['sex'];
                                    $occupation=$fetch['occupation'];
                                    $adress=$fetch['adress'];
                                    $type=$fetch['crimetype'];
                                    echo "
                                          <tr style='background-color:#e9e9e9;font-size: 17;'>
                                                <td>$IDno</td>
                                                <td>$name</td>
                                                <td>$nickname</td>
                                                <td>$sex</td>
                                                <td>$age</td>
                                                <td>$occupation</td>
                                                <td>$type</td>
                                                <td>$adress</td>
                                          </tr>
                                    ";

                              }
                              echo "</table>";
                              
                        }
                  }
                  else
                  {
                        echo mysql_error();
                  }
                  ?>

            </div>
        </div>

        <!-- Footer Section Starts Here -->
		<?php include_once 't_user_footer.php'; 	?>
		<!-- Footer Section Ends Here -->



      </div>
</body>
</html>