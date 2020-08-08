<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Pregnant and Considering Adoption</title>
  <link rel="stylesheet" type="text/css" href="in-style.css">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<link rel="shortcut icon" href="/assets/favicon.ico">
<link rel="stylesheet" href="/assets/dcode.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style type="text/css">
 body{
  width: 100%;
  height:100%;
 } 
 #bell{
  max-height: 30px;
  max-width: 30px;
}#msg{
  max-height: 30px;
  max-width: 30px;
}
#first{
  margin-top: 10%
}
#second{
  margin-top: 5%;
}
</style>
</head>
<body>
  <header class="header">

    <nav class="navbar navbar-style bg-info sticky-top navbar-expand-sm">

        <div class="container">

            <div class="navbar-header">

              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#micon">

              <span class="icon-bar"> </span>
              <span class="icon-bar"> </span>
              <span class="icon-bar"> </span>
             
              <span class="icon-bar"> </span>

               <span class="icon-bar"> </span>

                <span class="icon-bar"> </span>




               </button>


                <a href=""> <img class="logo" src="images/123.png" > </a>
            </div>



            <div class="collapse navbar-collapse " id="micon">
            <ul class="nav navbar-nav navbar-right ">

          
                
        
        <li class="active"><a href="adminpanel.php">Home</a></li>
        <li><a href="Explore\explore.php">Applications</a></li>
        <li> 
<li><a href="Help/helpnew.php">Help</a></li>
         <li> 
        <div class="dropdown">
        <img id="bell" src="images/notification.webp" alt="Notification" data-toggle="dropdown"  onload="checknotification()"  style="padding-top: 2px; margin-top:7px; margin-left: 20px;"><sup id="superscriptnotification"></sup>
        <ul class="dropdown-menu">
          <li id="Notification"> </li>
          <li><a href="adminmessage.php">Show More</a></li>  
        </ul>
        </div></li>
        <li>
        <div class="dropdown">
      <img id="msg" src="images/message.png" data-toggle="dropdown" alt="message" style="padding-top: 5px; margin-top:7px; margin-left: 25px; " ><sup id="superscriptmessage"></sup>
        <ul class="dropdown-menu">
          <li><div id="displaymessage" onclick="myFunction()" class="popup">  <span class="popuptext" id="myPopup"></span></div></li>
          <li><a href="adminmessage.php" onload="">Show More</a></li>  
        </ul>
        </div></li>


            <?php 
            if(!empty($_SESSION['uname2'])){?>
            <div class="w3-dropdown-hover">
            <li><img id="image" style=" 
  pointer-events: auto;
  max-height: 30px;
  max-width: 30px;
  cursor: pointer;
  margin-top: 7px;
  margin-left: 25px;" src="images/avatar.png" alt="avatar"></li>
            <div class="w3-dropdown-content w3-bar-block">
                <li class="w3-bar-item"><a  href="adoptprofile.php"><?php echo $_SESSION['uname2']; ?></a></li>
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
                  </h5>
            </ul>
         
            </div>

        </div>
    </nav>
	<form method="POST">
    <center><h1 id="first">We are proud you stepped up rather then going for abortion.</h1></center>
    <center><h3 id="second">Your Profile is published we will soon find a considerable parent to your child.</h3></center>
	</form>
</body>
</html>