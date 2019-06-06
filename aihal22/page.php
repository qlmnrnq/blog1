<!DOCTYPE html>
<html>
	<head>
		<title>СТатьи</title>
		<meta charset="UTF-8">
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
				]
			];

		?>

		<div>
	
		</div>
		<?php 
			$ggg = $_GET['index'];
			echo '<h2>' . $database[$ggg]['title'] . '</h2>';
			echo '<p>' . $database[$ggg]['long_text'] . '</p>';
		 ?>
	</body>
</html>