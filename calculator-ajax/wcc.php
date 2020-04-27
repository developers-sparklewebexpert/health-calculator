<?php 
function iwcc_calculator(){
ob_start();
$gender=$_POST['sex'];
$height=$_POST['height'];
$type=$_POST['measure'];
$ht_factor = IN_TO_CM;

 if($height<20  || $height>90){ $error=true;?> <p class="panel panel-danger panel-heading"><strong class='text-danger'>Invalid Height:</strong>The height you entered  is out of range, valid heights are between 1'8" and 7'6" (US) or 1.4 m and 2.7 m. </p> <?php }
if(gender=='m'){
     if ($height < 60){
        $ideal_body_weight = ((($height*$ht_factor)**2) *1.65)/1000;
     }
     else{
        $ideal_body_weight =(($height-60) * 2.27) +39;
     }
     
}
else{
     if ($height < 60){
       $ideal_body_weight = ((($height*$ht_factor)**2) *1.65)/1000;
     }
     else{
        $ideal_body_weight =(($height-60) * 2.27) +42.2;
     }
}
if($type!='metric'){$ideal_body_weight =$ideal_body_weight* KG_TO_LBS;}
$ideal_body_weight=number_format($ideal_body_weight,2);
$ideal_body_mass   = number_format(2.396 * ((1.0188) ** ($height*$ht_factor)),2);
 

if($error){}
else{
if($type!='metric'){
$wt_units='Pounds';
}
else{
$wt_units='Kilos';
}

echo'<div class="panel panel-success"><div class=" panel-heading "><h2>Ideal Weight Children:</h2>';
echo "<p><p> As per your measurements,<br> Your <strong>Ideal Body Weight</strong> is <strong> $ideal_body_weight $wt_units</strong>.<br>Your <strong>Ideal Body Mass</strong> is <strong>$ideal_body_mass </strong>.</p></p></div></div>";
}
$out=ob_get_clean();
die($out);
}
