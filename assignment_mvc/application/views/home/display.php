<html>
<head>
	<title>All Results</title>
</head>
<body>
	<h1>All Results</h1>
		<?php 
		foreach($users as $user) {
			echo Twitter::formatName($user->username);
			echo '<br>';
		}
		?>
</body>
</html>