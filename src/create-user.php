<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
	
<?php
	
	$un = filter_input(INPUT_POST, 'un') or die('Missing or illegal un parameter');	
	$pw = filter_input(INPUT_POST, 'pw') or die('Missing or illegal pw parameter');	

	$pwhash = password_hash($pw, PASSWORD_DEFAULT);
	
	
	require_once('sem3-login.php');
	
	$sql = 'INSERT INTO pi_users (username, pwhash) VALUES (?, ?)';
	$stmt = $link->prepare($sql);
	$stmt->bind_param('ss', $un, $pwhash);
	$stmt->execute();
	
	if($stmt->affected_rows > 0){
		echo 'User '.$un.' created :-)';
	}
	else{
		echo 'Could not create user - username '.$un.' already exists';
	}
	
?>
	<a href="info.php">info</a>
</body>
</html>