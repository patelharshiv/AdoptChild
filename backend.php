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
  $errorfname = true;
  $errorlname = true;
  $erroremail = true;
  $errormno = true;
  $erroruname = true;
  $errorpwd = true;
  $errorgender = true;
  $errorattachment = true;
extract($_POST);
if(isset($_POST['y'])){
	echo $y;
}
if(isset($_POST['z'])){
	echo $z;
}
if(isset($_POST['uname']))
{
	$uname=$_POST['uname'];
	if(empty($uname)){
		$erroruname=true;
		echo "Please Enter username..";
	}
	else{
		$erroruname=false;
	}
}
if (isset($_POST['w'])) {
	# code...
	echo $w;
}
if(isset($_POST['uname']) && isset($_POST['pwd']) && isset($_POST['m']))
{
 	$a = 'lookingtoadopt';
	$b = 'surrogate';
	$c = 'pregnantandconsideringadoption';
	$d = 'philanthropists';
	$e = $_POST['uname'];
	$f = 'admin';
	$g = 'police123';
	$h = $_POST['pwd'];
	$n = 'police';
	if($m==$a){
	$query= "SELECT * FROM lookingtoadopt WHERE username='$uname'"; 
	$result = mysqli_query($conn, $query) or die( mysqli_error($conn));
	$row=mysqli_fetch_assoc($result);
	if($row){
		if($row['password']!= $pwd){ echo "Your Bad!! Password does not matched....";}
		else{
			$_SESSION['user_id']=$row['id'];
			$_SESSION['uname']=$uname;
			$_SESSION['fname']=$row['firstname'];
			$_SESSION['lname']=$row['lastname'];
			$_SESSION['email']=$row['email'];
			$_SESSION['mobileno']=$row['mobileno'];
			$_SESSION['gender']=$row['Gender'];
			$_SESSION['img_dir']=$row['img_dir'];
			$_SESSION['img_name']=$row['img_name'];
			$_SESSION['bgnd_img'] = $row['background_img_dir'];
			$_SESSION['residenceaddress']=$row['residenceaddress'];
			$_SESSION['maritalstatus']=$row['martialstatus'];
			$_SESSION['approved']=$row['approved'];
			$_SESSION['mrdateofbirth']=$row['mrdateofbirth'];
			$_SESSION['mobilenumber']=$row['mobilenumber'];
			$_SESSION['mrsdateofbirth']=$row['mrsdateofbirth'];
			$_SESSION['mrsname']=$row['mrsname'];
			echo "password matched successfully"; 
			}
	}

}
	if($m==$b){
	$query= "SELECT * FROM surrogate WHERE username='$uname'"; 
	$result = mysqli_query($conn, $query) or die( mysqli_error($conn));
	$row=mysqli_fetch_assoc($result);
	if($row){
		if($row['password']!= $pwd){ echo "Your Bad!! Password does not matched....";}
		else{
			$_SESSION['uname1']=$uname;
			echo "password matched successfully"; 
			}
	}

}
if($m==$c){
	$query= "SELECT * FROM pregnantandconsideringadoption WHERE username='$uname'"; 
	$result = mysqli_query($conn, $query) or die( mysqli_error($conn));
	$row=mysqli_fetch_assoc($result);
	if($row){
		if($row['password']!= $pwd){ echo "Your Bad!! Password does not matched....";}
		else{
			$_SESSION['uname2']=$uname;
			echo "password matched successfully"; 
			}
	}
	else{
		echo "No username found";
	}

}
if($m==$d){
	$query= "SELECT * FROM philanthropists WHERE username='$uname'"; 
	$result = mysqli_query($conn, $query) or die( mysqli_error($conn));
	$row=mysqli_fetch_assoc($result);
	if($row){
		if($row['password']!= $pwd){ echo "Your Bad!! Password does not matched....";}
		else{
			$_SESSION['uname3']=$uname;
			echo "password matched successfully"; 
			}
	}

}
if($e == $f){
	$query= "SELECT * FROM administrator WHERE Name='$uname'"; 
	$result = mysqli_query($conn, $query) or die( mysqli_error($conn));
	$row=mysqli_fetch_assoc($result);
	if($row){
		if($row['Password']!= $pwd){ echo "Your Bad!! Password does not matched....";}
		else{
			$_SESSION['uname4']=$uname;
			echo "password matched successfully"; 
			}
	}

}

if($g == $h && $n == $e){

			$_SESSION['uname5']=$e;
			echo "password matched successfully"; 
			}
}


if(isset($_POST['b'])){
$w='lookingtoadopt';
$y='pregnantandconsideringadoption';
$h='philanthropists';
$m='surrogate';
if(($errorfname==false) && ($errorlname==false) && ($erroremail==false) && ($errormno==false) && ($erroruname==false)&& ($errorpwd==false) && ($errorgender==false) && ($errorattachment==false)){
if($b==$w){
	$query = "INSERT INTO lookingtoadopt(firstname, lastname, email, mobileno, username, password, Gender, img_dir, img_name) VALUES('$fname','$lname', '$email','$mno', '$uname1','$pwd', '$gender', '$destinationfile' , '$filename')";
	
	if(!mysqli_query($conn,$query))
	{
		echo "Something went wrong please try again later";
	}
	else
	{
		echo "You are Successfully Registered..";
	}
}
if($b==$y){
	$query = "INSERT INTO pregnantandconsideringadoption(firstname, lastname, email, mobileno, username, password, Gender) VALUES('$fname','$lname', '$email','$mno', '$uname1','$pwd', '$gender')";
	if(!mysqli_query($conn,$query))
	{
		echo "Something went wrong please try again later";
	}
	else
	{
		echo "You are Successfully Registered..";
	}
}
if($b==$h){
	$query = "INSERT INTO philanthropists(firstname, lastname, email, mobileno, username, password, Gender) VALUES('$fname','$lname', '$email','$mno', '$uname1','$pwd', '$gender')";
	if(!mysqli_query($conn,$query))
	{
		echo "Something went wrong please try again later";
	}
	else
	{
		echo "You are Successfully Registered..";
	}
}
if($b==$m){
	$query = "INSERT INTO surrogate(firstname, lastname, email, mobileno, username, password, Gender) VALUES('$fname','$lname', '$email','$mno', '$uname1','$pwd', '$gender')";
	if(!mysqli_query($conn,$query))
	{
		echo "Something went wrong please try again later";
	}
	else
	{
		echo "You are Successfully Registered..";
	}
}
}
}
?>
