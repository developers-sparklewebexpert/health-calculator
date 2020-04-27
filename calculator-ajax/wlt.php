<?php 
function wlt_calculator(){
ob_start();
  $weight=$_POST['weight'];
  $desired_weight=$_POST['desired_weight'];
  $type=$_POST['measure'];
  $gender=$_POST['sex'];
  $height=$_POST['height'];
  $date=$_POST['dp1'];
  $age=$_POST['age'];
  $activity_factor=$_POST['activity_factor'];
if($type!='metric'){$mweight=$weight*LBS_TO_KG;$wt_units='Pounds';}else{$mweight=$weight;$wt_units='Kg';}
$wt_factor = LBS_TO_KG;
$ht_factor = IN_TO_CM;
$ac=$weight - $desired_weight;
 if($mweight<22  || $mweight>430 || $ac==0){ $error=true;?> <p class="panel panel-danger panel-heading"><strong class='text-danger'>Invalid Weight:</strong>The weight you entered <?php echo $weight;?> or <?php echo $desired_weight;?>  is out of range or equal, valid weights are between 50 and 950 pounds or 22 kg and 430 kg </p> <?php }
 if($height<20  || $height>90){ $error=true;?> <p class="panel panel-danger panel-heading"><strong class='text-danger'>Invalid Height:</strong>The height you entered  is out of range, valid heights are between 1'8" and 7'6" (US) or 1.4 m and 2.7 m</p> <?php }
 if($age<18  || $age>95){ $error=true;?> <p class="panel panel-danger panel-heading"><strong class='text-danger'>Invalid Height:</strong>The height you entered  is out of range, valid heights are between 1'8" and 7'6" (US) or 1.4 m and 2.7 m</p> <?php }
if($gender=='m'){
  $bmr=66 + (13.7 * $weight * $wt_factor) + (5 * $height * $ht_factor) - (6.8 * $age);
}else{
  $bmr=665 + (9.6 * $weight * $wt_factor) + (1.8 * $height * $ht_factor) - (4.7 * $age);
}
  $total_daily_calorie_need=number_format(($bmr * $activity_factor),2);

$weight_to_lose	= $weight - $desired_weight;
if ($weight_to_lose < 0)
	{
		$weight_to_lose = -1 * $weight_to_lose;
	}
$calories_to_lose = $weight_to_lose * 3500;
if ($gender=='m') {$limit=1800; } else{ $limit=1200;}
if($weight < $desired_weight){
$inc='true';
$subtext='Increase to';
$text='Gain';
}else{
$inc='false';
$subtext='Reduction from';
$text='Loss';
}
if($error){}
else{
?>
<div class="panel panel-success"><div class=" panel-heading "><h2>Weight <?php echo $text;?> Target Date:</h2></div>
<?php 
echo "<div class='panel-body'><p>To stay at the same weight of $weight $wt_units, you would need approximately $total_daily_calorie_need calories a day (this is your BMR). </p><p>The table below shows how long it will take to get to your target weight based on various calorie reduction amounts while maintaining your current activity levels.</p></div>";
echo"<h3 class='panel-heading'><strong>Weight $text Table</strong></h3>";
echo"<table class='table table-striped' ><thead><tr class='danger panel-heading'><td align='center'>Calorie $subtext BMR</td><td align='center'>Calories Per Day</b></td><td align='center'>Target Dates for $diffWeight $wt_units</td></tr></thead><tbody class='panel-body'>";
	$total_daily_calorie_need=$bmr * $activity_factor;
       if($inc=='true'){
                $result1 = $total_daily_calorie_need + 500;
                $result2 = $total_daily_calorie_need + 1000; 
				$result3 = $total_daily_calorie_need + $total_daily_calorie_need * 0.15;
				$result4 = $total_daily_calorie_need + $total_daily_calorie_need * 0.20;
				$result5 = $total_daily_calorie_need + $total_daily_calorie_need * 0.25;
				$result6 = $total_daily_calorie_need + $total_daily_calorie_need * 0.30;    
        }
	else {
                $result1 = $total_daily_calorie_need - 500;
                $result2 = $total_daily_calorie_need - 1000;
				$result3 = $total_daily_calorie_need - $total_daily_calorie_need * 0.15;
				$result4 = $total_daily_calorie_need - $total_daily_calorie_need * 0.20;
				$result5 = $total_daily_calorie_need - $total_daily_calorie_need * 0.25;
				$result6 = $total_daily_calorie_need - $total_daily_calorie_need * 0.30;
	}
	if($result1 > $limit) {     
		$days_to_add1 = floor(($calories_to_lose / 500)+0.5);
		$cdate1=new DateTime($date);
		$cdate1->modify($days_to_add1.' day');
		$target_date1 = $cdate1->format('m/d/Y');
        $result11=number_format($result1,2);
	}else{$result11='**Unhealthy Level**';$target_date1='';}
	if($result2 > $limit) {
		$days_to_add2 = floor(($calories_to_lose / 1000)+0.5);
		$cdate2=new DateTime($date);
        $cdate2->modify($days_to_add2.' day');
		$target_date2 = $cdate2->format('m/d/Y');
		$result22=number_format($result2,2);
	}else{$result22='**Unhealthy Level**';$target_date2='';}
        if($result3 > $limit) {
		$days_to_add3 = floor(($calories_to_lose / ($total_daily_calorie_need * 0.15))+0.5);
		$cdate3=new DateTime($date);
        $cdate3->modify($days_to_add3.' day');
		$target_date3 = $cdate3->format('m/d/Y');
		$result33=number_format($result3,2);
    }else{$result33='**Unhealthy Level**';$target_date3='';}
    if($result4 > $limit) {
		$days_to_add4 = floor(($calories_to_lose / ($total_daily_calorie_need * 0.20))+0.5);
		$cdate4=new DateTime($date);
        $cdate4->modify($days_to_add4.' day');
		$target_date4 = $cdate4->format('m/d/Y');
		$result44=number_format($result4,2);
    }else{$result44='**Unhealthy Level**';$target_date3='';}
    if($result5 > $limit) {
		$days_to_add5 = floor(($calories_to_lose / ($total_daily_calorie_need * 0.25))+0.5);
		$cdate5=new DateTime($date);
        $cdate5->modify($days_to_add5.' day');
		$target_date5 = $cdate5->format('m/d/Y');
		$result55=number_format($result5,2);
    }else{$result55='**Unhealthy Level**';$target_date3='';}
    if($result6 > $limit) {
	    $days_to_add6 = floor(($calories_to_lose / ($total_daily_calorie_need * 0.30))+0.5);
	    $cdate6=new DateTime($date);
        $cdate6->modify($days_to_add6.' day');
		$target_date6 = $cdate6->format('m/d/Y');
		$result66=number_format($result6,2);
   }else{$result66='**Unhealthy Level**';$target_date3='';}
		echo"<tr><td align='center'>500</td><td align='center'>$result11</td><td align='center'>$target_date1</td></tr>";
		echo"<tr><td align='center'>1000</td><td align='center'>$result22</td><td align='center'>$target_date2</td></tr>";
		echo"<tr><td align='center'>15%</td><td align='center'>$result33</td><td align='center'>$target_date3</td></tr>";
		echo"<tr><td align='center'>20%</td><td align='center'>$result44</td><td align='center'>$target_date4</td></tr>";
		echo"<tr><td align='center'>25%</td><td align='center'>$result55</td><td align='center'>$target_date5</td></tr>";
		echo"<tr><td align='center'>30%</td><td align='center'>$result66</td><td align='center'>$target_date6</td></tr>";
echo"</tbody></table></div>";
}
$out=ob_get_clean();
die($out);
}
