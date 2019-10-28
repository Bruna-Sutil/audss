<?php
$conn = null;

if( $conn == null )
{
	$conn = mysqli_connect('localhost','teste','password')or die(mysql_error());

	mysqli_select_db($conn,'seguranca')or die(mysql_error());
}