<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LoginDAO
 *
 * @author User
 */
require_once 'C:\xampp\htdocs\exam\Data\DBconnection.php';
class LoginDAO {
    private $dbConnManager;
    //constructor
    public function __construct() {
        $this->dbConnManager = new DBconnection();
    }
    public function getPassword($userName) {
        $pdo = $this->dbConnManager->connect();
        try {
            $stmt = $pdo->query("SELECT `userPassword` FROM `user` WHERE `userId` = '".$userName."'");
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $rs = $stmt->fetch();
            return $rs['userPassword'];
        }catch(PDOException $ex) {
           // print_r($ex);
        }finally {
            $this->dbConnManager->closeConnection($pdo);
        }
    }
    
}
