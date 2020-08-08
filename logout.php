<?php
session_start();
if(!empty($_SESSION['countinfo'])){
  unset($_SESSION['countinfo']);
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
if(!empty($_SESSION['uname'])){
	unset($_SESSION['uname']);
	session_destroy();
	header('location:loginform1.php');
}elseif (!empty($_SESSION['uname1'])) {
	unset($_SESSION['uname1']);
	session_destroy();
	header('location:loginform1.php');
	# code...
}elseif (!empty($_SESSION['uname2'])) {
	# code...
	unset($_SESSION['uname2']);
	session_destroy();
	header('location:loginform1.php');
}elseif (!empty($_SESSION['uname3'])) {
	# code...
	unset($_SESSION['uname3']);
	session_destroy();
	header('location:loginform1.php');
}elseif (!empty($_SESSION['uname4'])) {
	# code...
	unset($_SESSION['uname4']);
	session_destroy();
	header('location:loginform1.php');
}
else{
	echo "You are not Logged IN ";
	header('location:loginform1.php');
}
?>
</body>
</html>
