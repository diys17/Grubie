<html>
	<head>

	</head>
	<body>
		<div style="padding: 5;">
			<form method="post" action="logout_process.php" onsubmit="">
				<?php
				session_start();
				echo $_SESSION['p_id'] . " 님 환영합니다!!! ^^";
				?>
				<input type="submit" value="LOGOUT" />
			</form>
		</div>
	</body>
</html>

