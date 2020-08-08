<?php

 session_unset();



 session_start();

?>
<html>
<head>
<title>Registration Page</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
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
    	height: 130%;
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
	margin-left: 30px;
}
#fnameerror{
	color: red;
}
#lnameerror{
	color: red;
}
#emailerror{
	color:red;
}
#unameerror{
	color:red;
}
#mnoerror{
	color:red;
}
#pwderror{
	color:red;
}
#pwdreerror{
	color: red;
}
#attachmenterror{
	color: red;
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
<form method= "POST" class="form-group" enctype="multipart/form-data" id="form1">
		<div class="form-group">
		<label id="registeringas">Register As</label>
			<select required="required" autofocus="autofocus" id="registeras" name="registeras" onclick="myFunction12()" value = "<?php $_SESSION['x']; ?>">
  				<option><div id="gettdata">!----Select From Below----!</div></option>
  				<option value="lookingtoadopt">Looking to adopt</option>
  				<option value="pregnantandconsideringadoption">Pregnant and considering adoption</option>
  				<option value="surrogate">Be a Surrogate Mother</option>
  				<option value="philanthropists">Philanthropists</option>
			</select>
	</div>
<div class="form-group" style="margin-left: -23px;">
<center><label>: Select Profile Photo :</center>
 <input  style="margin-left: 70px;" type="file" name="attachment" id="attachment" required> </label>
 <center><div id="attachmenterror"></div></center>
</br>
<span class="help-block">Family Photo is recommended</span>
</div>
<div class="form-group">
<label for="FirstName:">FirstName:</label>
<input type="text" name="fname" id="fname" class="form-control-sm" oninput="fnameerror()" required>
<center><div id="fnameerror"></div></center>
</div>
<div class="form-group">
<label for="LastName:">LastName:</label>
<input type="text" name="lname" id="lname" class="form-control-sm"  oninput="lnameerror()"  required>
<center><div id="lnameerror"></div></center>
</div>
<div class="form-group" id="genderrr">
<label for="gender:">Gender:</label>
              <input type="radio" name="gender" value="female" id="female">
              <label for="female" class="female" style="margin-left: -10px;">Female</label>
              <input type="radio" name="gender" value="male" id="male">
              <label for="male" class="male" style="margin-left: -10px;">Male</label></br>
</div>
<div class="form-group">
<label for="E-mail:">E-mail:</label>
<input type="email"  name="email" id="email" class="form-control-sm" placeholder="xyz@abc.com"  oninput="emailerror()" required>
<center><div id="emailerror"></div></center>
</div>
<div class="form-group">
<label for="PhoneNo:">PhoneNo:</label>
<input type="text" name="mno" id="mno" class="form-control-sm" oninput="mnoerror()" required>
<center><div id="mnoerror"></div></center>
</div>
<div class = "form-group">
<label for="UserName:">UserName:</label>
<input  style="margin-left: 30px; " type="text" name="uname" id="uname1" maxlength="35" placeholder="Built your own UserName" class="form-control-sm" oninput="unameerror()" required>
  <span class="help-block" style="margin-left: 20px;">Enter Username without living space..</span>
  <center><div id="unameerror"></div></center>
</div>
<div class="form-group">
<label for="Password:">Password:</label>
<input type="password" name="pwd" id="pwd" class="form-control-sm" oninput="pwderror()" required>
<center><div id="pwderror"></div></center>
</div>
<div class="form-group">
	<label for="Re-enter Password:">Re-Password:</label>
<input type="password" name="rpwd" id="rpwd" required="required" class="form-control-sm" oninput="pwdreerror()">
<center><div id="pwdreerror"></div></center>
</div>
<div id="button">
	<center>
 <button type="button" name="SUBMIT" class="btn btn-success" onclick="mainfunc()" style="margin-left: -10px;border-radius: 1px; border-color: green; background-color: green;">NEXT</button></center>     
</div>
</br>
<div id="getdata"><h3 style="margin-left: -10px; font-size: 25px; font-family: cursive;">Already a user??</h3></div>
<div id="data"><h3><a href="loginform1.php"><h4 style="margin-left: -26px;">Click here to login</h4></a></div>
</form>
</div>
<script type="text/javascript">
			function mainfunc()
			{
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
      					}

      					else if(y == z){
   						function45(z);
      					}

      					else if(y == w) {
      					function57(w);
      					}

      					else {
      					function79(m);
      					}
				
			}


			function function123(data){
				var registeras = data;
						    	var fname = $('#fname').val();
				      	if(fname == ""){
				      		fname = "false";
				      		$('#fnameerror').html("Please enter the Username");
				      	}else{
				      		fname = fname;
				      	}
				      	var lname = $('#lname').val();
				      	if(lname == ""){
				      		lname = "false";
				      		$('#lnameerror').html('Please enter Lastname');
				     	}else{
				     		lname = lname;
				     	}
      					var email = $('#email').val();
      					if(email == ""){
      						email = "false";
      						$('#emailerror').html("Please enter the email");
      					}
      					else if (email == (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)) {
      						email == "false"
      						$('#emailerror').html("Please enter validate email address");
      					}
      					else{
      						email = email;
      					}
				      	var mno = $('#mno').val();
				      	if(mno == ""){
				      		mno = "false";
				      		$('#mnoerror').html("Please enter the Mobile No");
				      	}else if (mno.length < 10) {
				      		mno = "false";
				      		$('#mnoerror').html("Please enter valid Mobile No");
				      	}else{
				      		mno = mno;
				      	}
				      	var uname1 = $('#uname1').val();
				      	if (uname1 == "") {
				      		uname1 = "false";
				      		$('#unameerror').html("Please enter username");
				      	}else if(uname1.indexOf(' ') >= 0){
				      		uname1 = "false";
				      		$('#unameerror').html("No white-space allowed");
				      	}else{
				      		uname1 = uname1;
				      	}
				      	var pwd = $('#pwd').val();
				      	if(pwd == ""){
				      		pwd = "false";
				      		$('#pwderror').html("Please enter the password");
				      	}else{
				      		pwd = pwd;
				      	}
				      	var rpwd = $('#rpwd').val();
				      	if(pwd != rpwd){
				      		rpwd = "false";
				      		$('#pwdreerror').html('Password MIsmatched');
				      	}else{
				      		rpwd = rpwd;
				      	}
				     	var gender1= document.getElementsByName("gender");
				     	console.log(attachment1);
				     	 for(i = 0; i < gender1.length; i++) { 
              			 if(gender1[i].checked) 
                		 var g = gender1[i].value;
                		 console.log(g); 
            			}
            			if(g == ""){
            				g = "false";
            			}else{
            				g = g;
            			}
            			var attachment1 = document.getElementById('attachment').files[0];
						const  fileType = attachment1['type'];
						const validImageTypes = ['image/gif', 'image/jpeg', 'image/png'];
						if (!validImageTypes.includes(fileType)) {
							attachment1 = "false";
    						$("#attachmenterror").html("Please Select valid file");
						}
            			if(attachment1 == ""){
            				attachment1 = "false";
            				$("attachmenterror").html("Please Select File");
            			}else{
            				attachment1 = attachment1;
            			}
            			console.log(fname);
            			console.log(lname);
            			console.log(mno);
            			console.log(email);
            			console.log(pwd);
            			console.log(g);
            			console.log(uname1);
            			console.log(rpwd);
            			console.log(attachment1);
            			if(fname == "false" || lname == "false" || uname1 == "false" || email == "false" || pwd == "false" || rpwd == "false" || g =="false" || mno == "false" || attachment1=="false"){

        			}else{
            			var formdata = new FormData;
            			formdata.append('registeras',registeras);
            			formdata.append('fname',fname);
            			formdata.append('lname',lname);
            			formdata.append('email',email);
            			formdata.append('mno',mno);
            			formdata.append('uname1',uname1);
            			formdata.append('pwd',pwd);
            			formdata.append('rpwd',rpwd);
            			formdata.append('attachment1',attachment1);
            			formdata.append('g',g);



      					$.ajax({
							url: 'registrationbackend.php',
							type: 'post',
							data:formdata,
				            contentType: false,
                            processData: false,
                            cache:false,
							success: function(result12){
							console.log(result12);
							var a = "false";
							if(a==result12){
								 $(location).attr('href','registertoadopt.php');
							}
						}
					
						});

}

			}
			function function45(data){
						var registeras = data;
				      	var fname = $('#fname').val();
				      	if(fname == ""){
				      		fname = "false";
				      		$('#fnameerror').html("Please enter the Username");
				      	}else{
				      		fname = fname;
				      	}
				      	var lname = $('#lname').val();
				      	if(lname == ""){
				      		lname = "false";
				      		$('#lnameerror').html('Please enter Lastname');
				     	}else{
				     		lname = lname;
				     	}
      					var email = $('#email').val();
      					if(email == ""){
      						email = "false";
      						$('#emailerror').html("Please enter the email");
      					}
      					else if (email == (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)) {
      						email == "false"
      						$('#emailerror').html("Please enter validate email address");
      					}
      					else{
      						email = email;
      					}
				      	var mno = $('#mno').val();
				      	if(mno == ""){
				      		mno = "false";
				      		$('#mnoerror').html("Please enter the Mobile No");
				      	}else if (mno.length < 10) {
				      		mno = "false";
				      		$('#mnoerror').html("Please enter valid Mobile No");
				      	}else{
				      		mno = mno;
				      	}
				      	var uname1 = $('#uname1').val();
				      	if (uname1 == "") {
				      		uname1 = "false";
				      		$('#unameerror').html("Please enter username");
				      	}else if(uname1.indexOf(' ') >= 0){
				      		uname1 = "false";
				      		$('#unameerror').html("No white-space allowed");
				      	}else{
				      		uname1 = uname1;
				      	}
				      	var pwd = $('#pwd').val();
				      	if(pwd == ""){
				      		pwd = "false";
				      		$('#pwderror').html("Please enter the password");
				      	}else{
				      		pwd = pwd;
				      	}
				      	var rpwd = $('#rpwd').val();
				      	if(pwd != rpwd){
				      		rpwd = "false";
				      		$('#pwdreerror').html('Password MIsmatched');
				      	}else{
				      		rpwd = rpwd;
				      	}
				     	var gender1= document.getElementsByName("gender");
				     	console.log(attachment1);
				     	 for(i = 0; i < gender1.length; i++) { 
              			 if(gender1[i].checked) 
                		 var g = gender1[i].value;
                		 console.log(g); 
            			}
            			if(g == ""){
            				g = "false";
            			}else{
            				g = g;
            			}
            			var attachment1 = document.getElementById('attachment').files[0];
						const  fileType = attachment1['type'];
						const validImageTypes = ['image/gif', 'image/jpeg', 'image/png'];
						if (!validImageTypes.includes(fileType)) {
							attachment1 = "false";
    						$("#attachmenterror").html("Please Select valid file");
						}
            			if(attachment1 == ""){
            				attachment1 = "false";
            				$("attachmenterror").html("Please Select File");
            			}else{
            				attachment1 = attachment1;
            			}
            			console.log(fname);
            			console.log(lname);
            			console.log(mno);
            			console.log(email);
            			console.log(pwd);
            			console.log(g);
            			console.log(uname1);
            			console.log(rpwd);
            			console.log(attachment1);
            			if(fname == "false" || lname == "false" || uname1 == "false" || email == "false" || pwd == "false" || rpwd == "false" || g =="false" || mno == "false" || attachment1=="false"){

        			}else{
        			        			var formdata = new FormData;
        			        			formdata.append('registeras',registeras);
        			        			formdata.append('fname',fname);
        			        			formdata.append('lname',lname);
        			        			formdata.append('email',email);
        			        			formdata.append('mno',mno);
        			        			formdata.append('uname1',uname1);
        			        			formdata.append('pwd',pwd);
        			        			formdata.append('rpwd',rpwd);
        			     
        			        			formdata.append('attachment1',attachment1);
        			        			formdata.append('g',g);
        			
        								$.ajax({
        									url: 'registrationbackend.php',
        									type: 'POST',
        									data: formdata,
        				                    contentType: false,
        			                        processData: false,
        			                        cache:false,
        									success: function(result11){
        									console.log(result11);
        									var a = "false";
        									if(a==result11){
        										 $(location).attr('href','pregnantandconsideringadoption.php');
        									}
        			
        			
        								}
        							
        								});
        							}

			}

			function function57(data){
						var registeras = data;
    	var fname = $('#fname').val();
				      	if(fname == ""){
				      		fname = "false";
				      		$('#fnameerror').html("Please enter the Username");
				      	}else{
				      		fname = fname;
				      	}
				      	var lname = $('#lname').val();
				      	if(lname == ""){
				      		lname = "false";
				      		$('#lnameerror').html('Please enter Lastname');
				     	}else{
				     		lname = lname;
				     	}
      					var email = $('#email').val();
      					if(email == ""){
      						email = "false";
      						$('#emailerror').html("Please enter the email");
      					}
      					else if (email == (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)) {
      						email == "false"
      						$('#emailerror').html("Please enter validate email address");
      					}
      					else{
      						email = email;
      					}
				      	var mno = $('#mno').val();
				      	if(mno == ""){
				      		mno = "false";
				      		$('#mnoerror').html("Please enter the Mobile No");
				      	}else if (mno.length < 10) {
				      		mno = "false";
				      		$('#mnoerror').html("Please enter valid Mobile No");
				      	}else{
				      		mno = mno;
				      	}
				      	var uname1 = $('#uname1').val();
				      	if (uname1 == "") {
				      		uname1 = "false";
				      		$('#unameerror').html("Please enter username");
				      	}else if(uname1.indexOf(' ') >= 0){
				      		uname1 = "false";
				      		$('#unameerror').html("No white-space allowed");
				      	}else{
				      		uname1 = uname1;
				      	}
				      	var pwd = $('#pwd').val();
				      	if(pwd == ""){
				      		pwd = "false";
				      		$('#pwderror').html("Please enter the password");
				      	}else{
				      		pwd = pwd;
				      	}
				      	var rpwd = $('#rpwd').val();
				      	if(pwd != rpwd){
				      		rpwd = "false";
				      		$('#pwdreerror').html('Password MIsmatched');
				      	}else{
				      		rpwd = rpwd;
				      	}
				     	var gender1= document.getElementsByName("gender");
				     	console.log(attachment1);
				     	 for(i = 0; i < gender1.length; i++) { 
              			 if(gender1[i].checked) 
                		 var g = gender1[i].value;
                		 console.log(g); 
            			}
            			if(g == ""){
            				g = "false";
            			}else{
            				g = g;
            			}
            			var attachment1 = document.getElementById('attachment').files[0];
						const  fileType = attachment1['type'];
						const validImageTypes = ['image/gif', 'image/jpeg', 'image/png'];
						if (!validImageTypes.includes(fileType)) {
							attachment1 = "false";
    						$("#attachmenterror").html("Please Select valid file");
						}
            			if(attachment1 == ""){
            				attachment1 = "false";
            				$("attachmenterror").html("Please Select File");
            			}else{
            				attachment1 = attachment1;
            			}
            			console.log(fname);
            			console.log(lname);
            			console.log(mno);
            			console.log(email);
            			console.log(pwd);
            			console.log(g);
            			console.log(uname1);
            			console.log(rpwd);
            			console.log(attachment1);
            			if(fname == "false" || lname == "false" || uname1 == "false" || email == "false" || pwd == "false" || rpwd == "false" || g =="false" || mno == "false" || attachment1=="false"){

        			}else{
            			var formdata = new FormData;
            			formdata.append('registeras',registeras);
            			formdata.append('fname',fname);
            			formdata.append('lname',lname);
            			formdata.append('email',email);
            			formdata.append('mno',mno);
            			formdata.append('uname1',uname1);
            			formdata.append('pwd',pwd);
            			formdata.append('rpwd',rpwd);
         
            			formdata.append('attachment1',attachment1);
            			formdata.append('g',g);
						$.ajax({
							url: 'registrationbackend.php',
							type: 'post',
							data: formdata,
		                    contentType: false,
                            processData: false,
                            cache:false,
							success: function(result10){
							console.log(result10);
							var a = "false";
							if(a==result10){
								 $(location).attr('href','surrogatemotherregistration.php');
							}
						}
						});

}
			}

			function function79(data){
						var registeras = data;
    	var fname = $('#fname').val();
				      	if(fname == ""){
				      		fname = "false";
				      		$('#fnameerror').html("Please enter the Username");
				      	}else{
				      		fname = fname;
				      	}
				      	var lname = $('#lname').val();
				      	if(lname == ""){
				      		lname = "false";
				      		$('#lnameerror').html('Please enter Lastname');
				     	}else{
				     		lname = lname;
				     	}
      					var email = $('#email').val();
      					if(email == ""){
      						email = "false";
      						$('#emailerror').html("Please enter the email");
      					}
      					else if (email == (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)) {
      						email == "false"
      						$('#emailerror').html("Please enter validate email address");
      					}
      					else{
      						email = email;
      					}
				      	var mno = $('#mno').val();
				      	if(mno == ""){
				      		mno = "false";
				      		$('#mnoerror').html("Please enter the Mobile No");
				      	}else if (mno.length < 10) {
				      		mno = "false";
				      		$('#mnoerror').html("Please enter valid Mobile No");
				      	}else{
				      		mno = mno;
				      	}
				      	var uname1 = $('#uname1').val();
				      	if (uname1 == "") {
				      		uname1 = "false";
				      		$('#unameerror').html("Please enter username");
				      	}else if(uname1.indexOf(' ') >= 0){
				      		uname1 = "false";
				      		$('#unameerror').html("No white-space allowed");
				      	}else{
				      		uname1 = uname1;
				      	}
				      	var pwd = $('#pwd').val();
				      	if(pwd == ""){
				      		pwd = "false";
				      		$('#pwderror').html("Please enter the password");
				      	}else{
				      		pwd = pwd;
				      	}
				      	var rpwd = $('#rpwd').val();
				      	if(pwd != rpwd){
				      		rpwd = "false";
				      		$('#pwdreerror').html('Password MIsmatched');
				      	}else{
				      		rpwd = rpwd;
				      	}
				     	var gender1= document.getElementsByName("gender");
				     	console.log(attachment1);
				     	 for(i = 0; i < gender1.length; i++) { 
              			 if(gender1[i].checked) 
                		 var g = gender1[i].value;
                		 console.log(g); 
            			}
            			if(g == ""){
            				g = "false";
            			}else{
            				g = g;
            			}
            			var attachment1 = document.getElementById('attachment').files[0];
						const  fileType = attachment1['type'];
						const validImageTypes = ['image/gif', 'image/jpeg', 'image/png'];
						if (!validImageTypes.includes(fileType)) {
							attachment1 = "false";
    						$("#attachmenterror").html("Please Select valid file");
						}
            			if(attachment1 == ""){
            				attachment1 = "false";
            				$("attachmenterror").html("Please Select File");
            			}else{
            				attachment1 = attachment1;
            			}
            			console.log(fname);
            			console.log(lname);
            			console.log(mno);
            			console.log(email);
            			console.log(pwd);
            			console.log(g);
            			console.log(uname1);
            			console.log(rpwd);
            			console.log(attachment1);
            			if(fname == "false" || lname == "false" || uname1 == "false" || email == "false" || pwd == "false" || rpwd == "false" || g =="false" || mno == "false" || attachment1=="false"){

        			}else{
            			var formdata = new FormData;
            			formdata.append('registeras',registeras);
            			formdata.append('fname',fname);
            			formdata.append('lname',lname);
            			formdata.append('email',email);
            			formdata.append('mno',mno);
            			formdata.append('uname1',uname1);
            			formdata.append('pwd',pwd);
            			formdata.append('rpwd',rpwd);
         
            			formdata.append('attachment1',attachment1);
            			formdata.append('g',g);
            	

						$.ajax({
							url: 'registrationbackend.php',
							type: 'POST',
							data: formdata,
							contentType: false,
                            processData: false,
                            cache:false,
							success: function(result9){
							console.log(result9);
							var a = "false";
							if(a==result9){
								 $(location).attr('href','.php');
							}

						}
					
						});
					}
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
							if(result3=="enter password" || result3=="Too Weak"){

								let a =document.getElementById("rpwd");
								a.disabled="disabled";
							}else{
								let a =document.getElementById("rpwd");
								a.disabled="";
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
      			cc.disabled='';
      			dc.disabled='';

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