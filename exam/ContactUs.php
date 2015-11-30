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
    <?php require_once './include/header_staff.php'; ?>
    <body style="margin-top: 70px;">
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
                        <p>This Form is Contact form, You can type any message and send it to us</p>
                    </div>
                </div>
                <div class="panel-footer">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    <h3 class="panel-title pull-left">Contact Form</h3>
                    <div class="btn-group pull-right">
                    </div>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" action="ContactUs.php" method="POST">
                        <div class="form-group">
                            <label class="col-xs-3 control-label">Name</label>
                            <div class="col-xs-9">
                                <input type="text" class="form-control" placeholder="User Name" name="userName" id="userName">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-3 control-label">Email</label>
                            <div class="col-xs-9">
                                <input type="text" class="form-control" placeholder="E-Mail" name="userEmail" id="userEmail">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-3 control-label">Message</label>
                            <div class="col-xs-9">
                                <textarea class="form-control" rows="6" name="userMessage" id="userMessage">
                                </textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-danger">
                                Cancel
                            </button>
                            <button class="btn btn-success" name="sendFeedback" id="sendFeedback">
                                Save
                            </button>
                        </div>
                    </form>
                </div>
                <div class="panel-footer">

                </div>
            </div>
        </div>
        <div class="col-md-2">
        </div>
        <?php
        if (isset($_POST['sendFeedback']) && isset($_POST['userMessage']))
        {
           if(!isset($_SESSION['test'])) {
                $_SESSION['test'] = 1;
                echo $_SESSION['test'];
            }else {
                $_SESSION['test'] += 1;
                echo $_SESSION['test'];
            }
            require_once 'C:\xampp\htdocs\exam\Data\DAO\SiteManager.php';
            $contactUser = $_POST['userName'];
            $contactEmail = $_POST['userEmail'];
            $contactMessage = $_POST['userMessage'];
            $ContactdataManager = new SiteManager();
            $sendMessage = $ContactdataManager->setUserMail($contactUser, $contactEmail, $contactMessage);
            if ($sendMessage == FALSE)
            {
                ?>
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="success">Successfully sent the mail</div>
                </div>
                <div class="col-md-4"></div>
                <?php
            }
            else
            {
                ?>
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="error">Error.Not sent mail</div>
                </div>
                <div class="col-md-4"></div>
                <?php
            }
        }
        ?>
    </body>
</html>
