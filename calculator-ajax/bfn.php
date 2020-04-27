<?php

/*-----------BFN (Body Fat Calculator – U.S. Navy Formula)------------*/
function bfn_calculator(){
ob_start();
$navy_body_fat='';

$error=false;
if(isset($_POST['sex'])){$sex=$_POST['sex'];}else{$sex='';}
if(isset($_POST['mheight'])){$mheight=$_POST['mheight'];}else{$mheight='';}
if(isset($_POST['neck'])){$neck=$_POST['neck'];}else{$neck='';}
if(isset($_POST['abd1'])){$abd1=$_POST['abd1'];}else{$abd1='';}//female
if(isset($_POST['hip'])){$hip=$_POST['hip'];}else{$hip='';}//female
if(isset($_POST['abd2'])){$abd2=$_POST['abd2'];}else{$abd2='';}//male
if(isset($_POST['measure'])){$measure=$_POST['measure'];}else{$measure='';}
if($sex=='f'){
	if($abd1==''){$error=true;?> <p class="panel panel-danger panel-heading"><strong class='text-danger'>Empty Feild: </strong>Waist size at narrowest point is required.</p><?php }
	else if($hip==''){$error=true;?> <p class="panel panel-danger panel-heading"><strong class='text-danger'>Empty Feild: </strong>Hip size at widest point is required.</p><?php }
	else if($neck==''){$error=true;?> <p class="panel panel-danger panel-heading"><strong class='text-danger'>Empty Feild: </strong>Neck at narrowest point is required.</p><?php }
	else{}

}
else if($sex=='m'){
 	if($abd2==''){$error=true;?> <p class="panel panel-danger panel-heading"><strong class='text-danger'>Empty Feild: </strong>Waist size at your naval is required.</p><?php }
	else if($neck==''){$error=true;?> <p class="panel panel-danger panel-heading"><strong class='text-danger'>Empty Feild: </strong>Neck at narrowest point is required.</p><?php }
	else{}
}
else{$error=true;?> <p class="panel panel-danger panel-heading"><strong class='text-danger'>Empty Feild: </strong> Gender is required.</p><?php }


 if($measure=='metric'){ $factor =1;}else{$factor =2.54;}
//navy_body_fat Body Fat Calculator – U.S. Navy Formula
if($sex=='m'){
$diff = $abd2 - $neck;
$navy_body_fat=  495 / ( 1.0324 - 0.19077 * log10( $diff * $factor )  +  0.15456 * log10( $mheight*2.54) ) - 450;
}
elseif($sex=='f'){
$diff = $abd1 + $hip - $neck;
 $logdif=log10( $diff * $factor );
$logheight=log10( $mheight*2.54 );
 $navy_body_fat= 495 / ( 1.29579 - 0.35005 * $logdif  + 0.22100 * $logheight ) - 450;
}
else{$error=true;}
$navy_body_fat= number_format((float)$navy_body_fat, 2, '.', '');
if($error){}
else{
if($measure=='metric'){
$ln_units='cm';$height_display=($_POST['mheight'])*2.54;$height_display=number_format(($height_display / 100),2).' m';
}else{
$ln_units='Inch';
$height_inch=($mheight);
$hfoot=floor($height_inch/12);
$hinch=$height_inch%12;
$height_display=$hfoot."'  ".$hinch.'"';
}
if($sex=='m'){$waist=$abd2;}else{$waist=$abd1;}
echo'<div class="panel panel-success"><div class=" panel-heading "><h2>Body Fat Calculator – U.S. Navy Formula Results:</h2>';
echo "According to your measurements of $waist $ln_units waist and height of $height_display your body fat percentage is estimated to be
<strong>$navy_body_fat %</strong>.
  This method is not as accurate as a water displacement test, but is usually within 1-3%. Some people with an especially small waist may have a negative number.  If you carry all your extra weight around your middle you may have an elevated percentage.  Please note that this middle weight is a high risk factor for heart disease and stroke.  The <a href=''>waist to hip ratio calculator</a> can give you more information.</div></div>";

echo "Men are typically lower in body fat percentage, averaging around 23%, with an ideal of about 15%. Highly fit athletes are between 5-10%. Remember these are guidelines; your physician should help you determine the ideal weight and body fat for you.";
}
$out=ob_get_clean();
die($out);
}
