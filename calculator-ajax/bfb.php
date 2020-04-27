<?php

/*-----------BFB (Body Fat Calculator)------------*/
function bfb_calculator(){
ob_start();
$marine_body_fat=$army_body_fat=$preferred_body_fat=$navy_body_fat=$error_msg='';
$sex=$_POST['sex'];
$error=false;$convert_factor=1;
if(isset($_POST['weight'])){ $weight=$_POST['weight'];}else{$weight='';}
if(isset($_POST['height'])){ $height=$_POST['height'];}else{$height='';}
if(isset($_POST['neck'])){ $neck=$_POST['neck'];}else{$neck='';}
if(isset($_POST['wrist'])){ $wrist=$_POST['wrist'];}else{$wrist='';}
if(isset($_POST['hip'])){ $hip=$_POST['hip'];}else{$hip='';}
if(isset($_POST['thigh'])){$thigh =$_POST['thigh'];}else{$thigh ='';}
if(isset($_POST['abd2'])){ $abd2=$_POST['abd2'];}else{$abd2='';}//waist
if(isset($_POST['abd1'])){ $abd1=$_POST['abd1'];}else{$abd1='';}// $abd1
if(isset($_POST['biceps'])){ $biceps=$_POST['biceps'];}else{$biceps='';}
if(isset($_POST['forearm'])){ $forearm=$_POST['forearm'];}else{$forearm='';}
if(isset($_POST['measure'])){ $measure=$_POST['measure'];}else{$measure='';}
if($measure=='metric'){
$convert_factor=1;
$wt_factor=1;

if($abd2 <=25 && $abd2 > 244){$error=true; $error_msg .='<strong>Invalid waist size:</strong> The waist size you entered '.$abd2.' is out of range, valid waist sizes are between 25cm and 244 cm';
}
 if($weight<=22 && $weight> 430){$error=true; $error_msg .='<strong>Invalid weight:</strong> The weight you entered '.$weight.' is out of range, valid weights are between  22 kg and 430 kg <br/>';
}
if($height<=140 && $height> 270){$error=true; $error_msg .='<strong>Invalid height:</strong> The height you entered '.$height.' is out of range, valid heights are between  1.4 m and 2.7 m. <br/>';
}
 if($neck <= 10 && $neck > 91){$error=true; $error_msg .='<strong>Invalid neck size:</strong> The neck size you entered '.$neck.' is out of range, valid neck sizes are between 10 cm and 91 cm';
}
}
else{
$convert_factor=IN_TO_CM;
$wt_factor=LBS_TO_KG;

if($abd2 <= 10 && $abd2 > 96){$error=true; $error_msg .='<strong>Invalid waist size:</strong> The waist size you entered '.$abd2.' is out of range, valid waist sizes are between 10" and 96"<br/>';
}
 if($weight<= 50 && $weight> 950){$error=true; $error_msg .='<strong>Invalid weight:</strong> The weight you entered '.$weight.' is out of range, valid weights are between 50 and 950 pounds  <br/>';
}
 
 if($neck <= 4 && $neck > 36){$error=true; $error_msg .='<strong>Invalid neck size:</strong> The neck size you entered '.$neck.' is out of range, valid neck sizes are between 4" and 36"<br/>';
}
}
if(($abd2 - $neck) < 1 ){$error=true; $error_msg .='<strong>Invalid neck and waist size:</strong> Neck size will be also lower than waist size. ';
}
$ht_factor=IN_TO_CM;
//navy_body_fat Body Fat Calculator - U.S. Army Formula
if($sex=='m'){
  $sex_factor = -98.42;
 $diff = ($abd2 - $neck)*$convert_factor;
 $diff=log10($diff);
 $hhight=$height*$ht_factor;
 $hhights=log10($hhight);
 $army_body_fat=  (76.5 * $diff) - (68.7 * $hhights) + 46.9;
 $marine_body_fat=  (0.740 * $abd2 * $convert_factor) - ( 1.249 * $neck * $convert_factor) + 0.528;
 $navy_body_fat=  495 / ( 1.0324 - 0.19077 * $diff  +  0.15456 * $hhights ) - 450;
}
elseif($sex=='f'){
$sex_factor = -76.76;
 $diff1 = $abd1 + $hip - $neck;

 $army_body_fat= (105.3 * log10($weight * $wt_factor)) - (0.200 * ($wrist  * $convert_factor)) - ( 0.533 * $neck * $convert_factor ) - ( 1.574 * $forearm * $convert_factor ) + (0.173 * $hip * $convert_factor ) - ( 0.515 * $height * $ht_factor ) - 35.6;

$marine_body_fat= (1.051 * $biceps * $convert_factor) - ( 1.522 * $forearm * $convert_factor) - (0.879 * $neck * $convert_factor) + ( 0.326 * $abd2 * $convert_factor) + ( 0.597 * $thigh * $convert_factor) + 0.707;

$navy_body_fat= 495 / ( 1.29579 - 0.35005 * log10( $diff1 * $convert_factor )  + 0.22100 * log10( $height *$ht_factor) ) - 450;
}
else{$error=true;}
if($measure=='metric'){$abdp2=$abd2 * 0.3937;$weightp =$weight* KG_TO_LBS;}else{$abdp2=$abd2;$weightp =$weight;}
$army_body_fat= number_format((float)$army_body_fat, 2, '.', '');
$preferred_body_fat=  ($sex_factor + 4.15 * $abdp2 - .082 * $weightp)/$weightp*100;
$preferred_body_fat= number_format((float)$preferred_body_fat, 2, '.', '');
$marine_body_fat= number_format((float)$marine_body_fat, 2, '.', '');
$navy_body_fat= number_format((float)$navy_body_fat, 2, '.', '');
if($error){echo '<div class="panel panel-danger"><div class="panel-body">'.$error_msg .'</div></div>';}
else{
if($measure=='metric'){
$ln_unit='cm';$wt_unit='kilo';
}else{
$ln_unit='inch';$wt_unit='pounds';
}
if($sex=='m'){$waist=$abd2;}else{$waist=$abd1;}
echo'<div class="panel panel-success"><div class=" panel-heading "><h2>Body Fat Calculator:</h2>';

echo "<p>Using your measurements of a $waist $ln_unit waist and weight of $weight $wt_unit your body fat percentage we calculated using FOUR different methods.</p>
<p> Your body fat estimates are<br/> <strong>$army_body_fat %</strong> using the U.S. Army body fat algorithm, or<br />
<strong>$marine_body_fat %</strong> using the U.S. Marine body fat algorithm, or<br />
<strong>$navy_body_fat %</strong> using the U.S. Navy body fat algorithm, or<br />
<strong>$preferred_body_fat %</strong> using the formula developed by the YMCA.</p>
<p>These methods are not as accurate as a water displacement test, but is usually within 1-3% for most people. If you have a very small waist, it will show a low value.  On the other hand, if you carry all your extra weight around your middle, you may have an elevated percentage.  Please note that having this extra weight in the middle is a high risk factor for heart disease and stroke.  
</p><p>Men are typically lower in body fat percentage, averaging around 23%, with an ideal of about 15%. Highly fit athletes are between 5-10%. Remember these are guidelines; your physician should help you determine the ideal weight and body fat for you.</p>";
}
$out=ob_get_clean();
die($out);
}
