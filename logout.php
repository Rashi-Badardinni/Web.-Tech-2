<?php
session_start(); // Starting Session
if(session_destroy()) // Destroying All Sessions
{
	echo "<script>alert('logged out')</script>";
	header("Location: index.php"); // Redirecting To Home Page
}
?>