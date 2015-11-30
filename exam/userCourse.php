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
                            <p>This is Admin panel for adding  new courses.The course codes are decided based on the year of study and the credits depends on same/other department course.</p>
                        </div>
                    </div>
                    <div class="panel-footer">
                    </div>
                </div> 
        </div>
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    <h3 class="panel-title pull-left">Course Details</h3>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" action="userCourse.php" method="POST">
                        <div class="form-group">
                          <label class="col-xs-3 control-label">Course Name</label>
                          <div class="col-xs-9">
                              <input type="text" class="form-control" placeholder="Course Name" id="userId" name="userId">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-xs-3 control-label">Course Id</label>
                            <div class="col-xs-9">
                                <input type="text" class="form-control" placeholder="Course ID" id="userName" name="userName">
                            </div>
                        </div>
                      <div class="form-group">
                        <label class="col-xs-3 control-label">No of Credits</label>	
                            <select class="btn btn-default" id="examDate" name="examDate">
                              <option>0</option>
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
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
        $addMember = $siteManagerDAO->addNewCourse($xuserId, $xuserName, $xuserSection);
        if($addMember  == TRUE) {
            ?>
            <div class="col-md-4">
         <div class="success row">Successfully Added</div>
         </div>
        <?php
        }
        else {
            ?>
            <div class="col-md-4">
        <div class="error row">Course Already Added</div></div>
        <?php
        }
        }
        ?>
</html>
