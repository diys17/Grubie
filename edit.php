<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<title>GRUBIE - board</title>
	</head>
	<body style="margin-left: auto; margin-right: auto; width: 71%;">
		<center>
			<form name="write_form" method="post" action="update.php?id=<?=$id?>" > <!-- 수정된 부분 -->
				<table width="580" border="0" cellspacing="1" cellpadding="2" bgcolor="#777777">
					<tr>
						<td height="20" align="center" bgcolor="#999999">
							<font color="white"><b>글 수 정 하 기</b></font>
						</td>
					</tr>
					<?php
						//데이터베이스 연결하기
						include 'config.php';
						include 'util.php';

						$connect = ys_connect($host, $dbid, $dbpass, $dbname);
						
						$result=mysql_query("select * from board where id=$id", $connect);
						$row=mysql_fetch_array($result);
					?>
					<!-- 입력 부분 -->
					<tr>
						<table>
							<tr>
								<td width="60" align="left">이름</td>
								<td>
									<input type="text" name="name" size="20" maxlength="10" value="<?=$row[name]?> "/>
								</td>
							</tr>
							<tr>
								<td width="60" align="left">이메일</td>
								<td>
									<input type="text" name="email" size="20" maxlength="25" value="<?=$row[email]?>" />
								</td>
							</tr>
							<tr>
								<td width="60" align="left">비밀번호</td>
								<td>
									<input type="password" name="pass" size="8" maxlength="8" />
									(수정, 삭제시 반드시 필요)
								</td>
							</tr>
							<tr>
								<td width="60" align="left">제 목</td>
								<td>
									<input type="text" name="title" size="60" maxlength="35" value="<?=$row[title]?>"> />
								</td>
							</tr>
							<tr>
								<td width="60" align="left">내용</td>
								<td>
									<textarea name="content" cols="65" rows="15"><?= ?></textarea>
								</td>
							</tr>
							<tr>
								<td colspan="10" align="center">
									<input type="submit" value="글 저장하기" />
									&nbsp;&nbsp;
									<input type="reset" value="다시 쓰기" />
									&nbsp;&nbsp;
									<input type="button" value="되돌아가기" onclick="history.back(-1)"/>
								</td>
							</tr>
						</table>
					</tr>
					<!-- 입력부분 끝 -->
				</table>
			</form>
		</center>
	</body>
</html>