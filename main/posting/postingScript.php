<?php
$error = ''; // Variable To Store Error Message
if (isset($_POST['post']))
{
	if (empty($_POST['Title']) || empty($_POST['BookingPrice']) || empty($_POST['Category']) || empty($_POST['ListInfo']))
	{
		$error = "Please fill out all fields";
	}


	else
	{


		// Define $username and $password
		$title = $_POST['Title'];	
		$category = $_POST['Category'];
		$price = $_POST['BookingPrice'];
		$info = $_POST['ListInfo'];

		// mysqli_connect() function opens a new connection to the MySQL server.
		$db_host = "sql158.main-hosting.eu";
		$db_host_ip = "185.201.11.128";
		$db_username = "u836136612_user";
		$db_password = "capstonepass";
		$db_database = "u836136612_CISCapstone";
		$db_port = "3306";
		$conn = mysqli_connect("$db_host_ip", "$db_username", "$db_password", "$db_database", "$db_port");



		// SQL query to fetch information of registerd users and finds user match.

		$query = "INSERT INTO LISTINGS (USR_username, CAT_id, LIST_price, LIST_title, LIST_info) VALUES ('$login_session','$category','$price','$title','$info')";

		// Check if insertion successful
		if(!mysqli_query($conn,$query))
		{
			$error= "SQL ERROR IN CODE\n '$login_session','$category','$price','$title','$info'";
		}

		else
		{

			$error = "Job succesfully posted!";
			header('Location: posting.php');	
		}
	
		
	}
}
?>