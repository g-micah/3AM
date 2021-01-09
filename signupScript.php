<?php
session_start(); // Starting Session
$error = ''; // Variable To Store Error Message
if (isset($_POST['submit']))
{
	if (empty($_POST['Firstname']) || empty($_POST['Lastname']) || empty($_POST['Username']) || empty($_POST['Password']) || empty($_POST['Email']))
	{
		$error = "Please fill out all fields";
	}


	else
	{


		// Define $username and $password
		$fname = $_POST['Firstname'];
		$lname = $_POST['Lastname'];
		$username = $_POST['Username'];
		$password = $_POST['Password'];
		$email = $_POST['Email'];

		// mysqli_connect() function opens a new connection to the MySQL server.
		$db_host = "sql158.main-hosting.eu";
		$db_host_ip = "185.201.11.128";
		$db_username = "u836136612_user";
		$db_password = "capstonepass";
		$db_database = "u836136612_CISCapstone";
		$db_port = "3306";
		$conn = mysqli_connect("$db_host_ip", "$db_username", "$db_password", "$db_database", "$db_port");

		//Check if user already exists
		$query = "SELECT USR_username from USER where USR_username=? LIMIT 1";

		$usernametemp = $username;

		// To protect MySQL injection for Security purpose
		$stmt = $conn->prepare($query);
		$stmt->bind_param("s", $usernametemp);
		$stmt->execute();
		$stmt->bind_result($usernametemp);
		$stmt->store_result();

		if($stmt->fetch()) //fetching the contents of the row
		{
			$error = "Sorry, username already exists. Try a different username.";
		}
		else
		{
			// SQL query to fetch information of registerd users and finds user match.

			$query = "INSERT INTO USER (USR_username,USR_pass,USR_fname,USR_lname,USR_email) VALUES ('$username','$password','$fname','$lname','$email')";

			// Check if insertion successful
			if(!mysqli_query($conn,$query))
			{
				$error= "SQL ERROR IN CODE<b/>".$query;
				
			}

			else
			{
				$_SESSION['newuser'] = true;
		
				header('Location: signin.php');	
			}
		}

		mysqli_close($conn); // Closing Connection
	}
}
?>