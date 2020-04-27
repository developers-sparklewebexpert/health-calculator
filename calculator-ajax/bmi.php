<?php
function bmi_calculator(){
ob_start();$bmi='';$error=false;
$weight=$_POST['weight'];
$height=$_POST['height'];

$type=$_POST['measure'];
if($type=='imperial'){
     if($weight<50  || $weight>950){$error=true;?> <p class="panel panel-danger panel-heading"><strong class='text-danger'>Invalid weight:</strong> The weight you entered <?php echo $weight;?> is out of range, valid weights are between 50 and 950 pounds.</p><?php }?>
  
    <?php if($height<20  || $height>90){ $error=true;?> <p class="panel panel-danger panel-heading"><strong class='text-danger'>Invalid height:</strong> The height you entered is out of range, valid heights are between 1'8" and 7'6" </p> <?php }
}
if($type=='metric'){ $weight = $weight * KG_TO_LBS;
    if($weight<22  || $weight>430){$error=true; echo"<p class='panel panel-danger panel-heading'><strong class='text-danger'>Invalid weight:</strong> The weight you entered $weight is out of range, valid weights are between 22KG and 430KG.</p>";}
    
    if($height<20  || $height>90){$error=true; echo"<p class='panel panel-danger panel-heading'><strong class='text-danger'>Invalid height:</strong> The height you entered is out of range, valid heights are between 1.4 m and 2.7 m.</p>";}
}
//bmi for male
$square = $height**2;
$bmi      = $weight / $square * 704.5;
$bmi=number_format($bmi,1);
/*----calculate low optimum range (BMI 19.6)---*/
$low_weight = 19.6 * $square / 704.5;

/*----calculate high optimum range (BMI 24.9)-----*/
$high_weight = 24.9 * $square / 704.5;


if($error){}
else{
if($type!='metric'){
$feet=round($height/12);
$inch=$height%12;
$height_display=$feet.'" '.$inch."' ";
$wt_units=' Pounds ';
$low_weight=number_format($low_weight);
$high_weight=number_format($high_weight);
}
else{
$height=$height * IN_TO_CM;
$meter=round($height/100,2);

$height_display=$meter.' Meters';
$wt_units=' KG ';
$low_weight=$low_weight / KG_TO_LBS;
$low_weight=number_format($low_weight);
$high_weight=$high_weight / KG_TO_LBS;
$high_weight=number_format($high_weight);
}
echo'<div class="panel panel-success"><div class=" panel-heading "><h2>Body Mass Index (BMI) Calculation:</h2>';
echo "<p>According to your height of $height_display and weight of $weight $wt_units your body mass index is <strong>$bmi</strong>. The Body Mass Index, or BMI calculation has gotten a lot of press lately.&nbsp; This calculation is solely based on your height and weight.&nbsp; Your recommended weight range is between <strong>$low_weight $wt_units</strong> and <strong>$high_weight $wt_units</strong> .  BMIs between 19.5 and 24.9 are considered optimum by most professionals.  A BMI of 25 to 29.9 is considered overweight and one 30 or above is considered obese. This calculator is for adults ages 18 and up.&nbsp; Please consult your doctor before attempting to make any significant change in your weight.</p>
<p>If you are an athlete with a low bodyfat percentage (click
<a href='#'>here</a> to calculate your bodyfat) your BMI may be in the 27 to 29 range.  While this is above the recommended score, the strength of your cardiovascular system will offset the risks of the higher weight.  Your physician can give you the best guidance on a proper weight.</p></div></div>";
}
$out=ob_get_clean();
die($out);
}
