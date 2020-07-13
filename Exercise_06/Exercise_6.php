<!-- Exercise 6

Define an associative array and output array elements on the screen. Use for this cartoon/anime/game characters (like Mickey Mouse, Super Mario, Goku, Pokemon etc.). 

Transform this code into a solution done with multidimensional arrays to track different properties of the characters. (hint: remember the logic used for the automated creation of HTML).  
 -->

<!DOCTYPE html>
<html>
<head>
	<title>PHP Exercise 06</title>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
<?php
		$cartoon = array(
		"Mickey Mouse" => "mish",
		"Super Mario"  => "patka",
		"Snjeguljica i 7 patuljaka" => "sirotinja"
		);

		echo "Mickey Mouse je ". $cartoon['Mickey Mouse'] . ".<br>";
		echo "Super Mario je " . $cartoon['Super Mario']. ".<br/>" ;
		echo "Sjeguljica je ". $cartoon['Snjeguljica i 7 patuljaka'] . ".<br/>";


		/////////////////////////////////////////////////////////////////////////////////////////////

		$crtici = array(
		"Mickey Mouse" => array
		(
		"fizicko vaspitanje" => 5,
		"vladanje" => 4,
		"heklanje"  => 3
		),
		"Super Mario" =>  array
		(
		"fizicko vaspitanje" => 5,
		"vladanje" => 5,
		"heklanje"  => 2
		),
		"Snjeguljica i 7 patuljaka" =>  array
		(
		"fizicko vaspitanje" => 2 ,
		"vladanje" => 3,
		"heklanje" => 4
		)
		);

		echo "Ocjene za ovog papka u fizickom vaspitanju je : ";
		echo $crtici[ 'Mickey Mouse']['fizicko vaspitanje'] . "<br />" ;
		echo "Ocjene za ovog papka u vladanju je : ";
		echo $crtici[ 'Super Mario']['vladanje'] . "<br />" ;
		echo "Ocjene za ovu rospiju u heklanju je : " ;
		echo $crtici['Snjeguljica i 7 patuljaka']['heklanje'] .  "<br />";




?>
</body>
</html>
