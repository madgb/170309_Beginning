<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Javascript</h1>
	<ul>
	<script>
		var i = 0;
		while(i < 10){
			document.write("<li>hello man</li>");
			i = i + 1;
		}
	</script>
	</ul>
	
	<h1>php</h1>
	
	<ol>
	<?php 
		$i = 0;
		while ( $i <= 10) {
			echo "<li>hello</li>";
			$i = $i + 1;
		}
	 ?>
	 </ol>		
	
</body>
</html>