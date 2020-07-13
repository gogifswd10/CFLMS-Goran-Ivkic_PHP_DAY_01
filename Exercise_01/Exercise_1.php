<!-- Exercise 1
	
Print your name in an h1 HTML element using PHP (define the variable and store your name into it). Use external CSS to position your name in the middle of the screen (horizontal, vertical).
 -->

<!DOCTYPE html>
<html>
<head>
	<title>PHP Exercise 01</title>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
	<div id="wrapper">
	<?php

	$myFirstName = "Gogi";
	$myLastName = "Ivkic";
		echo "<h1>My first name is $myFirstName</h1>";
		echo "<h1>My last name is $myLastName</h1>";

	?>
	</div>
</body>
</html>