<?php
	function getUserIP() {
		if( array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER) && !empty($_SERVER['HTTP_X_FORWARDED_FOR']) ) {
			if (strpos($_SERVER['HTTP_X_FORWARDED_FOR'], ',')>0) {
				$addr = explode(",",$_SERVER['HTTP_X_FORWARDED_FOR']);
				return trim($addr[0]);
			} else {
				return $_SERVER['HTTP_X_FORWARDED_FOR'];
			}
		}
		else {
			return $_SERVER['REMOTE_ADDR'];
		}
	}

	$connection = mysql_connect('localhost', 'root', '@Greellow8') or die(mysql_error());
	mysql_select_db('ideasDB', $connection);
	$ip = getUserIP();
	$query = "SELECT * FROM Visitors WHERE ip = '".$ip."'";
	$results = mysql_query($query, $connection);
	if (!mysql_fetch_row($results)) {
		$query = "INSERT INTO Visitors (ip, latest_visit) VALUES ('".$ip."', NOW())";
		mysql_query($query, $connection);
	} else {
		$query = "UPDATE Visitors SET latest_visit = NOW() WHERE ip='".$ip."'";
		mysql_query($query, $connection);
	}
?>

<!DOCTYPE HTMP>
<html>
    <head>
        <title>Tech Solutions and Ideas</title>
        <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script src="build/react.js"></script>
        <script src="build/JSXTransformer.js"></script>
        <link rel="stylesheet" type="text/css" href="css/index.css">
    </head>
    <body>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        
        <div class="navbar navbar-inverse navbar-static-top">
            <div class="container">
                <a href="index.php" class="navbar-brand">Ideas By <img src="images/simpleLogo.png" id="logo"></a>
                <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse navHeaderCollapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="index.php">Home</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Projects <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="projects.html">All Projects</a></li>
                                <li><a href="http://mygala.ideasbyb.com">MyGala</a></li>
                                <li><a href="http://frontrowtest.ideasbyb.com">FAQ Machine</a></li>
                            </ul>
                        </li>
                        <li><a href="resume.html">Resume</a></li>
                        <li><a href="#contact" data-toggle="modal">Contact Me</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- *****************Content Here*************-->
        <div class="jumbotron">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4">
                        <img src="images/myPic.jpg" class="profPic">
                    </div>
                    <div class="col-md-9 col-sm-8">
                        <p id="introText">My name is Bryan Bor.  I am a computer science student working towards my bachelor's degree in Computer Science and Software Engineering.  I anticipate graduating from LPC with an Associate's degree in 2005 and transferring to a found year college for my Bachelor's degree.  At the moment, I am looking for internships where I can continue to hone my knowledge of C++, Java, Android & iOS development and continue to develope my project portfolio.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="projects">
            <center><h2>Projects</h2></center>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 projects">
                        <a href="projects.html">
                            <div class="row">
                                <div class="col-sm-8">
                                    <h4>MyGala</h4>
                                    <p>This project includes a database and matching website for tracking guests and purchases for a charity auction.</p>
                                </div>
                                <div class="col-sm-4">
                                    <img src="images/mg2.png" class="projectPic hoverable" hovertext='<img src="images/mg2.png" width="600px">'>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 projects">
                        <a href="projects.html">
                            <div class="row">
                                <div class="col-sm-8">
                                    <h4>FAQ Machine</h4>
                                    <p>This project implements a new front-end design language called React.js from the designers of Facebook.com and Instagram.com.</p>
                                </div>
                                <div class="col-sm-4">
                                    <img src="images/faq.png" class="projectPic hoverable" hovertext='<img src="images/faq.png" width="600px">'>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <center><h3>Upcoming Projects...</h3></center>
            <div class="container">
                <a href="projects.html">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Task Chat</h4>
                            <p>This project will be a task-management app for remote workers and supervisors.</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div id="content"></div>
        
        <div id="hoverDiv"></div>
        
        <table id="backgroundImage">
            <tr>
                <td>
                    <img src="images/drawingBackground.jpg" id="bgimage">
                </td>
            </tr>
        </table>
        
        <!-- ***************END OF CONTENT************** -->
        
        <div class="navbar navbar-inverse navbar-fixed-bottom">
            <div class="container">
                <p class="navbar-text pull-left">Site Built By Bryan Bor</p>
                <a class="pull-right" href="https://www.linkedin.com/profile/view?id=249460006&trk=nav_responsive_tab_profile">
                    <img class="navbar-btn" src="images/linkedin.png" height="40" id="linkedin">
                </a>
                <a class="pull-right" href="https://angel.co/bryan-bor">
                    <img class="navbar-btn" src="images/angellist.jpg" height="40" id="angels">
                </a>
                <form class="pull-right" id="adminForm">
                    <p class="pull-left navbar-text" id="adminLabel">Admin:</p>
                    <div class="form-group pull-left">
                        <input type="text" id="admin" class="form-control pull-left" placeholder="Admin Username">
                    </div>
                    <button type="button" class="btn btn-default pull-right" id="adminEnter">Log In</button>
                    <div class="form-group pull-right">
                        <input type="password" id="adminPass" class="form-control pull-right" placeholder="Password">
                    </div>
                </form>
            </div>
        </div>
		
		<div class="modal fade" id="contact" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form class="form-horizontal" id="contactForm">
                        <div class="modal-header">
                            <h4>Contact Me</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group has-error has-feedback" id="formNameGroup">
                                <label for="contact-name" class="col-lg-2 control-label">Name:</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="contact-name" placeholder="Full name" autofocus>
                                    <span class="glyphicon glyphicon-remove form-control-feedback" id="formNameGlyph"></span>
                                </div>
                            </div>
                            <div class="form-group has-error has-feedback" id="formEmailGroup">
                                <label for="contact-email" class="col-lg-2 control-label">E-mail:</label>
                                <div class="col-lg-10">
                                    <input type="email" class="form-control" id="contact-email" placeholder="you@somewhere.com">
                                    <span class="glyphicon glyphicon-remove form-control-feedback" id="formEmailGlyph"></span>
                                </div>
                            </div>
                            <div class="form-group has-error has-feedback" id="formMessageGroup">
                                <label for="contact-message" class="col-lg-2 control-label">Message:</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" rows="6" placeholder="Your message here." id="contact-message"></textarea>
                                    <span class="glyphicon glyphicon-remove form-control-feedback" id="formMessageGlyph"></span>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary disabled" data-dismiss="modal" type="button" id="contactSubmit">Send Message</button>
                            <a class="btn btn-default" data-dismiss="modal">Close</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="container" id="adminAlert">
            <div class="alert alert-danger">
                <p class="text-center">Invalid username and/or password.</p>
            </div>
        </div>
		
        <script src="js/indexJquery.js" type="text/javascript"></script>    
    </body>
</html>