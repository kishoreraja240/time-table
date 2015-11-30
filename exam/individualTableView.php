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
        <?php require_once './include/header.php'; ?>
    </head>
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
                            <p>Before Selecting Subjects first fill the selection inside option selector,Otherwise result should be an error</p>
                        </div>
                    </div>
                    <div class="panel-footer">
                    </div>
                </div> 
            </div>
            <div class="col-md-7">
                <div class="panel panel-success">
                    <div class="panel-heading">
                      <h3 class="panel-title">Time Table</h3>
                    </div>
                    <div class="table-responsive">
                      <table class="table table-hover">
                        <thead>
                            <tr class="active">
                                <th>Time</th>
                                <th>Subject</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $TimeTableId =  htmlspecialchars($_GET["timeId"]);
                            $TimeTableYear = htmlspecialchars($_GET["timeYear"]);
                            $TimeTableDate = htmlspecialchars($_GET["examDate"]);
                            require_once 'C:\xampp\htdocs\exam\Data\DAO\SiteManager.php';
                            require_once 'C:\xampp\htdocs\exam\Data\models\subject.php';
                            $subjectManager = new SiteManager();
                            $subjectList = $subjectManager->loadSubject($TimeTableId);
                            //print_r($subjectList);
                            ?>
                            <tr>
                                <td>08.30 - 10.30</td>
                                <td>
                                    <label>
                                        <?php
                                        for($i=0;$i<count($subjectList);$i++) {
                                        $subjectInstance = $subjectList[$i];
                                        $exTime = $subjectInstance->getExamTime();
                                        $exSubjectName = $subjectInstance->getSubjectName();
                                        if($exTime == "08.30-10.30") {
                                            print_r($exSubjectName);
                                        }
                                        }
                                        ?>
                                    </label>
                                </td>
                            </tr>
                             <tr>
                                <td>10.30 - 12.30</td>
                                <td>
                                    <label>
                                        <?php
                                        for($i=0;$i<count($subjectList);$i++) {
                                        $subjectInstance = $subjectList[$i];
                                        $exTime = $subjectInstance->getExamTime();
                                        $exSubjectName = $subjectInstance->getSubjectName();
                                        if($exTime == "10.30-12.30") {
                                            print_r($exSubjectName);
                                        }
                                        }
                                        ?>
                                    </label>
                                </td>
                            </tr>
                             <tr>
                                <td>01.30 - 03.30</td>
                                <td>
                                    <label>
                                        <?php
                                        for($i=0;$i<count($subjectList);$i++) {
                                        $subjectInstance = $subjectList[$i];
                                        $exTime = $subjectInstance->getExamTime();
                                        $exSubjectName = $subjectInstance->getSubjectName();
                                        if($exTime == "01.30-03.30") {
                                            print_r($exSubjectName);
                                        }
                                        }
                                        ?>
                                    </label>
                                </td>
                            </tr>
                             <tr>
                                <td>03.30 - 05.30</td>
                                <td>
                                    <label>
                                        <?php
                                        for($i=0;$i<count($subjectList);$i++) {
                                        $subjectInstance = $subjectList[$i];
                                        $exTime = $subjectInstance->getExamTime();
                                        $exSubjectName = $subjectInstance->getSubjectName();
                                        if($exTime == "03.30-05.30") {
                                            print_r($exSubjectName);
                                        }
                                        }
                                        ?>
                                    </label>
                                </td>
                            </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="panel-footer">
                    </div>
                  </div>
            </div>
            <div class="col-md-1"></div>
        </div>
        <div class="row">
            <div class="col-md-4" style="margin-left: 10px;"></div>
            <div class="col-md-7">
                <div class="panel panel-default">
                    <div class="panel-heading clearfix">
                      <h3 class="panel-title pull-left">Summary</h3>
                    </div>
                    <div class="list-group">
                        <div class="list-group-item">
                          <p class="list-group-item-text">Tima Table Id</p>
                          <h4 class="list-group-item-heading">
                              <label><?php print_r($TimeTableId) ?></label>
                          </h4>
                        </div>
                        <div class="list-group-item">
                          <p class="list-group-item-text">Year</p>
                          <h4 class="list-group-item-heading">
                              <label><?php print_r($TimeTableYear) ?></label>
                          </h4>
                        </div>
                        <div class="list-group-item">
                          <p class="list-group-item-text">Date</p>
                           <h4 class="list-group-item-heading">
                              <label><?php print_r($TimeTableDate) ?></label>
                          </h4>
                        </div>
                      </div>
                    <div class="panel-footer"></div>
                  </div>
            </div>
            <div class="col-md-1"></div>
        </div>
        
    </body>
</html>
