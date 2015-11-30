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
                            <p>This is Admin panel for adding  new class.Class Room No is based upon the floors/department buildings.
                            Details are checked &amp;  validated before they are saved.</p>
                        </div>
                    </div>
                    <div class="panel-footer">
                    </div>
                </div> 
        </div>
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    <h3 class="panel-title pull-left">Class Details</h3>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" action="userClass.php" method="POST">
                        <div class="form-group">
                          <label class="col-xs-3 control-label">Class Room</label>
                            <div class="col-xs-9">
                                <input type="text" class="form-control" placeholder="Class Room No" id="userId" name="userId">
                            </div>
                        </div>
                        <div class="form-group">
                          <label class="col-xs-3 control-label">Department</label>
                            <div class="col-xs-9">
                                <input type="text" class="form-control" placeholder="Department" id="userName" name="userName">
                            </div>
                        </div>
                      <div class="form-group">
                        <label class="col-xs-3 control-label">Section</label>	
                            <select class="btn btn-default" id="examDate" name="examDate">
                              <option>A</option>
                              <option>B</option>
                              <option>C</option>
                        </select>
                      </div>
                        <div class="form-group">
                            <button class="btn btn-info pull-right" style="margin-right: 15px;" id="addUser" name="addUser">
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
        if(isset($_POST['addUser']) && $_POST['userId'] && $_POST['userName']) {
        require_once 'C:\xampp\htdocs\exam\Data\DAO\SiteManager.php';
        $xuserId = $_POST['userId'];
        $xuserName = $_POST['userName'];		
		$xuserSection=$_POST['examDate'];
        //$xuserEmail = $_POST['userEmail'];
        //$xuserPassword = $_POST['userPassword'];
        $siteManagerDAO = new SiteManager();
        $addMember = $siteManagerDAO->addNewClass($xuserId, $xuserName, $xuserSection);
        if($addMember  == TRUE) {
            ?>
            <div class="col-md-4">
         <div class="success row">Successfully Added</div></div>
        <?php
        }
        else {
            ?>
            <div class="col-md-4">
        <div class="error row">Room Already Assigned to another class</div></div>
        <?php
        }
        }
        ?>
</html>
