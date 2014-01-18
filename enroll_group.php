<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<title>GRUBIE</title>
		<script src="member.js"></script>
		<!-- css block -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<!-- js block -->
		<script src="https://code.jquery.com/jquery.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
	</head>
	<body>
		<?php
		include 'top.php';
		?>
		<div class="bs-header col-sm-offset-3">
			<h1>그룹 등록하기<small>Enroll group</small></h1>
		</div>
		<br>
		<script>
			function check_only(chk) {
				var obj = document.getElementsByName("type");
				for (var i = 0; i < obj.length; i++) {
					if (obj[i] != chk) {
						obj[i].checked = false;
					}
				}
			}
		</script>

		<form name="enroll" class="col-sm-offset-1 col-sm-10 form-horizontal" method="post" action="group_info.php">
			<div class="form-group">
				<label for="title" class="col-sm-offset-2 col-sm-2 control-label">제목</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" id="title" name="title" placeholder="제목"/>
				</div>
			</div>
			<div class="form-group">
				<label for="type" class="col-sm-offset-2 col-sm-2 control-label">구분</label>
				<div class="col-sm-4">
					<input type="checkbox" id="type" name="type" checked="checked" onclick="check_only(this)"/>공모전
					<input type="checkbox" id="type" name="type" onclick="check_only(this)"/>스터디
					<input type="checkbox" id="type" name="type" onclick="check_only(this)"/>소모임
					<input type="checkbox" id="type" name="type" onclick="check_only(this)"/>기타
				</div>
			</div>
			<div class="form-group">
				<textarea class="col-sm-offset-4 col-sm-4" rows="10" cols="100" name="content" placeholder="여기에 글을 작성하세요..." ></textarea>
			</div>
			<div class="form-group">
				<button type="button" class="btn btn-primary col-sm-offset-4 col-sm-4">
					등록하기
				</button>
			</div>
		</form>
	</body>
</html>