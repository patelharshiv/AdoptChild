<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="or.css">


 <meta name="viewport" content="width=device-width, initial-scale=1.0 , user-scalable=no , maximum-scale=1.0 , minimum-scale=1.0">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">


 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

<link rel="shortcut icon" href="/assets/favicon.ico">
<link rel="stylesheet" href="/assets/dcode.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
              <a href=""> <img class="logo" src="../images/123.png" > </a>
      </div>
              <div class="collapse navbar-collapse " id="micon">
                <ul class="nav navbar-nav navbar-right ">
              <li><a href="../index.php">Home</a></li>

              <li><a href="../orphanagenew.php">Orphanage</a></li>

              <li><a href="../Surrogate/aboutsurrogacynew.php">AboutSurrogacy</a></li>

              <li><a href="../Surrogate/qualificationtosurrogatenew.php">Qualification to be a Surrogate</a> </li>

            
             <li><a href="../donatetoorphannew.php">Donation</a></li>
          
                <li><a href="helpnew.php">Help</a></li>
          <?php 
            if(!empty($_SESSION['fname'])){?>
            <div class="w3-dropdown-hover">
            <li><img id="image" style=" 
  pointer-events: auto;
  max-height: 30px;
  max-width: 30px;
  cursor: pointer;
  margin-top: 7px;" src="../images/avatar.png" alt="avatar"></li>
            <div class="w3-dropdown-content w3-bar-block">
                <li class="w3-bar-item"><a  href="../adoptprofile.php"><?php echo $_SESSION['uname']; ?></a></li>
                <li class="w3-bar-item"><a href="../logout.php">Logout</a></li>
            </div>
        </div> 
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
    </div>
  </nav>

    </br>
</header>

<div class="container" style="">
  <div class="row">
    
    <div class="col-sm-12 border-dark" style="background-color: ; border:#333 solid .5px ; border-radius: 2px; font-size: 3vh; border-radius: .5vh; align-items: center; align-content: justify; word-spacing: .2vh; letter-spacing: .2vh;">


    	<h1 style="font-size: 7vh; text-align: center; color:"><u><b>Adopt-a-Child</b></u></h1>

    	 <h3><p align="center"> &#128522; <u>Spread a Smile</u> &#128522; </p> </h3>     
 

</br>

<Summary> <h2 style="font-size: 4vh; text-indent: 3.5vh;">1) How to easy it is to Adopt-a-child? </h2></summary>
<p><h3 style="font-size: 3.5vh; text-indent:3.5vh ;
  text-align: ;
  letter-spacing: .3px">&#9654; We tried hear to make your work as easy and simple as possible by providing the certain option you may feel comfortable with it.</h3></p></br>


<Summary><h2 style="font-size: 3.8vh;  text-indent: 3.5vh;">2) Is it just select and you adopted a child?</h2></summary>
<p> <h3 style="font-size: 3.5vh; text-indent: 3.5vh;
  text-align: ;
  letter-spacing: .3px">&#9654; Yes, it is like that but keep in mind you still have to follow certain protocol forthe safety purpose.
 All the offline process have been just made online here </h3> </p></br>


<Summary> <h2 style="font-size: 3.8vh;  text-indent: 3.5vh;">3) Do we can find a surrogate any time? </h2></summary>
<p> <h3 style="font-size: 3.5vh; text-indent: 3.5vh;
  text-align: ;
  letter-spacing: .3px">&#9654; Yes but it's on the desire of the surrogate.We here do not force anyone.</h3></p></br>

<Summary><h2 style="font-size: 3.8vh;  text-indent: 3.5vh;">4) Is it safe to upload profile here?</h2></summary>
<p><h3 style="font-size: 3.5vh; text-indent: 3.5vh;
  text-align: ;
  letter-spacing: .3px">&#9654; We only met you up with the trusted, authenticated one. So you don't have to worry about that.</h3></p></br>

<Summary><h2 style="font-size: 3.8vh;  text-indent: 3.5vh;">5) Can we get to see the photos of child here?</h2></summary>
<p> <h3 style="font-size: 3.5vh; text-indent: 3.5vh;
  text-align: ;
  letter-spacing: .3px">&#9654; No, we don't show up the photos of child here. We directly let you meet them once we properly analyze your profile under some process for the safety reason.</h3></p>




    </br>


</div>
</div>
</div>
</br>

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
<footer>
<div class="container-fluid">

<div class="jumbotron">

  
  
  <h6>
    <center>
      <a href="">copyright@<emp style="color:blue;">CARA</emp></a>
    </center>
    </h6> 

 
           
</div>

</div>

  </div>
</footer>
</body>
</html>