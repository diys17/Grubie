<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<title>GRUBIE - board</title>
		<script type="text/javascript" src="./_AXJ/jquery/jquery.min.js"></script>
		<script type="text/javascript" src="./_AXJ/lib/AXJ.js"></script>
		<script type="text/javascript" src="./_AXJ/lib/AXEditor.js"></script>
		<script type="text/javascript" src="./_AXJ/lib/AXDOMRange.js"></script>

		<link href="./_AXJ/ui/default/AXEditor.css" rel="stylesheet" type="text/css">
		<link href="./_AXJ/ui/default/AXJ.css" rel="stylesheet" type="text/css">
	</head>
	<body style="margin-left: auto; margin-right: auto; width: 71%;">
		<?php
			include 'top.php';
		?>
		<script>
			var editor = new AXEditor();

			var fnObj = {
				pageStart : function() {
					editor.setConfig({
						targetID : "editorContainer",
						lang : "kr",
						height : 300,
						frameSrc : "./_AXJ/lib/AXEditor.html",
						editorFontFamily : "Malgun Gothic",
						fonts : ["Malgun Gothic", "Gulim", "Dotum", "궁서"],
						onReady : function() {
							editor.setContent("hello");
						}
					});
				}
			};
			
			function viewContent()
			{
				alert(editor.getContent());
			}

			$(document.body).ready(function() {
				fnObj.pageStart();
			});
		</script>
		
		<center>

		<form name="write_form" method="post" action="insert.php" onsubmit="submitProcess()">
		<table width="580" border="0" cellspacing="1" cellpadding="2" bgcolor="#777777">
		<tr>
		<td height="20" align="center" bgcolor="#999999"><font color="white"><b>글 쓰 기</b></font></td>
		</tr>
		<tr>
		<table>
		<tr>
		<td width="60" align="left">이름</td>
		<td>
		<input type="text" name="name" size="20" maxlength="10" />
		</td>
		</tr>
		<tr>
		<td width="60" align="left">이메일</td>
		<td>
		<input type="text" name="email" size="20" maxlength="25" />
		</td>
		</tr>
		<tr>
		<td width="60" align="left">비밀번호</td>
		<td>
		<input type="password" name="pass" size="8" maxlength="8" />
		(수정, 삭제시 반드시 필요) </td>
		</tr>
		<tr>
		<td width="60" align="left">제 목</td>
		<td>
		<input type="text" name="title" size="60" maxlength="35" />
		</td>
		</tr>
		<tr>
		<td width="60" align="left">내용</td>
		<td>
			<div id="editorContainer"></div>
			<input type="text" name="content" id="editorContent" style="display:none"></input>
		</td>
		</tr>
		<tr>
		<td colspan="10" align="center">
			<script type="text/javascript">
				function submitProcess()
				{
					alert("hellO");
					var content = document.getElementById('editorContent');
					content.value = editor.getContent().enc();
					alert(content.value);
				}
			</script>
		<input type="submit" value="글 저장하기" />
		&nbsp;&nbsp;
		<input type="reset" value="다시 쓰기" />
		&nbsp;&nbsp;
		<input type="button" value="되돌아가기" onclick="history.back(-1)"/>
		</td>
		</tr>
		</table>
		</tr>

		</table>
		</form>
		</center>
	</body>
</html>