<?php

?>
<!DOCTYPE html>
<html>
<head>
	<title>Applications are here</title>

<!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style type="text/css">
  	*{
  		margin: 0;
  		padding:0;
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
 li{
  		display: inline;
  		list-style-type: none;
  		margin-top: 2%;
  	}
  img{
  max-height: 30px;
  max-width: 30px;
  cursor: pointer;
}
.container{
	margin-top: 3%;
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

  </style>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container-fluid">
    	<div class="navbar-header">
      		<a class="navbar-brand" href="#">Adopt-a-Child</a>
    	</div>
	   	<ul class="nav navbar-nav">
      	<li><a href="adminpanel.php">Home</a></li>
        <li class="active"><a href="application.php">Applications</a></li>
      	<li>
        <div class="dropdown">
        <img src="images/notification.webp" alt="Notification" data-toggle="dropdown" style="padding-top: 2px; margin-top:7px; margin-left: 10px;"><h4><sup id="superscriptnotification"></sup></h4>
        <ul class="dropdown-menu">
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
      </ul>
  </div>
</nav>

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
          <button type="button" class="btn btn-default" data-dismiss="modal" onclick="function143()">Approve</button>
               <input type="hidden" name="" id="hidden_user_id">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
        	</form>
      </div>
    </div>
</div>



	<div class="container">
			<div id="lookingtoadopt">
				<h1>Application by applicants looking to adopt</h1>
			<div id="lookingtoadoptlist"></div>
			</div>

			<div id="Surrogatemother">
				<h1>Application by applicants for being a surrogate mother</h1>
			<div id="surrogatemotherlist"></div>
			</div>


			<div id="pregnantandconsideringadoption1">
				<h1>Application by applicants considering adoption</h1>
			<div id="pregnantandconsideringadoption"></div>
			</div>

	</div>







	<script type="text/javascript">
		$(document).ready(function(){
			fetchlookingtoadopt();
			fetchsurrogate();
			fetchpregnant();
		checkmessage();
      checksubscriptmessage();
      checknotification();
      checknotificationsuperscript();
		});

		function function143(){

					var ltaname = $('#ltaname').val();
					var name = $('#name').val();
					var surrogatename = $('#surrogatename').val();

				 if(ltaname != null && ltaname != '') {
				var userid=$('#hidden_user_id').val();
		        console.log(userid);
				var readrecord57 = "readrecord57";
				$.ajax({
				url:"applicationbackend.php",
				type:"post",
				data:{readrecord57:readrecord57, userid1:userid},
				success:function(data){
					console.log(data);
					if(data == "Success"){
						fetchlookingtoadopt();
					}
				}


			});

			}
				else if(name != null && name != '') {
				var readrecord58 = "readrecord58";
				var userid=$('#hidden_user_id').val();
		        console.log(userid);
				$.ajax({
				url:"applicationbackend.php",
				type:"post",
				data:{readrecord58:readrecord58, userid2:userid},
				success:function(data){
					console.log(data);
							if(data == "Success"){
						fetchpregnant();
					}
		
				}


			});

			}
			else{
				var readrecord59 = "readrecord59";
				var userid=$('#hidden_user_id').val();
		        console.log(userid);
				$.ajax({
				url:"applicationbackend.php",
				type:"post",
				data:{readrecord59:readrecord59,userid3:userid},
				success:function(data){
					console.log(data);
							if(data == "Success"){
						fetchsurrogate();
					}
		
				}


			});

			}


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
					$('#hidden_user_id').val(id);

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

		function fetchlookingtoadopt(){
		var readrecord1 = "readrecord1";

			$.ajax({
				url:"applicationbackend.php",
				type:"post",
				data:{readrecord1:readrecord1},
				success:function(data){
					console.log(data);
					$('#lookingtoadoptlist').html(data);
				}


			});	
		}

		function fetchsurrogate(){
			var readrecord2 = "readrecord2";

			$.ajax({
				url:"applicationbackend.php",
				type:"post",
				data:{readrecord2:readrecord2},
				success:function(data){
					console.log(data);
					$('#surrogatemotherlist').html(data);
				}


			});
		}

		function fetchpregnant(){
			var readrecord3 = "readrecord3";

			$.ajax({
				url:"applicationbackend.php",
				type:"post",
				data:{readrecord3:readrecord3},
				success:function(data){
					console.log(data);
						$('#pregnantandconsideringadoption').html(data);
				}


			});
		}
		  function checkmessage() {
         var readrecord5 ="readrecord5";
      // body...
          $.ajax({
          url:"applicationbackend.php",
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
          url:"applicationbackend.php",
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
          url:"applicationbackend.php",
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
          url:"applicationbackend.php",
          type:'post',
          data:{readrecord6:readrecord6}, 
          success:function(data,status){
               $('.harshiv').html(data);
          }
        });
      }
  
	</script>
</body>
</html>