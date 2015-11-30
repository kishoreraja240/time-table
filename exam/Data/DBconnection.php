<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DBconnection
 *
 * @author User
 */
class DBconnection {
    private $PDO;
    private $host = "127.0.0.1";
    private $userName = "root";
    private $password = "";

    public function connect() {
        try {
            $this->PDO = new PDO("mysql:host=127.0.0.1;dbname=exam", 'root','');
            $this->PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }  catch (PDOException $ex) {
            echo $ex->getMessage();
        }
        return $this->PDO;
    }

    public function closeConnection($PDO) {
        $PDO = null;
    }
    
}
