 <?php
session_start();

 ?>
 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
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


<style>
	body{
		background-color: #f2f2f2;
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
                <li class="w3-bar-item"><a  href="adoptprofile.php"><?php echo $_SESSION['uname']; ?></a></li>
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
                  </h5>
            </ul>
         
            </div>

        </div>
    </nav>





<div class="container">
	<center>
  <h2>DO DONATE</h2>
  <p>Here you can Scan your code</p>            
  <img src="images/paytmbarcode.jpeg" class="img-thumbnail" alt="Cinque Terre"  width="304" height="236"> 
</center>
</div>


</header>
	
</body>
</html>