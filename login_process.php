<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	</head>

	<?php
	include 'config.php';
	include 'util.php';

	$connect = ys_connect($host, $dbid, $dbpass, $dbname);

	//로그인 처리를 수행하기 전에 먼저 member테이블을 통해 아이디와 비밀번호가 올바른 값인지를 확인한다.

	//회원 테이블에서 정보 확인
	$id = $_POST['id'];
	$passwd = $_POST['pw'];

	$query = "select * from member where id='$id' and passwd='$passwd'";
	//아이디와 비밀번호를 이용하여 같은 정보가 있는지 검사하기 위한 SQL구문을 저장한 변수
	$result = mysql_query($query, $connect);
	//명령어 실행 함수
	$rows = mysql_fetch_array($result);
	//실행결과를 저장
	//session_unset(); 
	
	if (!isset($_SESSION["p_id"])) {
		if (!$rows) {
			err_msg('존재하지 않는 회원 ID이거나 비밀번호가 틀립니다!');
		}
		//로그인~로그아웃까지는 세션처리됨
		//따라서 로그인처리 하기 위해서 세션 값을 부여
		else { //로그인 처리가 됨..
			session_start();
			$_SESSION["p_id"] = $id;
			echo "<script>
				alert('로그인 되었습니다!!!! ');
				window.location.replace('main.php');
				</script>";
			//로그인폼에 웰컴메시지를 띄우고, 로그인버튼 대신에 로그아웃버튼을 띄운다..
		}
	} else { //이미 로그인 되어 있는 상태일때..  
		echo "<script>
				window.location.replace('join.php');
				</script>";
	}
?>
</html>

