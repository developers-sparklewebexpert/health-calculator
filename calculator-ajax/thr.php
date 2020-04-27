<?php 
function thr_calculator(){
ob_start();



 $age=$_POST['age'];

 
 if($age < 18 || $age > 110){ $error=true;?> <p class="panel panel-danger panel-heading"><strong class='text-danger'>Invalid ag:</strong>The age you entered <?php echo $age;?> is out of range, valid ages are between 18 and 110</p> <?php }

 $base = 220 - $age;

$tmedlow=floor($base *0.5);
$tmedhigh=floor($base *0.7);
$tmed=floor($base *0.7);
$thigh=floor($base *0.85);
$tseclow=floor($tmedlow/6);
$tsecmhigh=floor($tmedhigh/6); 
$tsecmed=floor($tmed/6); 
$tsechigh=floor($thigh/6);
if($error){}
else{


echo'<div class="panel "><div class=" panel-heading "><h2>Target Heart Rate:</h2>';

echo "<p>According to your age of <strong>$age</strong> and the recommendations of the American College of Sports Medicine, your target heart rate (beats per minute) is listed below for your CURRENT fitness level.</p><p>If you are below average fitness, please consult your physician before engaging in any new exercise program.</p><p>You should monitor your heart rate regularly throughout your exercise to ensure that you are reaching the target heart rate. Many treadmills, stationary bikes, elliptical trainers, etc. come equipped with monitors so you can check your heart rate as you work out.</p><p>If you are just starting on an exercise program, you may not quite reach your target heart rate, but you should try to reach that rate over time. Your goal should be do some type of aerobic exercise (walking, jogging, swimming, etc.) 3 or 5 times per week for 20 to 30 minutes.</p>";
echo "<table class='table table-striped'><thead><tr class='danger'><td>Fitness Level</td><td align='right'>Beats/ Minute</td><td align='right'>Beats/ 10 Seconds</td></tr></thead><tbody><tr><td >Average Fitness</td><td align='right' >$tmedlow - $tmedhigh</td><td align='right' >$tseclow - $tsecmhigh</td></tr><tr><td >Superior Fitness</td><td align='right' >$tmed - $thigh</td><td align='right' >$tsecmhigh - $tsechigh</td></tr></tbody></table></div></div>";
}
$out=ob_get_clean();
die($out);
}
