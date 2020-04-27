<?php 
function bmr_calculator(){
ob_start();$bmr='';$dailycalneed='';$error=false;
$weight_factor=1;$height_factor=1;
$gender=$_POST['sex'];
$weight=$_POST['weight'];
$height=$_POST['height'];
$age=$_POST['age'];
$activity_factor=$_POST['activity_factor'];
$type=$_POST['measure'];$height_factor=IN_TO_CM;
if($type=='imperial'){$weight_factor = 0.45; 
     if($weight<50  || $weight>950){$error=true;?> <p class="panel panel-danger panel-heading"><strong class='text-danger'>Invalid weight:</strong> The weight you entered <?php echo $weight;?> is out of range, valid weights are between 50 and 950 pounds.</p><?php }?>
    <?php  if($age<20  || $age>90){$error=true;?> <p class="panel panel-danger panel-heading"><strong class='text-danger'>Invalid age:</strong> The age you entered <?php echo $age;?> is out of range, valid age is between 18 and 95</p><?php } 
  $inch=$height/2.5;
  $foot=(int)$inch/12;
  $incch=$inch%12;
     if($height<20  || $height>90){ $error=true;?> <p class="panel panel-danger panel-heading"><strong class='text-danger'>Invalid height:</strong> The height you entered  is out of range, valid heights are between 1'8" and 7'6" </p> <?php }
}
if($type=='metric'){$weight_factor = 1;
    if($weight<22  || $weight>430){$error=true; echo"<p class='panel panel-danger panel-heading'><strong class='text-danger'>Invalid weight:</strong> The weight you entered $weight is out of range, valid weights are between 22KG and 430KG.</p>";}
    if($age<20  || $age>90){$error=true; echo"<p class='panel panel-danger panel-heading'><strong class='text-danger'>Invalid age:</strong> The age you entered $age is out of range, valid age is between 18 and 95</p>";}
    if($height<20  || $height>90){$error=true; echo"<p class='panel panel-danger panel-heading'><strong class='text-danger'>Invalid height:</strong> The height you entered  is out of range, valid heights are between 1.4 m and 2.7 m.</p>";}
}
//bmr for male

if($gender=='m'){
$bmr= 66+(13.7*$weight*$weight_factor)+(5*$height*$height_factor)-(6.8*$age);
}
if($gender=='f'){
$bmr= 665+(9.6*$weight*$weight_factor)+(1.8*$height*$height_factor)-(4.7*$age);
}
$total_daily_calorie_need=$bmr*$activity_factor;
$total_daily_calorie_need=round($total_daily_calorie_need, 2);

if($error){}
else{
echo'<div class="panel panel-success"><div class=" panel-heading "><h2>BMR Results:</h2>';
echo "<p>According to your measurements, you need <b> $total_daily_calorie_need </b> calories to keep your typical activity level going without any weight change.  If you exercise or do activities beyond normal levels you will need to add calories to your diet to maintain your weight.</p></div></div>";
}
$out=ob_get_clean();
die($out);
}
