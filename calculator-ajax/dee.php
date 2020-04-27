<?php 
function dee_calculator(){
ob_start();$daily_caloric_requirements='';
$gender=$_POST['sex'];
$age=$_POST['age'];
$height=$_POST['height'];
$weight=$_POST['weight'];
$type=$_POST['measure'];
if($type=='metric'){$weight *= KG_TO_LBS;}
if($weight<50  || $weight>950){?><p class="panel panel-danger panel-heading"><strong class='text-danger'>Invalid Weight:</strong>The weight you entered  is out of range, valid weights are between 50 and 950 pounds or 22 kg and 430 kg</p><?php }
if($age<18  || $age>110){?><p class="panel panel-danger panel-heading"><strong class='text-danger'>Invalid Age:</strong>The age you entered  is out of range, valid ages are between 18 and 110.</p><?php }
 if($height<20  || $height>90){ $error=true;?> <p class="panel panel-danger panel-heading"><strong class='text-danger'>Invalid Height:</strong>The height you entered  is out of range, valid heights are between 1'8" and 7'6" (US) or 1.4 m and 2.7 m. </p> <?php }


   if($gender=='m'){
    $daily_caloric_requirements = 66.47 + 13.75 * $weight + 5.0  * $height - 6.76 * $age;
   }
  else{
     $daily_caloric_requirements = 655.1 + 9.56 * $weight + 1.85 * $height - 4.68 * $age;
  }
$daily_caloric_requirements=number_format($daily_caloric_requirements,2);
if($error){}
else{
if($type!='metric'){
$feet=round($height/12);
$inch=$height%12;
$height_display=$feet.'" '.$inch."' ";
$ln_units=' Inch ';
$wt_units='Pounds';
}
else{
$height=$height * IN_TO_CM;
$meter=round($height/100,2);
$height_display=$meter.' Meters';
$ln_units=' cm ';
$weight=$weight/KG_TO_LBS;
$wt_units='KG';
}
if($gender=='m'){$sx='Male';}else{$sx='Female';}
echo'<div class="panel panel-success"><div class=" panel-heading "><h2>Daily Energy Expenditure:</h2>';
echo "<p>According to your age of $age and measurements of $height_display tall and weight of $weight $wt_units you will burn about
<strong>$daily_caloric_requirements</strong> calories a day just to keep going.  You have to burn 3500 calories to lose one pound, or take in 3500 calories more than you burn to gain one pound.  Your physician should help you determine the ideal weight for you.</p></div></div>";
}
$out=ob_get_clean();
die($out);
}
