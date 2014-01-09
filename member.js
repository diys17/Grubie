/**
 * @author Kim Yeseul
 */
var id_check_flag = false;

function checkInput() {
	var from = document.join_form;

	if (!join_form.id.value) {
		alert("아이디(ID)를 입력하세요!");
		join_form.id.focus();
		return;
	}
	if (!IsID(join_form.id.name)) {
		alert("아이디는 4~10자의 영문소문자 숫자 또는 조합된 문자열이어야 합니다!");
		join_form.id.focus();
		join_form.id.select();
		return;
	}
	if (!join_form.pw.value) {
		alert("비밀번호를 입력하세요!");
		form.pw.focus();
		return;
	}
	if (!IsPW(join_form.pw.name)) {
		alert("비밀번호는 4~10자의 영문자나 숫자 또는 조합된 문자열이어야 합니다!");
		join_form.pw.focus();
		join_form.pw.select();
		return;
	}
	if (join_form.pw.value != join_form.pw2.value) {
		alert("입력하신 비밀번호가 일치하지 않습니다.\n 다시 확인하고 입력해 주십시오!");
		join_form.pw2.focus();
		join_form.pw2.select();
		return;
	}

	join_form.submit();
}

function check_ID_Window(ref) {
	var id = eval(document.join_form.id);

	if (!id.value) {
		alert('아이디(ID)를 입력하신 후에 확인하세요!');
		id.focus();
		return;
	} else {
		ref = ref + "?id=" + id.value;
		var window_left = (screen.width - 640) / 2;
		var window_top = (screen.height - 480) / 2;
		window.open(ref, "checkIDWin", 'width=400, height=200, scrollbars=no, status=no, top=' + window_top + ', left=' + window_left + '');
	}
}

function getCheckIDFlag() {
	return id_check_flag;
}

function setCheckIDFlag(bFlag) {
	id_check_flag = bFlag;
	alert(bFlag);
}

function login_check() {

}

function checkID() {

	if (document.getElementById('id_check_flag').value == 'true') {
		//서버로 전송 및 회원가입 완료
		alert(document.id_check_flag.value);
		return true;
	} else {
		//아이디 중복체크 메시지 출력
		alert("아이디 중복체크를 해주세요.");
		document.getElementById('id').focus();
		return false;
	}
}

function changeID() {
	var com = document.getElementById('id_check_flag');
	com.value = 'false';
}
