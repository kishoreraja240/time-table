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
                            <p>This page will show the all timetables created, so by clicking the table you want it will show the time table individually</p>
                        </div>
                    </div>
                    <div class="panel-footer">
                    </div>
            </div> 
        </div>
        <div class="col-md-6">
            <?php require_once 'C:\xampp\htdocs\exam\Data\DAO\SiteManager.php';
                  require_once 'C:\xampp\htdocs\exam\Data\models\timeTable.php';
            $siteManager = new SiteManager();
            $getTableArray = $siteManager->sendAllTimeTable();
            for($i=0;$i<count($getTableArray);$i++) {
               //$timetableInstance = new timeTable();
               $timetableInstance = $getTableArray[$i];
               //print_r($timetableInstance->getTimeTableId());
               
             ?>
           <div class="panel panel-default">
                <div class="panel-heading clearfix">
                  <h3 class="panel-title pull-left">Table </h3>
                    
                </div>
                <div class="panel-body">
                    <p>
                        <div><h4>Time Table Id :-<?php print_r($timetableInstance->getTimeTableId()); ?></h4></div>
                        <div><h4>Year          :-<?php print_r($timetableInstance->getYear());?></h4></div>
                    </p>
                </div>
               <?php
               $selectedTable = array('timeId' => $timetableInstance->getTimeTableId(),'timeYear' =>$timetableInstance->getYear(),'examDate' =>$timetableInstance->getExamDate());
               $queryString = http_build_query($selectedTable);
               //print_r($queryString);
               ?>
                <div class="panel-heading clearfix">
                  <a class="btn btn-info pull-left" href="individualTableView.php?<?php echo $queryString;?>">
                        View
                    </a>
                </div>
           </div>
            <?php 
            }
            ?>
        </div>
        <div class="col-md-2"></div>
    </body>
</html>
