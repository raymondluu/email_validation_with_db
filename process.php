<?php
	session_start();
	require_once("new-connection.php");

	if(isset($_POST["action"]) && $_POST["action"] == "store_email")
	{
		$error = "";

		if(empty($_POST["email"]))
		{
			$error = "Email is not valid!";
		}
		else if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))
		{
			$error = "Email is not valid!";
		}

		if($error != "")
		{
			$_SESSION["error"] = $error;
			header("Location: index.php");
		}
		else // store the email into DB.
		{
			$_SESSION["error"] = "";

			$query = "INSERT INTO emails (email, created_at, updated_at)
					  VALUES ('{$_POST['email']}', NOW(), NOW())";

			if(run_mysql_query($query))
			{
				$_SESSION["message"] = "The email address you entered {$_POST['email']} is a VALID email address! Thank you!";
			}
			else
			{
				$_SESSION["message"] = "Failed to add email";
			}
			header("Location: success.php");
		}
	}
	else if(isset($_POST["action"]) && $_POST["action"] == "delete_email")
	{

		$query = "SELECT email
				  FROM emails
				  WHERE email = '{$_POST['email']}'";

		$query2 = "DELETE FROM emailsdb.emails
				  WHERE email = '{$_POST['email']}'";

		if(count(fetch_record($query)) > 0) 
		{
			run_mysql_query($query2);
			$_SESSION["message2"] = "The email has been deleted!";
		}
		else
		{
			$_SESSION["message2"] = "We were not able to delete the email!";
		}
		header("Location: success.php");
	}
?>