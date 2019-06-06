<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<form action="result.php" method="GET">
			<input type="" name="name">
			<input type="" name="surname">
			<button>btn</button>
		</form>

	</body>
</html>
<?php echo $_GET['name'] . ' ' . $_GET['surname']; ?>