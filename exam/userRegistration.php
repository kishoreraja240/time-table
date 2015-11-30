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
                            <p>This is admin panel for addnig new staff and creating their login credentials.Staff id 
                                begins with th<b>e department.</b>User Password should contain at least 8 characters, it is so beter to user multi[ple type of characters
                            All are checked by validations before the values are saved.</p>
                        </div>
                    </div>
                    <div class="panel-footer">
                    </div>
                </div> 
        </div>
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    <h3 class="panel-title pull-left">Staff  Profile</h3>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal"  method="POST" action="userRegistration.php">
                        <div class="form-group">
                            <label class="col-xs-3 control-label">Staff ID</label>
                            <div class="col-xs-9">
                                <input type="text" class="form-control" placeholder="Staff ID" id="userId" name="userId">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-3 control-label">Staff Name</label>
                            <div class="col-xs-9">
                                <input type="text" class="form-control" placeholder="Staff Name" id="userName" name="userName">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-3 control-label">Staff E-Mail</label>
                            <div class="col-xs-9">
                                <input type="text" class="form-control" placeholder="Staff E-mail" id="userEmail" name="userEmail">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-3 control-label">Password</label>
                            <div class="col-xs-9">
                                <input type="password" class="form-control" placeholder="Password" id="userPassword" name="userPassword">
                            </div>
                        </div>
                        <!--<div class="form-group">
                            <label class="col-xs-3 control-label">Confirm Password</label>
                            <div class="col-xs-9">
                                <input type="password" class="form-control" placeholder="Re-Type Password" id="userConfirmPass" name="userConfirmPass">
                            </div>
                        </div>-->
                        
                        <div class="form-group">
                        <label class="col-xs-3 control-label">No of Courses to be handled </label>	
                            <select class="btn btn-default" id="examDate" name="examDate">                          
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                        </select>
                      </div>
                        <div class="form-group">
                            <button class="btn btn-info pull-right" style="margin-right: 15px;" id="addUser" name="addUser" >
                                Save
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
	 /*if (isset($_POST['addUser']) &&($_POST['userId']==null || $_POST['userName']=null || $_POST['userPassword']=null || $_POST['userConfirmPass']=null || $_POST['userEmail']==null)){?>
            <div class="col-md-4">
        <div class="error row">Fill all the columns.</div></div>
        <?php
        }*/
        if(isset($_POST['addUser']) && $_POST['userId'] && $_POST['userName'] && $_POST['userPassword'] && $_POST['userEmail']) {
        require_once 'C:\xampp\htdocs\exam\Data\DAO\SiteManager.php';
        $xuserId = $_POST['userId'];
        $xuserName = $_POST['userName'];
        $xuserEmail = $_POST['userEmail'];
        $xuserPassword = $_POST['userPassword'];
		$xuserSection=$_POST['examDate'];
        $siteManagerDAO = new SiteManager();
        $addMember = $siteManagerDAO->addNewUser($xuserId, $xuserName, $xuserEmail, $xuserPassword,$xuserSection);
		
        if($addMember  == FALSE) {
         ?>
         <div class="col-md-4">
         <div class="success row">Successfully Added</div>
         </div>
        <?php
        }
        else {
            ?>
            <div class="col-md-4">
        <div class="error row">Invalid Data</div></div>
        <?php
        }/*
		else {
			?>
            <div class="col-md-4">
        <div class="error row">Invalid Registration,ID Already Taken</div></div>
        <?php }
		}*/}
		 ?>
</html>
