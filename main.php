<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<title>GRUBIE</title>
		<script src="member.js"></script>
		<script src="board.js"></script>
		<!-- css block -->
		<link rel="stylesheet" type="text/css" href="/_AXJ/ui/default/AXJ.css">
		<link href="/_AXJ/ui/default/AXEditor.css" rel="stylesheet" type="text/css">  
		<!-- css block -->
		<!-- js block -->
		<script type="text/javascript" src="/_AXJ/jquery/jquery.min.js"></script>
		<script type="text/javascript" src="/_AXJ/lib/AXJ.js"></script>
		<script type="text/javascript" src="/_AXJ/lib/AXEditor.js"></script>
	</head>
	<body style="margin-left: auto; margin-right: auto; margin-top: 0; width: 71%">
		<?php
			include 'top.php';
		?>
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