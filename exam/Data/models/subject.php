<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of subject
 *
 * @author User
 */
class subject {
    private $subjectName;
    private $examTime;
    function getSubjectName()
    {
        return $this->subjectName;
    }

    function getExamTime()
    {
        return $this->examTime;
    }

    function setSubjectName($subjectName)
    {
        $this->subjectName = $subjectName;
    }

    function setExamTime($examTime)
    {
        $this->examTime = $examTime;
    }

  
    //put your code here
}
