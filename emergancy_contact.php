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
			<?php include_once 't_menu_contact.php'; 	?>
			<!-- Menu Section Ends Here -->
			
			
			<br>
            <div class="row">
                <br>
                <div class="col-sm-8">
                    <div class="row">
                        <div style="padding:10px;">
                            <div style="text-align:center">
                                <p><font size="5" face="verdana" color="black"><strong><u>Emergency Contacts</u></strong><br><br> </font></p>
                            </div>
                            <div>
                                <p><font size="4" face="verdana" color="blue"><u>District Collector Officers:</u> <br> </font></p>
                            </div>
                            <div>
                                <p><font size="2" face="verdana" color="green">Jammu&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0191-2544366,94191-51450<br></font></p>
                            </div>
                            <div>
                                <p><font size="2" face="verdana" color="green">Samba&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;01923-241141,94692-14362<br></font></p>
                            </div>
                            <div>
                                <p><font size="2" face="verdana" color="green">Kathua&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;01922-234007,94191-57484<br></font></p>
                            </div>
                            <div>
                                <p><font size="2" face="verdana" color="green">Udhampur&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;01992-270212,94191-55082<br></font></p>
                            </div>
                            <div>
                                <p><font size="2" face="verdana" color="green">Reasi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;01991-224587,94198-80000<br></font></p>
                            </div>
                            <div>
                                <p><font size="2" face="verdana" color="green">Ramban&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;01998-266789,94910-22367<br></font></p>
                            </div>
                            <div>
                                <p><font size="2" face="verdana" color="green">Doda&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;01996-233230,94191-02019<br></font></p>
                            </div>
                            <div>
                                <p><font size="2" face="verdana" color="green">Rajouri&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;01962-262244,94191-91733<br></font></p>
                            </div>
                            <div>
                                <p><font size="2" face="verdana" color="green">Poonch&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;01965-262233,8492014247<br></font></p>
                            </div>
                            <div>
                                <p><font size="2" face="verdana" color="green"><strong>Police Control Room (State)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0194-2452092</strong> <br></font></p>
                            </div>
                            <div>
                                <p><font size="2" face="verdana" color="green"><strong>Police Control Room (Srinagar)&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0194-2506504</strong> <br></font></p>
                            </div>                                  
                            
                            <br><br>
                            <div>
                                <p><font size="4" face="verdana" color="blue"><u>Police Commissioner Offices:</u> <br> </font></p>
                            </div>
                            <div>
                                <p><font size="2" face="verdana" color="green">Jammu&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;0191-2546223<br></font></p>
                            </div>
                            <div>
                                <p><font size="2" face="verdana" color="green">Srinagar&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;0194-2453017<br></font></p>
                            </div>
                                                      	
                            <br><br>
                            <div>
                                <p><font size="4" face="verdana" color="blue"><u>Others Emergencies:</u> <br> </font></p>
                            </div>
                            <div>
                                <p><font size="2" face="verdana" color="green">Police Control Room	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;100<br></font></p>
                            </div>
                            <div>
                                <p><font size="2" face="verdana" color="green">Emergancy Embulence&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;108<br></font></p>
                            </div>
                            <div>
                                <p><font size="2" face="verdana" color="green">Fire Brigade&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;101<br></font></p>
                            </div>
                        </div>

                    </div>
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