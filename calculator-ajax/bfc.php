<?php

/*-----------BFC (Body Fat Percentages – YMCA Algorithm)------------*/
function bfc_calculator(){
ob_start();


$error=false;
if(isset($_POST['sex'])){$sex=$_POST['sex'];}else{$sex='';}
if(isset($_POST['abd2'])){$abd2=$_POST['abd2'];}else{$abd2='';}
if(isset($_POST['weight'])){$weight=$_POST['weight'];}else{$weight='';}
if(isset($_POST['measure'])){$measure=$_POST['measure'];}else{$measure='';}
if($measure=='metric'){
 if($weight<=22 && $weight> 430){$error='true'; echo'<p class="panel panel-danger "> &nbsp;<strong class="text-danger">Invalid waist size:</strong> The weight you entered '.$weight.' is out of range, valid weights are between  22 kg and 430 kg<br/></p>';
}
 if($abd2 <= 25 && $abd2 > 244){$error='true'; echo'<p class="panel panel-danger "> &nbsp;<strong class="text-danger">Invalid weight:</strong> The neck size you entered '.$abd2 .' is out of range, valid neck sizes are between 25 cm and 244 cm<br/></p>';
}
}
else{
 if($abd2 <= 10 && $abd2 > 96){$error='true'; echo'<p class="panel panel-danger "> &nbsp;<strong class="text-danger">Invalid waist size:</strong> The waist size you entered '.$abd2.' is out of range, valid waist sizes are between 10" and 96"<br/></p>';
}
 if($weight<= 50 && $weight> 950){$error='true'; echo'<p class="panel panel-danger "> &nbsp;<strong class="text-danger">Invalid weight:</strong> The weight you entered '.$weight.' is out of range, valid weights are between 50 and 950 pounds <br/></p>';
}
}
if($sex==''){$error='true'; echo'<p class="panel panel-danger "> &nbsp;<strong class="text-danger"> Invalid Gender:</strong> Please select your gender. <br/></p>';
}
if($sex=='m'){$sex_factor = -98.42;}else{$sex_factor = -76.76;}
//navy_body_fat Body Fat Calculator – U.S. Navy Formula

if($measure=='metric'){$weights=$weight*2.2046;$waist =0.3937*$abd2 ;}else{$weights=$weight;$waist =$abd2 ;}
$preferred_body_fat=  ($sex_factor + 4.15 * $waist - .082 * $weights)/$weights*100;

$preferred_body_fat= number_format((float)$preferred_body_fat, 2, '.', '');
if($error=='true'){}
else{
if($measure=='metric'){
$ln_unit='cm';$wt_units ='kilos';
}else{
$ln_unit='inch';$wt_units ='pounds';
}

echo'<div class="panel panel-success"><div class=" panel-heading "><h2>Body Fat Percentages – YMCA Algorithm Results:</h2>';

echo "According to your measurements of a";
 if(!empty($abd2)){echo " $abd2 $ln_unit waist,";} 
 if(!empty($weight)){echo " and weight of $weight $wt_units ";}

echo"your body fat percentage is estimated to be <strong>$preferred_body_fat %</strong>.  This method is not as
accurate as a water displacement test, but is usually within 1-3%. Some people with an especially small waist may have a negative
number.  If you carry all your extra weight around your middle you may have an elevated percentage.  Please note that this middle weight is a high risk factor for heart disease and stroke.  The <a href=''>waist to hip ratio calculator</a> can give you more information.</div></div>";

echo "Men are typically lower in body fat percentage, averaging around 23%, with an ideal of about 15%. Highly fit athletes are between 5-10%. Remember these are guidelines; your physician should help you determine the ideal weight and body fat for you.";
}
$out=ob_get_clean();
die($out);
}
