<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome Administrator</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style type="text/css">
    body{
      position: absolute;
    }
    #records_contant1{
      visibility: hidden;
      position: relative;
      display: none;
    }
    #records_contant2{
      visibility: hidden;
      position: relative;
      display: none;
    }
    #records_contant3{
      visibility: hidden;
      position: relative;
      display: none;
    }
    #records_contant4{
      visibility: hidden;
      position: relative;
      display: none;
    }
    #mySidenav a {
  position: absolute;
  left: -80px;
  transition: 0.3s;
  padding: 0px;
  width: 160px;
  text-decoration: none;
  font-size: 5px;
  color: white;
  border-radius: 0 5px 5px 0;
  margin-top: 50px;
}

#mySidenav a:hover {
  left: 0;
}

#about {
  top: 20px;
}

#blog {
  top: 130px;
}

#projects {
  top: 270px;
}

#contact {
  top: 380px;
}
#superscriptmessage{
  
  color: red;
  position: absolute;
  font-size: 80%;
  top:40%;
  left: 70%;
}
#superscriptnotification{
  position:absolute;
  color: red;
  border-width: 5px;
  font-size: 80%;
  top:36%;
  left: 60%;
}
h2{
   background-color: red;
}
#displaymessage:hover{

}
.popup {
  position: relative;
  display: inline-block;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* The actual popup */
.popup .popuptext {
  visibility: hidden;
  width: 160px;
  background-color: #555;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 8px 0;
  position: absolute;
  z-index: 1;
  bottom: 125%;
  left: 50%;
  margin-left: -80px;
}

/* Popup arrow */
.popup .popuptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

/* Toggle this class - hide and show the popup */
.popup .show {
  visibility: visible;
  -webkit-animation: fadeIn 1s;
  animation: fadeIn 1s;
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
  from {opacity: 0;} 
  to {opacity: 1;}
}

@keyframes fadeIn {
  from {opacity: 0;}
  to {opacity:1 ;}
}
img{
  max-height: 30px;
  max-width: 30px;
  cursor: pointer;
}
li{
  cursor: pointer;
}
  input{
      border-width: 0;
      border-color: white;
      text-align: center;
 
    }
    textarea{
      border-width: 0px;
      border-color: white;
      text-align: center;
    }

    #lookingtoadoptapplicantform{
      visibility: visible;
      display: grid;
      grid-template-columns: 50% 50%;
      grid-template-areas: 
      "rowone rowtwo"
      "row3 row3"; 
      display: block;
    
 
    }

    #row1{
      grid-area: rowone;
      padding: 5%;
      margin-left: 20%;
      margin-top: 10%;
    }
    #row2{
      grid-area: rowtwo;
      padding: 5%;
        margin-left: 20%;
      margin-top: 10%;
    }
    #row3{
      grid-area: rowthree;
      grid-column-start: 1;
      grid-column-end: 3;
    }
    #pregnantandconsideringapplicationform{
      visibility: hidden;
      display: none;

    }
    #Surrogatemotherapplicationform{
      visibility: hidden;
      display: none;
    }
    #fsfa1{
      visibility: hidden;
      display: none;
    }
      #ssfa1{
      visibility: hidden;
      display: none;
    }
      #tsfa1{
      visibility: hidden;
      display: none;
    }
</style>
</head>
<body>
 <div id="updateModal1" class="modal fade" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <form method="post" enctype="multipart/form-data">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <input type="text" name="fsfa1" id="fsfa1" >
      <input type="text" name="ssfa1" id="ssfa1" >
      <input type="text" name="tsfa1" id="tsfa1" >
      <center><h3>Applicant's Choice Of State</h3></center>
      <h4><center>
        <label>First Choice of State</label>
        <li id="one"></li>
        <label>Second Choice of State</label>
        <li id="two"></li>
        <label>Third Choice of State</label>
        <li id="three"></li>
      </center></h4>
      <div class="modal-body">
      <center><label>Select State</label></center>
      <center><select required="required" autofocus="autofocus" id="registeringas" name="registeringas" onclick="myFunction123()">
        <option id='gettdata1'>!!!Select from below!!!</option>

       
      </select></center>
  </div>
    <div class="form-group">
  </br>
    <center><label>Select City</label></center>
      <center><select required="required" autofocus="autofocus" id="selectas" name="selectas">
        <option id='gettdata1'>!!!Select from below!!!</option>
      </select></center>
      <div id="messagedisplay"></div>


      </div>
       <div class="modal-footer">
                    <button type="button" class="btn btn-default" id="sendbutton" data-dismiss="modal" onclick="sendverification()">Send</button>
                    <input type="hidden" name="hidden_user_id1" id="hidden_user_id1" value="">
        </div>
      </form>
    </div>
  </div>
</div>

   

    <div id="updateModal" class="modal fade" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <form method="post" enctype="multipart/form-data">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
          <div id="lookingtoadoptapplicantform">
      <fieldset id="row1">
        <label><?php     ?></label>
        <label>Information Of Mr.</label>
      <div class="form-group">
        <label>Name</label>
        <input type="text" name="ltaname" id="ltaname" disabled>
      </div>
      <div class="form-group">
        <label>Date Of Birth</label>
        <input type="text" name="ltadob" id="ltadob" disabled>
      </div>
        <div class="form-group">
        <label>Nationality</label>
        <input type="text" name="ltanation" id="ltanation" disabled>
      </div>
      <div class="form-group">
        <label>Occupation</label>
        <input type="text" name="ltaoccu" id="ltaoccu" disabled>
      </div>
      <div class="form-group">
        <label>Annual Income</label>
        <input type="text" name="ltaincome" id="ltaincome" disabled>
      </div>
      <div class="form-group">
        <label>Work Place</label></br>
        <textarea id="ltawork" name="ltawork" disabled></textarea>
      </div>
      </fieldset>
      <fieldset id="row2">
        <label>Information Of Mrs.</label>
      <div class="form-group">
        <label>Name</label>
        <input type="text" name="mrsname" id="mrsname" disabled>
      </div>
      <div class="form-group">
        <label>Date Of Birth</label>
        <input type="text" name="mrsdob" id="mrsdob" disabled>
      </div>
      <div class="form-group">
        <label>Nationality</label>
        <input type="text" name="mrsnation" id="mrsnation" disabled>
      </div>
      <div class="form-group">
        <label>Occupation</label>
        <input type="text" name="mrsoccu" id="mrsoccu" disabled>
      </div>
      <div class="form-group">
        <label>Annual Income</label>
        <input type="text" name="mrsincome" id="mrsincome" disabled>
      </div>
      <div class="form-group">
        <label>Work Place</label></br>
        <textarea id="mrswork" name="mrswork" disabled></textarea>
      </div>
      </fieldset>

      <fieldset id="row3">
    <div id="sub">
        <li>
      <div class="form-group">
        <label>No Of Biological Children</label>
        <input type="text" name="count1" id="count1" size="2" disabled>
      </div>
      </li>
      <li>
      <div class="form-group">
        <label>No of Adopted Children</label>
        <input type="text" name="count2" id="count2" size="2" disabled>
      </div>
      </li>
      <li>
      <div class="form-group">
        <label>Total</label>
        <input type="text" name="count3" id="count3" size="2" disabled>
      </div>
    </li>
    </div>
      <fieldset>
      <h2><center><label id="contact">Contact Details</label></center></h2></br>
      <div class="form-group">
        <center><label>Residence Address</label></center>
        <center><textarea id="residence" name="residence" rows="3" cols="50" disabled></textarea></center>
      </div>
      <li>
      <div class="form-group">
        <label>City</label>
        <input type="text" name="ltacity" id="ltacity" size="15" disabled>
      </div>
      </li>
      <li>
      <div class="form-group">
        <label>State</label>
        <input type="text" name="ltastate" id="ltastate" size="15" disabled>
      </div>
      </li>
      <li>
      <div class="form-group">
        <label>PinCode</label>
        <input type="text" name="ltapincode" id="ltapincode" size="7" disabled>
      </div>
    </li>
    <center>
    <li>
      <div class="form-group">
        <label>Phone No</label>
        <input type="text" name="ltaphnno" id="ltaphnno" size="12" disabled>
      </div>
      </li>
      <li>
      <div class="form-group">
        <label>Mobile No</label>
        <input type="text" name="ltamno" id="ltamno" size="12" disabled>
      </div>
      </li></center>
      <div class="form-group">
        <center><label>E-mail</label></center>
        <center><input type="text" name="ltaemail" id="ltaemail" disabled></center>
      </div>
      </fieldset>

      <fieldset>
        <h2><center><label>Identification Details</label></center></h2></br>
      <div class="form-group">
        <center><label>Pan Detail</label></center>
        <center><input type="text" name="ltapanno" id="ltapanno" disabled></center>
      </div></br>
      </fieldset>
      <fieldset>
      <h2><center><label>Child Preference</label></center></h2></br>
      <li>
      <div class="form-group">
        <label>Gender</label>
        <input type="text" name="ltagender" id="ltagender" size="7" disabled>
      </div>
      </li>
      <li>
      <div class="form-group">
        <label>Child Category</label> 
        <input type="text" name="ltachildcategory" id="ltachildcategory" size="9" disabled>
      </div>
      </li>
      <li>
      <div class="form-group">
        <label>Health Status</label>
        <input type="text" name="ltahealth" id="ltahealth" size="7" disabled>
      </div>
      </li>
      <li>
      <div class="form-group">
        <label>Age</label>
        <input type="text" name="age" id="age" size="4" disabled>
      </div>
    </li>   </br>
    <li>
      <div class="form-group">
        <label>First State for Adoption</label>
        <input type="text" name="fsfa" id="fsfa" disabled>
      </div>
    </li>
    <li>
      <div class="form-group">
        <label>Second State for Adoption</label>
        <input type="text" name="ssfa" id="ssfa" disabled>
      </div>
    </li>
    <li>
      <div class="form-group">
        <label>Third State for Adoption</label>
        <input type="text" name="tsfa" id="tsfa" disabled>
      </div>
    </li>
      <div class="form-group">
        <center><label>Motivation for Adoption</label></center></br>
        <center><textarea name="motivforadopt" id="motivforadopt" rows="3" cols="50" disabled></textarea> </center>
      </div> 
      </fieldset>

      <fieldset id="agency">
        <h2><center><label>Agency Details</label></center></h2>

      <li>
      <div class="form-group">
        <label>State</label>
        <input type="text" name="stateforagency" id="stateforagency" disabled>
      </div>
    </li>
    <li>
      <div class="form-group">
        <label>Agency</label>
        <input type="text" name="agency" id="agency" disabled>
      </div>
    </li>
    <li>
      <div class="form-group">
        <label>Name Of Agency</label>
        <input type="text" name="nameofagency" id="nameofagency" disabled>
      </div>
    </li>
      <div class="form-group">
        <center><label>Address</label></center>
        <center><textarea name="addressofagency" id="addressofagency" rows="3" cols="50" disabled></textarea></center>
      </div>
      </fieldset>
      </fieldset>
    </div>

      <div id="pregnantandconsideringapplicationform">

        <h2><center><label><?php     ?></label></center></h2>
        <li>
        <div class="form-group" id="name1"> 
        <label>Name</label>
        <input type="text" name="name" id="name" disabled>
        </div>
      </li>
      <li>
        <div class="form-group" id="dob3">
        <label id="dob1">Date Of Birth</label>
        <input type="text" name="dob" id="dob" disabled>
        </div>
      </li>
        <li>
          <div class="form-group">
        <label>Date Of Getting Pregnant</label>
        <input type="text" name="dogp" id="dogp" disabled>
        <div class="form-group">
        </li>
        <li>
          <div class="form-group">
        <label>Gender</label>
        <input type="text" name="gender" id="gender" disabled>
      </div>
        </li>
        <li>
          <div class="form-group">
        <label>E-mail</label>
        <input type="text" name="email" id="email" disabled>
      </div>
        </li>
        <li>
          <div class="form-group">
        <label>Phone No</label>
        <input type="text" name="phnno" id="phnno" disabled>
      </div>
        </li>
        <li>
          <div class="form-group">
        <label>Applicant Category</label>
        <input type="text" name="applicantcategory" id="applicantcategory" disabled>
      </div>
        </li>
        <li>
        <div class="form-group">
        <label>Have Had any child before?</label>
        <input type="text" name="haveyouhad" id="haveyouhad" disabled>
      </div>
    </li>
      <div class="form-group">
        <center><label>Reason for consuidering Adoption</label></center></br>
        <center><textarea id="reasonforconsidering" name="reasonforconsidering" rows="3" cols="50" disabled></textarea></center>
      </div>
      </div>

      <div id="Surrogatemotherapplicationform">
        <label><?php     ?></label>
        <div class="form-group">
        <label>Name</label>
        <input type="text" name="surrogatename" id="surrogatename" disabled>
      </div>
      <div class="form-group">
        <label>Date Of Birth</label>
        <input type="text" name="surrogatedateofbirth" id="surrogatedateofbirth" disabled>
      </div>
      <div class="form-group">
        <label>Citizenship</label>
        <input type="text" name="citizenship" id="citizenship" disabled>
      </div>
      <div class="form-group">
        <label>Gender</label>
        <input type="text" name="surrogategender" id="surrogategender" disabled>
      </div>
      <div class="form-group">
        <label>E-mail</label>
        <input type="text" name="surrogateemail" id="surrogateemail" disabled>
      </div>
      <div class="form-group">
        <label>Phone No</label>
        <input type="text" name="surrogatephnno" id="surrogatephnno" disabled>
      </div>
      <div class="form-group">
        <label>Do YOu Smoke??</label>
        <input type="text" name="q0" id="q0" disabled>
      </div>
      <div class="form-group">
        <label>Height</label>
        <input type="text" name="height" id="height" disabled>
      </div>
      <div class="form-group">
        <label>Weight</label>
        <input type="text" name="weight" id="weight" disabled>
      </div>
      <div class="form-group">
        <label>Have you given birth atleast one child that you are raising?</label>
        <input type="text" name="q1" id="q1" disabled>
      </div>
      <div class="form-group">
        <label>Have you any new tatto or pierciing on your body within these 12 months?</label>
        <input type="text" name="q2" id="q2" disabled>
      </div>
      <div class="form-group">
        <label>Do you have a healthy BMI, considered by the doctor?</label>
        <input type="text" name="q3" id="q3" disabled>
      </div>
      <div class="form-group">
        <label>Have you had any major complications in your previous pregnanacies?</label>
        <input type="text" name="q4" id="q4" disabled>
      </div>
      <div class="form-group">
        <label>Are you on any anti-depressents or anti-anxiety medication in last 12 months?</label>
        <input type="text" name="q5" id="q5" disabled>
      </div>
      <div class="form-group">
        <label>Have you gone through surrogacy before?</label>
        <input type="text" name="q6" id="q6" disabled>
      </div>
      <div class="form-group">
        <label>What made you think to be a surrogate mother?</label>
        <input type="text" name="q7" id="q7" disabled>
      </div>
      </div>
      </div>
        <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
          </form>
      </div>
    </div>
</div>

<div id="container">
	<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container-fluid">
    	<div class="navbar-header">
      		<a class="navbar-brand" href="#">Adopt-a-Child</a>
    	</div>
	   	<ul class="nav navbar-nav">
      	<li class="active"><a href="adminpanel.php">Home</a></li>
        <li><a href="application.php">Applications</a></li>
      	<li>
        <div class="dropdown">
        <img src="images/notification.webp" alt="Notification" data-toggle="dropdown" style="padding-top: 2px; margin-top:7px; margin-left: 10px;"><h2><sup id="superscriptnotification"></sup></h2>
        <ul class="dropdown-menu harshiv">
          <li id="Notification1"> </li>
          <li><a href="adminmessage.php">Show More</a></li>  
        </ul>
        </div></li>
        <li>
        <div class="dropdown">
      <img src="images/message.png" data-toggle="dropdown" alt="message" style="padding-top: 5px; margin-top:7px; margin-left: 10px; margin-right: 5px;" ><h2><sup id="superscriptmessage"></sup></h2>
        <ul class="dropdown-menu">
          <li><input type="hidden" name="hidden" id="hidden" value=""><div id="displaymessage" style="cursor: pointer;"> </div></li>
          <li><a href="adminmessage.php" onload="">Show More</a></li>  
        </ul>
        </div></li>
        <?php 
      if(!empty($_SESSION['uname4'])){?>
         <li><a href="logout.php">Logout</a></li>
         <li id="uname1" style="margin-top: 3%;"><?php echo "WELCOME"." ".$_SESSION['uname4']; ?></li>
         <?php 
      }
      ?>
      </ul>
  </div>
</nav>
</br>
</br>
</br>
<div id="mySidenav" class="sidenav">
<a href="#" id="about">
<div id="registered_user1">
<h3><button class="btn-danger" onclick="showregistered()" ondblclick="hideregistered()">Registered User for adoption</button></h3>
</div>
</a>
<a href="#" id="blog">
<div id="registered_user2">
<h3><button class="btn-success" onclick="showregistered1()" ondblclick="hideregistered1()">Registered for considering adoption</button></h3>
</div>
</a>
<a href="#" id="projects">
<div id="registered_user3">
<h3><button class="btn-warning" onclick="showregistered2()" ondblclick="hideregistered2()">Registered User for surrogacy</button></h3>
</a>
<a href="#" id="contact">
<div id="registered_user4">
<h3>
<button class="btn-primary" onclick="showregistered3()" ondblclick="hideregistered3()">Registered User as philanthropists </button></h3>
</a>
</div>
</div>
<div style="margin-left:160px;">
 <div id="records_contant1">
  
</div>  
 <div id="records_contant2">
  
</div>  
 <div id="records_contant3">
  
</div>  
 <div id="records_contant4">
  
</div>  
</div>
</div>
  <script type="text/javascript">

    $(document).ready(function(){
      readRecords();
      readRecords1();
      readRecords2();
      readRecords3();
      checkmessage();
      checksubscriptmessage();
      checknotification();
      checknotificationsuperscript();
    $('#selectas').change(function(){
    var data = $(this).val();
    console.log(data);

        $.ajax({
          url: 'adminbackend.php',
          type: 'POST',
          data: {data:data},
          success: function(result){
              console.log(result);
        }
          
    });
  });


    });

    function readRecords(){
        var readrecord ="readrecord";
        $.ajax({
          url:"backend1.php",
          type:'post',
          data:{readrecord:readrecord}, 
          success:function(data,status){
            console.log(data);
            $('#records_contant1').html(data);
          }
        });
      }
    function readRecords1(){
        var readrecord1 ="readrecord1";
        $.ajax({
          url:"backend1.php",
          type:'post',
          data:{readrecord1:readrecord1}, 
          success:function(data,status){
            $('#records_contant2').html(data);
          }
        });
      }
    function readRecords2(){
        var readrecord2 ="readrecord2";
        $.ajax({
          url:"backend1.php",
          type:'post',
          data:{readrecord2:readrecord2}, 
          success:function(data,status){
            $('#records_contant3').html(data);
          }
        });
      }
    function readRecords3(){
        var readrecord3 ="readrecord3";
        $.ajax({
          url:"backend1.php",
          type:'post',
          data:{readrecord3:readrecord3}, 
          success:function(data,status){
            $('#records_contant4').html(data);
          }
        });
      }
    function showregistered(){
        document.getElementById("records_contant1").style.display="block";
        document.getElementById("records_contant1").style.visibility="visible";
      }

    function hideregistered(){
        document.getElementById("records_contant1").style.display="none";
        document.getElementById("records_contant1").style.visibility="hidden";
      }
    function showregistered1(){
        document.getElementById("records_contant2").style.display="block";
        document.getElementById("records_contant2").style.visibility="visible";
      }

    function hideregistered1(){
        document.getElementById("records_contant2").style.display="none";
        document.getElementById("records_contant2").style.visibility="hidden";
      }
    function showregistered2(){
        document.getElementById("records_contant3").style.display="block";
        document.getElementById("records_contant3").style.visibility="visible";
      }

    function hideregistered2(){
        document.getElementById("records_contant3").style.display="none";
        document.getElementById("records_contant3").style.visibility="hidden";
      }
    function showregistered3(){
        document.getElementById("records_contant4").style.display="block";
        document.getElementById("records_contant4").style.visibility="visible";
      }

    function hideregistered3(){
        document.getElementById("records_contant4").style.display="none";
        document.getElementById("records_contant4").style.visibility="hidden";
      }
    function checkmessage() {
         var readrecord5 ="readrecord5";
      // body...
          $.ajax({
          url:"backend1.php",
          type:'post',
          data:{readrecord5:readrecord5}, 
          success:function(data,status){
            var user = JSON.parse(data);
            $('#displaymessage').html(user.message);
            
          }
        });
      }
      function checksubscriptmessage() {
         var readrecord77="readrecord77";
      // body...
          $.ajax({
          url:"backend1.php",
          type:'post',
          data:{readrecord77:readrecord77}, 
          success:function(data,status){
            console.log(data);
            if(data > 0){
            $('#superscriptmessage').html(data);
          }
          }
        });
      }
      function checknotificationsuperscript() {
         var readrecord7 ="readrecord7";
      // body...
          $.ajax({
          url:"backend1.php",
          type:'post',
          data:{readrecord7:readrecord7}, 
          success:function(data,status){
            console.log(data);
            if(data > 0){
            $('#superscriptnotification').html(data);
          }
        }
        });
      }
    function checknotification() {
         var readrecord6 ="readrecord6";
      // body...
          $.ajax({
          url:"backend1.php",
          type:'post',
          data:{readrecord6:readrecord6}, 
          success:function(data,status){
               $('.harshiv').html(data); 
          }
        });
      }
      function deletevalue(value){
      var id1 = value;
      console.log(id1);
      var conf = confirm("are you sure");
      if (conf==true)
      {
        $.ajax({
         url:"backend1.php",
          type:'post',
          data: {value1:id1},
          success:function(data,status){
              readRecords3();
              }

      });
     }
   }

   function traversemessagepanel(){
    $(location).attr('href','adminmessage.php');


   }

   function traverseapplicationpanel(){
    $(location).attr('href','application.php');


   }


   function checklookingtoadopt(data){
      var id = data;
      console.log(id);
      $.ajax({
        url:"applicationbackend.php",
        type:"post",
        data:{id:id},
        success:function(data){
          var user = JSON.parse(data);
          $('#ltaname').val(user.mrname);
          $('#ltadob').val(user.mrdateofbirth);
          $('#ltanation').val(user.mrnationality);
          $('#ltaoccu').val(user.mroccupation);
          $('#ltaincome').val(user.mrannualincome);
          $('#ltawork').val(user.mrplaceofwork);
          $('#mrsname').val(user.mrsname);
          $('#mrsdob').val(user.mrsdateofbirth);
          $('#mrsnation').val(user.mrsnationality);
          $('#mrsoccu').val(user.mrsoccupation);
          $('#mrsincome').val(user.mrsannualincome);
          $('#mrswork').val(user.mrspaceofwork);
          $('#count1').val(user.noofbiologicalchildren);
          $('#count2').val(user.noofadoptedchildren);
          $('#count3').val(user.total);
          $('#residence').val(user.residenceaddress);
          $('#ltacity').val(user.city);
          $('#ltastate').val(user.state);
          $('#ltapincode').val(user.pincode);
          $('#ltaphnno').val(user.phnno);
          $('#ltamno').val(user.mobilenumber);
          $('#ltaemail').val(user.email0);
          $('#ltapanno').val(user.pancard);
          $('#ltagender').val(user.gender1);
          $('#ltachildcategory').val(user.childcategory);
          $('#ltahealth').val(user.healthstatus);
          $('#age').val(user.age);
          $('#fsfa').val(user.firststageofadoption);
          $('#ssfa').val(user.secondstageofadoption);
          $('#tsfa').val(user.thirdstageofadoption);
          $('#motivforadopt').val(user.motivationforadoption);
          $('#stateforagency').val(user.stateagency);
          $('#agency').val(user.agency);
          $('#nameofagency').val(user.nameoftheagency);
          $('#addressofagency').val(user.agencyaddress);
          $('#hidden_user_id').val(user.id);

        }
      });
      document.getElementById('lookingtoadoptapplicantform').style.visibility = "visible";
      document.getElementById('lookingtoadoptapplicantform').style.display = "block";
      document.getElementById('Surrogatemotherapplicationform').style.visibility = "hidden";
      document.getElementById('Surrogatemotherapplicationform').style.display = "none";
      document.getElementById('pregnantandconsideringapplicationform').style.visibility = "hidden";
      document.getElementById('pregnantandconsideringapplicationform').style.display = "none";
        $("#updateModal").modal("show");
    }

      function checksurrogate(data){
      var id1 = data;
      console.log(id1);
      $.ajax({
        url:"applicationbackend.php",
        type:"post",
        data:{id1:id1},
        success:function(data){
          var user = JSON.parse(data);
          var firstname = user.firstname;
          var space = " ";
          var lastname = user.lastname;
          var fullname = firstname.concat(space,lastname);
          console.log(fullname);
          $('#surrogatename').val(fullname);
          $('#surrogatedateofbirth').val(user.dateofbirth);
          $('#citizenship').val(user.citizenship);
          $('#surrogategender').val(user.Gender);
          $('#surrogateemail').val(user.email);
          $('#surrogatephnno').val(user.mobileno);
          $('#q0').val(user.doyousmoke);
          $('#height').val(user.height);
          $('#weight').val(user.weight);
          $('#q1').val(user.q1);
          $('#q2').val(user.q2);
          $('#q3').val(user.q3);
          $('#q4').val(user.q4);
          $('#q5').val(user.q5);
          $('#q6').val(user.q6);
          $('#q7').val(user.q7);
          $('#hidden_user_id').val(id1);
        }
      });
      document.getElementById('Surrogatemotherapplicationform').style.visibility = "visible";
      document.getElementById('Surrogatemotherapplicationform').style.display = "block";
      document.getElementById('lookingtoadoptapplicantform').style.visibility = "hidden";
      document.getElementById('lookingtoadoptapplicantform').style.display = "none";
      document.getElementById('pregnantandconsideringapplicationform').style.visibility = "hidden";
      document.getElementById('pregnantandconsideringapplicationform').style.display = "none";
      $("#updateModal").modal("show");

    }

      function checkpregnant(data){
      var readrecord2 = "readrecord2";
      var id2 = data;
      console.log(id2);
      $.ajax({
        url:"applicationbackend.php",
        type:"post",
        data:{id2:id2},
        success:function(data){
          var user = JSON.parse(data);
          var firstname = user.firstname;
          var space = " ";
          var lastname = user.lastname;
          var fullname = firstname.concat(space,lastname);
          $('#name').val(fullname);
          $('#dob').val(user.dateofbirth);
          $('#dogp').val(user.dateofgettingpregnant);
          $('#gender').val(user.Gender);
          $('#email').val(user.email);
          $('#phnno').val(user.mobileno);
          $('#applicantcategory').val(user.applicantcategory);
          $('#haveyouhad').val(user.haveyouhadanychildbefore);
          $('#reasonforconsidering').val(user.reasonforconsideringadoption);
          $('#hidden_user_id').val(id2);
        }
      });
      document.getElementById('pregnantandconsideringapplicationform').style.visibility = "visible";
      document.getElementById('pregnantandconsideringapplicationform').style.display = "block";
      document.getElementById('lookingtoadoptapplicantform').style.visibility = "hidden";
      document.getElementById('lookingtoadoptapplicantform').style.display = "none";
      document.getElementById('Surrogatemotherapplicationform').style.visibility = "hidden";
      document.getElementById('Surrogatemotherapplicationform').style.display = "none";
        $("#updateModal").modal("show");


    }
 function sendforverification(value){

   var id5 = value;
      console.log(id5);
      $.ajax({
        url:"applicationbackend.php",
        type:"post",
        data:{id5:id5},
        success:function(data){

          var user = JSON.parse(data);
          console.log(user.firststageofadoption);
          console.log(user.secondstageofadoption);
          console.log(user.thirdstageofadoption);
          console.log(user.id);
          $('#fsfa1').val(user.firststageofadoption);
          $('#ssfa1').val(user.secondstageofadoption);
          $('#tsfa1').val(user.thirdstageofadoption);
          $('#one').html(user.firststageofadoption);
          $('#two').html(user.secondstageofadoption);
          $('#three').html(user.thirdstageofadoption);
          $('#hidden_user_id1').val(user.id);
          passvalue();
        }

      });
       $("#updateModal1").modal("show");


 }

 function passvalue(){

      var fsfa1 = $('#fsfa1').val();
      var ssfa1 = $('#ssfa1').val();
      var tsfa1 = $('#tsfa1').val();
      console.log(fsfa1);
      console.log(ssfa1);
      console.log(tsfa1);
            $.ajax({
        url:"adminbackend.php",
        type:"post",
        data:{fsfa1:fsfa1, ssfa1:ssfa1, tsfa1:tsfa1},
        success:function(data){
          console.log(data);
           $('#registeringas').html(data);
        }

      });
 }
 function myFunction123(){
    var x = document.getElementById("registeringas").selectedIndex;
    var w=document.getElementsByTagName("option")[x].value;
    console.log(w);
    $.ajax({
          url: 'policebackend.php',
          type: 'POST',
          data: {n:w},
          success: function(result){
              console.log(result);
              directingvalue(result);
        }
          
    });
}

function directingvalue(value){

  var x = value;
    $.ajax({
          url: 'policebackend.php',
          type: 'POST',
          data: {x:x},
          success: function(result){
              console.log(result);
              $('#selectas').html(result);
        }
          
    });
}

function sendverification(){
  var id = $('#hidden_user_id1').val();
  var hn = document.getElementById("selectas").value;
  console.log(id);
  console.log(hn);
      $.ajax({
          url: 'adminbackend.php',
          type: 'POST',
          data: {id:id, hn:hn},
          success: function(result){
              console.log(result);
              $('#messagedisplay').html(result);
              readRecords();
    
        }
          
    });


}



      </script>	
</body>
</html>