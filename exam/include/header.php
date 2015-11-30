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
            <li><a href="table.php">Home</a></li>
            <!--<li><a href="table.php">VIEW</a></li>--->
            <li><a href="userRegistration.php">ADD-STAFF</a></li>
            <li><a href="userClass.php">ADD-CLASS</a></li>
            <li><a href="userCourse.php">ADD-COURSE</a></li>
            <li><a href="assignCourse.php">ASSIGN-STAFF-COURSE</a></li>
            <li><a href="generate.php">GENERATE</a></li>
            <li><a href="FAQ.php">FAQ</a></li>
            <!--<li><a href="ContactUs.php">CONTACT US</a></li>-->
            <li><a href="index.php">LOGOUT</a></li>
        </ul>
    </div>
    <div class="col-md-2">
        <h4>User :- <?php echo $_SESSION["userID"];?></h4>
    </div>
</nav>