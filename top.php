<html>
	<head>
		<link rel="stylesheet" media="screen" type="text/css" href="./menu_bar.css" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Bootstrap -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://code.jquery.com/jquery.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="bootstrap/js/bootstrap.min.js"></script>
	</head>
	<body>
		<nav class="navbar navbar-default" role="navigation">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="./main.php">GRUBIE</a>
			</div>
			
			<script>
				$(document).ready(function() {
					$("li").click(function() {
						if ($(this).parent().attr("class") == "nav navbar-nav") {
							if ($(this).attr("class") == "active") {
								return;
							} else {
								$(this).siblings(".active").removeClass("active");
								$(this).attr("class", "active");
							}
						}
					})
				});
				
				$(document).ready(function() {
					$("li").hover(function() {
						$(this).css("background-color", "e7e7e7");
					}, function() {
						$(this).css("background-color", "#f6f6f6");
					})
				});
			</script>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav" role="navigation">
					<li>
						<a href="contest_group.php">공모전팀</a>
					</li>
					<li>
						<a href="#">스터디그룹</a>
					</li>
					<li>
						<a href="#">소모임</a>
					</li>
					<li class="dropdown" data-target="#">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" id="dropdownMenu">커뮤니티<b class="caret"></b></a>
						<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
							<li role="presentation"><a href="#">공지사항</a></li>
							<li role="presentation"><a href="#">자유게시판</a></li>
							<li role="presentation"><a href="#">자주묻는 질문</a></li>
						</ul>
					</li>
				</ul>
				<?php
				session_start();
				if (!isset($_SESSION["p_id"])) {
					include 'login_form.php';
				} else {
					include 'welcome.php';
				}
				?>
			</div><!-- /.navbar-collapse -->
		</nav>
	</body>
</html>