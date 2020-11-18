<?php
if($_POST["message"]) 
{
    mail("medx3d@gmail.com", $_POST["subject"],$_POST["message"]."<--This message was collected from the Medical X3D Repository feedback system and sent by the web-students.armstrong.edu apache server.");
    echo '<script>alert("Feedback has been recieved")</script>';
}


?>
<html>
	<head>
		<script type="text/javascript" src="//code.jquery.com/jquery-1.7.1.js"></script>
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel='stylesheet' type='text/css' href='modelpages/css/main.css'/>
		<title>3D Models Types</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">  
    </head>
    <body>
        <center>
            <table class=mpg>
                <tr>
                    <td style="border: 0px solid #FFFFFF;">
                        <center>
                            <table class="title" cellpadding="20">
                                <tr>
                                    <td>
                                        <center><h1>X3D Based Systems for Neuroanatomy Exploration and Medical Training</h1></center>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <center>
                                            <table class=wrt>
                                                <tr>
                                                    <td class=wrt><a class=wrt title="Human Anatomy using Web 3D" href=index.html>Introduction</a></td>
                                                    <td class=wrt><a class=wrt title="Model Lang. Std & JScript Lib." href=whyX3D.html>About X3D</a></td>
                                                    <td class=wrt><a class=wrt title="Basic, Decomposable & Volumetric Models" href=3dmodels.php>Medical 3D Models</a></td>
                                                    <td class=wrt><a class=wrt title="Navigation usage info" href=manual.html>Manual</a></td>
                                                    <td class=wrt><a class=wrt title="Closer look at the Team" href=contact.html>Team Information</a></td>
                                                    <td class=wrm><a class=wrt title="Suggestions and Feedback" href=feedback.php>Feedback</a></td>
                                                </tr>
                                            </table>
                                        </center>
                                    </td>
                                </tr>
                            </table>

                            <center>
                            <h2 style="color: white;">Feedback</h2>
                            <hr>
                            <table style="width:77%"> 
                                <table style="width:80%" cellpadding="10">
                                    <tr>
                                        <td>
                                            This is an ever expanding project and we welcome all comments, suggestions, and feedback. 
                                            Please feel free to share your experiences and suggestions for improvements with us in the fields provided.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <form name="form1" method="post" action="feedback.php">
                                                <input type="text" size="40" name="subject" placeholder="Subject"></br>
                                                <textarea rows="8" cols="100" name="message" placeholder="Enter your feedback here..."></textarea>
                                                <input type="submit">
                                            </form>
                                        </td>
                                    </tr>
                                </table>
                            </center>
                            <br/>
                            <center>
                                <table class=title>
                                    <tr>
                                        <td style="border: 5px solid #FFFFFF;">
                                            <center>
                                                <i>
                                                    <div style="margin-bottom: 12px">@ 2020 Prof. Felix G. Hamza-Lup</i>
                                                        <img style="position: relative; top: 6.5px;" src=thumbnails/team/gslo.png></img>
                                                    </div>
                                            </center>
                                        </td>
                                    </tr>
                                </table>
                            </center>    
                            <br/>
                        </center>
                    </td>
                </tr>
            </table>
        </center>
        <br/>
	</body>
</html>

			