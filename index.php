<?php

require_once('config.php');

session_start();

if (empty($_SESSION['me'])) {
	header('Location: ' . SITE_URL . 'login.php');
	exit;
}

?>
<!doctype html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>Home : Facebook connect php</title>
</head>
<body>
	<h1>Facebook Friends</h1>
</body>
</html>