<?php

 session_start();

	
?>
<html>
<head>
<title>Registration Page</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://gist.github.com/jeppech/4541577.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<style type="text/css">
	body{
    background-image: url("images/s1.jpeg");
    background-attachment: fixed;
    background-repeat: no-repeat;
    background-position: center;
    background-size: auto;
    background-color: white;
    width: 100%;
    padding-top: 50px;
    margin: auto;
  
    
}
#form{
		width: 330px;
    	height: 620px;
		margin:auto;
		padding-top: 20px;
		border-color: #245B93;
		background-color: whitesmoke;
    	text-decoration: black;
   		opacity: 0.8;
    	color:black;
    	box-sizing: border-box;
    	border-radius: 12px;

}
label{
	margin-left: 5px;
	padding-left: 20px;
}
input{
	margin-left: 10px;
}
#fname{
	margin-left: 30px;
}
#lname{
	margin-left: 32px;
}
#email{
	margin-left: 57px;
}
#mno{
	margin-left: 38px;
}
#female{
	margin-left: 45px;
}
#male{
	margin-left: 13px;
}
#uname1{
	margin-left: 30px;
}
#pwd{
	margin-left: 35px;   
}
.help-block{
	margin-left: 80px;
}
#getdata{
	margin-left: 75px;
}
#data{
	margin-left: 85px;
}
#as{
	color:white ;
}
#registeringas{
	margin-left: 110px;

}
#registeras{
	margin-left: 50px;
}
input .active{
		border-color: blue;
		border-width: 10px;
	}
	#button{
		opacity:1.0;
	}
	#attachment{
		margin-left: 25%;
	}
</style>
</head>
<div class="container">
<div id=title>
<h1 align ="center"><b id="as">Register Yourself</b></h1>
</div>
<div id=form>	
<form method= "POST" class="form-group">
		<div class="form-group">
		<label id="registeringas">Register As</label>
			<select required="required" autofocus="autofocus" id="registeras" name="registeras" onclick="myFunction12()">
  				<option><div id="gettdata">!----Select From Below----!</div></option>
  				<option value="lookingtoadopt">Looking to adopt</option>
  				<option value="pregnantandconsideringadoption">Pregnant and considering adoption</option>
  				<option value="surrogate">Be a Surrogate Mother</option>
  				<option value="philanthropists">Philanthropists</option>
			</select>
	</div>
<div class="form-group">
<center><label> Select Profile Photo:</center>
 <input type="file" name="attachment" id="attachment" required> </label>
<span class="help-block">Family Photo is recommended</span>
</div>
<div class="form-group">
<label for="FirstName:">FirstName:</label>
<input type="text" name="fname" id="fname" class="form-control-sm" required="required" onkeyup="fnameerror()" >
<div id="fnameerror"></div>
</div>
<div class="form-group">
<label for="LastName:">LastName:</label>
<input type="text" name="lname" id="lname" class="form-control-sm" required="required" onkeyup="lnameerror()">
<div id="lnameerror"></div>
</div>
<div class="form-group" id="genderrr">
<label for="gender:">Gender:</label>
              <input type="radio" name="gender" value="female" id="female">
              <label for="female" class="female">Female</label>
              <input type="radio" name="gender" value="male" id="male">
              <label for="male" class="male">Male</label></br>
</div>
<div class="form-group">
<label for="E-mail:">E-mail:</label>
<input type="email"  name="email" id="email" class="form-control-sm" placeholder="xyz@abc.com" required="required" onkeyup="emailerror()">
<div id="emailerror"></div>
</div>
<div class="form-group">
<label for="PhoneNo:">PhoneNo:</label>
<input type="text" name="mno" id="mno" required="required" class="form-control-sm" onkeyup="mnoerror()">
<div id="mnoerror"></div>
</div>
<div class = "form-group">
<label for="UserName:">UserName:</label>
<input type="text" name="uname1" id="uname1" maxlength="35" required="required" placeholder="Built your own UserName" class="form-control-sm" onkeyup="unameerror()">
  <span class="help-block">Enter Username without living space..</span>
  <div id="unameerror"></div>
</div>
<div class="form-group">
<label for="Password:">Password:</label>
<input type="password" name="pwd" id="pwd" required="required" class="form-control-sm" onkeyup="pwderror()">
<div id="pwderror"></div>
</div>
<div class="form-group">
	<label for="Re-enter Password:">Re-Password:</label>
<input type="password" name="rpwd" id="rpwd" required="required" class="form-control-sm" onkeyup="pwdreerror()">
<div id="pwdreerror"></div>
</div>
<div id="button">
	<center>
 <input type="submit" name="submit" class="btn btn-default"></center>     
</div>
<div id="getdata"><h3>Already a user??</h3></div>
<div id="data"><h3><a href="loginform1.php"><h4>Click here to login</h4></a></div>
</form>
</div>
<script type="text/javascript">
		$(".btn" ).click(function(){

                var z = "pregnantandconsideringadoption";
                var w = "surrogate";
                var n = "lookingtoadopt";
                var m = "philanthropists";
                console.log(z);
                console.log(w);
                console.log(n);
                console.log(m);

               var x = document.getElementById("registeras").selectedIndex;
                var y=document.getElementsByTagName("option")[x].value;
                console.log(y);
                if(y == n){

                  function123(n);

                }else if(y == z){

              function45(z);


                }else if(y == w) {

                function57(w);
                }else {

                function79(m);

                }
        

    });
				      	


			function function123(data){

				 		var uname1 = $('#uname1').val();
				      	var pwd = $('#pwd').val();
				      	var rpwd = $('#rpwd').val();
				      	var attachment1 = document.getElementById('attachment');


      					$.ajax({
							url: 'registrationbackend.php',
							type: 'post',
							data: {uname1:uname1, pwd:pwd, rpwd:rpwd, attachment:attachment1},
							success: function(result12){
							console.log(result12);

							var a = "successfull";
							if(a==result12){
								 $(location).attr('href','registertoadopt.php');
							}
						}
					
						});



			}


			function function45(data){

				      	var fname = $('#fname').val();
				      	var lname = $('#lname').val();
      					var email = $('#email').val();
				      	var mno = $('#mno').val();
				      	var uname1 = $('#uname1').val();
				      	var pwd = $('#pwd').val();
				      	var rpwd = $('#rpwd').val();
				     	var gender1= document.getElementsByName("gender");
				     	console.log(attachment1);
				     	 for(i = 0; i < gender1.length; i++) { 
              			 if(gender1[i].checked) 
                		 var g = gender1[i].value;
                		 console.log(g); 
            			}

				$.ajax({
							url: 'registrationbackend.php',
							type: 'POST',
							data: {fname:fname,
								lname:lname, email:email, mno:mno, uname1:uname1, pwd:pwd, rpwd:rpwd, gender:g, b:y , attachment:attachment1},
							success: function(result11){
							console.log(result11);

							var a = "successfull";
							if(a==result11){
								 $(location).attr('href','pregnantandconsideringadoption.php');
							}


						}
					
						});

			}

			function function57(data){

				      	var fname = $('#fname').val();
				      	var lname = $('#lname').val();
      					var email = $('#email').val();
				      	var mno = $('#mno').val();
				      	var uname1 = $('#uname1').val();
				      	var pwd = $('#pwd').val();
				      	var rpwd = $('#rpwd').val();
				     	var gender1= document.getElementsByName("gender");
				     	console.log(attachment1);
				     	 for(i = 0; i < gender1.length; i++) { 
              			 if(gender1[i].checked) 
                		 var g = gender1[i].value;
                		 console.log(g); 
            			}
								$.ajax({
							url: 'registrationbackend.php',
							type: 'post',
							data: {fname:fname,
								lname:lname, email:email, mno:mno, uname1:uname1, pwd:pwd, rpwd:rpwd, gender:g, b:y , attachment:attachment1},
							success: function(result10){
							console.log(result10);

							var a = "successfull";
							if(a==result10){
								 $(location).attr('href','surrogatemotheregistration.php');
							}
						}
						});


			}

			function function79(data){
				      	var fname = $('#fname').val();
				      	var lname = $('#lname').val();
      					var email = $('#email').val();
				      	var mno = $('#mno').val();
				      	var uname1 = $('#uname1').val();
				      	var pwd = $('#pwd').val();
				      	var rpwd = $('#rpwd').val();
				     	var gender1= document.getElementsByName("gender");
				     	console.log(attachment1);
				     	 for(i = 0; i < gender1.length; i++) { 
              			 if(gender1[i].checked) 
                		 var g = gender1[i].value;
                		 console.log(g); 
            			}



						$.ajax({
							url: 'registrationbackend.php',
							type: 'POST',
							data: {fname:fname,
								lname:lname, email:email, mno:mno, uname1:uname1, pwd:pwd, rpwd:rpwd, gender:g, b:y , attachment:attachment1},
							success: function(result9){
							console.log(result9);

							var a = "successfull";
							if(a==result){
								 $(location).attr('href','.php');
							}

						}
					
						});
			}



			function fnameerror()
			{
				      	var fname = $('#fname').val();
				      	console.log(fname);
						$.ajax({
							url: 'registrationbackend.php',
							type: 'POST',
							data: {fname:fname},
							success: function(result8){
						
							$('#fnameerror').html(result8);
						}
					
						});
				
			}

			function lnameerror()
			{
				      	var lname = $('#lname').val();
				      	console.log(lname);
						$.ajax({
							url: 'registrationbackend.php',
							type: 'POST',
							data: {lname:lname},
							success: function(result7){
						
							$('#lnameerror').html(result7);
						}
					
						});
				
			}
			function mnoerror()
			{
				      	var mno = $('#mno').val();
				      	console.log(mno);
						$.ajax({
							url: 'registrationbackend.php',
							type: 'POST',
							data: {mno:mno},
							success: function(result6){
						
							$('#mnoerror').html(result6);
						}
					
						});
				
			}

			function emailerror()
			{
				      	var email = $('#email').val();
				      	console.log(email);
						$.ajax({
							url: 'registrationbackend.php',
							type: 'POST',
							data: {email:email},
							success: function(result5){
						
							$('#emailerror').html(result5);
						}
					
						});
				
			}

			function unameerror()
			{
				      	var uname1 = $('#uname1').val();
				      	console.log(uname1);
						$.ajax({
							url: 'registrationbackend.php',
							type: 'POST',
							data: {uname1:uname1},
							success: function(result4){
						
							$('#unameerror').html(result4);
						}
					
						});
				
			}

			function pwderror()
			{
				      	var pwd = $('#pwd').val();
				      	console.log(pwd);
						$.ajax({
							url: 'registrationbackend.php',
							type: 'POST',
							data: {pwd:pwd},
							success: function(result3){


						
							$('#pwderror').html(result3);

							if(result3=="enter password" && result3=="Too Weak")

							{

								let a =document.getElementById("rpwd");
								a.disabled="disabled";
							}
						}
					
						});


				
			}

			function pwdreerror()
			{
				      	var pwd = $('#pwd').val();
				      	var rpwd = $('#rpwd').val();
				      	console.log(pwd);
				      	console.log(rpwd);
						$.ajax({
							url: 'registrationbackend.php',
							type: 'POST',
							data: {pwd:pwd, rpwd:rpwd},
							success: function(result2){
						
							$('#pwdreerror').html(result2);
						}
					
						});
				
			}

			function myFunction() {
  			var x = document.getElementById("pwd");
  			 if (x.type === "password") {
  				  x.type = "text";
  			} else {
 			   x.type = "password";
  			}
		}


		    function myFunction12() {
      		var x = document.getElementById("registeras").selectedIndex;
      		var y=document.getElementsByTagName("option")[x].value;
      		console.log(y);
      		var z="pregnantandconsideringadoption";
      		var w="surrogate";
      		var n= "lookingtoadopt";
      		var m = "philanthropists";

      		if(n == y){
      			var ac = document.getElementById("fname");
      			var bc = document.getElementById("lname");
      			var cc = document.getElementById("female");
      			var dc = document.getElementById("male");
      			var ec = document.getElementById("mno");
      			var fc = document.getElementById("email");
      			ac.disabled="disabled";
      			bc.disabled="disabled";
      			cc.disabled="disabled";
      			dc.disabled="disabled";
      			ec.disabled="disabled";
      			fc.disabled="disabled";
      		}
      		else if(z == y || w == y){	
      			var ac = document.getElementById("fname");
      			var bc = document.getElementById("lname");
      			var cc = document.getElementById("female");
      			var ec = document.getElementById("mno");
      			var fc = document.getElementById("email");
				var c=document.getElementById("male");
				c.disabled ="disabled";	
				ac.disabled="";
      			bc.disabled="";
      			cc.disabled="";
      			ec.disabled="";
      			fc.disabled="";
      		}
      		else{
      			var ac = document.getElementById("fname");
      			var bc = document.getElementById("lname");
      			var cc = document.getElementById("female");
      			var dc = document.getElementById("male");
      			var ec = document.getElementById("mno");
      			var fc = document.getElementById("email");
      			ac.disabled="";
      			bc.disabled="";
      			cc.disabled="";
      			dc.disabled="";
      			ec.disabled="";
      			fc.disabled="";

      		}
      		$.ajax({
             	url: 'registrationbackend.php',
              	type: 'POST',
              	data: {y:y},
              	success: function(result1){
            
              	$('#gettdata').html(result1);
              	console.log(result1);
            }
          
    });
}


</script>
</div>
</body>
</html>   