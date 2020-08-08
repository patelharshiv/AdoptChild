<?php
session_start();
?>
<html>
<head>
<title>About us</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style type="text/css">
 body{
  background-image: url("../images/w1.jpeg");
  width: 100%;
  height:100%;
 } 
#heading p{
  text-align: center;
  margin:auto;
  padding: 0px;

}
#heading h1{
  margin-top: 60px;
}
 #image{
  pointer-events: auto;
  max-height: 30px;
  max-width: 30px;
  cursor: pointer;
}

</style>
</head>
<body id="readers" class="readers">
<div class="division">
      <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Adopt-a-Child</a>
    </div>
      <ul class="nav navbar-nav">
      <li><a href="../index.php">Home</a></li>
      <li><a href="../orphanagenew.php">Orphanage</a></li>  
      <li><a href="../Surrogate/aboutsurrogacynew.php">AboutSurrogacy</a></li>
      <li><a href="../donatetoorphannew.php">Donation</a></li>
      <li><a href="../Help/helpnew.php">Help</a></li>
  <?php 
      if(!empty($_SESSION['uname'])){?>
        <li>
        <div class="dropdown">
         <img id="image" src="../images/avatar.png" alt="avatar" data-toggle="dropdown" style="padding-top: 1px; margin-top:7px; margin-left: 80%; margin-right: 5px;">
         <ul class="dropdown-menu">
         <li id="uname1"><?php echo $_SESSION['uname']; ?></li>
         <li><a href="../logout.php">Logout</a></li>
       </ul>
     </div>
   </li>
         <?php 
      }
      else{
        ?>
        <li><a href="../loginform1.php">Login</a></li>
        <?php
      }
      ?>
      </ul>
  </div>
      </nav>
  <div id="heading">
      <h1 align="center">"Adopt-a-Child"</h1>
      <p class="para">Come let's adopt-a-child...</br>  "Spread a Smile"</p>     
  </div>
  <section>
“Adopt-a-child” is a multi-user website.
 It can be used at certain situation like a mother not able to give birth to child 
 because of some problem then this website will lead them to surrogate or
 also may lead such couple to the profile of the children at the orphanage so may
 they can adopt one. Also these website helps the couple not ready for the child, 
 to handover their unwanted unborn child to the couple who cannot have their own child.

</section></br></br></br>
<section>
Objective of us is simple to have a home to the homeless.
To have a stop on abortion.
To find a surrogate to the need ones.
To make easy for the people to donate orphanage.
To make aware people and encourage the wealthy family to adopt the child. 
To easy and simplify the process for adopting a child.
To have a profile of the orphanage student at one platform.
To authenticate each of them participating in the interaction.

</section>
<section>
Profiles over here are authenticated and verified with strict process.
</section>
</article> 
<footer>
<div id="footernavigation">
<nav class="navbar navbar-default">
    <ul class="nav navbar-nav">
      <li class="active"><a href="aboutus.php">About Us</a></li>
      <li><a href="..\Contact\contact.php">Contact</a></li>
    </ul>
</nav>
</div>
</footer>
</div>
</body>
</html>
