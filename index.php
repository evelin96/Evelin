<!DOCTYPE html>
<html>
<head>
	<title>Evelin</title>

	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<div class="container">
		<h1>Lessons</h1>

		<div class="navigation">
			<?php
			$dirs = array_filter(glob('*'), 'is_dir');
			foreach ($dirs as $key => $value) {
				echo "<a href='$value/'>$value</a> <br>";
			} ?>
 		</div>
 	</div>
</body>
</html>