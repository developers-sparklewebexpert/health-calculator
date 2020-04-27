<?php 
function lean_calculator(){
ob_start();

$gender=$_POST['sex'];
 $height=$_POST['height'];
 $weight=$_POST['weight'];
$weight_display=$_POST['weight'];
$type=$_POST['measure'];
if($type=='metric'){$weight *= KG_TO_LBS;}

if($weight<50  || $weight>950){ $error=true;?> <p class="panel panel-danger panel-heading"><strong class='text-danger'>Invalid Weight:</strong>The weight you entered is out of range, valid weights are between 50 and 950 pounds or 22 kg and 430 kg </p> <?php }

 if($height<20  || $height>90){ $error=true;?> <p class="panel panel-danger panel-heading"><strong class='text-danger'>Invalid Height:</strong>The height you entered  is out of range, valid heights are between 1'8" and 7'6" (US) or 1.4 m and 2.7 m. </p> <?php }
     if($gender=='m'){$f1=1.10; $f2=128; $g1=50; $g2=0.85;} else{$f1=1.07; $f2=148; $g1=45.5; $g2=0.78; }
 $weight1 = $weight * 0.454; 
 $height1 = $height * 2.54 / 100;

    $lbm2  = (($f1 * $weight1) - $f2 * ( $weight1**2 / ( 100*$height1 )**2 ))/0.454;
    $ideal = ($g1 + 2.3 * ($height - 60))/0.454 * $g2; 

if($error){}
else{
if($type!='metric'){
$feet=floor($height/12);
$inch=$height%12;
$height_display=$feet.'" '.$inch."' ";
$ln_units=' Inch ';$wt_units=' Pounds ';
$lbm2  =number_format($lbm2,2);
$ideal=number_format($ideal,2);
$weight=$weight_display;
$wt_units="Pounds";

}
else{
$height=$height * IN_TO_CM;
$weight=$weight_display;
$wt_units="Kilos";
$meter=floor($height/100,2);
$height_display=$meter.' Meters';
$ln_units=' cm ';$wt_units=' Kg';
$lbm2  =  number_format($lbm2 / KG_TO_LBS,2);
$ideal = number_format($ideal / KG_TO_LBS,2);
}

echo'<div class="panel panel-success"><div class=" panel-heading "><h2>Lean Body Mass Estimation:</h2>';
if($gender=='f'){echo "<p>According to your measurements; weight of $weight $wt_units and height of $height_display your lean body weight is estimated to be
<strong>$lbm2 $wt_units </strong>. Since the ideal body fat percentage for women is 22%.  Your ideal lean body weight is <strong>$ideal $wt_units</strong>. Remember these are guidelines; your physician should help you determine the ideal weight and body fat for you.</p>";}
else{ echo "<p>According to your measurements; weight of $weight $wt_units and height of $height_display your lean body weight is estimated to be
<strong>$lbm2  $wt_units </strong>. Since the ideal body fat percentage for men is 15%.  Your ideal lean body weight is <strong>$ideal $wt_units</strong>.  Remember these are guidelines; your physician should help you determine the ideal weight and body fat for you.</p>";}
echo "<p>Your lean body mass is made up of the nonfat parts of your body like muscle, organs, blood and water.  Muscle burns more calories for you during exercise and rest.  You definitely want to increase your metabolism by increasing muscle and losing primarily fat.</p></div></div>";
}
$out=ob_get_clean();
die($out);
}
