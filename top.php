<html>
	<head>
		<link rel="stylesheet" media="screen" type="text/css" href="./menu_bar.css" />
	</head>

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
				<a href="http://www.daum.net" style="background-color: transparent;"> 다음 </a>
			</li>
			<li>
				<a href="http://opentutorials.org" style="background-color: transparent;"> 생활코딩 </a>
			</li>
			<li onclick="changePage()">
				<a href="./write.php" style="background-color: transparent;"> 게시판 </a>
			</li>
		</ul>
	</div>
	<hr style="clear: both; width: 100%">
</div>


</html>