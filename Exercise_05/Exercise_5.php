<!-- Exercise 5

Define a numeric array with 10 elements. Use a foreach loop to output the value of every array's element.   -->


<!DOCTYPE html>
<html>
<head>
	<title>PHP Exercise 05</title>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
<?php
			$array = array( 10, 9, 8, 7, 6, 5, 4, 3, 2, 1);
			foreach($array as $value )
			{
			echo "<h1>$value<h1>";
			}
	
?>
</body>
</html>
