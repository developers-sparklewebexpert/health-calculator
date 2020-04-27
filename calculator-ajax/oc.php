<?php 
function oc_calculator(){
ob_start();
$date=$_POST['dp1'];
$days=$_POST['days_in_cycle'];
$offset = $days_in_cycle - 14;
//cycle date + days in cycle - 14
$ovulation_day=modifydate($date,$offset); 


echo'<div class="panel panel-success"><div class=" panel-heading "><h2>Ovulation Estimator:</h2>';
echo "<p class='text-danger'>DO NOT USE THIS INSTEAD OF BIRTH CONTROL - THIS IS ONLY FOR PREGNANCY PLANNING!</p>";
echo "<p>Your probable date of ovulation is <strong><u>$ovulation_day.<u></strong></p>
<p>If you want to get pregnant, then you should have sexual intercourse 2-3 days before this day through 1 day after.  But be patient if you don’t get pregnant right away.   Among normally, fertile couples, only 25 percent get pregnant during each cycle.  Most women (75-85 percent) will get pregnant within one year. </p>
<p>If you are looking are other ways to determine when you are ovulating, one common method is to chart your body temperature.  Once you ovulate, your temperature will increase by .5 - 1.6 degrees.  After monitoring your temperature for a couple of months, you should be able to predict your ovulation date for the coming month and plan to have sex 2-3 days before the temperature rise is expected.</p>
<p>You can also buy an ovulation predictor kit at a drugstore without a prescription.  This kit detects the rise in luteinizing hormone (LH) that occurs right before ovulation. It is pretty easy to use and can be more reliable than the temperature method.</p><style>#ajax-response-calculator u{padding-bottom:0px;border-bottom:1px dashed;text-decoration:none;}</style>";
echo "</div></div>";

$out=ob_get_clean();
die($out);
}
