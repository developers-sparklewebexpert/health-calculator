<?php 
function whr_calculator(){
ob_start();
$shape='';


 $sex=$_POST['sex'];
 $waist=$_POST['waist'];
  $hip=$_POST['hip'];
$measure=$_POST['measure'];
if($measure=='metric'){$ln_units=' cm';
if($waist < 25 || $waist > 243){$error=true;?> <p class="panel panel-danger panel-heading"><strong class='text-danger'>Invalid waist size:</strong>The waist size you entered <?php echo $waist;?> is out of range, valid waist sizes are between 25cm and 243cm. </p> <?php }
if($hip < 25 || $hip > 243){$error=true;?> <p class="panel panel-danger panel-heading"><strong class='text-danger'>Invalid hip size:</strong>The hipsize you entered <?php echo $hip;?> is out of range, valid hip sizes are between 25cm and 243cm. </p> <?php }
}else{$ln_units=' inch';
if($waist < 10 || $waist > 96){$error=true;?> <p class="panel panel-danger panel-heading"><strong class='text-danger'>Invalid waist size:</strong>The waist size you entered <?php echo $waist;?> is out of range, valid waist sizes are between 10" and 96". </p> <?php }
if($hip < 10 || $hip > 96){$error=true;?> <p class="panel panel-danger panel-heading"><strong class='text-danger'>Invalid hip size:</strong>The hipsize you entered <?php echo $hip;?> is out of range, valid hip sizes are between 10" and 96". </p> <?php }
} 
$ratio = $waist / $hip;
$ratio=number_format($ratio,2);
if( $sex=='m' ){
       if( $ratio < 0.95 ) { $shape ='pear';  }else  { $shape ='apple'; }
      }

else { 
      if( $hash->{ratio} < 0.81 ) { $shape ='pear';  }else  { $shape ='apple'; }
     }
		
if($error){}
else{
if($sex=='m'){$ssex="Male";}else{$ssex="Female";}
echo'<div class="panel panel-success"><div class=" panel-heading "><h2>Waist to Hip Ratio:</h2>';
echo "<p>You have a waist to hip ratio of <strong>$ratio</strong>.  The information you entered: Sex = <strong>$ssex</strong>, waist = <strong>$waist $ln_units</strong> and hip = <strong>$hip $ln_units</strong>.</p>";
if( $shape =='pear' ){
echo "Your shape puts you at reduced risk of coronary heart disease, diabetes and stroke.  Frequently referred to as pear shape, you tend to keep fat off your midsection and more on your hips. Our bodies do not convert this lower body fat as readily as midsection fat, which keeps cholesterol down.";
}
else{
echo"Your shape puts you at increased risk of coronary heart disease, diabetes and stroke. Frequently referred to as apple shape, you
tend to keep fat at your midsection and less on your hips. Our bodies convert this upper body fat to energy whenever your body runs short.  This raises cholesterol and blood pressure.";}
echo"</div></div>";
}
$out=ob_get_clean();
die($out);
}
