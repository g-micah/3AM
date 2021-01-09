<?php

include('../../session.php');
if (isset($_POST['submit']))
{


	$color = $_POST['color'];

	// mysqli_connect() function opens a new connection to the MySQL server.
	$db_host = "sql158.main-hosting.eu";
	$db_host_ip = "185.201.11.128";
	$db_username = "u836136612_user";
	$db_password = "capstonepass";
	$db_database = "u836136612_CISCapstone";
	$db_port = "3306";
	$conn = mysqli_connect("$db_host_ip", "$db_username", "$db_password", "$db_database", "$db_port");




	$sql = "UPDATE USER SET USR_color = $color WHERE USR_username = \"$login_session\"";
	
	// Run query
	mysqli_query($conn, $sql);

	$conn->close();

}
?>