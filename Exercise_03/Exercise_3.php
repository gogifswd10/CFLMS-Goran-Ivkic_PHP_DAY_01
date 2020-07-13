<!-- Exercise 3
	
Create an else if statement which will be based on the current day. Output a message - if it is Monday, it will return: "Today is Monday!" if it is Tuesday, it will return: "Today is Tuesday!" etc. for every day in the week.  -->


<!DOCTYPE html>
<html>
<head>
	<title>PHP Exercise 03</title>
<!-- 	<link rel="stylesheet" type="text/css" href="style.css">
 -->
</head>
<body>
	<?php
		$d=date("D");
			switch ($d) {
			case "Mon":
			echo "Today is Monday";
			break;
			case "Tue":
			echo "Today is Tuesday";
			break;
			case "Wed":
			echo "Today is Wednesday";
			break;
			case "Thu":
			echo "Today is Thursday";
			break;
			case "Fri":
			echo "Today is Friday";
			break;
			case  "Sat":
			echo "Today is Saturday";
			break ;
			case "Sun":
			echo "Today is Sunday";
			break;
			default:
			echo "Wonder which day is this ?" ;
			}
	?>

</body>
</html>