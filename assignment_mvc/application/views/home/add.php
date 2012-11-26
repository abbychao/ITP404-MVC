<html>
<head>
	<title>Add Twitter User</title>
	<link rel="stylesheet" href="<?php echo URL::to_asset('css/default.css') ?>">
</head>
<body>
	<h1>Add Twitter User</h1>
	<form action="<?php echo URL::to('twitter/success') ?>" method="get">
		Twitter Username: <input type="text" name="twitter_username" /><br>
		Real Name: <input type="text" name="real_name" /><br>
		<input type="submit" value="Add" />
	</form>
</body>
</html>