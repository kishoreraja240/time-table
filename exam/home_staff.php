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
        <?php require_once './include/header_staff.php'; ?>
    </head>
    <body style="margin-top: 70px;">
        <form action="Home.php" method="POST">
            <div class="row">
                <div class="col-md-4" style="margin-left: 10px">
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
                    <div class="panel panel-info">
                        <div class="panel-heading clearfix">
                          <h3 class="panel-title pull-left">Option Selector</h3>
                        </div>
                        <div class="list-group">
                            <div class="list-group-item">
                              <p class="list-group-item-text">Year</p>
                                <div> 
                                    <select class="btn btn-default" name="examYear" id="examYear">
                                        <option>First Year</option>
                                        <option>Second Year</option>
                                        <option>Third Year</option>
                                        <option>Fourth Year</option> 
                                    </select>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <p class="list-group-item-text">Date</p>
                                <p>
                                    <b>Date</b>
                                    <select class="btn btn-default" id="examDate" name="examDate">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                        <option>9</option>
                                        <option>10</option>
                                        <option>11</option>
                                        <option>12</option>
                                        <option>13</option>
                                        <option>14</option>
                                        <option>15</option>
                                        <option>16</option>
                                        <option>17</option>
                                        <option>18</option>
                                        <option>19</option>
                                        <option>20</option>
                                        <option>21</option>
                                        <option>22</option>
                                        <option>23</option>
                                        <option>24</option>
                                        <option>25</option>
                                        <option>26</option>
                                        <option>27</option>
                                        <option>28</option>
                                        <option>29</option>
                                        <option>30</option>
                                        <option>31</option>
                                    </select>
                                    <b>Month</b>
                                    <select class="btn btn-default" id="examMonth" name="examMonth">
                                        <option>January</option>
                                        <option>February</option>
                                        <option>March</option>
                                        <option>April</option>
                                        <option>May</option>
                                        <option>June</option>
                                        <option>July</option>
                                        <option>Augest</option>
                                        <option>September</option>
                                        <option>October</option>
                                        <option>November</option>
                                        <option>December</option>
                                    </select>
                                </p>
                            </div>
                        </div>
                        <div class="panel-footer">
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
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
                                <p>After you Press the submit button final time table can be viewed in another Page</p>
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
                                    <tr>
                                        <td>08.30 - 10.30</td>
                                        <td>
                                            <select class="btn btn-default" name="slotOne" id="slotOne">
                                                <option>Select Subject</option>
                                                <option>Sinhla</option>
                                                <option>Science</option>
                                                <option>Religion</option>
                                                <option>Maths</option>
                                                <option>History</option>
                                                <option>Art</option>
                                                <option>Languages</option>
                                                <option>Physics</option>
                                                <option>Bio</option>
                                                <option>Chemisty</option>
                                                <option>Econ</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>10.30 - 12.30</td>
                                        <td>
                                            <select class="btn btn-default" name="slotTwo" id="slotTwo">
                                                <option>Select Subject</option>
                                                <option>Sinhla</option>
                                                <option>Science</option>
                                                <option>Religion</option>
                                                <option>Maths</option>
                                                <option>History</option>
                                                <option>Art</option>
                                                <option>Languages</option>
                                                <option>Physics</option>
                                                <option>Bio</option>
                                                <option>Chemisty</option>
                                                <option>Econ</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>01.30 - 03.30</td>
                                        <td>
                                            <select class="btn btn-default" name="slotThree" id="slotThree">
                                                <option>Select Subject</option>
                                                <option>Sinhla</option>
                                                <option>Science</option>
                                                <option>Religion</option>
                                                <option>Maths</option>
                                                <option>History</option>
                                                <option>Art</option>
                                                <option>Languages</option>
                                                <option>Physics</option>
                                                <option>Bio</option>
                                                <option>Chemisty</option>
                                                <option>Econ</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>03.30 - 05.30</td>
                                        <td>
                                            <select class="btn btn-default" name="slotFour" id="slotFour">
                                                <option>Select Subject</option>
                                                <option>Sinhla</option>
                                                <option>Science</option>
                                                <option>Religion</option>
                                                <option>Maths</option>
                                                <option>History</option>
                                                <option>Art</option>
                                                <option>Languages</option>
                                                <option>Physics</option>
                                                <option>Bio</option>
                                                <option>Chemisty</option>
                                                <option>Econ</option>
                                            </select>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="panel-footer">
                            <input type="submit" value="Submit" class="btn btn-success" name="submitForm" id="submitForm">
                        </div>
                    </div>
                </div>
            <div class="col-md-1"></div>
        </div>
        </form>
        <script type="text/javascript" src="js/mybootscardmin.js"></script>
        <script type="text/javascript" src="js/mybootstrap.min.js"></script>
        <?php
            $LectureId = $_SESSION['userID'];
            if(isset($_POST['submitForm']) && isset($_POST['examYear']) && isset($_POST['examDate']) && isset($_POST['examMonth'])) {
                $getDate = $_POST['examDate'];
                $getMonth = $_POST['examMonth'];
                $fixDate = "2015-".$getMonth."-".$getDate;
                $subjectOne = $_POST['slotOne'];
                $subjectTwo = $_POST['slotTwo'];
                $subjectThree = $_POST['slotThree'];
                $subjectFour = $_POST['slotFour'];
                $fixYear = $_POST['examYear'];
                require_once 'C:\xampp\htdocs\exam\Data\DAO\SiteManager.php';
                $dataManager = new SiteManager();
                $tbId = $dataManager->tableIdGenerator();
                $newTableId = "T-".$tbId;
                $generateTable = $dataManager ->createTable($fixYear,$fixDate,$newTableId);
                if($subjectOne == "Select Subject") {
                    $subjectOne = "Free Date";
                }
                if($subjectTwo == "Select Subject") {
                    $subjectTwo = "Free Date";
                }
                if($subjectThree == "Select Subject") {
                    $subjectThree = "Free Date";
                }
                if($subjectFour == "Select Subject") {
                    $subjectFour = "Free Date";
                }
                $generateSubjectOne = $dataManager->addSubject($subjectOne,$newTableId,$LectureId,$fixYear,"1");
                $generateSubjectTwo = $dataManager->addSubject($subjectTwo,$newTableId,$LectureId,$fixYear,"2");
                $generateSubjectThree = $dataManager->addSubject($subjectThree,$newTableId,$LectureId,$fixYear,"3");
                $generateSubjectFour = $dataManager->addSubject($subjectFour,$newTableId,$LectureId,$fixYear,"4");
                 if(!$generateSubjectFour && !$generateSubjectThree && !$generateSubjectTwo && !$generateSubjectOne && !$generateTable) {
                ?>
            <div class="error">Incorrect atempt , try again </div>
                <?php
                }
                else {
                ?>
            <div class="success">Successfully entered table </div>
                <?php
                }
            }
        ?>
    </body>
</html>
