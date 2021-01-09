<?php
session_start(); // Starting Session
$error = ''; // Variable To Store Error Message
if (isset($_POST['submit']))
{
	if (empty($_POST['username']) || empty($_POST['password']))
	{
		$error = "Username or Password is invalid";
	}
	else
	{


		// Define $username and $password
		$username = $_POST['username'];
		$password = $_POST['password'];

		// mysqli_connect() function opens a new connection to the MySQL server.
		$db_host = "sql158.main-hosting.eu";
		$db_host_ip = "185.201.11.128";
		$db_username = "u836136612_user";
		$db_password = "capstonepass";
		$db_database = "u836136612_CISCapstone";
		$db_port = "3306";
		$conn = mysqli_connect("$db_host_ip", "$db_username", "$db_password", "$db_database", "$db_port");

		// SQL query to fetch information of registerd users and finds user match.

		$query = "SELECT USR_username, USR_pass from USER where USR_username=? AND USR_pass=? LIMIT 1";


		// To protect MySQL injection for Security purpose
		$stmt = $conn->prepare($query);
		$stmt->bind_param("ss", $username, $password);
		$stmt->execute();
		$stmt->bind_result($username, $password);
		$stmt->store_result();

		if($stmt->fetch()) //fetching the contents of the row
		{

			$_SESSION['login_user'] = $username; // Initializing Session

			header("location: /main/Capstone_UserProfile.php"); // Redirecting To Profile Page
		}
		else
		{
			$error = "Username or Password is invalid";
		}
		mysqli_close($conn); // Closing Connection
	}
}
?>