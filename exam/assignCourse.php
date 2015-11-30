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
                            <p>This is Admin panel for assigning thecourses to the staffs.</p>
                        </div>
                    </div>
                    <div class="panel-footer">
                    </div>
                </div> 
        </div>
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    <h3 class="panel-title pull-left"> Assign Course</h3>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" action="assignCourse.php" method="POST">
                        <div class="form-group">
                          <?php
                            require_once 'C:\xampp\htdocs\exam\Data\DAO\SiteManager.php';                        
						    $siteManagerDAO1 = new SiteManager();
							$addMember1 = $siteManagerDAO1->addCoursetoStaff1();
						?>
                          <label class="col-xs-3 control-label">Staff Id</label>
                          <select class="btn btn-default" id="examDate2" name="examDate2">
                            <?php //foreach($addMember as $value) ?>
                            <?php for($i=0;$i<sizeof($addMember1);$i++)
								{
									echo '<option value='.$addMember1[$i].'>'.$addMember1[$i].'</option>';
								}
								?>
                          </select>
                        </div>
                      <div class="form-group">
                      <?php
                            require_once 'C:\xampp\htdocs\exam\Data\DAO\SiteManager.php';                        
						    $siteManagerDAO = new SiteManager();
							$addMember = $siteManagerDAO->addCoursetoStaff();
						?>
                         <label class="col-xs-3 control-label">Course Code</label>
                            <p>
                              <select class="btn btn-default" id="examDate" name="examDate"> 
                              <?php //foreach($addMember as $value) ?>                       
                                <?php for($i=0;$i<sizeof($addMember);$i++)
								{     if($addMember[$i]=="CS405") $addMember[$i]="LAB1";
								      if($addMember[$i]=="CS406") $addMember[$i]="LAB2"; 
									echo '<option value='.$addMember[$i].'>'.$addMember[$i].'</option>';
								}
								?>
                             </select>
                            </p>
                      </div>
                      <div class="form-group"></div>
                      <div class="form-group">
                          <button class="btn btn-info pull-right" style="margin-right: 15px;" id="addUser1" name="addUser1">
                                Assign
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
        if(isset($_POST['addUser1'])) {
        require_once 'C:\xampp\htdocs\exam\Data\DAO\SiteManager.php';
        $xuserName = $_POST['examDate2'];		
		$xuserSection=$_POST['examDate'];
        //$xuserEmail = $_POST['userEmail'];
        //$xuserPassword = $_POST['userPassword'];
        $siteManagerDAO = new SiteManager();
        $addMember = $siteManagerDAO->addCoursestoStaff($xuserName,$xuserSection);
		print_r("$addMember");
        if($addMember  == TRUE) {
            ?>
            <div class="col-md-4">
         <div class="success row">Successfully Assigned</div>
         </div>
        <?php
        }
        else  {
            ?>
            <div class="col-md-4">
        <div class="error row">Course Already Assigned for another teacher or maximum courses the teacher can handle reached. </div></div>
        <?php
        }
        }
        ?>
</html>
