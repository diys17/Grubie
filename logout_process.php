<?php
    session_start();
	session_unset();
	session_destroy();

	echo "<script>alert('BYE');
		window.location.replace('main.php');</script>";
?>
