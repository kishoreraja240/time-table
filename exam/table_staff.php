<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
 <?php 
  require_once './include/header_staff.php';
   ?>
 <br><br><br>
</head>

<body>
<form class="form-horizontal"  method="POST">
<div class="form-group">
                          <?php
                            require_once 'C:\xampp\htdocs\exam\Data\DAO\SiteManager.php';                        
						    $siteManagerDAO1 = new SiteManager();
							$xuserName=$_SESSION["userID"];
							//echo $xuserName;
							$addMember1 = $siteManagerDAO1->addCoursetoStaff2($xuserName);
						?>
                          <label class="col-xs-3 control-label">Class</label>
                          <select class="btn btn-default" id="examDate2" name="examDate2">
                            <?php echo '<option>---View---</option>'?>
                            <?php echo '<option>ALL</option>'?>
                            <?php for($i=0;$i<sizeof($addMember1);$i++)
								{
									echo '<option value='.$addMember1[$i].'>'.$addMember1[$i].'</option>';
								}
								?>
                          </select>
                        
                        
                          <button class="btn btn-info pull-middle" style="margin-right: 15px;" id="addUser1" name="addUser1">
                                View
    </button>
  </div>
 <table width="987" height="470" border="1">
  <caption>
    Time-Table
  </caption>
   <?php
   if(isset($_POST['addUser1']) && $_POST['examDate2']=="---View---") {?>
  <tbody>
    <tr>
      <td width="111" height="100">&nbsp;</td>
      <td width="59">9:00 to 9:50</td>
      <td width="69">9:50 to 10:40</td>
      <td width="50" rowspan="6"><p>10:40 to 11:00</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>  I</p>
        <p>N</p>
        <p>T</p>
        <p>E</p>
        <p>R</p>
        <p>V</p>
        <p>A</p>
        <p>L</p>
        <p>&nbsp;</p></td>
      <td width="75">11:00 to 11:50</td>
      <td width="69">11:50 to 12:40</td>
      <td width="49" rowspan="6"><p>12:40 to 1:40</p>
        <p>&nbsp; </p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>L</p>
        <p>U<br>
          N</p>
        <p>C</p>
        <p>H</p></td>
      <td width="73">1:40 to 2:30</td>
      <td width="73"> 2:30 to 3:20</td>
      <td width="76"> 3:20 to 4:10</td>
    </tr>
    <tr>
      <td height="64">Monday</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="73">Tuesday</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="68">Wednesday</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="72">Thursday</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="70">Friday</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </tbody> 
</table>
<?php } 
else if(isset($_POST['addUser1']) && $_POST['examDate2']=="ALL") {
							 $select = $_POST['examDate2'];
							 echo $select;
							 $addMember3= $siteManagerDAO1->gettable($_SESSION["userID"]);
							 //print_r($addMember3);
						
						?>
    <tbody>
    <tr>
      <td width="111" height="100">&nbsp;</td>
      <td width="59">9:00 to 9:50</td>
      <td width="69">9:50 to 10:40</td>
      <td width="50" rowspan="6"><p>10:40 to 11:00</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>  I</p>
        <p>N</p>
        <p>T</p>
        <p>E</p>
        <p>R</p>
        <p>V</p>
        <p>A</p>
        <p>L</p>
        <p>&nbsp;</p></td>
      <td width="75">11:00 to 11:50</td>
      <td width="69">11:50 to 12:40</td>
      <td width="49" rowspan="6"><p>12:40 to 1:40</p>
        <p>&nbsp; </p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>L</p>
        <p>U<br>
          N</p>
        <p>C</p>
        <p>H</p></td>
      <td width="73">1:40 to 2:30</td>
      <td width="73"> 2:30 to 3:20</td>
      <td width="76"> 3:20 to 4:10</td>
    </tr>
    <tr>
      <td height="64">Monday</td><?php $count=array();$count1=array();$j=0;$val=array(); ?>
      <?php 
	  for($i=0;$i< sizeof($addMember3);$i++){
		                  if($addMember3[$i]=="Monday"){
							  if($addMember3[$i+1]=="h1") $count[$j]=0;
							   else if($addMember3[$i+1]=="h2") $count[$j]=1;
							     else if($addMember3[$i+1]=="h3") $count[$j]=2;
								   else if($addMember3[$i+1]=="h4") $count[$j]=3;
								     else if($addMember3[$i+1]=="h5") $count[$j]=4;
									   else if($addMember3[$i+1]=="h6") $count[$j]=5;
									     else if($addMember3[$i+1]=="h7") $count[$j]=6;else $count[$j]=-1;
										 $count1[$j]=6-$count[$j];$val[$j]=$addMember3[$i+2];
										 $j=$j+1;$i=$i+2;}}
							for($i=0;$i<7;$i++){
								$c=0;
								for($j=0;$j<sizeof($val);$j++){
							if($count[$j]==$i) {?>
								<td><?php echo $val[$j]; ?></td>
								<?php $c=$c+1; }} ?>   
								<?php if($c==0){?>
								<td>&nbsp;</td>
							   <?php }
								 }
								?>
    </tr>
    <tr>
      <td height="73">Tuesday</td>
       <?php $count=array();$count1=array();$j=0;$val=array(); ?>
      <?php 
	  for($i=0;$i< sizeof($addMember3);$i++){
		                  if($addMember3[$i]=="Tuesday"){
							  if($addMember3[$i+1]=="h1") $count[$j]=0;
							   else if($addMember3[$i+1]=="h2") $count[$j]=1;
							     else if($addMember3[$i+1]=="h3") $count[$j]=2;
								   else if($addMember3[$i+1]=="h4") $count[$j]=3;
								     else if($addMember3[$i+1]=="h5") $count[$j]=4;
									   else if($addMember3[$i+1]=="h6") $count[$j]=5;
									     else if($addMember3[$i+1]=="h7") $count[$j]=6;else $count[$j]=-1;
										 $count1[$j]=6-$count[$j];$val[$j]=$addMember3[$i+2];
										 $j=$j+1;$i=$i+2;}}
							for($i=0;$i<7;$i++){
								$c=0;
								for($j=0;$j<sizeof($val);$j++){
							if($count[$j]==$i) {?>
								<td><?php echo $val[$j]; ?></td>
								<?php $c=$c+1; }} ?>   
								<?php if($c==0){?>
								<td>&nbsp;</td>
							   <?php }
								 }
								?>   </tr>
    <tr>
      <td height="68">Wednesday</td>
 <?php $count=array();$count1=array();$j=0;$val=array(); ?>
      <?php 
	  for($i=0;$i< sizeof($addMember3);$i++){
		                  if($addMember3[$i]=="Wednesday"){
							  if($addMember3[$i+1]=="h1") $count[$j]=0;
							   else if($addMember3[$i+1]=="h2") $count[$j]=1;
							     else if($addMember3[$i+1]=="h3") $count[$j]=2;
								   else if($addMember3[$i+1]=="h4") $count[$j]=3;
								     else if($addMember3[$i+1]=="h5") $count[$j]=4;
									   else if($addMember3[$i+1]=="h6") $count[$j]=5;
									     else if($addMember3[$i+1]=="h7") $count[$j]=6;else $count[$j]=-1;
										 $count1[$j]=6-$count[$j];$val[$j]=$addMember3[$i+2];
										 $j=$j+1;$i=$i+2;}}
							for($i=0;$i<7;$i++){
								$c=0;
								for($j=0;$j<sizeof($val);$j++){
							if($count[$j]==$i) {?>
								<td><?php echo $val[$j]; ?></td>
								<?php $c=$c+1; }} ?>   
								<?php if($c==0){?>
								<td>&nbsp;</td>
							   <?php }
								 }
								?>
    </tr>
    <tr>
      <td height="72">Thursday</td>
 <?php $count=array();$count1=array();$j=0;$val=array(); ?>
      <?php 
	  for($i=0;$i< sizeof($addMember3);$i++){
		                  if($addMember3[$i]=="Thursday"){
							  if($addMember3[$i+1]=="h1") $count[$j]=0;
							   else if($addMember3[$i+1]=="h2") $count[$j]=1;
							     else if($addMember3[$i+1]=="h3") $count[$j]=2;
								   else if($addMember3[$i+1]=="h4") $count[$j]=3;
								     else if($addMember3[$i+1]=="h5") $count[$j]=4;
									   else if($addMember3[$i+1]=="h6") $count[$j]=5;
									     else if($addMember3[$i+1]=="h7") $count[$j]=6;else $count[$j]=-1;
										 $count1[$j]=6-$count[$j];$val[$j]=$addMember3[$i+2];
										 $j=$j+1;$i=$i+2;}}
							for($i=0;$i<7;$i++){
								$c=0;
								for($j=0;$j<sizeof($val);$j++){
							if($count[$j]==$i) {?>
								<td><?php echo $val[$j]; ?></td>
								<?php $c=$c+1; }} ?>   
								<?php if($c==0){?>
								<td>&nbsp;</td>
							   <?php }
								 }
								?>  </tr>
    <tr>
      <td height="70">Friday</td>
      <?php $count=array();$count1=array();$j=0;$val=array(); ?>
      <?php 
	  for($i=0;$i< sizeof($addMember3);$i++){
		                  if($addMember3[$i]=="Friday"){
							  if($addMember3[$i+1]=="h1") $count[$j]=0;
							   else if($addMember3[$i+1]=="h2") $count[$j]=1;
							     else if($addMember3[$i+1]=="h3") $count[$j]=2;
								   else if($addMember3[$i+1]=="h4") $count[$j]=3;
								     else if($addMember3[$i+1]=="h5") $count[$j]=4;
									   else if($addMember3[$i+1]=="h6") $count[$j]=5;
									     else if($addMember3[$i+1]=="h7") $count[$j]=6;else $count[$j]=-1;
										 $count1[$j]=6-$count[$j];$val[$j]=$addMember3[$i+2];
										 $j=$j+1;$i=$i+2;}}
							for($i=0;$i<7;$i++){
								$c=0;
								for($j=0;$j<sizeof($val);$j++){
							if($count[$j]==$i) {?>
								<td><?php echo $val[$j]; ?></td>
								<?php $c=$c+1; }} ?>   
								<?php if($c==0){?>
								<td>&nbsp;</td>
							   <?php }
								 }
								?>
    </tr>
  </tbody>
</table>
<?php }
else {
							 //$select = $_POST['examDate2'];
							 //echo $select;
							 $addMember3= $siteManagerDAO1->getindivclass($_POST['examDate2']);
							 //print_r($addMember3);
						
						?>
    <tbody>
    <tr>
      <td width="111" height="100">&nbsp;</td>
      <td width="59">9:00 to 9:50</td>
      <td width="69">9:50 to 10:40</td>
      <td width="50" rowspan="6"><p>10:40 to 11:00</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>  I</p>
        <p>N</p>
        <p>T</p>
        <p>E</p>
        <p>R</p>
        <p>V</p>
        <p>A</p>
        <p>L</p>
        <p>&nbsp;</p></td>
      <td width="75">11:00 to 11:50</td>
      <td width="69">11:50 to 12:40</td>
      <td width="49" rowspan="6"><p>12:40 to 1:40</p>
        <p>&nbsp; </p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>L</p>
        <p>U<br>
          N</p>
        <p>C</p>
        <p>H</p></td>
      <td width="73">1:40 to 2:30</td>
      <td width="73"> 2:30 to 3:20</td>
      <td width="76"> 3:20 to 4:10</td>
    </tr>
    <tr>
      <td height="64">Monday</td><?php $count=array();$count1=array();$j=0;$val=array(); ?>
      <?php 
	  for($i=0;$i< sizeof($addMember3);$i++){
		                  if($addMember3[$i]=="Monday"){
							  if($addMember3[$i+1]=="h1") $count[$j]=0;
							   else if($addMember3[$i+1]=="h2") $count[$j]=1;
							     else if($addMember3[$i+1]=="h3") $count[$j]=2;
								   else if($addMember3[$i+1]=="h4") $count[$j]=3;
								     else if($addMember3[$i+1]=="h5") $count[$j]=4;
									   else if($addMember3[$i+1]=="h6") $count[$j]=5;
									     else if($addMember3[$i+1]=="h7") $count[$j]=6;else $count[$j]=-1;
										 $count1[$j]=6-$count[$j];$val[$j]=$addMember3[$i+2];
										 $j=$j+1;$i=$i+2;}}
							for($i=0;$i<7;$i++){
								$c=0;
								for($j=0;$j<sizeof($val);$j++){
							if($count[$j]==$i) {?>
								<td><?php echo $val[$j]; ?></td>
								<?php $c=$c+1; }} ?>   
								<?php if($c==0){?>
								<td>&nbsp;</td>
							   <?php }
								 }
								?>
    </tr>
    <tr>
      <td height="73">Tuesday</td>
       <?php $count=array();$count1=array();$j=0;$val=array(); ?>
      <?php 
	  for($i=0;$i< sizeof($addMember3);$i++){
		                  if($addMember3[$i]=="Tuesday"){
							  if($addMember3[$i+1]=="h1") $count[$j]=0;
							   else if($addMember3[$i+1]=="h2") $count[$j]=1;
							     else if($addMember3[$i+1]=="h3") $count[$j]=2;
								   else if($addMember3[$i+1]=="h4") $count[$j]=3;
								     else if($addMember3[$i+1]=="h5") $count[$j]=4;
									   else if($addMember3[$i+1]=="h6") $count[$j]=5;
									     else if($addMember3[$i+1]=="h7") $count[$j]=6;else $count[$j]=-1;
										 $count1[$j]=6-$count[$j];$val[$j]=$addMember3[$i+2];
										 $j=$j+1;$i=$i+2;}}
							for($i=0;$i<7;$i++){
								$c=0;
								for($j=0;$j<sizeof($val);$j++){
							if($count[$j]==$i) {?>
								<td><?php echo $val[$j]; ?></td>
								<?php $c=$c+1; }} ?>   
								<?php if($c==0){?>
								<td>&nbsp;</td>
							   <?php }
								 }
								?>   </tr>
    <tr>
      <td height="68">Wednesday</td>
 <?php $count=array();$count1=array();$j=0;$val=array(); ?>
      <?php 
	  for($i=0;$i< sizeof($addMember3);$i++){
		                  if($addMember3[$i]=="Wednesday"){
							  if($addMember3[$i+1]=="h1") $count[$j]=0;
							   else if($addMember3[$i+1]=="h2") $count[$j]=1;
							     else if($addMember3[$i+1]=="h3") $count[$j]=2;
								   else if($addMember3[$i+1]=="h4") $count[$j]=3;
								     else if($addMember3[$i+1]=="h5") $count[$j]=4;
									   else if($addMember3[$i+1]=="h6") $count[$j]=5;
									     else if($addMember3[$i+1]=="h7") $count[$j]=6;else $count[$j]=-1;
										 $count1[$j]=6-$count[$j];$val[$j]=$addMember3[$i+2];
										 $j=$j+1;$i=$i+2;}}
							for($i=0;$i<7;$i++){
								$c=0;
								for($j=0;$j<sizeof($val);$j++){
							if($count[$j]==$i) {?>
								<td><?php echo $val[$j]; ?></td>
								<?php $c=$c+1; }} ?>   
								<?php if($c==0){?>
								<td>&nbsp;</td>
							   <?php }
								 }
								?>
    </tr>
    <tr>
      <td height="72">Thursday</td>
 <?php $count=array();$count1=array();$j=0;$val=array(); ?>
      <?php 
	  for($i=0;$i< sizeof($addMember3);$i++){
		                  if($addMember3[$i]=="Thursday"){
							  if($addMember3[$i+1]=="h1") $count[$j]=0;
							   else if($addMember3[$i+1]=="h2") $count[$j]=1;
							     else if($addMember3[$i+1]=="h3") $count[$j]=2;
								   else if($addMember3[$i+1]=="h4") $count[$j]=3;
								     else if($addMember3[$i+1]=="h5") $count[$j]=4;
									   else if($addMember3[$i+1]=="h6") $count[$j]=5;
									     else if($addMember3[$i+1]=="h7") $count[$j]=6;else $count[$j]=-1;
										 $count1[$j]=6-$count[$j];$val[$j]=$addMember3[$i+2];
										 $j=$j+1;$i=$i+2;}}
							for($i=0;$i<7;$i++){
								$c=0;
								for($j=0;$j<sizeof($val);$j++){
							if($count[$j]==$i) {?>
								<td><?php echo $val[$j]; ?></td>
								<?php $c=$c+1; }} ?>   
								<?php if($c==0){?>
								<td>&nbsp;</td>
							   <?php }
								 }
								?>  </tr>
    <tr>
      <td height="70">Friday</td>
      <?php $count=array();$count1=array();$j=0;$val=array(); ?>
      <?php 
	  for($i=0;$i< sizeof($addMember3);$i++){
		                  if($addMember3[$i]=="Friday"){
							  if($addMember3[$i+1]=="h1") $count[$j]=0;
							   else if($addMember3[$i+1]=="h2") $count[$j]=1;
							     else if($addMember3[$i+1]=="h3") $count[$j]=2;
								   else if($addMember3[$i+1]=="h4") $count[$j]=3;
								     else if($addMember3[$i+1]=="h5") $count[$j]=4;
									   else if($addMember3[$i+1]=="h6") $count[$j]=5;
									     else if($addMember3[$i+1]=="h7") $count[$j]=6;else $count[$j]=-1;
										 $count1[$j]=6-$count[$j];$val[$j]=$addMember3[$i+2];
										 $j=$j+1;$i=$i+2;}}
							for($i=0;$i<7;$i++){
								$c=0;
								for($j=0;$j<sizeof($val);$j++){
							if($count[$j]==$i) {?>
								<td><?php echo $val[$j]; ?></td>
								<?php $c=$c+1; }} ?>   
								<?php if($c==0){?>
								<td>&nbsp;</td>
							   <?php }
								 }}
								?>
    </tr>
  </tbody>
</table>



<br>

                        </form>

</body>
</html>