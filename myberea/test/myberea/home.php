<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home | myBerea</title>

    <link rel="stylesheet" href="src/css/bootstrap-css/bootstrap-grid.css">
    <link rel="stylesheet" href="src/css/bootstrap-css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="src/css/bootstrap-css/bootstrap.css">
    <link rel="stylesheet" href="src/css/bootstrap-css/bootstrap.min.css">

    <link rel="stylesheet" href="src/css/home.css">
    <link rel="stylesheet" href="src/css/font-awesome.min.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>
<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <ul class="list-unstyled components">
                <li class="active">
                    <a id="link" href="#"><div style="padding: 8px;"><i class="fa fa-home" aria-hidden="true" style="font-size:1.3em"></i></div>  Home</a>
                </li>
                <li>
                    <a href="academics.html"><div style="padding: 10px;"><i class="fa fa-book" aria-hidden="true" style="font-size:1.3em"></i></div> Academics</a>
                </li>
                <li>
                    <a href="learning-resources.html"><div style="padding: 10px 12px;"><i class="fa fa-bookmark" aria-hidden="true" style="font-size:1.3em"></i></div>Learning Resources</a>
                </li>
                <li>
                    <a href="opportunities.html"><div style="padding: 10px;"><i class="fa fa-globe" aria-hidden="true" style="font-size:1.3em"></i></div>Opportunities</a>
                </li>
                <li>
                    <a href="community.html"><div style="padding: 8px;"><i class="fa fa-users" aria-hidden="true" style="font-size:1.3em"></i></div>Community</a>
                </li>
                <li>
                    <a href="labor.html"><div style="padding: 9px;"><i class="fa fa-briefcase" aria-hidden="true" style="font-size:1.3em"></i></div>Labor</a>
                </li>
                <li>
                    <a href="my-accounts.html"><div style="padding: 10px 12px;"><i class="fa fa-address-book" aria-hidden="true" style="font-size:1.3em"></i></div>My Accounts</a>
                </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav id="top-navbar" class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="navbar-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <div id="berea-logo">
                        <p>my<span>Berea</span></p>
                    </div>

                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="active">
                                <div class="dropdown">
                                    <button onclick="userDropdown()" class="dropbtn"><?php echo htmlspecialchars($_SESSION["username"]); ?></button>
                                    <div id="myDropdown" class="dropdown-content">
                                        <a href="#">Log out</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div id="main-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8" style="padding: 0px;">
                            <div class="portlet" id="campus-event-digest">
                                <div class="portlet-content campus-event-digest-content" >
                                    <div class="portlet-header">
                                        <h6>Campus Event Digest</h6>
                                    </div>
                                    <div class="portlet-body-content">
                                        <p>
                                            What is Lorem Ipsum?
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                            <div class="portlet berea-weather">
                                <div class="portlet-content">
                                    <div class="portlet-header">
                                        <h6>Berea Weather</h6>
                                    </div>
                                    <div class="portlet-body-content">
                                        <p>
                                            What is Lorem Ipsum?
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="portlet emergency-alert-sign-up">
                                <div class="portlet-content">
                                    <div class="portlet-header">
                                        <h6>Emergency Alert Sign-up</h6>
                                    </div>
                                    <div class="portlet-body-content">
                                        <p>
                                            What is Lorem Ipsum?
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="portlet classified-ads">
                                <div class="portlet-content">
                                    <div class="portlet-header">
                                        <h6>Classified Ads</h6>
                                    </div>
                                    <div class="portlet-body-content">
                                        <p>
                                            What is Lorem Ipsum?
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });
    </script>

    <script src="src/js/home.js"></script>
    <script src="src/js/bootstrap-js/bootstrap.js"></script>
</body>
</html>