<?php

//BAC
function bac_calculator(){
ob_start();
$bac='';
$error=false;
$drink='';
$singular='';
$plural='';
$potency='';
$weight_factor=1;
$gender=$_POST['sex'];
$weight=$_POST['weight'];
$number=$_POST['number'];
$time=$_POST['time'];
$type=$_POST['type'];
$types=explode("||", $type);
$singular=$types[0];
 $plural=$types[1];
 $potency=$types[2];
 $drink= $number== 1 ? $singular : $plural;
if($gender=='m'){$sex_factor=0.58;}else{$sex_factor=0.49;}
$activity_factor=$_POST['activity_factor'];
$measure=$_POST['measure'];

 if($number<1  || $number>20){$error=true;?> <p class="panel panel-danger panel-heading"><strong class='text-danger'>Invalid number of drinks.</strong> The number you entered is not reasonable, you entered <?php echo $number;?>,  reasonable quantities for this calculator are between 1 and 20</p><?php }
if($measure=='imperial'){
//$weight_factor = 0.453592;
$weight_factor = 2.2046; 
     if($weight<50  || $weight>950){$error=true;?> <p class="panel panel-danger panel-heading"><strong class='text-danger'>Invalid weight.</strong> The weight you entered <?php echo $weight;?> is out of range, valid weights are between 50 and 950 pounds.</p><?php }
}
if($measure=='metric'){$weight_factor = 1;$height_factor=1;
    if($weight<22  || $weight>430){$error=true; echo"<p class='panel panel-danger panel-heading'><strong class='text-danger'>Invalid weight.</strong> The weight you entered $weight is out of range, valid weights are between 22KG and 430KG.</p>";}
}
 if($time<0.2  || $time>10){$error=true;?> <p class="panel panel-danger panel-heading"><strong class='text-danger'>Invalid time.</strong> The time you entered is not reasonable, you entered <?php echo $time;?>, reasonable quantities for this calculator are between .2 and 10</p><?php }
//bac calculate

$bac=  23.36 /( $weight / $weight_factor * $sex_factor * 1000 ) * 0.806 * 100 * $potency * $number -.012 * $time;
$bac= number_format((float)$bac, 2, '.', '');
if($error){}
else{
echo'<div class="panel panel-success"><div class=" panel-heading "><h2>BAC Results:</h2>';
echo "<p>DO NOT DRINK AND DRIVE!  Based on your body weight of $weight,
your consumption of $number $drink, and your sex, your blood
alcohol concentration is estimated to be &quot; <strong>$bac</strong> &quot; .</p></div></div>";
echo "The table below provides the effects associated with BAC levels:
<table class='table table-striped panel'>
						<tbody>
							<tr class='danger'><td>BAC Level Percentage</td><td>Effects</td></tr>
<tr><td>.03 to .12</td><td>Feeling of increased confidence, sense of daring. Look flushed or red in face.  Trouble with fine actions, such writing.</td></tr>
<tr><td>.09 to .25</td><td>Trouble seeing or focusing, slow reactions, sleepy, stumble often or lose balance easily.</td></tr>
<tr><td>.18 to .30</td><td>Confusion, dizziness, slurred speech and lack of muscle coordination.</td></tr>
<tr><td>Above .25</td><td>Serious health issues, including death.</td></tr></tbody></table>
<p>The BAC ranges overlap in the table above because the effects that alcohol have will be different for different people, depending on their metabolism, overall health, medications, etc.</p>
<p>As important as it is to know the health consequences of drinking, it is equally important to be aware of the legal implications.  As of July, 2004, all 50 states and the District of Columbia have laws that state that it is a crime to drive a vehicle with a BAC at or above 0.08 percent.</p>
<p>If you are convicted of Driving Under the Influence (DUI), your license could be suspended or revoked.  In many states, if you fail (have a BAC over .08%) or refuse to take a BAC test, your license can be taken by the police officer at the time you are stopped. In 30 states, if you have been previous DUIs, the vehicle you are driving will be taken if you are stopped and found with a BAC at or over .08 percent.";
}
$out=ob_get_clean();
die($out);
}
