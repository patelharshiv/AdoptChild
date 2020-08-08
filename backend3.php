<?php
session_start();
$db_hostname = 'localhost';
$db_database = 'formdata';
$db_username = 'root';
$db_password = '';
$conn=mysqli_connect($db_hostname, $db_username, $db_password, $db_database);
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  if(isset($_POST['userid'])&&isset($_POST['reply'])&&isset($_POST['text1'])){
	$userid1 = $_POST['userid'];
	$reply1 = $_POST['reply'];
	$text2 = $_POST['text1'];
	$text3= "$text2"."$userid1";
	$query =  "INSERT INTO $text3(message, user_id) VALUES('$reply1', '$userid1')";
		if(!mysqli_query($conn,$query))
	{
		echo "Something went wrong please try again later";
	}
	else
	{
		echo "Message Sent Successfully";
	}
}
?>