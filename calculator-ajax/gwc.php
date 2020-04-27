<?php 
function gwc_calculator(){
ob_start();
  $weight=$_POST['weight'];
  $type=$_POST['measure'];
  $gender=$_POST['sex'];
  $height=$_POST['height'];
  $age=$_POST['age'];
  $activity_factor=$_POST['activity_factor'];
if($type!='metric'){$mweight=$weight*LBS_TO_KG;$wt_units='Pounds';}else{$mweight=$weight;$wt_units='Kg';}
$wt_factor = LBS_TO_KG;
$ht_factor = IN_TO_CM;

 if($mweight<22  || $mweight>430){ $error=true;?> <p class="panel panel-danger panel-heading"><strong class='text-danger'>Invalid Weight:</strong>The weight you entered <?php echo $weight;?> or <?php echo $desired_weight;?>  is out of range or equal, valid weights are between 50 and 950 pounds or 22 kg and 430 kg </p> <?php }
 if($height<20  || $height>90){ $error=true;?> <p class="panel panel-danger panel-heading"><strong class='text-danger'>Invalid Height:</strong>The height you entered  is out of range, valid heights are between 1'8" and 7'6" (US) or 1.4 m and 2.7 m</p> <?php }
 if($age<18  || $age>95){ $error=true;?> <p class="panel panel-danger panel-heading"><strong class='text-danger'>Invalid Age:</strong>The age you entered  is out of range, valid age are between 18years to 95 Years</p> <?php }
if($gender=='m'){
  $bmr=66 + (13.7 * $weight * $wt_factor) + (5 * $height * $ht_factor) - (6.8 * $age);
}else{
  $bmr=665 + (9.6 * $weight * $wt_factor) + (1.8 * $height * $ht_factor) - (4.7 * $age);
}
  $total_daily_calorie_need=number_format(($bmr * $activity_factor),2);


if ($gender=='m') {$limit=1800; } else{ $limit=1200;}

if($error){}
else{
?>
<div class="panel panel-success"><div class=" panel-heading "><h2>Calories to Lose Results:</h2></div>
<?php 
echo "<div class='panel-body'><p>To stay at the same weight, you would need approximately <strong>$total_daily_calorie_need</strong> calories a day (this is your <strong>BMR</strong>).<br>Your minimum calorie need is <strong>$limit</strong> calories.</p></div>";

$total_daily_calorie_need=$bmr * $activity_factor;
$result =  $total_daily_calorie_need+500;$resultt = number_format($result,2);
$result1 = $total_daily_calorie_need+1000;$result11 = number_format($result1,2);
$result2 = $total_daily_calorie_need*1.15;$result22 = number_format($result2,2);
$result3 = $total_daily_calorie_need*1.2; $result33 = number_format($result3,2);
$result4 = $total_daily_calorie_need*1.25; $result44 = number_format($result4,2);
$result5 = $total_daily_calorie_need*1.30; $result55 = number_format($result5,2);
if($result> $limit || $result1> $limit || $result2> $limit || $result3> $limit || $result4> $limit || $result5> $limit){
echo"<p class='panel-body' style='padding:0px 15px;margin:0px;'><strong>To gain weight, choose an option from the table below.";
 if(type=='metric'){echo"One Kilo of weight is gained for every 3500";}else{ echo"One pound of weight is gained for every 3000";}
echo" extra calories you take in above what you burn.</strong><br><br></p><h3 class='panel-heading'><strong>Weight Gain Table</strong></h3>";
echo"<table class='table table-striped'><thead class='panel-heading'><tr class='danger'><td>Calorie Addition to BMR</td><td>Calories per day</td></tr></thead><tbody>";
if($type=='metric'){$message1='1 Kg/week';$message2='2 Kg/week';}else{$message1='1 lb/week';$message2='2 lb/week';}
if($result > $limit){echo "<tr><td>500 Calories More (approx $message1)</td><td>" . $resultt . "</td></tr>";}
if($result1 > $limit){echo "<tr><td>1000 Calories More (approx $message2)</td><td>" . $result11 . "</td></tr>";}
if($result2 > $limit){echo "<tr><td>15% more</td><td>" . $result22 . "</td></tr>";}
if($result3 > $limit){echo "<tr><td>20% more</td><td>" . $result33 . "</td></tr>";}
if($result4 > $limit){echo "<tr><td>25% more</td><td>" . $result44 . "</td></tr>";}
if($result5 > $limit){echo "<tr><td>30% more</td><td>" . $result55 . "</td></tr>";}
echo"</tbody></table>";
}
echo"</div>";
}
$out=ob_get_clean();
die($out);
}
