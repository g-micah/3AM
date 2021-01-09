<?php
$db_host = "sql158.main-hosting.eu";
$db_host_ip = "185.201.11.128";
$db_username = "u836136612_user";
$db_password = "capstonepass";
$db_database = "u836136612_CISCapstone";
$db_port = "3306";

// mysqli_connect() function opens a new connection to the MySQL server.
$conn = mysqli_connect("$db_host_ip", "$db_username", "$db_password", "$db_database", "$db_port");

if ($has_session = session_status() != PHP_SESSION_ACTIVE)
{
	session_start();// Starting Session
}


// Storing Session
$user_check = $_SESSION['login_user'];

// SQL Query To Fetch Complete Information Of User
$query = "SELECT USR_username, USR_color, USR_image from USER where USR_username = '$user_check'";
$ses_sql = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($ses_sql);


$login_session = $row['USR_username'];
$login_color = $row['USR_color'];
?>