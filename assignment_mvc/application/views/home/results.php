<html>
<head>
	<title>Twitter Results Page</title>
	<link rel="stylesheet" href="<?php echo URL::to_asset('css/default.css') ?>">
</head>
<body>

	<p>You searched for <?php echo $name ?></p>

	<div id="tweets">
		<ul>
		<?php
		foreach($results as $tweet) {
			echo "<li>".$tweet->text."</li>";
		}
		?>
	</li>
	</div>

</body>
</html>