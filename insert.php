<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	</head>
	
	<?php
	include 'config.php';
	include 'util.php';
	
	$connect = ys_connect($host, $dbid, $dbpass, $dbname);

	$name = $_POST['name'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$title = $_POST['title'];
	$content = $_POST['content'];
	$addr = $_SERVER['REMOTE_ADDR'];


	$query = "insert into board (name, email, pass, title, content, wdate, ip, view) 
							values('$name', '$email', '$pass', '$title', \"$content\", now(), '$addr', 0)";
	$result = mysql_query($query, $connect);
	
	if(!$result)
	{
		echo "Error : " . mysql_error();
	}
	else
	{
		echo "<script>alert('정상적으로 업로드 되었습니다.');</script>";
	}
	echo "</font>"
	?>
</html>