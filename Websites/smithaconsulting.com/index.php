﻿<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Smitha Consulting</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/custom.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="https://use.fontawesome.com/d4f311c4ca.js"></script>
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <?php
                if($_SESSION['user_id']=='') {
                    echo    '<a class="navbar-brand" href="index.php">Smitha Consulting</a>';
                    }
                else {
                    echo '<li>';
                    echo    '<a class="navbar-brand">Welcome ';
                    echo    $_SESSION['user_id'];
                    echo    "</a>";
                    echo '</li>'; 
                }
                ?>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="about.php">Team</a>
                    </li> 
                    <?php
                    if($_SESSION['user_id']=='') { 
                    echo '<li>';
                    echo    '<a href="login.php">Login</a>';
                    echo '</li>';
                    }
                    else {
                    echo '<li>';
                    echo    '<a href="login.php">My Account</a>';
                    echo '</li>';
                    }
                    ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Image Background Page Header -->
    <!-- Note: The background image is set within the business-casual.css file. -->
    <!--<header class="business-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="tagline">Log In To Your Account</h1>
                </div>
            </div>
        </div>
    </header>-->

    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <h2>Our Mission</h2>
                <p>Smitha Consulting is leading the digital industry in bridging the communication gap between clients and developers, and like all good leaders, our aim is to serve. Our mission is to connect the dots for anyone in need of guidance, assistance and professional web development. </p>
                <p>From WordPress troubleshooting, to full scale projects, current and future clients can use this portal to directly communicate with the developers at Smitha Consulting. We are seeking to serve as a vehicle by which our busy clients can manage their web projects from the comfort of a laptop or mobile device.</p>
                <?php
                if($_SESSION['user_id']=='') {
                echo    '<p>';
                echo    '<a class="btn btn-danger btn-lg" href="login.php">Log In &raquo;</a>';
                echo    '</p>';
                }
                else    
                {
                echo    '<p>';
                echo    '<a class="btn btn-danger btn-lg" href="login.php">My Account</a>';
                echo    '</p>';
                }
                ?>
            </div>
            <div class="col-sm-4">
            <?php
            if($_SESSION['user_id']=='') {
            echo    '<h2>Need An Account?</h2>';
            echo    '<button class="btn btn-default" data-dismiss="modal" data-toggle="modal" data-target="#ModalRegister">Register</button>';
            }
            ?>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <div class="row">
            <div class="text-center">
                <h3>Success Stories</h3>
            </div>
            <div class="col-sm-4">
                <div class="hidden-sm hidden-xs">
                    <button class="btn btn-default" data-dismiss="modal" data-toggle="modal" data-target="#Modal1"><img class="img-responsive img-center" src="img/massini.png" alt=""></button>
                </div>
                <div class="hidden-md hidden-lg">
                    <a href="http://www.massinilawnservices.com/"><img class="img-responsive img-center" src="img/massini.png" alt=""></a>
                </div>                          
                    <h2>Massini Lawn Services</h2>
                <address>
                    <strong>Team Members:</strong>
                    <ul>
                        <li>
                            <i>Alex Leader</i>
                        </li>
                        <li>
                            <i>Rob Smitha</i>
                        </li>
                    </ul>       
                </address>  

            </div>
            <div class="col-sm-4">
                <div class="hidden-sm hidden-xs">
                    <button class="btn btn-default" data-dismiss="modal" data-toggle="modal" data-target="#Modal2"><img class="img-responsive img-center" src="img/tallyvisuals.png" alt=""></button>
                </div>
                <div class="hidden-md hidden-lg">
                    <a href="http://tallyvisuals.com/"><img class="img-responsive img-center" src="img/tallyvisuals.png" alt=""></a>
                </div>
                <h2>Tally Visuals</h2>
                <address>
                    <strong>Team Members:</strong>
                    <ul>
                        <li>
                            <i>Spencer Perez</i>
                        </li>
                        <li>
                            <i>Jesse Baxer</i>
                        </li>
                        <li>
                            <i>Rob Smitha</i>
                        </li>
                    </ul>
                </address>  
            </div>
            <div class="col-sm-4">
                <div class="hidden-sm hidden-xs">
                    <button class="btn btn-default" data-dismiss="modal" data-toggle="modal" data-target="#Modal3"><img class="img-responsive img-center" src="img/pfeifferlaw.png" alt=""></button>
                </div>
                <div class="hidden-md hidden-lg">
                    <a href="http://pfeifferlawgroup.com/"><img class="img-responsive img-center" src="img/pfeifferlaw.png" alt=""></a>
                </div>
                <h2>Pfeiffer Law Group</h2>
                <address>
                    <strong>Team Members:</strong>
                    <ul>
                        <li>
                            <i>Oleg Novoselskyy</i>
                        </li>
                        <li>
                            <i>Rob Smitha</i>
                        </li>
                    </ul>
                </address>  
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; Smitha Consulting 2017</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/validate.js"></script>



    <!-- ModalRegister -->
    <div id="ModalRegister" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Register for an account</h4>
                </div>
                <div class="modal-body">
                    <form id="RegForm" class="form-group" onsubmit="return validate();" method="post" action="php/register.php">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="firstname">First Name</label>
                                    <input id="fname" type="text" class="form-control" name="firstname" placeholder="Enter Your First Name" />
                                    <span id="fname_err"></span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="lastname">Last Name</label>
                                    <input type="text" class="form-control" name="lastname" placeholder="Enter Your Last Name" />
                                    <span id="lname_err"></span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="email">Email Address</label>
                                    <input type="text" class="form-control" name="email" placeholder="Enter Your Email" />
                                    <span id="em_err"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" name="username" placeholder="Enter A Username" />
                                    <span id="uname_err"></span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="text" class="form-control" name="password" placeholder="Enter A Password" />
                                    <span id="pw_err"></span>
                                </div>
                            </div>
                            <div class="col-md-4 clearfix">
                                <div class="pull-left ">
                                    <br />
                                    <button type="submit" class="btn-lg btn-danger">Register</button>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
    <!-- Massini Modal-->
    <div id="Modal1" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Massini Lawn Services</h4>
                </div>
                <div class="modal-body">
                    <iframe src="http://www.massinilawnservices.com/"></iframe>
                    <br />
                    <button class="btn btn-danger" data-dismiss="modal" data-toggle="modal" data-target="#ModalRegister">Register</button>
                    <a href="http://www.massinilawnservices.com/" class="btn btn-default">Visit Site</a>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
    <!-- TallyVisuals Modal -->
    <div id="Modal2" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Tally Visuals</h4>
                </div>
                <div class="modal-body">
                    <iframe src="http://tallyvisuals.com/"></iframe>
                    <br />
                    <button class="btn btn-danger" data-dismiss="modal" data-toggle="modal" data-target="#ModalRegister">Register</button>
                    <a href="http://tallyvisuals.com/" class="btn btn-default">Visit Site</a>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
    <!-- Pfeiffer Law Modal -->
    <div id="Modal3" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Pfeiffer Law Group</h4>
                </div>
                <div class="modal-body">
                    <iframe src="http://pfeifferlawgroup.com/"></iframe>
                    <br />
                    <button class="btn btn-danger" data-dismiss="modal" data-toggle="modal" data-target="#ModalRegister">Register</button>
                    <a href="http://pfeifferlawgroup.com/" class="btn btn-default">Visit Site</a>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
    
</body>

</html>
