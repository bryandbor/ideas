<?php
    $_SESSION['user'] = 'ideasAdmin';
    $_SESSION['pass'] = 'ideas@Greellow8';
    if (!isset($_SESSION['user'], $_SESSION['pass'])) {
        header('Location: index.html');
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
        <script type="text/jsx" src="js/index.js"></script>
    </head>
    <body>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        
        <div class="navbar navbar-inverse navbar-static-top">
            <div class="container">
                <a href="index.html" class="navbar-brand">Ideas By <img src="images/simpleLogo.png" id="logo"></a>
                <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse navHeaderCollapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="index.html">Home</a></li>
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
        
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h3 class="text-center">Admin</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <table class="table-hover table-bordered" id="content" width="100%">
                        <tr>
                            <th><p class="text-center">IP Address</p></th>
                            <th><p class="text-center">First Visit</p></th>
                            <th><p class="text-center">Latest Visit</p></th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        
        <!-- ***************END OF CONTENT************** -->
        
        <div class="navbar navbar-inverse navbar-fixed-bottom">
            <div class="container">
                <p class="navbar-text pull-left">Site Built By Bryan Bor</p>
                <a class="pull-right" href="https://www.linkedin.com/profile/view?id=249460006&trk=nav_responsive_tab_profile">
                    <img class="navbar-btn" src="images/linkedin.png" height="40">
                </a>
                <a class="pull-right" href="https://angel.co/bryan-bor">
                    <img class="navbar-btn" src="images/angellist.jpg" height="40">
                </a>
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
		
        <script src="js/indexJquery.js" type="text/javascript"></script>
        <script src="js/adminJquery.js" type="text/javascript"></script>
    </body>
</html>