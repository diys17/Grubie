<html>
	<head>
		<link rel="stylesheet" media="screen" type="text/css" href="./menu_bar.css" />
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Bootstrap -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://code.jquery.com/jquery.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="bootstrap/js/bootstrap.min.js"></script>
	</head>
	<body>
		<?php
		include 'top.php';
		?>
		<div class="col-sm-offset-1 col-sm-10">
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
		</div>
	</body>
</html>