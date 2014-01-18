<!--
left_login.php파일은 로그인하기 전의 사용자에게는 로그인할수 있는 폼을 보여주는 역할을 한다.
-->

<div class="col-sm-offset-6">
	<form class="navbar-form navbar-right" role="search" method="post" action="login_process.php" >
		<div class="form-group">
			<input type="text" class="form-control" name="id" placeholder="ID">
		</div>
		<div class="form-group">
			<input type="password" class="form-control" name="pw" placeholder="Password">
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-default form-control">
				Submit
			</button>
		</div>
		<div class="form-group">
			<input type="button" class="btn btn-default form-control" value="Sign up" onclick="location.replace('join.php')" />
		</div>
	</form>
</div>