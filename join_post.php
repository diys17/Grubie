<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	</head>

<?php
include 'config.php';
include 'util.php';

$connect = ys_connect($host, $dbid, $dbpass, $dbname);

$id = $_POST['id'];
$passwd = $_POST['pw'];
$email = $_POST['email'];
$phone = $_POST['phone'];
// id 중복검사
// 중복이 안된다면 insert

$query = "insert into member(id, passwd, email, phone) values('$id', '$passwd', '$email', '$phone')";
$result = mysql_query($query, $connect);
$total_num = mysql_num_rows($result);
// mysql_num_rows : 존재하는 데이터의 갯수를 리턴하는 함수.
// 정상적으로 insert됐으면
// 회원 가입을 축하합니다. 메시지 출력

if (!$total_num)
{
	if (!$result) {
		err_msg('데이터베이스 오류가 발생하였습니다.');
	} else {
		echo "<script>
				alert('정상적으로 회원 가입되었습니다. 로그인 후 사용하세요!');
				window.location.replace('main.php');
				</script>";
	}
} else {
	echo "<script>
			window.alert('중복되는 아이디가 존재합니다!');
			history.go(-1);
			</script>";
	exit ;
}
?>
</html>

