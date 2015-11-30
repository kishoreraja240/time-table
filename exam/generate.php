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
    </head>
    <?php require_once './include/header.php'; ?>
    <body style="margin-top: 70px">
        <div class="col-md-4">
            <div class="panel panel-default">
                    <div class="panel-heading clearfix">
                      <h3 class="panel-title pull-left">Help For User</h3>
                    </div>
                    <div class="list-group">
                       <div class="list-group-item">
                          <p class="list-group-item-text">Message</p>
                          <h4 class="list-group-item-heading">From Developer</h4>
                        </div>
                        <div class="list-group-item">
                            <p>This is Admin panel for validating and generating the timetable. First teh validation is done then teh table has to be generated.</p>
                        </div>
                    </div>
                    <div class="panel-footer">
                    </div>
                </div> 
        </div>
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    <h3 class="panel-title pull-left"> Generate/Validate                </h3>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal"  method="POST">
                      <div class="form-group">
                      <button class="btn btn-info pull-right" style="margin-right: 15px;" id="addUser" name="addUser">
                                Validate
                        </button>
                      </div>
                        <div class="form-group">
                          <button class="btn btn-info pull-right" style="margin-right: 15px;" id="addUser1" name="addUser1">
                                Generate
                        </button>
                      </div>
                  </form>
              </div>
                <div class="panel-footer">
                </div>
          </div>
        </div>
        <div class="col-md-1">
        </div>
    </body>
    <?php
       /* if(isset($_POST['addUser']) && $_POST['userId'] && $_POST['userName']) {
        require_once 'C:\xampp\htdocs\exam\Data\DAO\SiteManager.php';
        $xuserId = $_POST['userId'];
        $xuserName = $_POST['userName'];		
		$xuserSection=$_POST['examDate'];
        //$xuserEmail = $_POST['userEmail'];
        //$xuserPassword = $_POST['userPassword'];
        $siteManagerDAO = new SiteManager();
        $addMember = $siteManagerDAO->addNewClass($xuserId, $xuserName, $xuserSection);
        if($addMember  == false) {*/
		require_once 'C:\xampp\htdocs\exam\Data\DAO\SiteManager.php';
			$siteManagerDAO = new SiteManager();
		
			require_once 'C:\xampp\htdocs\exam\Data\DAO\SiteManager.php';
			$siteManagerDAO = new SiteManager();
			$addMember = $siteManagerDAO->validate();
			if(isset($_POST['addUser'])) {
            ?>
            <div class="col-md-4">
            <?php
			
			if($addMember==35) {
				?>
         <div class="success row">All Conditions are Satisfied</div></div>
        <?php
        }
		else {
			?>
			<div class="error row">All Conditions are not Satisfied</div></div>
            <?php
		}
		}
        else if(isset($_POST['addUser1'])){
			require_once 'C:\xampp\htdocs\exam\Data\DAO\SiteManager.php';
			$siteManagerDAO = new SiteManager();
			$addMember1 = $siteManagerDAO->generator();
			//print_r($addMember); 
			if($addMember==35){           
            ?>
          <div class="col-md-4">
        <div class="success row">Successfully Generated</div></div>
        <?php
        }
		else {
			?>
           <div class="col-md-4">
        <div class="error row">Failure in Generation</div></div>
        <?php 
        }
		}
        ?>
</html>
