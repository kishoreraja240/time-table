<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of authonticator
 *
 * @author User
 */
require_once 'C:\xampp\htdocs\exam\Data\DAO\LoginDAO.php';
class authonticator {
    public function loginAuthonticator($userName,$userPassword) {
        $loginDao = new LoginDAO();
        $dbPassword = $loginDao->getPassword($userName);
        if($dbPassword == $userPassword) {
            return TRUE;
        }
        else {
            return FALSE;
        }
    }
}
