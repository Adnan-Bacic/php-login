<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
	<form action="create-user.php" method="post">
		<fieldset>
			<legend>Create User</legend>
			<input type="text" autocomplete="off" name="un" placeholder="Username" required>
			<input type="password" autocomplete="off" name="pw" placeholder="Password" required>
			<button type="submit">Opret</button>
		</fieldset>
	</form>

	<form action="login.php" method="post">
		<fieldset>
			<legend>Login</legend>
			<input type="text" name="un" placeholder="Username" required>
			<input type="password" name="pw" placeholder="Password" required>
			<button type="submit">Login</button>
		</fieldset>
	</form>
	<a href="info.php">info</a>
	
</body>
</html>