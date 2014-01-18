<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<title>GRUBIE</title>
		<script src="member.js"></script>
		<script src="board.js"></script>

		<!-- css block -->
		<link rel="stylesheet" type="text/css" href="/_AXJ/ui/default/AXJ.css">
		<link href="/_AXJ/ui/default/AXEditor.css" rel="stylesheet" type="text/css">
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

		<!-- js block -->
		<script src="https://code.jquery.com/jquery.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="/_AXJ/jquery/jquery.min.js"></script>
		<script type="text/javascript" src="/_AXJ/lib/AXJ.js"></script>
		<script type="text/javascript" src="/_AXJ/lib/AXEditor.js"></script>
	</head>
	<body>
		<?php
		include 'top.php';
		?>
		<div class="jumbotron">
			<h1>GRUBIE</h1>
			<p>
				...
			</p>
			<p>
				<a href="enroll_group.php" class="btn btn-primary" role="button" style="width: 120">그룹정보 등록</a>
			</p>
		</div>
		<div class="col-sm-offset-1 col-sm-10">
			<div style="width: 100%">
				<?php
				if (isset($_SESSION['p_id'])) {

				} else {
					//include 'join.php';
				}
				?>
			</div>
			<script>
				$(document).ready(function() {
					$("li").click(function() {
						if ($(this).parent().attr("class") == "pagination") {
							if ($(this).attr("class") == "active") {
								return;
							} else {
								$(this).siblings(".active").removeClass("active");
								$(this).attr("class", "active");
							}
						}
					})
				});
			</script>
			<div class="row">
			<?php
			for ($i = 0; $i < 12; $i++) {
				echo "<div class='col-md-3'>
					<div class='thumbnail'>
					<img src='http://placehold.it/250x150' alt='...'>
					<div class='caption'>
					<h3>Thumbnail label</h3>
					<p>
					...
					</p>
					<p>
					<a href='#' class='btn btn-primary' role='button'>Button</a><a href='#' class='btn btn-default' role='button'>Button</a>
					</p>
					</div>
					</div>
					</div>";
			}
			?>
		</div>
			<center>
				<div class="pagination">
					<ul class="pagination">
						<li class="disabled">
							<a href="#"> << </a>
						</li>
						<li class="active">
							<a href="#">1<span class="sr-only">(current)</span></a>
						</li>
						<li>
							<a href="#">2</a>
						</li>
						<li>
							<a href="#">3</a>
						</li>
						<li>
							<a href="#">4</a>
						</li>
						<li>
							<a href="#">5</a>
						</li>
						<li>
							<a href="#"> >> </a>
						</li>
					</ul>
				</div>
			</center>
		</div>
	</body>
</html>