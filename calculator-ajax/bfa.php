<?php

/*-----------BFA (Body Fat Calculator - U.S. Army Formula)------------*/
function bfa_calculator(){
ob_start();
$army_body_fat='';
$sex=$_POST['sex'];
$error=false;
if(isset($_POST['weight'])){ $weight=$_POST['weight'];}else{$weight='';}
if(isset($_POST['height'])){ $height=$_POST['height'];}else{$height='';}
if(isset($_POST['neck'])){ $neck=$_POST['neck'];}else{$neck='';}
if(isset($_POST['wrist'])){ $wrist=$_POST['wrist'];}else{$wrist='';}
if(isset($_POST['hip'])){ $hip=$_POST['hip'];}else{$hip='';}
if(isset($_POST['forearm'])){ $forearm=$_POST['forearm'];}else{$forearm='';}
if(isset($_POST['abd2'])){ $abd2=$_POST['abd2'];}else{$abd2='';}//waist 
$convert_factor=1;
if(isset($_POST['forearm'])){ $forearm=$_POST['forearm'];}else{$forearm='';}
if(isset($_POST['measure'])){ $measure=$_POST['measure'];}else{$measure='';}
$ht_factor=IN_TO_CM;
if($measure=='metric'){
$wt_factor=1;
$convert_factor=1;
if($abd2 <=25 && $abd2 > 244){$error=true;?> <p class="panel panel-danger panel-heading"><strong class='text-danger'><?php echo'Invalid waist size:</strong> The waist size you entered '.$abd2.' is out of range, valid waist sizes are between 25cm and 244 cm</p>';
}
 if($weight<=22 && $weight> 430){$error=true; ?> <p class="panel panel-danger panel-heading"><strong class='text-danger'><?php echo'Invalid weight:</strong> The weight you entered '.$weight.' is out of range, valid weights are between  22 kg and 430 kg </p>';
}
if($height<=140 && $height> 270){$error=true;?> <p class="panel panel-danger panel-heading"><strong class='text-danger'><?php echo'Invalid height:</strong> The height you entered '.$height.' is out of range, valid heights are between  1.4 m and 2.7 m. </p>';
}
 if($neck <= 10 && $neck > 91){$error=true; ?> <p class="panel panel-danger panel-heading"><strong class='text-danger'><?php echo'Invalid neck size:</strong> The neck size you entered '.$neck.' is out of range, valid neck sizes are between 10 cm and 91 cm</p>';
}
}
else{
$convert_factor=IN_TO_CM;
$wt_factor=LBS_TO_KG;
if($abd2 <= 10 && $abd2 > 96){$error=true; ?> <p class="panel panel-danger panel-heading"><strong class='text-danger'><?php echo'Invalid waist size:</strong> The waist size you entered '.$abd2.' is out of range, valid waist sizes are between 10" and 96"</p>';
}
 if($weight<= 50 && $weight> 950){$error=true; ?> <p class="panel panel-danger panel-heading"><strong class='text-danger'><?php echo 'Invalid weight:</strong> The weight you entered '.$weight.' is out of range, valid weights are between 50 and 950 pounds  </p>';
}
 if($height<= 20 && $height> 90){$error=true; ?> <p class="panel panel-danger panel-heading"><strong class='text-danger'><?php echo __('Invalid height:','health');?></strong> <?php echo __('The height you entered','health');?> <?php echo $height;?> <?php echo __('is out of range, valid heights are between','health');?> 1'8" and 7'6" (US) </p>
<?php }
 if($neck <= 4 && $neck > 36){$error=true; ?> <p class="panel panel-danger panel-heading"><strong class='text-danger'><?php echo'Invalid neck size:</strong> The neck size you entered '.$neck.' is out of range, valid neck sizes are between 4" and 36"</p>';
}
}

// Body Fat Calculator - U.S. Army Formula
if($sex=='m'){

 $army_body_fat=  (76.5 * log10(($abd2 - $neck) * $convert_factor)) - (68.7 * log10($height * $ht_factor)) + 46.9;
}
elseif($sex=='f'){
//echo $weight * $wt_factor;echo'---';
//echo $s=log10($weight * $wt_factor);
 $army_body_fat= (105.3 * log10($weight * $wt_factor)) - (0.200 * ($wrist  * $convert_factor)) - ( 0.533 * $neck * $convert_factor ) - ( 1.574 * $forearm * $convert_factor ) + (0.173 * $hip * $convert_factor ) - ( 0.515 * $height * $ht_factor ) - 35.6;

}
else{$error=true;}
$army_body_fat= number_format((float)$army_body_fat, 2, '.', '');
if($error){}
else{
if($measure=='metric'){
$ln_unit='cm';$wt_unit='kilo';
}else{
$ln_unit='inch';$wt_unit='pounds';
}

echo'<div class="panel panel-success"><div class=" panel-heading "><h2>Body Fat Calculator - U.S. Army Formula Results:</h2>';

echo "Using your measurements of a";
if(!empty($abd2)){echo " $abd2 $ln_unit waist, ";} 
if(!empty($neck)){echo " $neck $ln_unit neck, ";}
if(!empty($wrist)){echo " $wrist $ln_unit wrist, ";} 
if(!empty($forearm)){echo " $forearm $ln_unit forearm ";}
if(!empty($hip)){echo " and $hip $ln_unit hip ";}
if(!empty($weight)){echo " and $weight $wt_unit weight ";}
echo" your body fat percentage is estimated to be
 <strong>$army_body_fat %</strong>  using the U.S. Army body fat algorithm.  This method is not as accurate as a water displacement test, but is usually within 1-3%. If you carry all your extra weight around your middle you may have an elevated percentage.  Please note that this middle weight is a high risk factor for heart disease and stroke.  The <a href=''>waist to hip ratio calculator</a> can
give you more information.</div></div>";

echo "Men are typically lower in body fat percentage, averaging around 23%, with an ideal of about 15%. Highly fit athletes are between 5-10%. Remember these are guidelines; your physician should help you determine the ideal weight and body fat for you.";
}
$out=ob_get_clean();
die($out);
}
