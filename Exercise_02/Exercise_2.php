<!-- Exercise 2
	
Create an if statement which will be based on the current day. Output a message - if it is Monday it will return: "Happy Monday!" If it is not a Monday it should return: "Have a nice day!" -->


<!DOCTYPE html>
<html>
<head>
	<title>PHP Exercise 02</title>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
<?php
	$d = date("D");
	if ($d=="Mon")
		echo "<h1>Happy Monday!</h1>";
	else
		echo "<h1>Have a nice day!</h1>";
?>
</body>
</html>
