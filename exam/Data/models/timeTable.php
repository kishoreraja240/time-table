<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of timeTable
 *
 * @author User
 */
class timeTable {
    private $timeTableId;
    private $year;
    private $examDate;
    function getExamDate()
    {
        return $this->examDate;
    }

    function setExamDate($examDate)
    {
        $this->examDate = $examDate;
    }

        function getTimeTableId()
    {
        return $this->timeTableId;
    }

    function getYear()
    {
        return $this->year;
    }

    function setTimeTableId($timeTableId)
    {
        $this->timeTableId = $timeTableId;
    }

    function setYear($year)
    {
        $this->year = $year;
    }


}
