<?php
    include 'config.php';
    include 'util.php';
    
    $connect=ys_connect($host, $dbid, $dbpass, $dbname);
?>

<!--
	아이디 중복확인  
	데이터(입력된 아이디)를 넘겨 받아서 데이터베이스에 있는지 검사  
	만약 입력값이 없으면, '아이디를 입력 해 주세요.' 출력  
	있으면 '중복된 아이디 입니다.' 출력 
	없으면 '사용 가능한 아이디 입니다.' 출력 
-->

<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<script src="member.js"></script>
		<title>ID 확인</title>
	</head>
	<body>
		<?php
			$id = $_GET['id'];
			
			$query="select id from member where id='$id'";
			$result=mysql_query($query, $connect);
			$total_num=mysql_num_rows($result);
			
			if($id == NULL || $id == "")
			{
				//아이디를 입력해 주세요 출력  
				echo "아이디를 입력 해 주세요.";
			}
			
			if($total_num==0)
			{
				//아이디 사용가능 출력  
				echo "<u style='color:#0000ff'>$id</u> 는 사용 가능한 아이디 입니다.";
				//$id_check_flag = 1;
				//id_check_flag=1;
				//echo "<script>setCheckIDFlag($id_check_flag);</script>";
				echo "<script>window.opener.document.getElementById('id_check_flag').value = 'true'</script>";
			}
			else 
			{
				//중복된 아이디임을 출력  
				echo "중복 된 아이디 입니다.";
				//$id_check_flag = 0;
				//echo "<script>setCheckIDFlag();</script>";
				echo "<script>window.opener.document.getElementById('id_check_flag').value = 'false'</script>";
			}
		?>
	</body>
</html>