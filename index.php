<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Home</title>
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
            <h1 class="big-text"> Adopt-a-Child </h1>

            <p class="large"> Come Let's Adopt-a-Child </p>
            <p class="large">Spread a Smile &#128522;</p>
            <?php 
            if(empty($_SESSION['fname'])){?>
            <a class="btn btn-first" href="registrationpage.php"> SIGN UP </a>
            <?php } ?>
            <a class="btn btn-second" href=""> Subscribe Us </a>

             <nav1 class="social">
          <ul>
            <li class="twitter">
              <a href="#">
                <i class="fa fa-twitter" aria-hidden="true"> </i>
              </a>
            </li>
          </ul>
           <ul>
            <li class="facebook">
              <a href="#">
                <i class="fa fa-facebook" aria-hidden="true"> </i>
              </a>
            </li>
          </ul>

 <ul>
            <li class="google-plus">
              <a href="#">
                <i class="fa fa-google-plus" aria-hidden="true"> </i>
              </a>
            </li>
          </ul>

 <ul>
            <li class="instagram">
              <a href="#">
                <i class="fa fa-instagram" aria-hidden="true"> </i>
              </a>
            </li>
          </ul>

        </nav1>

          </div>

      <div class="col-sm-6 banner-image">
        <img src="images/m1.jpg" class="img-responsive">

       


      </div>


    </div>

     <hr id="horizontal"></hr>

 <header>

</br>



<div class="container1">
<div class="row">


  <div class="col-sm-4">
</br>

     <img src="images/registration.png" style="width:30%; margin-right:auto; margin-left:auto; display:block; " class=""></br>
  
<section style="box-shadow: 0 6px 8px 0 rgba(0,0,0,0.8); transition: 0.3s; border-radius: 5px; background: #fff; ">

      <h5 style="margin-right:10px;  text-shadow: 2px 2px 5px red; padding-top:10px;"> <p><b><center>Registration</center></b></p></h5>
      <hr>

       <h5 style="font-size:15px; text-indent: 6px; word-spacing:2px; letter-spacing: .2px;  text-decoration: none;  font-family:cursive ; text-align: justify; padding-right: 5px; padding-left: 5px; padding-bottom: 5px;"> 

        <p><b>Prospective adoptive parents need to get registered with an authorized agency. Recognized Indian Placement Agencies (RIPA) and Special Adoption Agency (SPA) are the agencies which are allowed to make such registrations in India. The prospective adoptive parents can visit the Adoption Coordination Agency in their area where the social worker will explain the process and take you through the formalities, paperwork and general preparation required for registration.</b></p></h5>
    </section>


  </div>

  <div class="col-sm-4"></br>

     <img src="images/homestudy&coun.png" style="width:22%; margin-right:auto; margin-left:auto; display:block; " class=""></br>
  
<section style="box-shadow: 0 6px 8px 0 rgba(0,0,0,0.8); transition: 0.3s; border-radius: 5px; background: #fff; ">

      <h5 style="margin-right:10px;  text-shadow: 2px 2px 5px red; padding-top:10px;"> <p><b><center>Home Study and Counseling</center></b></p></h5>
      <hr>

       <h5 style="font-size:15px; text-indent: 6px; word-spacing:2px; letter-spacing: .2px;  text-decoration: none;  font-family:cursive ; text-align: justify; padding-right: 5px; padding-left: 5px; padding-bottom: 5px;"> 

        <p><b>A social worker for the registration agency will make a visit to the home of the prospective adoptive parent in order to do a home study. The agency might also need the parents to attend counseling sessions in order to understand the motivation, preparation, strengths and weaknesses of the prospective parents. As per CARA regulation, counseling sessions in  the home study needs to be completed the parents to attend counseling sessions in order to  within 3 months from the date of registration.</b></p></h5>
    </section></div>


  <div class="col-sm-4"></br>

     <img src="images/childreferral.png" style="width:30%; margin-right:auto; margin-left:auto; display:block; " class=""></br>
  
<section style="box-shadow: 0 6px 8px 0 rgba(0,0,0,0.8); transition: 0.3s; border-radius: 5px; background: #fff; ">

      <h5 style="margin-right:10px;  text-shadow: 2px 2px 5px red; padding-top:10px;"> <p><b><center>Referral of the Child</center></b></p></h5>
      <hr>

       <h5 style="font-size:15px; text-indent: 6px; word-spacing:2px; letter-spacing: .2px;  text-decoration: none;  font-family:cursive ; text-align: justify; padding-right: 5px; padding-left: 5px; padding-bottom: 5px;"> 

        <p><b>The agency shall intimate the interested couple when-ever there is a child ready for adoption. The agency will share medical reports, physical examination reports and other relevant information with the couple and also allow them to spend time with the child once they are comfortable with the details shared. strongly on preventing harm to children through earlier intervention. As a result, a referral or report can now be made prior to the birth of a child.The Referral Source believed.</b></p></h5>
    </section></div></div>

<div class="row">


  <div class="col-sm-4">
</br>

     <img src="images/acceptanceicon.png" style="width:30%; margin-right:auto; margin-left:auto; display:block; " class=""></br>
  
<section style="box-shadow: 0 6px 8px 0 rgba(0,0,0,0.8); transition: 0.3s; border-radius: 5px; background: #fff; ">

      <h5 style="margin-right:10px;  text-shadow: 2px 2px 5px red; padding-top:10px;"> <p><b><center>Acceptance of Child</center></b></p></h5>
      <hr>

       <h5 style="font-size:15px; text-indent: 6px; word-spacing:2px; letter-spacing: .2px;  text-decoration: none;  font-family:cursive ; text-align: justify; padding-right: 5px; padding-left: 5px; padding-bottom: 5px;"> 

        <p><b>Once the parents are comfortable with a child, they will have to sign a few documents pertaining to acceptance of the child.Acceptance is a daily value that is an important characteristic of who you are, it is a fundamental core value. Acceptance of others and teaching your children acceptance starts with you because as a parent you are most influential human being in your child’s life.</b></p></h5>
    </section>


  </div>




  <div class="col-sm-4">
</br>

     <img src="images/petition.png" style="width:30%; margin-right:auto; margin-left:auto; display:block; " class=""></br>
  
<section style="box-shadow: 0 6px 8px 0 rgba(0,0,0,0.8); transition: 0.3s; border-radius: 5px; background: #fff; ">

      <h5 style="margin-right:10px;  text-shadow: 2px 2px 5px red; padding-top:10px;"> <p><b><center>Filing of Petition</center></b></p></h5>
      <hr>

       <h5 style="font-size:15px; text-indent: 6px; word-spacing:2px; letter-spacing: .2px;  text-decoration: none;  font-family:cursive ; text-align: justify; padding-right: 5px; padding-left: 5px; padding-bottom: 5px;"> 

        <p><b>All necessary documents are submitted to a lawyer who prepares a petition to be presented to the court. Once the petition is ready, the adoptive parents will have to visit the court and sign the petition in front of the court officer.For a government agency, check the agency's website for instructions on where to send or file a petition. ... ” The search usually directs you to the appropriate links.</b></p></h5>
    </section>


  </div>


  <div class="col-sm-4">
</br>

     <img src="images/fostercare1.png" style="width:60%; margin-right:auto; margin-left:auto; display:block; " class=""></br>
  
<section style="box-shadow: 0 6px 8px 0 rgba(0,0,0,0.8); transition: 0.3s; border-radius: 5px; background: #fff; ">

      <h5 style="margin-right:10px;  text-shadow: 2px 2px 5px red; padding-top:10px;"> <p><b><center>Pre-Adoption Foster-care</center></b></p></h5>
      <hr>

       <h5 style=" margin-bottom: 14px; font-size:15px; text-indent: 6px; word-spacing:2px; letter-spacing: .2px;  text-decoration: none;  font-family:cursive ; text-align: justify; padding-right: 5px; padding-left: 5px; padding-bottom: 5px;"> 

        <p><b>Once the petition is signed in the court, the adoptive parents can take the child to a pre-adoption foster care center and understand the habits of the child from the nursing staff before taking the child home.Once the petition is signed in the court, the adoptive parents can take the child to a pre-adoption foster care center and understand the habits of the child  before taking the child home.</b></p></h5>
    </section>


  </div>


<div class="row">


  <div class="col-sm-4">
</br>

     <img src="images/courtorder12.png" style="width:30%; margin-right:auto; margin-left:auto; display:block; " class=""></br>
  
<section style="box-shadow: 0 6px 8px 0 rgba(0,0,0,0.8); transition: 0.3s; border-radius: 5px; background: #fff; ">

      <h5 style="margin-right:10px;  text-shadow: 2px 2px 5px red; padding-top:10px;"> <p><b><center>Court Hearing</center></b></p></h5>
      <hr>

       <h5 style="font-size:15px; text-indent: 6px; word-spacing:2px; letter-spacing: .2px;  text-decoration: none;  font-family:cursive ; text-align: justify; padding-right: 5px; padding-left: 5px; padding-bottom: 5px;"> 

        <p><b>The parents have to attend a court hearing along with the child. The hearing is held in a closed room with a judge. The judge may ask a few questions and will mention the amount which needs to be invested in the name of the child.</b></p></h5>
    </section>


  </div>


<div class="col-sm-4">
</br>

     <img src="images/courthearing12.png" style="width:30%; margin-right:auto; margin-left:auto; display:block; " class=""></br>
  
<section style="box-shadow: 0 6px 8px 0 rgba(0,0,0,0.8); transition: 0.3s; border-radius: 5px; background: #fff; ">

      <h5 style="margin-right:10px;  text-shadow: 2px 2px 5px red; padding-top:10px;"> <p><b><center>Court Order</center></b></p></h5>
      <hr>

       <h5 style="font-size:15px; text-indent: 6px; word-spacing:2px; letter-spacing: .2px;  text-decoration: none;  font-family:cursive ; text-align: justify; padding-right: 5px; padding-left: 5px; padding-bottom: 5px;"> 

        <p><b>Once the receipt of investment made is shown, the judge shall pass the adoption orders.Once the receipt of investment made is shown, the judge shall pass the adoption orders. Such ruling requires or authorizes the carrying out of certain step</b></p></h5>
    </section>


  </div>

<div class="col-sm-4">
</br>

     <img src="images/followup12.png" style="width:26%; margin-right:auto; margin-left:auto; display:block; " class=""></br>
  
<section style="box-shadow: 0 6px 8px 0 rgba(0,0,0,0.8); transition: 0.3s; border-radius: 5px; background: #fff; ">

      <h5 style="margin-right:10px;  text-shadow: 2px 2px 5px red; padding-top:10px;"> <p><b><center>Follow up</center></b></p></h5>
      <hr>

       <h5 style="font-size:15px; text-indent: 6px; word-spacing:2px; letter-spacing: .2px;  text-decoration: none;  font-family:cursive ; text-align: justify; padding-right: 5px; padding-left: 5px; padding-bottom: 5px;"> 

        <p><b>Post completion of the adoption, the agency needs to submit follow up reports to the court on the child’s well-being. This may continue for 1-2 years  a continuation or repetition of something that has already been started or done..</b></p></h5>
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
  </div>



  </div>





<div class="container-fluid">

  <div class="row">


  <div class="col-sm-13">

</br>


<p class="w1"><h3 style="font-size: 4vh; text-indent: 20px; word-spacing:.2vh; letter-spacing:.2vh;  text-decoration: none; text-align:justify; text-align:center; margin:10px; "> Child adoption is seen as an increasing trend in India and across the world. Most adoptions are either because the parents are  not able  to have their own kids or because they want to  <br> support and give a new lease of life to a child who  has been left alone in the world. Adoption is now considered and spoken about freely in the Indian society.</b></h3></p>



 <p><h3 style="font-size: 4vh; text-indent: 20px; word-spacing:.2vh; letter-spacing:.2vh;   text-decoration: none; text-align:justify; text-align:center; margin:10px;">
  In India, as across many other countries of the World, there are rules and regulations which govern the adoption of a child.
</h3></p>
  
<br>
  <h2 style="font-size: 3.8vh;  text-indent: 20px;"><b>1) Who is Eligible to Adopt a Child in India?</b></h2>

</br>
<button type="button" style="margin-left:30px; font-size: 5vh;" class="btn btn-dark" data-toggle="collapse" data-target="#demo"><b>Read More >></b></button>
  <div id="demo" class="collapse">

    <p><h3  style="font-size: 4vh; text-indent:20px;  word-spacing:.2vh; letter-spacing:.2vh;   text-decoration: none; text-align:justify; text-align:center; margin:10px;">In India, the adoption process is monitored by <emp style="color: red;" > <a href="http://cara.nic.in/Parents/document_RI.html">Central Adoption Resource Authority (CARA)</a></emp> which is the nodal agency to monitor and regulate in-country and intra-country adoption and is a part of Ministry of women and child care. Following are the basic conditions which need to be satisfied by the adopting parents in order to be eligible to adopt a child :</h3></p>
</br>
    <h4 style="font-size:3vh; text-indent:5vh;display:flex;flex-direction:column; text-align:; word-spacing:.2vh; letter-spacing: .2vh;  text-decoration:none; text-align:center;  ">
      <li> A child in India can be adopted by an Indian citizen, NRI or a foreign citizen. The procedure of adoption is different for all three.
      </li>
      <li> Any person is eligible to adopt irrespective of their gender or marital status.</li>
    </br>
      <li> In case a couple is adopting a child, they should have completed at least two years of stable marriage and should have a joint consensus for adoption of the child.</li>
      <li> The age difference between the child and the adoptive parents should not be less than 25 years.</li></h4>

</br>
      <h2 style="font-size: 3.8vh;  text-indent: 20px;"><b>2) When can A Child be Eligible To Be Adopted?</b></h2>
    </br>
  <p>
    <h4 style="font-size:3vh; text-indent:6vh; text-align:justify;  word-spacing:.2vh; letter-spacing: .2vh;  text-decoration:none; "> 
      
      <li > As per the guidelines of the Central Government of India, any orphan, abandoned or surrendered child,  declared legally free for adoption by the child welfare committee is eligible for adoption.
      </li></br>
      <li> A child is said to be an orphan when the child is without a legal parent or a guardian or the parents are  not capable of taking care of the child anymore.</li></br>
      <li> A child is considered abandoned on being deserted or unaccompanied by parents or a guardian and the  child welfare committee has declared the child to be abandoned.</li></br>
      <li>A surrendered child is one who has been relinquished on account of physical, social and emotional factors   which are beyond the control of parents or the guardian and is so declared by the child welfare committee.</li></br>
      <li> In order to be adopted, a child needs to be “legally free”. On receipt of an abandoned child, the district Child Protection Unit puts up an alert with the child’s photograph and details state-wide newspapers  and request the local police to trace the parents. The child is considered legally free for adoption only   after the police has given a report stating that the parents of the child are non-traceable .</li>
    </h4>

  </p>
    
</br>

<h2 style="font-size: 3.8vh;  text-indent: 20px;"><b>3) What are the Normal Conditions to be Fulfilled by Parents?</b></h2>

</br>

<p><h3 style="font-size: 4vh; text-indent:20px; word-spacing:.2vh; letter-spacing:.2vh;   text-decoration: none; text-align:justify; text-align:center; margin:10px;">CARA has defined the eligibility criteria for prospective adoptive parents in order to be able to adopt a child. They are as follows:</h3></p>

</br>

<p>
  <h4  style="font-size: 3vh; text-indent:20px; word-spacing:.2vh; letter-spacing:.2vh;    text-decoration: none; text-align:justify; text-align:; margin:10px;">
    
      <li> The prospective adoptive parents need to be physically, emotionally and mentally stable.</li>
      <li> They should be financially stable.</li>
      <li> The prospective parents should not be suffering from any life-threatening diseases.</li>
      <li> Couples with three or more kids are not considered for adoption except in case of special-needs children.</li>
      <li> A single female can adopt a child of any gender.However,a single male is not eligible to adopt a girl child.</li>
      <li> A single parent cannot be more than 55 years of age.</li>
      <li> A couple cannot have a cumulative age of more than 110 years.</li>
      <li> The age of the parents as on date of registration should be as per CARA guidelines in order to be Eligible for adoption.</li>
    </h4>
</p>
</br>

<h2 style="font-size: 3.8vh;  text-indent: 20px;"><b>4) How to <u>Adopt-a-Child</u> in India?</b></h2>
</br>
 <p><h4 style="font-size: 3.2vh; text-indent:20px;  word-spacing:.2vh; letter-spacing:.2vh;    text-decoration: none; text-align:justify; text-align:; margin:10px;">The adoption process in India is governed by multiple laws and adherence to the same is overseen by the Central Adoption Resource Authority.</h4></h4></p>
</br>
  <h3 style="font-size: 3.8vh;  text-indent: 20px;"><b>Step 1 – Registration</b></h3>

  <h5 style="font-size: 3.2vh; text-indent:20px;  word-spacing:.2vh; letter-spacing:.2vh;    text-decoration: none; text-align:justify; text-align:; margin:10px;">Prospective adoptive parents need to get registered with an authorized agency. Recognised Indian Placement Agencies (RIPA) and Special Adoption Agency (SPA) are the agencies which are allowed to make such registrations in India. The prospective adoptive parents can visit the Adoption Coordination Agency in their area where the social worker will explain the process and take you through the formalities, paperwork and general preparation required for registration.</h5>

 <h3 style="font-size: 3.8vh;  text-indent: 20px;"><b>Step 2 – Home Study and Counseling</b></h3>

  <p><h5 style="font-size: 3.2vh; text-indent:20px; word-spacing:.2vh; letter-spacing:.2vh;   text-decoration: none; text-align:justify; text-align:; margin:10px;">A social worker for the registration agency will make a visit to the home of the prospective adoptive parent in order to doa home study. The agency might also need the parents to attend counselling sessions in order to understand the motivation, preparation,strengths and weaknesses of the prospective parents. As per CARA regulation, the home study needs to be completed within 3 months from thedate of registration.</h5></p>

  <p><h5 style="font-size: 3.2vh; text-indent:20px;  word-spacing:.2vh; letter-spacing:.2vh;   text-decoration: none; text-align:justify; text-align:; margin:10px;">
  The conclusion from the home study and counseling sessions is then reported to the honorable court.  </h5>
  </p>

  <h3 style="font-size: 3.8vh;  text-indent: 20px;"><b>Step 3 – Referral of the Child</b></h3>

  <h5 style="font-size: 3.2vh; text-indent:20px;  word-spacing:.2vh; letter-spacing:.2vh;    text-decoration: none; text-align:justify; text-align:; margin:10px;">The agency shall intimate the interested couple when-ever there is a child ready for adoption. The agency will sharemedical reports, physical examination reports and other relevant information with the couple and also allow them to spend time with the child  once they are comfortable with the details shared.</h5>

   <h3 style="font-size: 3.8vh;  text-indent: 20px;"><b>Step 4 – Acceptance of the Child</b></h3>

  <h5 style="font-size: 3.2vh; text-indent:20px;  word-spacing:.2vh; letter-spacing:.2vh;    text-decoration: none; text-align:justify; text-align:; margin:10px;">Once the parents are comfortable with a child, they will have to sign a few documents pertaining to acceptance of the child.</h5>

  <h3 style="font-size: 3.8vh;  text-indent: 20px;"><b>Step 5 – Filing of Petition</b></h3>

  <h5 style="font-size: 3.2vh; text-indent:20px;  word-spacing:.2vh; letter-spacing:.2vh;    text-decoration: none; text-align:justify; text-align:; margin:10px;">All necessary documents are submitted to a lawyer who prepares a  petition to be presented to the court. Once the petition is ready, the adoptive parents will have to visit the court and sign the petition in front of the court officer.</h5>

   <h3 style="font-size: 3.8vh;  text-indent: 20px;"><b>Step 6 – Pre-Adoption Foster Care</b></h3>

  <h5 style="font-size: 3.2vh; text-indent:20px;  word-spacing:.2vh; letter-spacing:.2vh;    text-decoration: none; text-align:justify; text-align:; margin:10px;">Once the petition is signed in the court, the adoptive parents can take the child to a pre-adoption foster care >centre and understand the habits of the child from the nursing staff before taking the child home.</h5>

   <h3 style="font-size: 3.8vh;  text-indent: 20px;"><b>Step 7 – Court Hearing</b></h3>

  <h5 style="font-size: 3.2vh; text-indent:20px;  word-spacing:.2vh; letter-spacing:.2vh;    text-decoration: none; text-align:justify; text-align:; margin:10px;">The parents have to attend a court hearing along with the child. The hearing is held in a closed room with a judge. The judge may ask a few questions and will mention the amount which needs to be invested in the name of the child.</h5>

   <h3 style="font-size: 3.8vh;  text-indent: 20px;"><b>Step 8 – Court Order</b></h3>

  <h5 style="font-size: 3.2vh; text-indent:20px;  word-spacing:.2vh; letter-spacing:.2vh;    text-decoration: none; text-align:justify; text-align:; margin:10px;">Once the receipt of investment made is shown, the judge shall pass the adoption orders.</h5>

  <h3 style="font-size: 3.8vh;  text-indent: 20px;"><b>Step 9: Follow Up</b></h3>

  <h5 style="font-size: 3.2vh; text-indent:20px;  word-spacing:.2vh; letter-spacing:.2vh;    text-decoration: none; text-align:justify; text-align:; margin:10px;">Post completion of the adoption, the agency needs to submit follow up reports to the court on the child’s well-being.This may continue for 1-2 years.</h5>
</br>
   <h2  style="font-size: 3.8vh;  text-indent: 20px;"><b>5) Can Parents Ask for a Specific Child?</b></h2>
</br>
  <p><h5 style="font-size: 3.2vh; text-indent:20px;  word-spacing:.2vh; letter-spacing:.2vh;    text-decoration: none; text-align:justify; text-align:; margin:10px;">The prospective parents cannot ask for the adoption of a specific child, hence if you are onlylooking for newborn baby adoption it may not completely be possible. However, they can give their preferences, which may include :</h5></p>
</br>
 <p>
    <h4 style="font-size: 3vh; text-indent:20px;  word-spacing:.2vh; letter-spacing:.2vh;    text-decoration: none; text-align:justify; text-align:; margin:10px;">
   
      <li> Age</li></br>
      <li>Gender of the child</li></br>
      <li> Skin color</li></br>
      <li>Health condition (parents can specify if they want to adopt a child with a physical or mental disability)</li></br>
      <li>Religion</li></br>
    </h4>

</div>
</div>
</div>
</div>
<hr>


<div class="container-fluid">
<div class="jumbotron">
<h6><center><a href="">copyright@<emp style="color:blue;">CARA</emp><center></h6> 

 


  </div>
</div>




</body>
</html>