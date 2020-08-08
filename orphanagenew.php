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
              <a href=""> <img class="logo" src="images/123.png" > </a>
      </div>
              <div class="collapse navbar-collapse " id="micon">
                <ul class="nav navbar-nav navbar-right ">

              <li><a href="index.php">Home</a></li>

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
                </ul>
              </div>
    </div>
  </nav>

    </br>
</header>

 <hr id="horizontal"></hr>


 <div id="xa">

  <div class="container" style="">

     <h1 class="heading" style="font-size: 7vh;">Introduction about Orphange</h1>
    <div class="row">
    
      <div class="col-sm-12 border-dark" style="background-color: ; border:#333 solid .5px ;  font-size: 3vh; border-radius: .5vh; align-items: center; align-content: justify; word-spacing: .2vh; letter-spacing: .2vh;">
             <h1 style="font-size: 8vh; text-align: left; color:"><h1>Orphange</h1>   
 

</br>
              <p><h3 style="font-size: 3.5vh; text-indent:0vh; ; letter-spacing: .3px">The high proportion of abandoned children among orphans highlights the fact that poverty is a major reason behind the situation. Indeed, the study found that states such as Uttar Pradesh, Bihar and West Bengal had more orphans than India’s richer states. Generally, the country's central and eastern regions were found to be worse affected than the north and the south.
  </h3></p>

</br>
</div>
</div>
</div>
</div>
  


  <div id="za">
 <div class="container" style="">
    <div class="row">
    
      <div class="col-sm-12 border-dark" style="background-color: ; border:#333 solid .5px ; border-radius: 5px; font-size: 3vh; border-radius: .5vh; align-items: center; align-content: justify; word-spacing: .2vh; letter-spacing: .2vh;">
             <h1 style="font-size: 7vh; text-align: left; color:;">Teachers</h1>   
 

</br>
              <p><h3 style="font-size: 3.5vh; text-indent:0vh; ; letter-spacing: .3px">
   Here to provide study , sports etc. and they are living in orphange center and teachers are learn to the students, his powerful study demonstrated how the lack of loving attention typically provided to children by their parents or caregivers is pivotal for optimal human development, specifically of the brain; adequate nutrition is not enough.
  </h3></p>

</br>
</div>
</div>
</div>
</div>

<div class="rest" style="">
<section>
  
    <div class="container">
      <h1 class="heading">Orphange Center </h1>
        <div class="card-wrapper">


          <div class="card">
            <img src="images/BalGokulam.jpg" alt="" class="card-img">
            
            <hr>
            <p class="job-title">Bal Gokulam Children Home </p>
            
                <p>
            <center><b>Address : </b></center> <br><center> 1, Arya Kanya Rd, Karelibagh, Vadodara, Gujarat 390001 </br> </br> <center>
            <b> Phone no. :</b> </center></br> <center> (0265) 241 3529 </center> 
          </p>
            
            <a href="https://www.google.com/maps/dir//balagokulam+vadodara/data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0x395fcf5d8c3fbd7b:0x45ee52b3bb2c7bd3?sa=X&ved=2ahUKEwiwx-fGjsXpAhUZwTgGHZKPA-IQ9RcwFnoECBEQDw" class="btn">Go to map</a>
            <ul class="social-media">
              <li><a href=""> <i class="fab fa-facebook-square"></i> </a></li>
               <li><a href=""> <i class="fab fa-twitter-square"></i> </a></li>
                <li><a href=""> <i class="fab fa-instagram"></i> </a></li>
                 <li><a href=""> <i class="fab fa-google-plus-square"></i> </a></li>
            </ul>
          </div>

           <div class="card">
            <img src="images/Missionaries.jpg" alt="" class="card-img">
            <hr>
            <p class="job-title">Missionaries Of Charity</p>
            <p>
            <center><b>Address : </b></center> <br><center> Opp. Panasonic, Makarpura Road, Vadodara, Gujarat 390009 </br> </br> <center>
            <b> Phone no. :</b> </center></br> <center> (0265) 654 4287 </center> 
          </p>

          <a href="https://www.google.com/maps/dir/22.4961389,73.5890232/Missionaries+Of+Charity,+Anand+Baug+Society,+Tarsali,+Vadodara,+Gujarat/@22.3775904,73.2531641,11z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x395fc42fb42bf43b:0x98f8856f75a7bf04!2m2!1d73.1977569!2d22.2523076" class="btn">GO TO MAP</a>
            <ul class="social-media">
              <li><a href=""> <i class="fab fa-facebook-square"></i> </a></li>
               <li><a href=""> <i class="fab fa-twitter-square"></i> </a></li>
                <li><a href=""> <i class="fab fa-instagram"></i> </a></li>
                 <li><a href=""> <i class="fab fa-google-plus-square"></i> </a></li>
            </ul>
          </div>



           <div class="card">
            <img src="images/Helpinghands.jpg" alt="" class="card-img">
            
            <hr>
            <p class="job-title">Helping Hand helath Center</p>
            <p>
            <center><b>Address : </b></center> <br><center> 38/49, Laadwada, Sulemani Pol, Moghul Wada, Vadodara, Gujarat 390017 </br> </br> <center>
            <b> Phone no. :</b> </center></br> <center> 098251 72533 </center> 
          </p>

          <a href="https://www.google.com/maps/dir//Helping+Hands+health+Center+vadodara/data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0x395fc897aac7283d:0x3209eb654a1c7a1b?sa=X&ved=2ahUKEwjGlaDvksXpAhVTX30KHbU0BcsQ9RcwFXoECA4QFg" class="btn">GO TO MAP</a>
            <ul class="social-media">
              <li><a href=""> <i class="fab fa-facebook-square"></i> </a></li>
               <li><a href=""> <i class="fab fa-twitter-square"></i> </a></li>
                <li><a href=""> <i class="fab fa-instagram"></i> </a></li>
                 <li><a href=""> <i class="fab fa-google-plus-square"></i> </a></li>
            </ul>
          </div>



           <div class="card">
            <img src="images/Akshayapatra.jpg" alt="" class="card-img">
            
            <hr>
            <p class="job-title"> The Akshaya Patra Foundation</p>
           <p>
            <center><b> Address : </b></center> <br><center> Plot No.42 Sevashram Society, Gotri Rd, </br>Gujarat-390023 </br> </br> <center>
            <b> Phone no. :</b> </center></br> <center> (0265) 238 8659 </center> 
          </p>

          <a href="https://www.google.com/maps/dir/22.4961389,73.5890232/The+Akshaya+Patra+Foundation+in+Vadodara,+Gotri+Rd,+Citizen+Society,+Nr,+Hari+Nagar,+Vadodara,+Gujarat/@22.3775904,73.2531641,11z/data=!4m9!4m8!1m1!4e1!1m5!1m1!1s0x395fc894616fa7bf:0x647ffd079d947a1d!2m2!1d73.1535652!2d22.3157475" class="btn">GO TO MAP</a>
            <ul class="social-media">
              <li><a href=""> <i class="fab fa-facebook-square"></i> </a></li>
               <li><a href=""> <i class="fab fa-twitter-square"></i> </a></li>
                <li><a href=""> <i class="fab fa-instagram"></i> </a></li>
                 <li><a href=""> <i class="fab fa-google-plus-square"></i> </a></li>
            </ul>
          </div>



           <div class="card">
            <img src="images/frnd.jpg" alt="" class="card-img">
            
            <hr>
            <p class="job-title">Friends Care Foundation </p>
            <p>
            <center><b>Address : </b></center> <br><center> AUDA Office, 2nd floor, Nr.Ashram Rd, Ahmedabad, Gujarat 380014 </br> </br> <center>
            <b> Phone no. :</b> </center></br> <center>+91-7600999977 </center> 
          </p>

          <a href="https://www.google.com/maps/dir//Friends+Care+Foundation+-+NGO+in+Ahmedabad,+Gujarat,+India+%7C+Old+Age+Home+Support+%7C+Orphanage+Support+%7C+Charity+Relief+%7C+Women+Empowerment+%7C+Child+Rights+%7C+Education+Support,+AUDA+Office,+204%2F05%2F06,+2nd+Floor,+Ashirwad+Complex,+Above+Nagarchashma+Ghar+Nr,+Ashram+Rd,+Ahmedabad,+Gujarat+380014/data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0x395e845fed7666c1:0x57206aaa887df0e6?sa=X&ved=0ahUKEwiBmZKdn8XpAhUMzTgGHfuVCxkQ48ADCEkwAQ" class="btn">GO TO MAP</a>
            <ul class="social-media">
              <li><a href=""> <i class="fab fa-facebook-square"></i> </a></li>
               <li><a href=""> <i class="fab fa-twitter-square"></i> </a></li>
                <li><a href=""> <i class="fab fa-instagram"></i> </a></li>
                 <li><a href=""> <i class="fab fa-google-plus-square"></i> </a></li>
            </ul>
          </div>



           <div class="card">
            <img src="images/Lions.jpg" alt="" class="card-img">
            
            <hr>
            <p class="job-title">Lion Blind Girls Welfare Centre </p>
           <p><center><b> Address : </b></center> <br><center> 30, Vrajpark, Lalbaug, Navapura, Vadodara, Gujarat 390001 </br> </br><center>
            <b> Phone no. :</b> </center></br> <center> (0265) 243 7354 </center> 
          </p>

          <a href="https://www.google.com/maps/dir/22.4961389,73.5890232/Lion+Blind+Girls+Welfare+Centre,+Vrajpark,+Lalbaug,+Navapura,+Vadodara,+Gujarat/@22.3775904,73.2531641,11z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x395fc8acd8cf46b9:0xb8af9a15d6be1531!2m2!1d73.2053469!2d22.2835641" class="btn">GO TO MAP</a>
            <ul class="social-media">
              <li><a href=""> <i class="fab fa-facebook-square"></i> </a></li>
               <li><a href=""> <i class="fab fa-twitter-square"></i> </a></li>
                <li><a href=""> <i class="fab fa-instagram"></i> </a></li>
                 <li><a href=""> <i class="fab fa-google-plus-square"></i> </a></li>
            </ul>
          </div>

     </div>
    </div>
     <hr id="horizontal"></hr>

</section>

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

<div id="da">
<div class="container-fluid">
<div class="jumbotron ">
<h6><center><a href="">copyright@<emp style="color:blue;">CARA</emp><center></h6> 

 
</div>

  </div>
</div>

</body>
</html>