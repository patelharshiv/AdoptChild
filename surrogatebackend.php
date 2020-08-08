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


  extract($_POST);


if(isset($_POST['readrecord1'])){
	$uname = $_SESSION['uname1'];
	$Yes = "Yes";
	$query= "SELECT * FROM surrogate WHERE username='$uname'"; 
	$result = mysqli_query($conn, $query) or die( mysqli_error($conn));
	$row = mysqli_fetch_array($result);
	if($row['surrogatestate']!= $Yes ){ echo "No";}
		else{
			 echo "Yes"; 
			}
}

if(isset($_POST['isChecked'])){
	$uname = $_SESSION['uname1'];
	$value = $_POST['isChecked'];
	if($value == "true"){
	$query="UPDATE surrogate SET surrogatestate='Yes' WHERE username='$uname'";
	# code...
	$result = mysqli_query($conn, $query) or die( mysqli_error($conn));
	if(!mysqli_query($conn,$query))
	{
		echo "Something went wrong please try again later";
	}
	else
	{
		echo "Success";
	}

	}
	else{
	$query="UPDATE surrogate SET surrogatestate='No' WHERE username='$uname'";
	# code...
	$result = mysqli_query($conn, $query) or die( mysqli_error($conn));
	if(!mysqli_query($conn,$query))
	{
		echo "Something went wrong please try again later";
	}
	else
	{
		echo "Success";
	}		

	}

}

?>