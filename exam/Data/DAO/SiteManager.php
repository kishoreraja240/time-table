<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SiteManager
 *
 * @author User
 */
require_once 'C:\xampp\htdocs\exam\Data\DBconnection.php';
require_once 'C:\xampp\htdocs\exam\Data\models\timeTable.php';
require_once 'C:\xampp\htdocs\exam\Data\models\subject.php';
require_once 'C:\xampp\htdocs\exam\Data\models\subject1.php';
class SiteManager 
{
    private $test = -1;
    private $dbConnManager;
     public function __construct() {
        $this->dbConnManager = new DBconnection();
    }
    
    /*public function getYears() {
        $pdo = $this->dbConnManager->connect();
        try {
            $statement = $pdo ->query("SELECT year From `timetable` group by `year`");
            $statement->execute();
            $statement->setFetchMode(PDO::FETCH_ASSOC);
            $result = $statement->fetch();
            return $result;
        } catch (Exception $ex) {
            print_r($ex);
        }
    }*/
    public function tableIdGenerator() {
        $pdo = $this->dbConnManager->connect();
        try {
            $statement = $pdo ->query("SELECT count(timeTableId) as lastId from timetable");
            $statement->execute();
            $statement->setFetchMode(PDO::FETCH_ASSOC);
            $result = $statement->fetch();
            $getId = (int)$result['lastId'];
            return $getId+1;
        } catch (Exception $ex) {
            // print_r($ex);
        }
         finally {
            $this->dbConnManager->closeConnection($pdo);
        }
        
    }
    public function createTable($year,$date,$tableId) {
        $lecturer = $_SESSION['userID'];
        $pdo = $this->dbConnManager->connect();
        try {
            $statement = $pdo->query("INSERT INTO `timetable`(`timeTableId`, `year`, `date`) VALUES ('".$tableId."','".$year."','".$date."')");
            $result = $statement->execute();
            if($result) {
                return TRUE;
            }
            else{
                return FALSE;    
            }
        } catch (Exception $ex) {
           // print_r($ex);
        }
        finally {
            $this->dbConnManager->closeConnection($pdo);
        }
    }
    public function addSubject($name,$tableId,$lectureId,$year,$time) {
        $pdo = $this->dbConnManager->connect();
        try {
            $statement = $pdo->query("INSERT INTO `subject`(`name`, `lectureId`, `timeTableId`, `year`,`Time`) VALUES ('".$name."','".$lectureId."','".$tableId."','".$year."','".$time."')");
            $result = $statement->execute();
            echo $result;
            if($result) {
                return TRUE;
            }
            else {
                return FALSE;
            }
        } catch (Exception $ex) {
           // print_r($ex);
        }
        finally {
            $this->dbConnManager->closeConnection($pdo);
        }
    }
	public function generator()
	{
		$connection = mysql_connect("localhost","root","");
		mysql_select_db("exam",$connection);
		$qry="select `Course ID`,`Credits` from course";
		$result=mysql_query($qry,$connection);
		$myBigArray = array();
		$myBigArray1= array();
		while($row=mysql_fetch_assoc($result))
			{
			 $row1=$row["Course ID"];
			 $row2=$row["Credits"];
			 array_push($myBigArray,$row1);
			 array_push($myBigArray,$row2);
			}
			$myBigArray1[0]=1;$myBigArray1[1]=13;$myBigArray1[2]=21;$myBigArray1[3]=34;
			$myBigArray1[4]=7;$myBigArray1[5]=12;$myBigArray1[6]=20;$myBigArray1[7]=29;
			$myBigArray1[8]=3;$myBigArray1[9]=15;$myBigArray1[10]=25;$myBigArray1[11]=31;
			$myBigArray1[12]=4;$myBigArray1[13]=16;$myBigArray1[14]=23;$myBigArray1[15]=32;
			$myBigArray1[16]=9;$myBigArray1[17]=10;$myBigArray1[18]=11;
			$myBigArray1[19]=26;$myBigArray1[20]=27;$myBigArray1[21]=28;
			$myBigArray1[22]=14;$myBigArray1[23]=18;$myBigArray1[24]=22;$myBigArray1[25]=33;
			$myBigArray1[26]=6;$myBigArray1[27]=8;$myBigArray1[28]=17;$myBigArray1[29]=35;
			$myBigArray1[30]=2;$myBigArray1[31]=24;
			$myBigArray1[32]=5;$myBigArray1[33]=26;$myBigArray1[34]=30;
			/*$count=0;
		for($i=0;$i<15;$i++)
			{
				$counter=0;$flag=1;
			while($flag==1){
			      $myBigArray1[$count]=rand(1,35);
				  $count=$count+1;
				  for($j=0;$j<$count-1;$j++)
				  {
				  if($myBigArray1[$j]==$myBigArray1[$count-1])
				  {break;}
				  else $counter++;
				  	}
				  if($counter==($count-1)) $flag=0;
				  else {$count--;$flag=1;}
				  //$c=rand(1,5);
				  //array_push($myBigArray1,$c);
                      /*for($z=1;$z<$count;$z++){
					   for($x=0;$x<$z && $count>1;$x++){
					        if($myBigArray1[$x]==$myBigArray1[$z])
							 {$counter++;break;}
						   }}
						   if($counter>0){//array_pop($myBigArray1);
						   $count=$count-1;
						   $flag=1;}
						   else if($counter==0){ $flag=0;}*/
						   //else if($count==5) $flag=0;
						   
				//}				   	
					//print_r(rand(1,35));	
			//}
			return $myBigArray1;
	}
    public function addNewUser($userId,$userName,$userEmail,$userPassword,$userSection) {
        $pdo = $this->dbConnManager->connect();
        try {
            $statement = $pdo->query("INSERT INTO `user`(`userId`, `userName`, `userEmail`, `userPassword`,`Handling Courses`) VALUES ('".$userId."','".$userName."','".$userEmail."','".$userPassword."','".$userSection."')");
            $result = $statement->execute();
            echo $result;
            if($result) {
                return TRUE;
				    }
            else {
                return FALSE;
            }
        } catch (Exception $ex) {
            //print_r($ex);
			//return TRUE;
        }
        finally {
            $this->dbConnManager->closeConnection($pdo);
        }
		/*$connection = mysqli_connect("localhost","root","","exam");
		if(mysqli_query($connection,"insert into `user` values ('$userId','$userPassword,'$userName','$userEmail','$userSection')"))
		return TRUE;
		else 
		return FALSE;*/
    }
	 public function addNewClass($userId,$userName,$userSection) {
        /*$pdo = $this->dbConnManager->connect();
        try {
            $statement = $pdo->query("INSERT INTO `class`(`Class Room`, `Department`, `Section`) VALUES ('".$userId."','".$userName."','".$userSection."')");
            $result = $statement->execute();
            echo $result;
            if($result) {
                return TRUE;
            }
            else {
                return FALSE;
            }
        } catch (Exception $ex) {
            //print_r($ex);
        }
        finally {
            $this->dbConnManager->closeConnection($pdo);
        }*/
		$connection = mysqli_connect("localhost","root","","exam");
		if(mysqli_query($connection,"insert into `class` values ('$userId','$userName','$userSection')"))
		return TRUE;
		else 
		return FALSE;
    }
	public function addNewCourse($userId,$userName,$userSection) {
        /*$pdo = $this->dbConnManager->connect();
        try {
            $statement = $pdo->query("INSERT INTO `course`(`Course Name`, `Course ID`, `Credits`) VALUES ('".$userId."','".$userName."','".$userSection."')");
            $result = $statement->execute();
            echo $result;
            if($result) {
                return TRUE;
            }
            else {
                return FALSE;
            }
        } catch (Exception $ex) {
            //print_r($ex);
        }
        finally {
            $this->dbConnManager->closeConnection($pdo);
        }*/
		$connection = mysqli_connect("localhost","root","","exam");
		if(mysqli_query($connection,"insert into `course` values ('$userId','$userName','$userSection')"))
		return TRUE;
		else 
		return FALSE;
    }
		public function addCoursestoStaff($userName,$userSection) {
        /*$pdo = $this->dbConnManager->connect();
        try {
            $statement = $pdo->query("INSERT INTO `course-handle`(`Staff Id`, `Course Id`) VALUES ('".$userName."','".$userSection."')");
            $result = $statement->execute();
            if($result) {
                return ("true");
            }
            else {
                return ("false");;
            }
        } catch (SQLException $ex) {
           // print_r($ex);
			return ("false1");
        }
        finally {
            $this->dbConnManager->closeConnection($pdo);
        }*/
		$connection = mysqli_connect("localhost","root","","exam");
		if(mysqli_query($connection,"insert into `course-handle` values ('$userName','$userSection')"))
		return TRUE;
		else 
		return FALSE;
		//}
    }
	public function validate() {
		$pdo = $this->dbConnManager->connect();
        try {
            $statement = $pdo ->query("SELECT sum(Credits) as chumma from course");
            $statement->execute();
            $statement->setFetchMode(PDO::FETCH_ASSOC);
            $result = $statement->fetch();
            $getId = (int)$result['chumma'];
            return $getId+5;
        } catch (Exception $ex) {
            // print_r($ex);
        }
         finally {
            $this->dbConnManager->closeConnection($pdo);
        }
        
	}
	public function getindivclass($chumma){
		$connection = mysql_connect("localhost","root","");
		mysql_select_db("exam",$connection);
	     		$qry=" select day,h1 from a ch1 where ch1.h1='$chumma'";
				$qry1="select day,h2 from a ch1 where ch1.h2='$chumma'";
				$qry2="select day,h3 from a ch1 where ch1.h3 ='$chumma'";
				$qry3="select day,h4 from a ch1 where ch1.h4 ='$chumma'";
				$qry4="select day,h5 from a ch1 where ch1.h5 ='$chumma'";
				$qry5="select day,h6 from a ch1 where ch1.h6 ='$chumma'";
				$qry6="select day,h7 from a ch1 where ch1.h7 ='$chumma'";
		$result=mysql_query($qry,$connection);
		$result1=mysql_query($qry1,$connection);
		$result2=mysql_query($qry2,$connection);
		$result3=mysql_query($qry3,$connection);
		$result4=mysql_query($qry4,$connection);
		$result5=mysql_query($qry5,$connection);
		$result6=mysql_query($qry6,$connection);
		$myBigArray = array();
		$myBigArray1 = array();
		$myBigArray2 = array();
		$myBigArray3 = array();
		$myBigArray4 = array();
		$myBigArray5 = array();
		$myBigArray6 = array();
		//$myBigArray1= array();
		while($row=mysql_fetch_assoc($result))
			{
			 $row1=$row["day"];
			 $row2="h1";
			 $row3=$row["h1"];
			 //print_r($row3);
			 array_push($myBigArray,$row1);
			 array_push($myBigArray,$row2);
			 array_push($myBigArray,$row3);
			// print_r($myBigArray);
			}
			while($row=mysql_fetch_assoc($result1))
			{
			 $row1=$row["day"];
			 $row2="h2";
			 $row3=$row["h2"];
			 array_push($myBigArray,$row1);
			 array_push($myBigArray,$row2);
			 array_push($myBigArray,$row3);
			}
			//print_r($myBigArray);
			while($row=mysql_fetch_assoc($result2))
			{
			 $row1=$row["day"];
			 $row2="h3";
			 $row3=$row["h3"];
			 array_push($myBigArray,$row1);
			 array_push($myBigArray,$row2);
			 array_push($myBigArray,$row3);
			}
			//print_r($myBigArray);
			while($row=mysql_fetch_assoc($result3))
			{
			 $row1=$row["day"];
			 $row2="h4";
			 $row3=$row["h4"];
			 array_push($myBigArray,$row1);
			 array_push($myBigArray,$row2);
			 array_push($myBigArray,$row3);
			}
			//print_r($myBigArray);
			while($row=mysql_fetch_assoc($result4))
			{
			 $row1=$row["day"];
			 $row2="h5";
			 $row3=$row["h5"];
			 array_push($myBigArray,$row1);
			 array_push($myBigArray,$row2);
			 array_push($myBigArray,$row3);
			}
			while($row=mysql_fetch_assoc($result5))
			{
			 $row1=$row["day"];
			 $row2="h6";
			 $row3=$row["h6"];
			 array_push($myBigArray,$row1);
			 array_push($myBigArray,$row2);
			 array_push($myBigArray,$row3);
			}
			while($row=mysql_fetch_assoc($result6))
			{
			$row1=$row["day"];
			 $row2="h7";
			 $row3=$row["h7"];
			 array_push($myBigArray,$row1);
			 array_push($myBigArray,$row2);
			 array_push($myBigArray,$row3);
			}
			//print_r($myBigArray);
				//print_r($myBigArray+$myBigArray1+$myBigArray2+$myBigArray3+$myBigArray4+$myBigArray5+$myBigArray6);
				//return ($myBigArray+$myBigArray1+$myBigArray2+$myBigArray3+$myBigArray4+$myBigArray5+$myBigArray6);  
				return $myBigArray;
			
			  
		
	}
	public function gettable($chumma){
		$connection = mysql_connect("localhost","root","");
		mysql_select_db("exam",$connection);
		if($chumma=="ALL"){
		$qry="select h1,h2,h3,h4,h5,h6,h7 from a";
		$result=mysql_query($qry,$connection);
		//echo $result;
		$myBigArray = array();
		//$myBigArray1= array();
		while($row=mysql_fetch_assoc($result))
			{
			 $row1=$row["h1"];
			 $row2=$row["h2"];
			 $row3=$row["h3"];
			 $row4=$row["h4"];
			 $row5=$row["h5"];
			 $row6=$row["h6"];
			 $row7=$row["h7"];
			 array_push($myBigArray,$row1);
			 array_push($myBigArray,$row2);
			 array_push($myBigArray,$row3);
			 array_push($myBigArray,$row4);
			 array_push($myBigArray,$row5);
			 array_push($myBigArray,$row6);
			 array_push($myBigArray,$row7);
			}
			return $myBigArray;
			}
			else {
				$qry="select day,h1 from a ch1 where ch1.h1 in (SELECT DISTINCT `Course Id` FROM `course-handle` where `Staff Id`='$chumma')";
				$qry1="select day,h2 from a ch1 where ch1.h2 in (SELECT DISTINCT `Course Id` FROM `course-handle` where `Staff Id`='$chumma')";
				$qry2="select day,h3 from a ch1 where ch1.h3 in (SELECT DISTINCT `Course Id` FROM `course-handle` where `Staff Id`='$chumma')";
				$qry3="select day,h4 from a ch1 where ch1.h4 in (SELECT DISTINCT `Course Id` FROM `course-handle` where `Staff Id`='$chumma')";
				$qry4="select day,h5 from a ch1 where ch1.h5 in (SELECT DISTINCT `Course Id` FROM `course-handle` where `Staff Id`='$chumma')";
				$qry5="select day,h6 from a ch1 where ch1.h6 in (SELECT DISTINCT `Course Id` FROM `course-handle` where `Staff Id`='$chumma')";
				$qry6="select day,h7 from a ch1 where ch1.h7 in (SELECT DISTINCT `Course Id` FROM `course-handle` where `Staff Id`='$chumma')";
		$result=mysql_query($qry,$connection);
		$result1=mysql_query($qry1,$connection);
		$result2=mysql_query($qry2,$connection);
		$result3=mysql_query($qry3,$connection);
		$result4=mysql_query($qry4,$connection);
		$result5=mysql_query($qry5,$connection);
		$result6=mysql_query($qry6,$connection);
		$myBigArray = array();
		$myBigArray1 = array();
		$myBigArray2 = array();
		$myBigArray3 = array();
		$myBigArray4 = array();
		$myBigArray5 = array();
		$myBigArray6 = array();
		//$myBigArray1= array();
		while($row=mysql_fetch_assoc($result))
			{
			 $row1=$row["day"];
			 $row2="h1";
			 $row3=$row["h1"];
			 //print_r($row3);
			 array_push($myBigArray,$row1);
			 array_push($myBigArray,$row2);
			 array_push($myBigArray,$row3);
			// print_r($myBigArray);
			}
			while($row=mysql_fetch_assoc($result1))
			{
			 $row1=$row["day"];
			 $row2="h2";
			 $row3=$row["h2"];
			 array_push($myBigArray,$row1);
			 array_push($myBigArray,$row2);
			 array_push($myBigArray,$row3);
			}
			//print_r($myBigArray);
			while($row=mysql_fetch_assoc($result2))
			{
			 $row1=$row["day"];
			 $row2="h3";
			 $row3=$row["h3"];
			 array_push($myBigArray,$row1);
			 array_push($myBigArray,$row2);
			 array_push($myBigArray,$row3);
			}
			//print_r($myBigArray);
			while($row=mysql_fetch_assoc($result3))
			{
			 $row1=$row["day"];
			 $row2="h4";
			 $row3=$row["h4"];
			 array_push($myBigArray,$row1);
			 array_push($myBigArray,$row2);
			 array_push($myBigArray,$row3);
			}
			//print_r($myBigArray);
			while($row=mysql_fetch_assoc($result4))
			{
			 $row1=$row["day"];
			 $row2="h5";
			 $row3=$row["h5"];
			 array_push($myBigArray,$row1);
			 array_push($myBigArray,$row2);
			 array_push($myBigArray,$row3);
			}
			while($row=mysql_fetch_assoc($result5))
			{
			 $row1=$row["day"];
			 $row2="h6";
			 $row3=$row["h6"];
			 array_push($myBigArray,$row1);
			 array_push($myBigArray,$row2);
			 array_push($myBigArray,$row3);
			}
			while($row=mysql_fetch_assoc($result6))
			{
			$row1=$row["day"];
			 $row2="h7";
			 $row3=$row["h7"];
			 array_push($myBigArray,$row1);
			 array_push($myBigArray,$row2);
			 array_push($myBigArray,$row3);
			}
			//print_r($myBigArray);
				//print_r($myBigArray+$myBigArray1+$myBigArray2+$myBigArray3+$myBigArray4+$myBigArray5+$myBigArray6);
				//return ($myBigArray+$myBigArray1+$myBigArray2+$myBigArray3+$myBigArray4+$myBigArray5+$myBigArray6);  
				return $myBigArray;
				}
			  
		
	}
	public function addCoursetoStaff() {
		 /*$pdo = $this->dbConnManager->connect();
		 //$result = array();
        try {
            $statement = $pdo->query("SELECT `Course ID` from course");
            $statement->setFetchMode(PDO::FETCH_ASSOC);
            $result = $statement->fetch();
            print_r($result);
            $myBigArray = array();
            foreach ($result as &$value) {
                $createSubject = new subject1();
                $createSubject->setExamTime($result['Course ID']);
                //$createSubject->setSubjectName($result['name']);
				print_r($createSubject);
                array_push($myBigArray,$createSubject);
            }
            return $myBigArray;
            
        } catch (Exception $ex) {
            print_r($ex);
        }
        finally {
           $this->dbConnManager->closeConnection($pdo);    
        }*/
		$connection = mysql_connect("localhost","root","");
		mysql_select_db("exam",$connection);
		$qry="select `Course ID` from course";
		$result=mysql_query($qry,$connection);
		$myBigArray = array();
		while($row=mysql_fetch_assoc($result))
			{
			 $row1=$row["Course ID"];
			 array_push($myBigArray,$row1);
			}
			  return $myBigArray;  
        }
		public function addCoursetoStaff1() {
		$connection = mysql_connect("localhost","root","");
		mysql_select_db("exam",$connection);
		$qry="select `userId` from user";
		$result=mysql_query($qry,$connection);
		$myBigArray = array();
		while($row=mysql_fetch_assoc($result))
			{
			 $row1=$row["userId"];
			 if($row1 != "admin")
			 array_push($myBigArray,$row1);
			}
			  return $myBigArray;  
        }
		public function addCoursetoStaff2($userName) {
		$connection = mysql_connect("localhost","root","");
		mysql_select_db("exam",$connection);
		$qry="select distinct `Course Id` from `course-handle`  where `Staff Id`='$userName'";
		$result=mysql_query($qry,$connection);
		$myBigArray = array();
		while($row=mysql_fetch_assoc($result))
			{
			 $row1=$row["Course Id"];
			 //if($row1 != "admin")
			 array_push($myBigArray,$row1);
			}
			  return $myBigArray;  
        }
		
    public function setUserMail($userName,$userEmail,$userMessage) {
        $pdo = $this->dbConnManager->connect();
        try {
            if($this->test == -1) {
                $this->test = $userName;
            }else {
                $this->test += 1;
            }
            $statement = $pdo->query("INSERT INTO `email`(`Name`, `EMail`, `Message`) VALUES ('".$this->test."','".$userEmail."','".$userMessage."')");
            $result = $statement->execute();
            if($result) {
                return TRUE;
            }
            else
            {
                return FALSE;
            }
        } catch (Exception $ex) {
           // print_r($ex);
        }
        finally {
            $this->dbConnManager->closeConnection($pdo);    
        }
                
    }
	
    public function sendAllTimeTable() {
        $pdo = $this->dbConnManager->connect();
        try {
            $statement = $pdo->query("SELECT * FROM timetable GROUP BY timeTableId ");
            $statement->setFetchMode(PDO::FETCH_ASSOC);
            $result = $statement->fetch();
            print_r($result);
            $myBigArray = array();
            foreach ($result as &$value) {
                $createTable = new timeTable();
                $createTable->setTimeTableId($result['timeTableId']);
                $createTable->setYear($result['year']);
                $createTable->setExamDate($result['date']);
                array_push($myBigArray,$createTable);
            }
            //print_r(array_values($myBigArray));
            return $myBigArray;
            
        } catch (Exception $ex) {
            //print_r($ex);
        }
        finally {
            $this->dbConnManager->closeConnection($pdo);    
        }
    }
    public function loadSubject($timeTableId) {
        $pdo = $this->dbConnManager->connect();$pdo = $this->dbConnManager->connect();
        try {
            $statement = $pdo->query("SELECT `Time`,`name` from subject where timeTableId='".$timeTableId."' Order By `Time`");
            $statement->setFetchMode(PDO::FETCH_ASSOC);
            $result = $statement->fetch();
            print_r($result);
            $myBigArray = array();
            foreach ($result as &$value) {
                $createSubject = new subject();
                $createSubject->setExamTime($result['Time']);
                $createSubject->setSubjectName($result['name']);
                array_push($myBigArray,$createSubject);
            }
            return $myBigArray;
            
        } catch (Exception $ex) {
            //print_r($ex);
        }
        finally {
           $this->dbConnManager->closeConnection($pdo);    
        }
    }
    
    
}
