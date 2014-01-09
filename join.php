<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<script src="member.js"></script>
	</head>
	<body>
		<div style="padding: 10">
			<a href="./main.php">홈</a> &gt; 회원 정보 &gt; <a href="./join.php">회원 가입</a>
		</div>
		<br>
		<form name=join_form method="post" action="join_post.php" onsubmit="return checkID();">
			<!-- 아이디 설정 부분  -->
			<div style="padding: 10;">
				<span style="width:150px; display:inline-block">아이디</span>
				<input type="text" id="id" name="id" size="16" onchange="changeID()"/>
				<a href="javascript:check_ID_Window('id_check.php')">중복확인</a>
				<span style="font-size: 12">특수문자, 한글, 공백을 포함할 수 없으며
					모든 영문자는 소문자로 처리됩니다.(4~10자 사이)</span>
			</div>

			<!-- 비밀번호 설정 부분
			: 비밀번호 재입력시, 비밀번호가 다를 떄 조치 필요..
			-->

			<div style="padding: 10;">
				<span style="width:150px; display:inline-block">비밀번호</span>
				<input type="password" name="pw" size="16"/>
				<span style="font-size: 12">특수문자, 공백을 포함할 수 없으며 대, 소문자를 구분합니다.</span>
				<br>
				<span style="width:150px; display: inline-block">비밀번호 재입력</span>
				<input type="password" name="pw2" size="16" />
				</div>

				<!-- 이메일 저장 부분 --> 
				<div style="padding: 10;">
				<span style="width: 150px; display: inline-block;">이메일</span>
				<input type="email" name="email" />
				</div>

				<!-- 전화번호 저장 부분 -->
				<div style="padding: 10;">
				<span style="width: 150px; display: inline-block;">전화번호</span>
				<select name="ph_num1">
				<option>010</option>
				<option>011</option>
				<option>016</option>
				<option>017</option>
				<option>019</option>
				</select>
				-<input type="text" name="ph_num2" size="6" maxlength="4"/>
				-<input type="text" name="ph_num3" size="6" maxlength="4"/>
			</div>
			<!-- 핸드폰번호 저장 부분 -->

			<!-- 주소 저장 부분  -->

			<!-- 완료 버튼 부분 -->
			<div style="padding: 10;">
				<a href="javascript:checkInput()">
				<input type="submit" value="완료"/>
				</a>
				<input type="hidden" id="id_check_flag" value="false" />
			</div>
		</form>
	</body>
</html>
