<?php

/*-----------(Movie Calculator )------------*/
function movie_calculator(){
ob_start();
$calories=$movie_name='';

$error=false;
if(isset($_POST['weight'])){$weight=$_POST['weight'];}else{$weight='';}
if(isset($_POST['age'])){$age=$_POST['age'];}else{$age='';}
if(isset($_POST['movie'])){$length=$_POST['movie'];}else{$length='';}
if(isset($_POST['measure'])){$measure=$_POST['measure'];}else{$measure='';}

$movie = array( "Neighbors" => 97, "The Amazing Spider-Man 2" => 142, "The Other Woman" => 109, "Chef" => 114 , "Devil's Knot" => 114, "Godzilla" => 123,"The Immigrant" => 120,"Million Dollar Arm" => 124,"X-Men: Days of Future Past" => 131, "Blended" => 117, "Maleficent" => 97, "A Million Ways to Die in the West" => 116, "Edge of Tomorrow" => 113,"The Fault in Our Stars" => 125, "How to Train Your Dragon 2" => 102,"Jimi: All Is By My Side" => 118, "Lullaby" => 117, "22 Jump Street" => 112,"Think Like a Man Too" => 106,"Jersey Boys" => 134, "Third Person" => 137, "Transformers: Age of Extinction" => 157,"Snowpiercer" => 126, "Deliver Us From Evil" => 118, "Earth to Echo" => 91,"Tammy" => 96,"Dawn of the Planet of the Apes" => 130, "Land Ho!" => 95,   "The Purge: Anarchy" => 104,"I Origins" => 113,"Mood Indigo" => 131,"Very Good Girls" => 91,"Begin Again" => 104,"Life Itself" => 115, "And So It Goes..." => 94,"Boyhood" => 166, "A Long Way Down" => 96, "Wish I Was Here" => 120,"Guardians of the Galaxy" =>  122,"Calvary" =>  100,"What If" =>  102,"Let's Be Cops" =>  104);

 if($measure=='metric'){ $weights =$weight * 2.2046;}else{$weights =$weight;}
$calories = $weights * .008  * $length;
$movie_name=array_keys($movie,$length);	
$calories= number_format($calories);
if($error){}
else{
if($measure=='metric'){
$units='Kilos';
}else{
$units='Pounds';
}

echo'<div class="panel panel-success"><div class=" panel-heading "><h2>Calories Burned:</h2>';
echo "Based on your age of <strong>$age years</strong>, and your weight of <strong>$weight $units</strong> you will burn <strong>$calories calories </strong> while watching <strong> $movie_name[0] </strong>.  The large tub of popcorn at the theater contains about 1,200 calories, a movie sized box of candy runs from about 350 calories to 600 calories, and a large soda will run around 500 calories, so if you consume any of these, you are probably eating more than you burn off.</p></div></div>";

?><p> Your body burns calories throughout the day, our <a href="/calculate/cbc"><u> calories burned calculator </u></a>  will tell you how many calories you burn doing over 200 different activities, and our
	<a href="/calculate/basal-metabolic-rate"> <u> basal metabolic rate calculator </u></a> can tell you how many calories you need to eat a day.  Try those or one of our <a href="/calculators/"><u> health calculators </u></a>! </p>
<?php }
$out=ob_get_clean();
die($out);
}
