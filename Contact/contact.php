<?php
session_start();
?>
<html>
<head>
<title>Contact</title>
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
      <li><a href="..\index.php">Home</a></li>
      <li><a href="../orphanagenew.php">Orphanage</a></li>  
      <li><a href="../Surrogate/aboutsurrogacynew.php">AboutSurrogacy</a></li>
      <li><a href="../donatetoorphannew.php">Donation</a></li>
      <li><a href="../Help/help.php">Help</a></li>
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
<article class="art" id="art">
<section>
<hgroup>
<h1>
Website Designer & Developer
</h1>
</hgroup>
<p><b>Harsh Pathak</b></br>
Final year Computer Engineering Student</br>
<a href="mailto:patelharsh.12@gmail.com">Email ME</a>
</p>
<p><b>Darshit Prajapati</b></br>
Final year Computer Engineering Student</br>
<a href="mailto:patelharsh.12@gmail.com">Email ME</a>
</p>
</section>
<section>
<hgroup>
<h1> 
Website Owner
</h1>
</hgroup>
<p><b>Adopt-a-Child Association</b></br>
<a href="mailto:pathakharsh.12@gmail.com">Email ME</a>
</p>
</section>
</article>
<footer>
<div id="footernavigation">
<nav class="navbar navbar-default">
    <ul class="nav navbar-nav">
      <li><a href="..\About us\aboutus.php">About Us</a></li>
      <li class="active"><a href="contact.php">Contact</a></li>
    </ul>
</nav>
</div>
</footer>
</div>
</body>
</html>