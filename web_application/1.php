<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>php_practice</title>
</head>
<body>
	<h1>php_basic_practice</h1>
	<?php
		echo "Hello World";
		echo 10+10;
		echo "10+10";
		echo "10"."10";
	?>
	<h2>php2</h2>
	<?php
		$name = "madgb";
		echo "hello"." "."I'm"." ".$name;
	?>
	<script>
		document.write("Hello world");
		var name = "madgb";
		document.write("hello "+"I'm "+name);
	</script>
	<br>
	<?php
		var_dump(1==1);
	?>
	<br>
	<?php
		var_export(1==1);
	?>
	<hr>
	<br>
	<h2>if/else</h2>
	<h3>javascript</h3>
	<script>
		var madgb = 3;
		if(madgb === 3){
			document.write("madgb is 3");
		} else {
			document.write("false");
		}
	</script>
	<h3>php</h3>
	<?php 
		$madgb = 2;
		if($madgb === 3){
			echo "madgb is 3";
		} else {
			echo "false";
		}
	 ?>
</body>
</html>