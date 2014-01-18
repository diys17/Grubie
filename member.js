/**
 * @author Kim Yeseul
 */
var id_check_flag = false;

function checkInput() {
	var form = document.join_form;

	if (!form.id.value) {
		alert("아이디(ID)를 입력하세요!");
		form.id.focus();
		return;
	}
	/*if (!IsID(form.id.name)) {
		alert("아이디는 4~10자의 영문소문자 숫자 또는 조합된 문자열이어야 합니다!");
		form.id.focus();
		form.id.select();
		return;
	}*/
	if (!form.pw.value) {
		alert("비밀번호를 입력하세요!");
		form.pw.focus();
		return;
	}
/*	if (!IsPW(form.pw.name)) {
		alert("비밀번호는 4~10자의 영문자나 숫자 또는 조합된 문자열이어야 합니다!");
		form.pw.focus();
		form.pw.select();
		return;
	}*/
	form.submit();
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
