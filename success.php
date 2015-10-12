<?php
	session_start();
	require_once("new-connection.php");
?>

<html>
	<head>
		<title>Success Page</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div class="container1">
			<div class="green">
				<h3>
					<?php
						if(isset($_SESSION["message"]))
						{
					?>
						<?= $_SESSION["message"] ?>
					<?php
						}
					?>
				</h3>
			</div>
			<h1 class="underlined">Email Addresses Entered:</h1>
			<div class="email_list">
				<?php
					$query = "SELECT email
							  FROM emails";

					$results = fetch_all($query);

					foreach($results as $row)
					{
				?>
					<p><?= $row["email"] ?></p>
				<?php
					}
				?>
			</div>
			<div class="time_list">
				<?php
					$query = "SELECT created_at
							  FROM emails";

					$results = fetch_all($query);

					foreach($results as $row)
					{
						$str_to_time = strtotime($row["created_at"]);
						$date = date("m-d-y g:iA", $str_to_time);
				?>
					<p><?= $date ?></p>
				<?php
					}
				?>
			</div>
			<p>If you would like to delete an email from the record, type it in below:</p>
 			<form action="process.php" method="post">
				<input type="hidden" name="action" value="delete_email">
				<input type="text" name="email">
				<input type="submit" value="Delete!">
			</form>
			<?php
				if(isset($_SESSION["message2"]))
				{
			?>
				<?= $_SESSION["message2"] ?>
			<?php
					$_SESSION["message2"] = "";
				}
			?>
		</div>
	</body>
</html>