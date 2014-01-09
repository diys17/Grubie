<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<title>GRUBIE</title>
		<script src="member.js"></script>
		<script src="board.js"></script>
		<!-- css block -->
		<link rel="stylesheet" type="text/css" href="/_AXJ/ui/default/AXJ.css">
		<link rel="stylesheet" media="screen" type="text/css" href="./menu_bar.css" />
		<link href="/_AXJ/ui/default/AXEditor.css" rel="stylesheet" type="text/css">  
		<!-- css block -->
		<!-- js block -->
		<script type="text/javascript" src="/_AXJ/jquery/jquery.min.js"></script>
		<script type="text/javascript" src="/_AXJ/lib/AXJ.js"></script>
		<script type="text/javascript" src="/_AXJ/lib/AXEditor.js"></script>
	</head>
	<body style="margin-left: auto; margin-right: auto; margin-top: 0; width: 71%">
		<div style="overflow: hidden; display: block; ">
			<div style="float: left;" >
				<a href="./main.php" style="text-decoration: none; "><h1 style="margin: 0;">GRUBIE</h1></a>
			</div>
			<div style="display: block; float: right;">
				<?php
				session_start();
				if (isset($_SESSION['p_id'])) {
					include 'welcome.php';
				} else {
					include 'login_form.php';
				}
				?>
			</div>
			<div id="menu">
				<ul>
					<li>
						네이버
					</li>
					<li>
						<a href="http://www.daum.net" style="background-color: transparent;">
						다음
						</a>
					</li>
					<li>
						<a href="http://opentutorials.org" style="background-color: transparent;">
						생활코딩
						</a>
					</li>
					<li onclick="changePage()">
						<a href="./write.php" style="background-color: transparent;">
						게시판
						</a>
					</li>
				</ul>
			</div>
			<hr style="clear: both; width: 100%">
		</div>
		<br>
		<div style="width: 100%; border-style: solid;">
			<?php
			if (isset($_SESSION['p_id'])) {
				phpinfo();
			} else {
				include 'join.php';
			}
			?>
		</div>
	</body>
</html>