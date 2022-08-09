<?php
	echo  date('d / m / Y - G:i:s') . '<hr>'; //

	$servername = 'database';
	$username = 'root';
	$password = 'Conexa@blog123#';
	$db_name = 'blog';
	$connect = mysqli_connect($servername, $username, $password, $db_name);
	$result = mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM campo"));
	print_r($result);
	echo '<hr>';
	print_r($connect);

	// require_once '../index.php';
	require_once '../testdrive/index.php';