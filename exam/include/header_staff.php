<?php
// Start the session
session_start();
?>
<link rel="stylesheet" href="css/mybootstrapmin.css">
<link rel="stylesheet" href="css/myWindowbootscard.css">
<link rel="stylesheet" href="css/myFontAwsome.css">
<link rel="stylesheet" href="css/messageAlerts.css">
<nav class="navbar navbar-default navbar-fixed-top navbar-default " >
    <div class="col-md-1">
        <a href="Home.php">
            <img src="images/prime-school-timetable-software-logo.gif" class="pull-left" style="width: 110px;height: 50px;"/>
        </a>
    </div>
    <div class="col-md-9">
        <ul class="nav navbar-nav navbar-default">
           <!-- <li><a href="home_staff.php">Home</a></li>-->
            <li><a href="table_staff.php">Home</a></li>
            <!--<li><a href="table_staff.php">VIEW</a></li>-->
            <li><a href="ContactUs.php">CONTACT US</a></li>
            <li><a href="index.php">LOGOUT</a></li>
        </ul>
    </div>
    <div class="col-md-2">
        <h4>User :- <?php echo $_SESSION["userID"];?></h4>
    </div>
</nav>