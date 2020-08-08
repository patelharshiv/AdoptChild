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


	if(isset($_POST['readrecord'])){
		$data = "<option id='gettdata'>!!!Select from below!!!</option>";
		$query='SELECT DISTINCT(state) FROM cityselect';
		$result = mysqli_query($conn, $query) or die( mysqli_error($conn));
		if(mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_array($result)){
			$data .= "<option value=" . "'".$row['state']."'>".$row['state']."</option>";
	}
}
	echo $data;

}

if (isset($_POST['x'])) {
		$m= $_POST['x'];
		$data = "<option id='gettdata'>!!!Select from below!!!</option>";
		$query = "SELECT city FROM cityselect WHERE state = '$m'";
		$result = mysqli_query($conn, $query) or die( mysqli_error($conn));
		if(mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_array($result)){
			$data .= "<option value=" . "'".$row['city']."'>".$row['city']."</option>";
	}
}
else{
	$data .= "<option id='gettdata1'>!!!Select from below!!!</option>";

}
	echo $data;
}

if (isset($_POST['w']) && isset($_POST['y']) && isset($_POST['password'])) {
	$w= $_POST['w'];
	$z= $_POST['y'];
	$password= $_POST['password'];
	$query= "SELECT * FROM policelogin WHERE policestation='$z'"; 
	$result = mysqli_query($conn, $query) or die( mysqli_error($conn));
	$row=mysqli_fetch_assoc($result);
	if($row){
		if($row['password']!= $password){ echo "Your Bad!! Password does not matched....";}
		else{
			$_SESSION['policestation']=$z;
			echo "password matched successfully"; 
			}
		}
	
}
if(isset($_POST['n'])){
	$w = $_POST['n'];
	echo $w;
}
if(isset($_POST['data'])){
	$w = $_POST['data'];
	echo $w;
}


if (isset($_POST['readrecord6'])){
	$policestation = $_SESSION['policestation'];
	$query2= "SELECT * FROM lookingtoadopt WHERE sendforverification='$policestation'"; 
	$result2 = mysqli_query($conn, $query2) or die( mysqli_error($conn));
	$row2 = mysqli_fetch_array($result2);
	if($row2){
		echo "<li onclick='traverseapplicationpanel()'>". "You Got". " " . $row2[0]. " " ." new application". " ". "to make verification"."</li>";
	}
}

if (isset($_POST['readrecord7'])){
	$policestation = $_SESSION['policestation'];
	$query2= "SELECT * FROM lookingtoadopt WHERE sendforverification='$policestation'"; 
	$result2 = mysqli_query($conn, $query2) or die( mysqli_error($conn));
	$row2 = mysqli_fetch_array($result2);
	if(!empty($row2[0])){
			echo "1";
	}
	else{
			echo "0";
	}
}


?>
