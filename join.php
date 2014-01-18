<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<!-- Bootstrap -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://code.jquery.com/jquery.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<script src="member.js"></script>
	</head>
	<body>
		<?php
		include 'top.php';
		?>
		<div class="bs-header col-sm-offset-3">
			<h1>회원 가입<small>sign up</small></h1>
		</div>
		<br>
		<form name="join_form" class="form-horizontal" method="post" action="join_post.php" >
			<div class="form-group">
				<label for="id" class="col-sm-offset-2 col-sm-2 control-label">ID</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" id="id" name="id" placeholder="아이디"/>
				</div>
			</div>
			<div class="form-group">
				<label for="pw" class="col-sm-offset-2 col-sm-2 control-label">Password</label>
				<div class="col-sm-4">
					<input type="password" class="form-control" id="pw" name="pw" placeholder="비밀번호"/>
				</div>
			</div>
			<div class="form-group">
				<label for="email" class="col-sm-offset-2 col-sm-2 control-label">Email address</label>
				<div class="col-sm-4">
					<input type="email" class="form-control" id="email" name="email" placeholder="이메일"/>
				</div>
			</div>
			<div class="form-group">
				<label for="phone" class="col-sm-offset-2 col-sm-2 control-label">Phone</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" id="phone" name="phone" placeholder="연락처"/>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-4 col-sm-4" >
					<button type="button" class="btn btn-primary btn-block" onclick="checkInput()">
						가입하기
					</button>
				</div>
			</div>
		</form>

		<!--
		<form name=join_form method="post" action="join_post.php" onsubmit="return checkID();">
		<!-- 아이디 설정 부분  --
		<div style="padding: 10;">
		<span style="width:150px; display:inline-block">아이디</span>
		<input type="text" id="id" name="id" size="16" onchange="changeID()"/>
		<a href="javascript:check_ID_Window('id_check.php')">중복확인</a>
		<span style="font-size: 12">특수문자, 한글, 공백을 포함할 수 없으며
		모든 영문자는 소문자로 처리됩니다.(4~10자 사이)</span>
		</div>

		<!-- 비밀번호 설정 부분
		: 비밀번호 재입력시, 비밀번호가 다를 떄 조치 필요..
		--

		<div style="padding: 10;">
		<span style="width:150px; display:inline-block">비밀번호</span>
		<input type="password" name="pw" size="16"/>
		<span style="font-size: 12">특수문자, 공백을 포함할 수 없으며 대, 소문자를 구분합니다.</span>
		<br>
		<span style="width:150px; display: inline-block">비밀번호 재입력</span>
		<input type="password" name="pw2" size="16" />
		</div>

		<!-- 이메일 저장 부분 --
		<div style="padding: 10;">
		<span style="width: 150px; display: inline-block;">이메일</span>
		<input type="email" name="email" />
		</div>

		<!-- 전화번호 저장 부분 --
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

		<!-- 완료 버튼 부분 --
		<div style="padding: 10;">
		<a href="javascript:checkInput()">
		<input type="submit" value="완료"/>
		</a>
		<input type="hidden" id="id_check_flag" value="false" />
		</div>
		</form> -->
	</body>
</html>
