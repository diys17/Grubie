<!--
left_login.php파일은 로그인하기 전의 사용자에게는 로그인할수 있는 폼을 보여주는 역할을 한다.
-->

<div id="login_wrapper">
	<div id="login_lable" style="padding: 10; font-size: 10;">
		<form method="post" id='login' action='login_process.php' onsubmit="alert('onsubmit')">
			아이디 :
			<input type="text" size="7" name="id"/>
			비밀번호 :
			<input type="password" size="7" name="pw"/>
			<input type="submit" value="LOGIN" />
			<input type="button" value="회원가입" onclick="window.location.replace('./main.php')"/> <!--  정확한 접근법이 맞나??? -->
		</form>
	</div>
</div>