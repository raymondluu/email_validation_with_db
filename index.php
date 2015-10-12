<?php
	session_start();
	//session_destroy();
	//var_dump($_SESSION);
?>

<html>
	<head>
		<title>Email Validation with DB</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div class="container">
			<?php
				if(isset($_SESSION["error"]) && !empty($_SESSION["error"]))
				{
			?>
				<?= "<p class='red'>" . $_SESSION["error"] . "</p>" ?>
			<?php		
				}
			?>
			<h1>Email storage</h1>
			<p>Enter an email address to store into the DB</p>
			<form action="process.php" method="post">
				<input type="hidden" name="action" value="store_email">
				<input type="text" name="email">
				<input type="submit" value="Submit!">
			</form>
		</div>
	</body>
</html>