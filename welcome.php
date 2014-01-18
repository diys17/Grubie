<div>
	<form class="navbar-form navbar-right" method="post" action="logout_process.php" style="margin: 0;">
		<div class="form-group">
		<?php
		session_start();
		echo "<p class=\"navbar-text\">" . $_SESSION['p_id'] . "님 환영합니다!!! ^^</p>";
		?>
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-default form-control">LOGOUT</button>
		</div>
	</form>
</div>

