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
    <body style="margin-top: 70px;">
        <div class="row">
            <div class="col-md-4" style="margin-left: 10px;">
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
                            <p>This is FAQ page, we hope to give more and more informations for you to make easy</p>
                        </div>
                    </div>
                    <div class="panel-footer">
                    </div>
                </div> 
            </div>
            <div class="col-md-7">
                <div class="panel panel-info">
                    <div class="panel-heading clearfix">
                        <h3 class="panel-title pull-left">FAQ</h3>
                    </div>
                    <div class="list-group">
                        <div class="list-group-item">
                            <p class="list-group-item-text">1.how to generate ?</p>
                            <h4 class="list-group-item-heading">First of  all add the staff details , the class details and course which the stadd are gng to handle.Then the generator will handle the rest.</h4>
                        </div>
                    </div>
                    <div class="panel-footer"></div>
                </div>
                <div class="panel panel-info">
                    <div class="panel-heading clearfix">
                        <h3 class="panel-title pull-left">FAQ</h3>
                    </div>
                    <div class="list-group">
                        <div class="list-group-item">
                            <p class="list-group-item-text">2 .can i schedule this tables?</p>
                            <h4 class="list-group-item-heading">no. you cant. all the schedules are handled by generator.</h4>
                        </div>
                    </div>
                    <div class="panel-footer"></div>
                </div> 
                <div class="panel panel-info">
                    <div class="panel-heading clearfix">
                        <h3 class="panel-title pull-left">FAQ</h3>
                    </div>
                    <div class="list-group">
                        <div class="list-group-item">
                            <p class="list-group-item-text">3.how to add non-credit courses?</p>
                            <h4 class="list-group-item-heading">if the no of credits assigned is 0 then the course becomes a non credit course.by default the no of hours assigned for it is 0.admin can change it if required.</h4>
                        </div>
                    </div>
                    <div class="panel-footer"></div>
                </div> 
                <div class="panel panel-info">
                    <div class="panel-heading clearfix">
                        <h3 class="panel-title pull-left">FAQ</h3>
                    </div>
                    <div class="list-group">
                        <div class="list-group-item">
                            <p class="list-group-item-text">4.can staffs view ther timetable?</p>
                            <h4 class="list-group-item-heading">yes they have to recieve the login credentials from the admin and they can view their time table.</h4>
                        </div>
                    </div>
                    <div class="panel-footer"></div>
                </div> 
                <div class="panel panel-info">
                    <div class="panel-heading clearfix">
                        <h3 class="panel-title pull-left">FAQ</h3>
                    </div>
                    <div class="list-group">
                        <div class="list-group-item">
                            <p class="list-group-item-text">5.what will happen if the requirements for creating the time table is not met?</p>
                            <h4 class="list-group-item-heading"> admin must recheck the total hours required for the timetable and then generate the timetable.</h4>
                        </div>
                    </div>
                    <div class="panel-footer"></div>
                </div> 
                <div class="panel panel-info">
                    <div class="panel-heading clearfix">
                        <h3 class="panel-title pull-left">FAQ</h3>
                    </div>
                    <div class="list-group">
                        <div class="list-group-item">
                            <p class="list-group-item-text">6. Efficiency of the generator?</p>
                            <h4 class="list-group-item-heading">the generator is highly efficient where the staffs are not assigned two continuous hours and no more than 2 hrs and a lab(atmost)  and various other factors are pre-considered before the time table is genreated.</h4>
                        </div>
                    </div>
                    <div class="panel-footer"></div>
                </div> 
                <div class="panel panel-info">
                    <div class="panel-heading clearfix">
                        <h3 class="panel-title pull-left">FAQ</h3>
                    </div>
                    <div class="list-group">
                        <div class="list-group-item">
                            <p class="list-group-item-text">7..how to staffs contact the admin?</p>
                            <h4 class="list-group-item-heading">use contact form. fill it properly. as soon as possible u will be contacted by admin..</h4>
                        </div>
                    </div>
                    <div class="panel-footer"></div>
                </div>
            </div>
            <div class="col-md-1">
                
            </div>
        </div>
    </body>
</html>
