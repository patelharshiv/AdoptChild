<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>SURROGATE</title>
	 
 <meta name="viewport" content="width=device-width, initial-scale=1.0 , user-scalable=no , maximum-scale=1.0 , minimum-scale=1.0">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="shortcut icon" href="/assets/favicon.ico">
<link rel="stylesheet" href="/assets/dcode.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>



<link rel="stylesheet" href="surrogate.css">
</head>
<body>



	
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

              <li><a href="aboutsurrogacynew.php">AboutSurrogacy</a></li>

              <li><a href="qualificationtosurrogatenew.php">Qualification to be a Surrogate</a> </li>

            
             <li><a href="../donatetoorphannew.php">Donation</a></li>
          
                <li><a href="../Help/helpnew.php">Help</a></li>
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
                  
                  </h5>
            </ul>
         
            </div>

        </div>
    </nav>

</br>



<div class="embed-responsive embed-responsive-16by9"> 

    <iframe width="560" height="0" src="../images/surrogate.mp4" frameborder="2" allowfullscreen></iframe>

</div> 


</br>

</br>

<div class="container">
  <div class="row">
    
    <div class="col-sm-12 border-dark " style="background-color: white; border:#333 solid .5px; border-radius: 2px; font-size: 3vh; border-radius: .5vh; align-items: center; align-content: justify; word-spacing: .2vh; letter-spacing: .2vh;">


    	<h1 style="font-size: 7vh; text-align: center; color: blue;"><u><b>SURROGATES</b></u></h1></a></br>


    	<h2 style=" font-size:4vh; text-decoration:none;word-spacing: .2vh; letter-spacing: .2vh; align-content: justify; text-align: center;"><b>WHAT ARE THE <a style="color:red">QUALIFICATIONS </a> TO BE A SURROGATE MOTHER?</b></br>

</br>
    	<h2 style="font-size: 5.5vh; text-decoration:none;word-spacing: .2vh; letter-spacing: .2vh; align-content: justify; text-align:center;">The <u>Three</u> Basic Surrogate Qualifications : </h2>

    </br>

    	<p style=" font-size:4vh; text-decoration:none; word-spacing: .2vh; letter-spacing: .1vh; align-content: justify;">
    		While every professional has the right to set its own list of gestational carrier qualifications, many follow the same guidelines set by the American Society for Reproductive Medicine. Experts in the assisted reproduction field have come together to set standards for gestational carriers that best predict a woman’s success in this journey moving forward.

You can read these recommended surrogate mother qualifications here, but we’ve summarized them for you below in three main categories: medical, emotional and screening.</p></br>


<h4 style=" font-size: 5.5vh;text-decoration:none;word-spacing: .2vh; letter-spacing: .2vh; align-content: justify;"><b>1.</b> Physical Qualifications to Become a Surrogate
</h4>
</br>
<p> <h4 style=" font-size:4vh; text-decoration:none; word-spacing: .2vh; letter-spacing: .2vh; align-content: justify;">
	You know that being pregnant can be complicated and come with risks. A pregnancy that you carry for someone else is no different. Physical qualifications for being a surrogate ensure that you are capable of carrying a gestational pregnancy at minimal risk to yourself and the intended parents’ baby.

Professionals set physical qualifications to be a surrogate based on what can prove your ability to safely carry a child for someone else. Of course, every agency’s guidelines are different, but these are the basic required standards you must meet to become a gestational carrier are following : </h4></p>

<p>
	</br>
 <h5 style=" font-size:4vh; text-decoration:none;word-spacing: .2vh; letter-spacing: .2vh; align-content: justify; ">
 
<li> Be at least 21 years old and younger than 40</li>
<li> Have a healthy BMI, as determined by your doctor</li>
<li> Have carried at least one pregnancy successfully to term</li>
<li> Be raising a child of your own in your own home</li>
<li> No major complications in your previous pregnancies</li>
<li> Be off anti-depressants or anti-anxiety medication for 12 months</li>
<li> Have no new tattoos or piercings within 12 months of starting the process </li>
</h5>
</p>
</br>
<p> <h4 style=" font-size:4vh; text-decoration:none;word-spacing: .2vh; letter-spacing: .2vh; align-content: justify; ">
If you meet these basic surrogate qualifications, you may be a good candidate for surrogacy. It’s always a good idea to contact a professional, even if you don’t meet a certain qualification; many professionals approve surrogates on a case-by-case basis and may make an exception to the rules.

However, if you are not of a proper age or have not been pregnant before, you will be hard pressed to find a surrogacy professional or clinic that will approve you moving forward with the surrogacy process. <h4></p>   <br> 

<h4 style="font-size: 5.3vh; text-decoration:none;word-spacing: .2vh; letter-spacing: .2vh; align-content: justify;">2. Psychological Qualifications for Being a Surrogate</h4>
</br>

<p><h4 style=" font-size:4vh;text-decoration:none;word-spacing: .2vh; letter-spacing: .2vh; align-content: justify; ">
Qualifying as a surrogate is about more than just meeting medical requirements. Every woman considering this path should be aware of the emotional and psychological challenges of this journey before they get started.
</br></br>
When you become a surrogate, you commit yourself (and your family) to a partnership of a year or more with intended parents. You will have to give up a great deal of your time and energy to help them become parents. You’ll be attending doctor’s appointments before and throughout your pregnancy, and you’ll need to set up meetings and calls with your intended parents as your pregnancy progresses. Being a surrogate is like a full-time job, so it’s important that you and your spouse are prepared for the extra stresses it may cause in your everyday routine.
</br></br>
At the same time that you handle your everyday responsibilities, you will also be coping with the hormonal changes (and emotional stressors) of being pregnant. While it’s rare for a surrogate to get “attached” to the baby she is carrying, it’s normal to feel some conflicting emotions during your pregnancy. Being in a solid emotional place before starting can help prepare you for this.
</br></br>
To qualify as a surrogate mother, you will need to speak in depth with a surrogacy professional, who will explain what you can expect moving forward and prepare you for the challenges you may experience. <h4></p> </br>

<h4 style=" font-size: 5vh;text-decoration:none;word-spacing: .2vh; letter-spacing: .2vh; align-content: justify;">3. Screening Qualifications to Become a Surrogate Mother</h4>
</br>
<p><h4 style="  font-size:4vh; text-decoration:none;word-spacing: .2vh; letter-spacing: .2vh; align-content: justify; ">
If you think you meet the qualifications for being a surrogate, your next step will be to contact a surrogacy professional. You will typically fill out some initial application paperwork to confirm your eligibility, and a surrogacy specialist will likely talk to you about your application and answer any remaining questions you may have.
</br></br>

Before you can become a surrogate, you will need to undergo medical and psychological screening. Both of these will confirm your readiness to be a gestational carrier. First, you and your spouse will complete a psychological screening with a mental health professional. They will ask you about your feelings on surrogacy, as well as your plans for handling some of the practical and emotional challenges that may arise. Once you match with intended parents, you will complete one last medical screening before starting the medical process of surrogacy. This will confirm that you are truly medically capable of safely carrying a pregnancy to term. At that point, you will finally be approved for surrogacy and be able to sign your surrogacy contract!
</br>
</br>

While this article provides some useful information on surrogate qualifications, the best way to learn how to qualify to be a surrogate mother is by speaking with a surrogacy professional today. They can answer all of your questions and help you confirm that surrogacy is really the right choice for you and your family.
</h4></p>

</div>

</div>

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