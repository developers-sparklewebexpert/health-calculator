<?php 
function fsz_calculator(){
ob_start();$fsz='';
$gender=$_POST['sex'];
$height=$_POST['height'];
if(isset($_POST['wrist'])){$wrist=$_POST['wrist'];}else{$wrist='';}
if(isset($_POST['elbow'])){$elbow=$_POST['elbow'];}else{$elbow='';}
$type=$_POST['measure'];
/*if($wrist<1||$elbow<1){?><p class="panel panel-danger panel-heading"><strong class='text-danger'>Invalid Wrist Circumference & Elbow Breadth:</strong>You must enter a value for either wrist circumference or elbow breadth.</p><?php }*/
if($wrist==''&& $elbow==''){?><p class="panel panel-danger panel-heading"><strong class='text-danger'>Invalid Wrist Circumference & Elbow Breadth:</strong>You must enter a value for either wrist circumference or elbow breadth.</p><?php }
 if($height<20  || $height>90){ $error=true;?> <p class="panel panel-danger panel-heading"><strong class='text-danger'>Invalid height:</strong>The height you entered <?php echo $height;?> is out of range, valid heights are between 1'8" and 7'6" (US) or 1.4 m and 2.7 m. </p> <?php }

if($wrist!=''){
   $ratio = eval ($height / $wrist);
   if($gender=='m'){
     if( $ratio > 10.39 ) { $size="small"; }
     elseif( $ratio <  9.61 ) { $size="large"; }
     else{$size='medium';}
   }
  else{
     if( $ratio > 10.99 ) { $size="small"; }
     elseif( $ratio < 10.11 ) { $size="large"; }
     else{$size='medium';}
  }
}
else{
     if($gender=='m'){
       if(( $height <= '63' && $elbow < 2.5   ) ||( $height <= '67' && $elbow < 2.625 ) ||( $height <= '75' && $elbow < 2.75  ) || (    $elbow  < 2.875)){$size="small";}
      elseif( ( $height <= '67' && $elbow > 2.875 ) ||( $height <= '71' && $elbow > 3     ) ||( $height <= '75' && $elbow > 3.125 ) ||
( $elbow  > 3.25) ){$size="large";}
      else{$size='medium';}
   }
  else{
     if( ( $height <= '63' && $elbow < 2.25  ) ||( $height <= '71' && $elbow < 2.375 ) ||( $elbow  < 2.5)){$size="small";}
     elseif( ( $height <= '63' && $elbow > 2.5   ) ||( $height <= '71' && $elbow > 2.625 ) ||( $elbow > 2.75 ) ){$size="large";}
     else{$size='medium';}
  }

}


if($error){}
else{
if($type!='metric'){
$feet=round($height/12);
$inch=$height%12;
$height_display=$feet.'" '.$inch."' ";
$ln_units=' Inch ';
}
else{
$height=$height * IN_TO_CM;
$meter=round($height/100,2);
$height_display=$meter.' Meters';
$ln_units=' cm ';
}
if($gender=='m'){$sx='Male';}else{$sx='Female';}
echo'<div class="panel panel-success"><div class=" panel-heading "><h2>Frame Size:</h2>';
if($wrist!=''){echo "<p>You are $sx with a height of $height_display and a wrist circumference of $wrist $ln_units.  You are considered to have a <strong>$size</strong> frame.</p>";}
else{echo "<p>You are $sx with a height of $height_display and an elbow breadth of $elbow
$ln_units.  You are considered to have a <strong>$size</strong> frame.</p>";}
echo"</div></div>";
}
$out=ob_get_clean();
die($out);
}
