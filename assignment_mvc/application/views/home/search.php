<html>
<head>
	<title>Twitter Search Page</title>
</head>
<body>
	<h1>Twitter Search Page</h1>
	<form action="<?php echo URL::to('twitter/results') ?>" method="get">
		Username: <input type="text" name="search-term">
		<input type="submit" value="Search">
	</form>

</body>
</html>