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
    <link rel="stylesheet" type="text/css" href="mainstyle.css" />
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

			
			
			<br />
            <div class="row">
                <br />

                <div>
                    <div class="row">
                        <div>
                            <table style="width:100%;">
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div style="background-color:aliceblue; padding-left:30px;padding-right:30px;padding-bottom:30px; text-align:justify">
                                                <!--text here-->
                                                <h3>India’s National Education Policy is futuristic: Modi</h3>
                                                <p>&nbsp;</p>
                                                <p>
                                                    <h5>
                                                        AHMEDABD, Apr 14: &nbsp;
													Prime Minister Narendra Modi on Wednesday said the new National Education Policy is futuristic and as per world standards, and aimed at fulfilling Dr S Radhakrishnan’s vision of education that empowers a student to participate in national development.
                                                    </h5>
                                                        “India takes pride in being the mother of democracy as it’s values are embodied in our social life,” Modi said addressing the Association of Indian Universities’ 95th annual meet and a national seminar of vice-chancellors via video conference.
                                                    </p>
                                                <p><h5> </h5>
                                                   The Centre unveiled the new National Education Policy (NEP) last year.
													“The National Education Policy is futuristic and as per global parameters,” Modi said.
													Every student has certain capabilities. These capabilities pose three questions before the student and the teacher, he said.
                                                </p>
                                                <p><h5> </h5>
                                                    “First, what they can do? Second, what is their potential if they are properly taught? And third, what they want to do?” Modi said.
                                                </p>
                                                <p>
                                                The answer to the first question is the inner strength of students, he said.
												“But, if institutional strength is added to that inner strength, their development will get expanded and they will be able to do what they want to do,” the prime minister said.
												</p>
                                                <p>
												
                                                   He said the NEP is aimed at fulfilling the vision of Dr S Radhakrishnan (India’s second President and academician) of education that frees and empowers a student to participate in national development.
<br>“Education management should be undertaken keeping the whole world as a unit, but also focusing on the Indian character of education,” he said.
</p>
<p>Modi said the role of skilled youth is continuously increasing as India walks the path of ‘aatmanirbharta’ (self- reliance).
India is being looked upon as the future centre of Artificial Intelligence, Internet of Things, big data, 3D printing, virtual reality and robotics, mobile technology, geo-informatics, smart healthcare and defence sector, he said.
“To meet the requirement of various skills, Indian institutes of skills are being set up in three big cities of the country. In Mumbai, the first batch of the Indian Institute of Skills has already started,” Modi said.
</p>
<p>He also asked universities to be multi-disciplinary.
“We want all universities to be multi-disciplinary and provide flexibility to students, like an easy entry and exit from courses and creation of an academic bank for easy completion of courses,” he said.
For this, every university will have to collaborate, he added.
</p>
<p>“Babasaheb Ambedkar has given a strong foundation for us to take forward all our democratic values after independence,” Modi said, on the occasion of the birth anniversary of Dr B R Ambedkar.
He said Dr Ambedkar considered knowledge, self-respect and politeness as his three revered deities.
“Self-respect comes with knowledge and makes a person aware of his or her rights. Through equal rights, social harmony emerges and the country progresses. Our education system and universities have this responsibility to carry the country forward on the path shown by Babasaheb,” Modi said.
</p>
<p>The city-based Dr Babasaheb Ambedkar Open University hosted the event.
Modi also released four books based on Dr Ambedkar’s life, written by author Kishor Makwana.
Union Education Minister Ramesh Pokhriyal ‘Nishank’, Gujarat Governor Acharya Devvrat and Chief Minister Vijay Rupani also participated in the event. (PTI)

</p>

                                            </div>
                                        </div>
                                    </td>
                                </tr>

                            </table>

                        </div>

                    </div>
                </div>

                <br />


            </div>


        </div>
			<!-- Footer Section Starts Here -->
			<?php include_once 't_footer.php'; 	?>
			<!-- Footer Section Ends Here -->

    </div>

</body>
</html>