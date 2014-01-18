<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	</head>
	
	<!--
		 그룹등록 페이지에서 작성된 글을 데이터베이스에 저장하는 과정..
	-->

<?php
include 'config.php';
include 'util.php';

$connect = ys_connect($host, $dbid, $dbpass, $dbname);

$title = $_POST['title'];
$type = $_POST['type'];
$content = $_POST['content'];

$query = "insert into board(title, type, content) values('$title', '$type', '$content')";
$result = mysql_query($query, $connect);
$total_num = mysql_num_rows($result);

if (!$total_num)
{
	if (!$result) {
		err_msg('데이터베이스 오류가 발생하였습니다.');
	} else {
		echo "<script>
				alert('정상적으로 게시되었습니다.');
				window.location.replace('main.php');
				</script>";
	}
} else {
	exit ;
}
?>
</html>

