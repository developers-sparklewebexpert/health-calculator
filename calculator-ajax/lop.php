<?php 
function lop_calculator(){
ob_start();



 $weight=$_POST['weight'];
 $weight_display=$_POST['weight'];
 $type=$_POST['measure'];
 $age=$_POST['age'];
 if($type=='metric'){$weight *= KG_TO_LBS;$thead='Minutes to lose 0.454 Kilo';}else{$thead='Minutes to lose one pound';}
 if($weight<50  || $weight>950){ $error=true;?> <p class="panel panel-danger panel-heading"><strong class='text-danger'>Invalid Weight:</strong>The weight you entered is out of range, valid weights are between 50 and 950 pounds or 22 kg and 430 kg </p> <?php }
if($type=='metric'){$data=get_calorie_data_metric();}else{$data=get_calorie_data();}
$calories=$data['calories'];
$caldesc=$data['caldesc'];
$skip_these=$data['skip_these'];
$how_long=array();
foreach($calories as $key=>$value):

if(in_array($value,$skip_these)){continue;}
$hkey=$caldesc[$key]; 
$ctimes=3500 / ($weight * $value);

if($hkey!=''){
$how_long[$hkey]=floor($ctimes);
}
endforeach;

if($error){}
else{


echo'<div class="panel panel-default"><div class=" panel-heading "><h2>Lose One Pound Results:</h2>';

echo "<p>Below is a list of activities and the number of minutes you need to perform each to burn 3500 calories and lose one pound. These are simply listed in increasing order of time – not in order of priority or recommendation. Also, the chart is not suggesting that you conduct the activities, like running, swimming or walking, continuously for the time shown.

Keep in mind that one of the basic rules of thumb for healthy weight loss is to lose only 1-2 pounds per week. To lose one pound per week, you will do activities each day that burn an additional 500 calories per day, totaling to 3500 over 7 days. Another approach is to split the calories between exercise and food - eating 250 less and burning 250 more calories each day.

Always check with your physician before starting any new or more strenuous exercise program. </p>";
echo "<table class='table table-striped'><thead><tr class='danger'><th>Activity</th><th> $thead </th></tr></thead><tbody>";
asort($how_long);
foreach($how_long as $key=>$value):
echo"<tr><td>$key</td><td>$value</td></tr>";
endforeach;
echo"</tbody></table></div></div>";
}
$out=ob_get_clean();
die($out);
}
