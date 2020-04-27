<?php 
function due_calculator(){
ob_start();
$date=$_POST['dp1'];
if($date==''){$error=true;?> <p class="panel panel-danger panel-heading"><strong class='text-danger'>Invalid Feild.</strong> Enter the first day of your last menstrual period? </p><?php }
$conception=modifydate($date,'14'); 
$fetal_risk=modifydate($date,'35');
$fetal_risk_end=modifydate($date,'70');
$organ_start=modifydate($date,'35');
$organ_end=modifydate($date,'70');
$first_trimester=modifydate($date,'84');
$preemie_survival=modifydate($date,'161');
$second_trimester=modifydate($date,'189');
$due_date=modifydate($date,'280');
echo'<div class="panel panel-success"><div class=" panel-heading "><h2>Due Date Estimator:</h2>';
echo "<p>Congratulations! Here are the important dates for your pregnancy:</p>";
echo "<ul><li><strong>Conception -</strong> <u>$conception</u><br>Conception - the day you became pregnant - is estimated to have occurred about 14 days after the first day of your last menstrual period.</li>
<li><strong>Highest fetal risk -</strong> <u>$fetal_risk</u> thru <u>$fetal_risk_end </u></li>
<li><strong>Organs begin to form -</strong> <u>$organ_start</u> thru $organ_end </u></li>
<li><strong>End of first trimester -</strong> <u>$first_trimester </u><br>Pregnancy is divided into 3 trimesters - each trimester being about 12 weeks or 3 months. By the end of the first trimester, the baby is only 1 in. long; but during this trimester (weeks 4-12), every key organ has begun to form.  While the organs are forming, the baby is most susceptible to harm from inadequate diet and exposure to infections, medications, X-rays, etc.  Therefore, this is the time during which the baby is at the most risk of developing defects or being miscarried.</li>
<li><strong>Baby can survive outside the womb -</strong><u>$preemie_survival</u></li>
<li><strong>End of second trimester -</strong> <u>$second_trimester</u><br>The second trimester is weeks 13-27 of your pregnancy.  During this time, the bones, eyes, brain, and nervous and respiratory systems have formed enough that the baby, if delivered, could survive, but the possibility of complications is high. </li>
<li><strong>DUE DATE -</strong> <u>$due_date</u><br>The Due Date is estimated to be 40 weeks from the first day of your last menstrual period - it is only an estimate.  Only 5% of all women actually deliver on their due date.</li></ul>
<p><strong>Your next step -</strong> see a health care provider to confirm you are pregnant and begin prenatal care.  Ask your primary care physician for referrals, as well as friends and family who have recently been pregnant.  If you don’t have health care insurance, check with your local public health or social service agency about resources that may be available to you.  For example, in California, there is a BabyCal program that helps cover the costs of prenatal care.</p>
<h3>During the prenatal visits, your health care provider will:</h3>
<ul><li>Teach you about each stage of your pregnancy;</li>
<li>Check any medical conditions you may already have (such as high blood pressure);</li>
<li>Monitor the baby’s development;</li>
<li>Test you and the baby for possible health problems (such as gestational diabetes); and</li>
<li>Tell you about services that may be of interest or help, such as support groups, the WIC program (a special nutritional program for Women, Infants and Children), or childbirth education classes.</li>
</ul><h3>The typical schedule for prenatal visits is:</h3>
<ul>
<li>Weeks 4 to 28: 1 visit every 4 weeks.</li>
<li>Weeks 28 to 36: 1 visit every 2-3 weeks.</li>
<li>Weeks 36 to birth: 1 visit per week.</li></ul>
<p><b>Congratulations and best wishes for a health pregnancy and baby!</b></p><style>#ajax-response-calculator u{padding-bottom:0px;border-bottom:1px dashed;text-decoration:none;}</style>";
echo "</div></div>";

$out=ob_get_clean();
die($out);
}
