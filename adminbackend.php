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


if (isset($_POST['fsfa1']) && isset($_POST['ssfa1']) && isset($_POST['tsfa1'])) {
	$fsfa1 = $_POST['fsfa1'];
	$ssfa1 = $_POST['ssfa1'];
	$tsfa1 = $_POST['tsfa1'];
	$data = '<option id="gettdata">!!!Select from below!!!</option>';
	if(($fsfa1 != $ssfa1) && ($fsfa1 != $tsfa1) && ($ssfa1 != $tsfa1)){
       	$data .= '<option value='.'"'.$fsfa1.'">' .$fsfa1. '</option>
        <option value='.'"'.$ssfa1.'">' .$ssfa1. '</option>
        <option value='.'"'.$tsfa1.'">' .$tsfa1. '</option>';
        } 
        if (($fsfa1 == $ssfa1) && ($fsfa1 == $tsfa1) && ($ssfa1 == $tsfa1)) {
          	$data .= '<option value='.'"'.$fsfa1.'">' .$fsfa1. '</option>';
          
        }
        if (($fsfa1 == $ssfa1) && ($fsfa1 != $tsfa1) && ($ssfa1 != $tsfa1)) {
          	$data .= '<option value='.'"'.$fsfa1.'">' .$fsfa1. '</option>
          	<option value='.'"'.$tsfa1.'">' .$tsfa1. '</option>';
          
        }
        if (($fsfa1 != $ssfa1) && ($fsfa1 == $tsfa1) && ($ssfa1 != $tsfa1)) {
          	$data .= '<option value='.'"'.$fsfa1.'">' .$fsfa1. '</option>
          	<option value='.'"'.$ssfa1.'">' .$ssfa1. '</option>';
        }
          if (($fsfa1 != $ssfa1) && ($fsfa1 != $tsfa1) && ($ssfa1 == $tsfa1)) {
         	$data .= '<option value='.'"'.$ssfa1.'">' .$ssfa1. '</option>
          	<option value='.'"'.$tsfa1.'">' .$tsfa1. '</option>';
        }
	echo $data;
}


if(isset($_POST['id']) && isset($_POST['hn'])){
	$id3 = $_POST['id'];
	$hn = $_POST['hn'];
	$query1="UPDATE lookingtoadopt SET sendforverification='$hn' WHERE id='$id3'";
	$result1 = mysqli_query($conn, $query1) or die( mysqli_error($conn));
	if($result1){
		echo "Sent Successfully";
	}
	else{
		echo "Something Went Wrong";
	}

}


if (isset($_POST['data'])) {
	$data = $_POST['data'];
	echo $data;
}

?>