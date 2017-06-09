<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		$password = $_GET["password"];
		if ($password == 111){
			echo "welcome";
		} else {
			echo "nope";
		}
	 ?>
</body>
</html>