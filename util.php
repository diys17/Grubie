<?php
function err_msg($msg, $bool = "1") {
	if ($bool) {
		echo "
			<script>
				window.alert('$msg');
				history.go(-1);
			</script>
			";

		exit ;
	}
}

function msg($msg) {
	echo "
				<script>
					window.alert('$msg');
				</script>";
}

function ys_connect($host, $id, $pass, $db)
{
	$connect=mysql_connect($host, $id, $pass); //mysql 연결  
	mysql_select_db($db); // use 사용할 DB 이름 선택  
	return $connect;
}
?>

