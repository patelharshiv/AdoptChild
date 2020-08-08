<?php
session_start();
if(!empty($_SESSION['countinfo'])){
  unset($_SESSION['countinfo']);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>surrogacy</title>


	 <link rel="stylesheet" type="text/css" href="../in-style.css">
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



<link rel="stylesheet" href="surstyle.css">



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



<div class="container">

<div class="row">

	
	 <div class="col-sm-12" style="background-color: white; border:black; text-shadow: 2px 2px 5px lightpink"><h1 style="font-size:7.5vh; text-align: center;">What do you mean by <a href="#">Surrogacy</a> ???</h1>
   
	
          </div>

</div>

  <div class="row">
    
    <div class="col-sm-12 border-dark " style="background-color: lightgrey; border:#333 solid .5px; border-radius: 2px; font-size: 3vh; border-radius: .5vh; align-items: center; align-content: justify; word-spacing: .2vh; letter-spacing: .2vh;">
    	<p>Surrogacy is an arrangement, often supported by a legal agreement, whereby a woman (the surrogate mother) agrees to bear a child for another person or persons, who will become the child's parent(s) after birth.</p></br>

<p> People may seek a surrogacy arrangement when pregnancy is medically impossible, when pregnancy risks are too dangerous for the intended mother, or when a single man or a male couple wish to have a child. Surrogacy is considered one of many assisted reproductive technologies. </p></br>


<p>In surrogacy arrangements, monetary compensation may or may not be involved. Receiving money for the arrangement is known as commercial surrogacy. The legality and cost of surrogacy varies widely between jurisdictions, sometimes resulting in problematic international or interstate surrogacy arrangements. Couples seeking a surrogacy arrangement in a country where it is banned sometimes travel to a jurisdiction that permits it. In some countries, surrogacy is only legal if money does not exchange hands. (See surrogacy laws by country and fertility tourism.)</p></br>


<p> Where commercial surrogacy is legal, couples may use the help of third-party agencies to assist in the process of surrogacy by finding a surrogate and arranging a surrogacy contract with her. These agencies often screen surrogates' psychological and other medical tests to ensure the best chance of healthy gestation and delivery. They also usually facilitate all legal matters concerning the intended parents and the surrogate.</p>
</br>

<p>Surrogacy may be either traditional or gestational, which are differentiated by the genetic origin of the egg. Gestational surrogacy tends to be more common than traditional surrogacy and is considered less legally complex.</p>
</br>
<h2 style="color:black; text-decoration:none;word-spacing: .2vh; letter-spacing: .2vh; align-content: justify; text-shadow: 1px 2px 3px red;">Traditional : </h2></br>

<p>A traditional surrogacy (also known as partial, natural, or straight surrogacy) is one where the surrogate's egg is fertilised in vivo by the intended father's or a donor's sperm. Insemination of the surrogate can be either through natural or artificial insemination. Using the sperm of a donor results in a child that is not genetically related to the intended parent(s). If the intended father's sperm is used in the insemination, the resulting child is genetically related to both the intended father and the surrogate.</p>

</br>
<p>In some cases, insemination may be performed privately by the parties without the intervention of a doctor or physician. In some jurisdictions, the intended parents using donor sperm need to go through an adoption process to have legal parental rights of the resulting child. Many fertility centres that provide for surrogacy assist the parties through the legal process.</p>
</br>


<h2 style="color:black; text-decoration:none;word-spacing: .2vh; letter-spacing: .2vh; align-content: justify; text-shadow: 1px 2px 3px red;">Gestational</h2>

</br>
<p>
Gestational surrogacy (also known as host or full surrogacy) was first achieved in April 1986. It takes place when an embryo created by in vitro fertilization (IVF) technology is implanted in a surrogate, sometimes called a gestational carrier. Gestational surrogacy has several forms, and in each form, the resulting child is genetically unrelated to the surrogate:

<h4 style="font-size:20px;">
</br>
&#9654; The embryo is created using the intended father's sperm and the intended mother's eggs;</br>
&#9654; The embryo is created using the intended father's sperm and a donor egg;</br>
&#9654; The embryo is created using the intended mother's egg and donor sperm.</br>
</h4>
</p>
</br>


<h2 style="color:black; text-decoration:none;word-spacing: .2vh; letter-spacing: .2vh; align-content: justify; text-shadow: 1px 2px 3px red;">Risks</h2>
</br>
<p>
The embryo implanted in gestational surrogacy faces the same risks as anyone using IVF would. Preimplantation risks of the embryo include unintentional epigenetic effects, influence of media which the embryo is cultured on, and undesirable consequences of invasive manipulation of the embryo. Often, multiple embryos are transferred to increase the chance of implantation, and if multiple gestations occur, both the surrogate and the embryos face higher risks of complications.</p>
</br>
<p>
Gestational surrogates have a smaller chance of having hypertensive disorder during pregnancy compared to mothers pregnant by oocyte donation. This is possibly because surrogate mothers tend to be healthier and more fertile than women who use oocyte donation.  Surrogate mothers also have low rates of placenta praevia / placental abruptions.
</p>
</br>

<h2 style="color:black; text-decoration:none;word-spacing: .2vh; letter-spacing: .2vh; align-content: justify; text-shadow: 1px 2px 3px red;">Outcomes</h2>
</br>
<p>Among gestational surrogacy arrangements, between 19%-33% of gestational surrogates will successfully become pregnant from an embryo transfer. Of these cases, 30-70% will successfully allow the intended parent(s) to become parent(s) of the resulting child.</br>
</br>

Gestational surrogates have a smaller chance of having hypertensive disorder during pregnancy compared to mothers pregnant by oocyte donation. This is possibly because surrogate mothers tend to be healthier and more fertile than women who use oocyte donation.  Surrogate mothers also have low rates of placenta praevia / placental abruptions.
</p>


</br>

<h2 style="color:black; text-decoration:none;word-spacing: .2vh; letter-spacing: .2vh; align-content: justify; text-shadow: 1px 2px 3px red;">Indications for surrogacy</h2>
</br>
<p>Opting for surrogacy is often a choice made when women are unable to carry children on their own. This can be for a number of reasons, including an abnormal uterus or a complete absence of a uterus either congenitally  or post-hysterectomy. Women may have a hysterectomy due to complications in childbirth such as heavy bleeding or a ruptured uterus. Medical diseases such as cervical cancer or endometrial cancer can also lead to surgical removal of the uterus. Past implantation failures, history of multiple miscarriages, or concurrent severe heart or renal conditions that can make pregnancy harmful may also prompt women to consider surrogacy. The biological impossibility of single men and same-sex couples having a baby also may indicate surrogacy as an option.

</p>

</br>

<h2 style="color:black; text-decoration:none;word-spacing: .2vh; letter-spacing: .2vh; align-content: justify; text-shadow: 1px 2px 3px red;">Psychological concerns :</h2>
</br>

<p><h2 style="color:black; text-decoration:none;word-spacing: .2vh; letter-spacing: .2vh; align-content: justify; text-shadow: 1px 2px 3px red;"> 1) Surrogate</h2>
</br>
Anthropological studies of surrogates have shown that surrogates engage in various distancing techniques throughout the surrogate pregnancy so as to ensure that they do not become emotionally attached to the baby. Many surrogates intentionally try to foster the development of emotional attachment between the intended mother and the surrogate child.
Some surrogates describe feeling empowered by the experience.

<br>
<br>
Although gestational surrogates generally report being satisfied with their experience as surrogates, there are cases in which they are not. Unmet expectations are associated with dissatisfaction. Some women did not feel a certain level of closeness with the couple and others did not feel respected by the couple. Some gestational surrogates report emotional distress during the process of surrogacy. There may be a lack of access to therapy and emotional support through the surrogate process.
<br>
<br>
Gestational surrogates may struggle with postpartum depression and issues with relinquishing the child to their intended parents.Immediate postpartum depression has been observed in gestational surrogates at a rate of 0-20%. Some surrogates report negative feelings with relinquishing rights to the child immediately after birth, but most negative feelings resolve after some time.
</p>

</br>

<h2 style="color:black; text-decoration:none;word-spacing: .2vh; letter-spacing: .2vh; align-content: justify; text-shadow: 1px 2px 3px red;">2) Child and parents</h2>
</br>
<p>A systematic review of 55 studies examining the outcomes for surrogacy for surrogate mothers and resulting families showed that there were no major psychological differences in children up to the age of 10 years old that were born from surrogacy compared to those children born from other assisted reproductive technology or those children conceived naturally.
<br><br>
Gay men who have become fathers using surrogacy have reported similar experiences to those as same sex couples who have used surrogacy, including their relationships both their child and their surrogate.
<br>
<br>
 At age two, parents through surrogacy showed more positive mother–child relationships and less parenting stress on the part of fathers than their natural conception counterparts; there were no differences in child development between these two groups. At age seven, the surrogacy and egg donation families showed less positive mother–child interaction than the natural conception families, but there were no differences in maternal positive or negative attitudes or child adjustment. The researchers concluded that the surrogacy families continued to function well.
</p>


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
</br>

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



</body>
</html>