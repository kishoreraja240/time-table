<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="css/messageAlerts.css">
       <?php require_once './include/loginHeader.php'; ?>
    </head>
    <body style="margin-top: 100px;">
      <div class="container bootcards-container" id="main">
        <div class="row">
            <form action="index.php" method="POST">
            <div class="col-sm-4 col-sm-offset-4 bootcards-cards">
		<div class="panel panel-default">
                    <div class="panel-heading clearfix">
			<h3 class="panel-title pull-left">Login</h3>
                    </div>
                        <div class="list-group">
                            <div class="list-group-item">
                                <p class="list-group-item-text">Username</p>
                                <h4 class="list-group-item-heading">
                                    <div><input type="text"  name="userName" class="form-control" placeholder="User Name"></div> 
                                </h4>
                            </div>
                            <div class="list-group-item">
                                <p class="list-group-item-text">Password</p>
                                <h4 class="list-group-item-heading">
                                    <div><input type="password"  name="userPassword" class="form-control" placeholder="Password"></div>
                                </h4>
                            </div>
                            <div class="list-group-item">
                                <input type="submit" value="Login" class="btn btn-info "  name="userLogin">
                            </div>
                        </div>
                    <div class="panel-footer"></div>	
                </div>
            </div>
            </form>
        </div>
       </div>
        
        <script type="text/javascript">
            bootcards.init( {
            offCanvasBackdrop : true,
            offCanvasHideOnMainClick : true,
            enableTabletPortraitMode : true,
            disableRubberBanding : true,
            disableBreakoutSelector : 'a.no-break-out'
          });
        
        </script>
        <script type="text/javascript" src="js/mybootscardmin.js"></script>
        <script type="text/javascript" src="js/mybootstrap.min.js"></script>
        <?php
            if(isset($_POST['userName']) && $_POST['userPassword'] && isset($_POST['userLogin'])) {
                require_once './Data/controller/authonticator.php';
                $userName = $_POST['userName'];
                $userPassword = $_POST['userPassword'];
                $loginContoler = new authonticator();
                $authonticated = $loginContoler->loginAuthonticator($userName,$userPassword);
                if($authonticated && $userName=="admin") {
                    $_SESSION["userID"] = $_POST['userName'];
                    $userType = split("\-", $_POST['userName']);
                   // header("Location:Home.php");
				    header("Location:table.php");
                    /*if($userType == "IT") {
                    $_SESSION["userType"] = "student";
                    }
                    elseif ($userType == "LE") {
                    $_SESSION["userType"] = "lecturer";
                    }*/
                }
				else if($authonticated && $userName!="admin")
				{
				    $_SESSION["userID"] = $_POST['userName'];
                    $userType = split("\-", $_POST['userName']);
                    //header("Location:home_staff.php");
					 header("Location:table_staff.php");
				}
                else {
                    ?>
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="error">Invalid Login</div>
                </div>
                <div class="col-md-4"></div>
        <?php        }
            }
        ?>
    </body>
</html>
