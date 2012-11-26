<html>
<head>
	<title>Twitter User Successfully Added!</title>
	<link rel="stylesheet" href="<?php echo URL::to_asset('css/default.css') ?>">
</head>
<body>

	<p>Twitter user successfully added! The database now contains:</p>
	<table>
		<th>Twitter Username</th><th>Real Name</th>
		<?php foreach($users as $user): ?>
		<tr>
			<td><?php echo $user->username ?></td>
			<td><?php echo $user->real_name ?></td>
		</tr>
		<?php endforeach ?>
	</table>
	<p><a href="<?php echo URL::to('twitter/add') ?>">Add Another User</a></p>

</body>
</html>