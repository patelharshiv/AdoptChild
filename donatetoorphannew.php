<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Donation</title>

 <meta name="viewport" content="width=device-width, initial-scale=1.0 , user-scalable=no , maximum-scale=1.0 , minimum-scale=1.0">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="shortcut icon" href="/assets/favicon.ico">
<link rel="stylesheet" href="/assets/dcode.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>



<link rel="stylesheet" href="do-style.css">

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

      <div class ="row">

          <div class="col-sm-6 banner-info">
            <h1 class="big-text"> Donation </h1>
</br>
            
            <p class="large">It's good to be blessed.</br> It's better to be a blessing. &#128522;</p>

      
            <a class="btn btn-second" href="paytm.php" > Donate </a>

    



          </div>

      <div class="col-sm-6 banner-image">
        <img src="images/did.png" height="10%" width="70%" class="img-responsive">

       


      </div>


    </div>

     <hr id="horizontal"></hr>

 <header>

</br>




<div id="slider">
	<figure>
		<img src="images/help1.jpeg">
		<img src="images/help.jpeg">
		<img src="images/ty.jpg">
		<img src="images/ty2.jpg">
	</figure>
</div>

<button id="btnScrollToTop">
    <i class="material-icons">arrow_upward</i>

    <script>
        const btnScrollToTop = document.querySelector("#btnScrollToTop");
        btnScrollToTop.addEventListener("click", function(){

         // window.scrollTo(0,0);

        // window.scrollTo({
           // top:0,
           // left:0,
          //  behavior:"smooth"


       //  });

       $("html, body").animate({ scrollTop: 0 }, "slow");

        });



    </script>
  </button>     


</body>
</html>