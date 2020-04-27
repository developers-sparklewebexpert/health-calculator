<?php 
function smc_calculator(){
ob_start();



 $cigarettesperday=$_POST['cigarettesperday'];
 $cigarettesperpack=$_POST['cigarettesperpack'];
 $priceperpack=$_POST['priceperpack'];
  $smoker = 1;
 
 if($cigarettesperpack < 1){ $error=true;?> <p class="panel panel-danger panel-heading"><strong class='text-danger'>Invalid cigarettes per pack:</strong>You must enter a number for number of cigarettes in each pack.</p> <?php }

 if($cigarettesperday < 1){ $error=true;?> <p class="panel panel-danger panel-heading"><strong class='text-danger'>Invalid cigarettes smoked each day:</strong>You must enter a number for number of cigarettes you smoke each day</p> <?php }

 if($priceperpack < 0.01 ){ $error=true;?> <p class="panel panel-danger panel-heading"><strong class='text-danger'>Invalid price per pack:</strong>You must enter an amount for the price per pack.</p> <?php }

$price_per_year = $priceperpack / $cigarettesperpack * $cigarettesperday * 365;
$cig1=$cigarettesperday * 365 *1; $cig3=$cigarettesperday * 365 *3; $cig5=$cigarettesperday * 365 *5;
 $year1=$price_per_year * 1;
  $year3=$price_per_year * 3;
  $year5=$price_per_year * 5;
if($error){}
else{


echo'<div class="panel panel-success"><div class=" panel-heading "><h2>Cost of Smoking Cigarettes:</h2>';

echo "<p>These are your measurable costs.  You will also save on future medical bills as smoking is the number one preventable cause of illness in the United States. Based on your input that you smoke <strong>$cigarettesperday cigarettes a day</strong>, and that you pay <strong>$priceperpack for each pack</strong> (with <strong>$cigarettesperpack cigs in each pack</strong>). If you quit smoking today you will save:</p>";
echo "<ul><li><strong>".number_format($year1,2)."<strong> - in the next year.  Cigarettes not smoked = <strong>$cig1</strong></li>
<li><strong>".number_format($year3,2)."</strong> - over the next three years.  Cigarettes not smoked = <strong>$cig3</strong></li>
<li><strong>".number_format($year5,2)."</strong> - during the next five years.  Cigarettes not smoked =<strong> $cig5</strong></li>
</ul></div></div>";
}
$out=ob_get_clean();
die($out);
}
