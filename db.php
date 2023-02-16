<?php
	$conn = mysqli_connect('localhost', 'root', '');

	if (!$conn)
	{
		die('could not connect: ' . mysqli_error());

	}
	mysqli_select_db($conn, "coin");
?>

