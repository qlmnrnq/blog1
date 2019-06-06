<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>БЛОГ</title>
</head>
<body>
	<?php
	$database = [
		[
			'title' => 'статья 1', 
			'short_text' => 'привет', 
			'long_text' => 'привет пока'
		],
		[
			'title' => 'статья 2',
			'short_text' => 'привет',
			'long_text' => 'привет пока'
		],
]
?>
	<h1>БЛОГ</h1>
	<?php 
		for($i = 0;$i < count($database); $i++){
	?>
	<div>
	<?php 
		echo '<h2>' . $database[$i]['title'] . '</h2>';
			echo '<p>' . $database[$i]['short_text'] . '</p>';
			echo '<a href="page.php?index=' . $i . '">далее</a>';
			echo '<hr>'; 
	 ?>
	 <?php 
	}
	  ?>
	  		
	</div>
</body>
</html








































