<?php

/*-----------BFM (Body Fat Percentage Calculator – U.S. Marine Corp Formula)------------*/
function bfm_calculator(){
ob_start();
$marine_body_fat='';

$error=false;
if(isset($_POST['sex'])){$sex=$_POST['sex'];}else{$sex='';}
if(isset($_POST['biceps'])){$biceps=$_POST['biceps'];}else{$biceps='';}
if(isset($_POST['neck'])){$neck=$_POST['neck'];}else{$neck='';}
if(isset($_POST['thigh'])){$thigh=$_POST['thigh'];}else{$thigh='';}
if(isset($_POST['abd2'])){$abd2=$_POST['abd2'];}else{$abd2='';}//waist 
$convert_factor=1;
if(isset($_POST['forearm'])){$forearm=$_POST['forearm'];}else{$forearm='';}
if(isset($_POST['measure'])){$measure=$_POST['measure'];}else{$measure='';}
if($sex=='f'){
if($biceps==''){$error=true;?> <p class="panel panel-danger panel-heading"><strong class='text-danger'>Empty Feild: </strong>Biceps at widest point is required.</p><?php }
if($forearm==''){$error=true;?> <p class="panel panel-danger panel-heading"><strong class='text-danger'>Empty Feild: </strong>Forearm at widest point is required.</p><?php }
if($neck==''){$error=true;?> <p class="panel panel-danger panel-heading"><strong class='text-danger'>Empty Feild: </strong>Neck at narrowest point is required.</p><?php }
if($abd2==''){$error=true;?> <p class="panel panel-danger panel-heading"><strong class='text-danger'>Empty Feild: </strong>Waist size at your naval is required.</p><?php }
if($thigh==''){$error=true;?> <p class="panel panel-danger panel-heading"><strong class='text-danger'>Empty Feild: </strong>Thigh size at widest point is required.</p><?php }
}
elseif($sex=='m'){
if($abd2==''){$error=true;?> <p class="panel panel-danger panel-heading"><strong class='text-danger'>Empty Feild: </strong>Waist size at your naval is required.</p><?php }
if($neck==''){$error=true;?> <p class="panel panel-danger panel-heading"><strong class='text-danger'>Empty Feild: </strong>Neck at narrowest point is required.</p><?php }
}
if($measure=='metric'){
$convert_factor=1;
 if($abd2 <=25 && $abd2 > 244){$error=true; ?> <p class="panel panel-danger panel-heading"><strong class='text-danger'><?php echo 'Invalid waist size:</strong> The waist size you entered '.$abd2.' is out of range, valid waist sizes are between 25cm and 244 cm</p>';
}
 if($neck <= 10 && $neck > 91){$error=true; ?> <p class="panel panel-danger panel-heading"><strong class='text-danger'><?php echo 'Invalid neck size:</strong> The neck size you entered '.$neck.' is out of range, valid neck sizes are between 10 cm and 91 cm </p>';
}
}
else{
$convert_factor = 2.54;
 if($abd2 <= 10 && $abd2 > 96){$error=true;?> <p class="panel panel-danger panel-heading"><strong class='text-danger'><?php echo 'Invalid waist size:</strong> The waist size you entered '.$abd2.' is out of range, valid waist sizes are between 10" and 96"</p>';
}
 if($neck <= 4 && $neck > 36){$error=true; ?> <p class="panel panel-danger panel-heading"><strong class='text-danger'><?php echo 'Invalid neck size:</strong> The neck size you entered '.$neck.' is out of range, valid neck sizes are between 4" and 36"</p>';
}
}

//navy_body_fat Body Fat Calculator – U.S. Navy Formula
if($sex=='m'){

$marine_body_fat=  (0.740 * $abd2 * $convert_factor) - ( 1.249 * $neck * $convert_factor) + 0.528;
}
elseif($sex=='f'){
$marine_body_fat= (1.051 * $biceps * $convert_factor) - ( 1.522 * $forearm * $convert_factor) - (0.879 * $neck * $convert_factor) + ( 0.326 * $abd2 * $convert_factor) + ( 0.597 * $thigh * $convert_factor) + 0.707;
}

else{$error=true;}
$marine_body_fat= number_format((float)$marine_body_fat, 2, '.', '');
if($error){}
else{
if($measure=='metric'){
$ln_unit='cm';
}else{
$ln_unit='inch';
}

echo'<div class="panel panel-success"><div class=" panel-heading "><h2>Body Fat Percentage Calculator – U.S. Marine Corp Formula Results:</h2>';

echo "Using your measurements of a";
 if(!empty($abd2)){echo "$abd2 $ln_unit waist,";} 
 if(!empty($neck)){echo "$neck $ln_unit neck,";}
if(!empty($biceps)){echo " $biceps $ln_unit biceps,";} 
if(!empty($forearm)){echo "$forearm $ln_unit forearm";}
if(!empty($thigh)){echo " and $thigh $ln_unit thigh";}
echo" your body fat percentage is estimated to be <strong>$marine_body_fat %</strong> using the formula developed by the Marine Corps.  This method is not as accurate as a water displacement test, but is usually within 1-3%. Some people with an especially small waist may have a negative number.  If you carry all your extra weight around your middle you
may have an elevated percentage.  Please note that this middle weight is a high risk factor for heart disease and stroke.  The <a href=''>waist to hip ratio calculator</a> can give you more information.</div></div>";

echo "Men are typically lower in body fat percentage, averaging around 23%, with an ideal of about 15%. Highly fit athletes are between 5-10%. Remember these are guidelines; your physician should help you determine the ideal weight and body fat for you.";
}

$out=ob_get_clean();
die($out);
}

