<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<h1>array loop with script</h1>
<ul>
	<script>
		var list = new Array("1", "2", "3");
		for(var i=0; i < list.length; i++){
			document.write("<li>"+list[i]+"</li>");
		}
	</script>
</ul>

<h2>arrap loop with php</h2>
<ul>
		<?php 
		$list = array("one", "two", "three");
		for ($i=0; $i < count($list); $i++) { 
			echo "<li>".$list[$i]."</li>";
		}
		?>
</ul>
	
</body>
</html>