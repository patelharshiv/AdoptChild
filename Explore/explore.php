<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


<title>Explore</title>
<link href="..\DesignPage\designpage.css" type="text/css" rel="stylesheet">


<style type="text/css">
 body{
  background-image: url("../images/w1.jpeg");
  width: 100%;
  height:100%;

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
<div id="container">   
      <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Adopt-a-Child</a>
    </div>
      <ul class="nav navbar-nav">
      <li><a href="../index.php">Home</a></li>
      <li ><a href="../orphanage.php">Orphanage</a></li>  
      <li><a  href="../Surrogate/aboutsurrogacy.php">AboutSurrogacy</a></li>
      <li><a href="..\Help\help.php">Help</a></li>
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
</header></br></br></br>
<ul>
<li>Orphanage</li>
<li>Surrogate</li>
<li>Finding a Parent</li>
<li>Contribution to Society</li>
</ul></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
<footer>
<div id="footernavigation">
<nav class="navbar navbar-default">
    <ul class="nav navbar-nav">
      <li><a href="..\About us\aboutus.php">About Us</a></li>
      <li><a href="..\Contact\contact.php" target="_blank" rel="noopener noreferrer">Contact</a></li>
    </ul>
</nav>
</div>
</footer>
</div>
</body>
</html>