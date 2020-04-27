<?php 
function iwc_calculator(){
ob_start();
$low_weight=$mid_weight=$high_weight='';
$gender=$_POST['sex'];
$height=$_POST['height'];
$type=$_POST['measure'];
if($type=='metric'){$weight *= KG_TO_LBS;}
if($gender=='m'){$base=106;$factor=6;}else{$base=10;$factor=5;}
$hfactor = 1;

 if($height<20  || $height>90){ $error=true;?> <p class="panel panel-danger panel-heading"><strong class='text-danger'>Invalid Height:</strong>The height you entered  is out of range, valid heights are between 1'8" and 7'6" (US) or 1.4 m and 2.7 m. </p> <?php }
     if ($height > 90){
     $mid_weight = $base + ( $factor	* ( $height - 60 ) );
     }
     else{
     $mid_weight = ( 22.5 / 704.5  ) * $height**2;
     }
     $low_weight=( 20 / 704.5  ) * $height**2;
     $high_weight=( 25 / 704.5  ) * $height**2;

  

if($error){}
else{
if($type!='metric'){
$feet=round($height/12);
$inch=$height%12;
$height_display=$feet.'" '.$inch."' ";
$ln_units=' Inch ';$wt_units=' Pounds ';
$mid_weight=number_format($mid_weight);
$low_weight=number_format($low_weight);
$high_weight=number_format($high_weight);
//if(Your weight of 65 pounds is below your ideal.
}
else{
$height=$height * IN_TO_CM;
$meter=round($height/100,2);
$height_display=$meter.' Meters';
$ln_units=' cm ';$wt_units=' Kg';
}

echo'<div class="panel panel-success"><div class=" panel-heading "><h2>Ideal Weight Calculation:</h2>';
echo "<p>According to your height of $height_display your ideal healthy weight is <strong>$mid_weight</strong> $wt_units. This is based on the middle point of the recommended body mass index score of 22.5 for your height.  Your recommended weight range is between $low_weight and $high_weight $wt_units.</p></div></div>";
}
$out=ob_get_clean();
die($out);
}
