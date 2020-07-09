<?php
/*
Chapter 3: Form
- Form 表格
- Special variable 特别变数 $_GET, $_POST, $_REQUEST
*/
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
	<div class="container">
		<?php if (isset($_GET['leave']) && $_GET['leave']): ?>
			<h1>Bye bye!</h1>
		<?php else: ?>
			<?php if (isset($_POST['name'])): ?>
				<h1>Hello, <?= $_POST['name'] ?>!</h1>
			<?php else: ?>
				<h1>Hello, world!</h1>
			<?php endif ?>
			<form method="post">
			<div class="row">
				<div class="col">
					<input name="name" />
					<button class="btn btn-primary">Submit</button>
					<a href="?leave=1">Leave</a>
				</div>
			</div>
		<?php endif ?>
		
		
		<h2>Value inside $_REQUEST</h2>
		<pre>
			<?= print_r($_REQUEST, 1) ?>
		</pre>
	</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>