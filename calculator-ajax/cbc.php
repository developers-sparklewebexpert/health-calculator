<?php 
function cbc_calculator(){
ob_start();$tcalories=array(); $data=array();$calories=array();$description=array();
$weight=$_POST['weight'];
$measure=$_POST['measure'];
if($measure=='metric'){$mweight=$weight * KG_TO_LBS;}else{$mweight=$weight;}
if( ($mweight < 50 || $weight > 950)){$error=true;?> <p class="panel panel-danger panel-heading"><strong class='text-danger'>Invalid weight:</strong> The weight you entered is out of range, valid weights are between 50 and 950 pounds.</p><?php }
 if ($measure == 'metric'){$data=get_calorie_data_metric();}else{$data= get_calorie_data();}
$calories=$data['calories'];
$description=$data['caldesc'];
foreach($calories as $key=>$value){
  if( isset($_POST[$key]) && $_POST[$key] > 0 ){
   $t1 = $value * $mweight * $_POST[$key];
   $total_calories += $t1;
  $dt=$description[$key];
  $tcalories[$dt]= $t1 ;
  }
}
$total_calories=(int)$total_calories;
//asort($tcalories);

if($error){}
else{
if($type!='metric'){
$wt_units=' Pounds ';
}
else{
$wt_units=' KG ';
}
echo'<div class="panel panel-success"><div class=" panel-heading "><h2>Calories Burned Estimation:</h2>';
echo "<p>According to the information you provided, below is an estimate of
the calories you burn.  Generally, to maintain your weight, the amount of calories you take in should equal the amount you burn.  The Daily Energy Expenditure calculator will help you figure out the minimum number of calories your body needs each day to work properly. To lose one U.S. pound (.454 kg), you must burn 3,500 more calories than you take in as food.</p><div class='clearfix'></div>";
echo'<div class="table-responsive"><table class="table table-hover table-bordered "><thead ><tr class="danger"><th><strong>Activity</strong></th><th><strong>Calories Burned</strong></th></tr></thead><tbody class="table-inner">';
foreach($tcalories as $key=>$value){
echo '<tr><td><strong>'.$key.'</strong></td><td><strong>'.$value.'</strong></td></tr>';
}
echo'</tbody><tfoot ><tr class="danger"><th><strong>Total Calories Burned</strong></th><th><strong>'.$total_calories.'</strong></th></tr></tfoot></table></div>';
echo"</div></div>";
}
$out=ob_get_clean();
die($out);
}
