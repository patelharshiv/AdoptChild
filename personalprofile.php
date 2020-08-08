<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $_SESSION['uname']; ?></title>
	<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<style type="text/css">
		body{
			width: 100%;
			height: 100%;
		}
		.container{
			max-width: 70%;
			margin-left: 10%;
			margin-right: 10%;
			align-content: center;
			position: relative;
 
		}

		#profile{
			height: 250px;
			width: 20%;
			border-radius: 50%;
			position: absolute;
			top: 53%;
			left: 3%;
			border-color: white;
			border-width: 10px;
		}
		#backgroundimage{
			width: 100%;
			height:500px;
			margin-top: 2%;
			border-width: 5px;
			border-color: black;
		}
		#firstname{
			position: absolute;
			top: 73%;
			left: 25%;
			font-size: 35px;
			color: white;
		}
		#petname{
			position: absolute;
			top: 83%;
			left: 25%;
			font-size: 28px;
			color: white;
		}
		 #image{
  pointer-events: auto;
  max-height: 30px;
  max-width: 30px;
  cursor: pointer;
}
#personalinfo{
	position: absolute;
	left: 40%;

}
#form-group{
	position: absolute;
	left: 30%;
}
</style>

</head>
<body>
	<div class="container">
		<div id="container">   
      <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Adopt-a-Child</a>
    </div>
      <ul class="nav navbar-nav">
 
              <li><a href="home.php">Home</a></li>

              <li><a href="orphanagenew.php">Orphanage</a></li>

              <li><a href="Surrogate/aboutsurrogacynew.php">AboutSurrogacy</a></li>

              <li><a href="Surrogate/qualificationtosurrogatenew.php">Qualification to be a Surrogate</a> </li>
<li><a href="donatetoorphannew.php">Donation</a></li>
                <li><a href="Help/helpnew.php">Help</a></li>
            <?php 
            if(!empty($_SESSION['fname'])){?>
            <div class="w3-dropdown-hover">
            <li><img id="image" style=" 
  pointer-events: auto;
  max-height: 30px;
  max-width: 30px;
  cursor: pointer;
  margin-top: 7px;" src="images/avatar.png" alt="avatar"></li>
            <div class="w3-dropdown-content w3-bar-block">
                <li class="w3-bar-item"><a  href="home.php"><?php echo $_SESSION['firstname']; ?></a></li>
                <li class="w3-bar-item"><a href="logout.php">Logout</a></li>
            </div>
        </div> 
         <?php 
      }
      else{
        ?>
        <li><a href="loginform1.php">Login</a></li>
        <?php
      }
      ?>
      </ul>
  </div>
      </nav></br>
		<img src="uploadimage/harshbackground.jpg" alt="backgroundimage" id="backgroundimage">
			<center><img src="<?php echo $_SESSION['img_dir'] ?>" alt= "Your Profile" id ="profile" onclick="function12()" onmouseout="function13()"></center>
			<div id="firstname"><b><?php echo $_SESSION['fname'] . " " . $_SESSION['lname']?></b></div>
			<div id="petname"><b>(<?php echo $_SESSION['uname']?>)</b></div>
			<h2 id="mainstart"><center>Edit Details</center></h2>
			<div id="personalinfo">
					<h2><label>Personal Details</label></h2>
					<div class="form-group">
<label for="FirstName:">FirstName:</label>
<input type="text" name="fname" id="fname" class="form-control-sm" required="required" onkeyup="fnameerror()" value="<?php echo $_SESSION['fname'] ?>" disabled>
</div>
<div class="form-group1">
<label for="LastName:">LastName:</label>
<input type="text" name="lname" id="lname" class="form-control-sm" required="required" value="<?php echo $_SESSION['lname'] ?>" onkeyup="lnameerror()" disabled>
</div>
<div class="form-group2" id="genderrr">
<label for="gender:">Gender:</label>
              <input type="text" value="<?php echo $_SESSION['gender'] ?>" id="gender" >
</div>
<div class="form-group3">
<label for="E-mail:">E-mail:</label>
<input type="email"  name="email" id="email" class="form-control-sm" placeholder="xyz@abc.com" required="required" onkeyup="emailerror()" value="<?php echo $_SESSION['email'] ?>" disabled>
</div>
<div class="form-group4">
<label for="PhoneNo:">PhoneNo:</label>
<input type="text" name="mno" id="mno" required="required" class="form-control-sm" onkeyup="mnoerror()" value="<?php echo $_SESSION['mobileno'] ?>" disabled>
</div>
<div class = "form-group5">
<label for="UserName:">UserName:</label>
<input type="text" name="uname" id="uname1" maxlength="35" required="required" placeholder="Built your own UserName" class="form-control-sm" value="<?php echo $_SESSION['uname'] ?>" onkeyup="unameerror()" disabled>
</div>
</div>
</div>
<script type="text/javascript">
	 $( document ).ready(function() {
	 	function123();
	 }
	function function12(){
		 document.getElementById("profile").style.borderRadius = "0";
	}

	function function13(){
		 document.getElementById("profile").style.borderRadius = "50%";
	}
	function function123(){

	}
	
</script>
</body>
</html>