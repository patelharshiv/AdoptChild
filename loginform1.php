<?php
session_start();

if(!empty($_SESSION['uname'])){
       header("Location: index.php");
 }
 if(!empty($_SESSION['uname1'])){
       header("Location: surrogatemotherpanel.php");
 }
 if(!empty($_SESSION['uname2'])){
       header("Location: consideringadoptionpanel.php");
 }
 if(!empty($_SESSION['uname3'])){
       header("Location: philanthropists.php");
 }
 if(!empty($_SESSION['uname4'])){
       header("Location: adminpanel.php");
 }
  if(!empty($_SESSION['uname5'])){
       header("Location: policelogin.php");
 }
?>
<!DOCTYPE html>
<html>
<head>
	  <title>Please Login</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>

	 <meta name="viewport" content="width=device-width, initial-scale=1.0 , shrink-to-fit=no">

	<link rel="stylesheet" href="s.css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


</head>
<body>
	

	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6 col-md-6 form-container">
				<div class="col-lg-8 col-md-12 col-sm-9 col-xs-12 form-box  text-center">
					<div class="logo mt-5 mb-3"> 
						<img src="images/qqq1.png" width="150px">
					</div>
					<div class="heading mb-3">
						<h4>LOGIN INTO YOUR ACCOUNT</h4>
					</div>
					<form>
						<div class="form-input" style="margin-bottom: 6%;">
					      <select required="required" autofocus="autofocus" id="registeredas" name="registeredas" onclick="myFunction123()" style="border-radius: 5px;">
					          <option><div id="gettdata">Registered As</div></option>
					          <option value="lookingtoadopt">Looking to adopt</option>
					          <option value="pregnantandconsideringadoption">Pregnant and considering adoption</option>
					          <option value="surrogate">Be a Surrogate Mother</option>
					          <option value="philanthropists">Philanthropists</option>
					      </select>
						</div>

						<div class="form-input">
							<span><i class="fa fa-user" aria-hidden="true"></i></span>
							 <input type="text" id="uname" required="required" placeholder="Enter Username">
						</div>
						<div class="form-input">
							<span><i class="fa fa-lock"></i></span>
							<input type="password" id="pwd" placeholder="Enter Your Password" required>
						</div>
						<div class="col-6 text-left">
						  <input id="a1" type="checkbox" onclick="myFunction()"> Show password
						</div></br>
						  <p id="warning" style="visibility: hidden; display: none;">WARNING! Caps lock is ON.</p>
						<div class="row mb-3">
							<div class="col-6 d-flex">
								<div class="custom-control custom-checkbox mb-3">
									<input type="checkbox" class="custom-control-input " id="cb1">
									<label class="custom-control-label text-white" for="cb1"> Remember me
									</label>
								</div>
							</div>
							<div class="col-6 text-right">
								<a href="forget.html" class="forget-link"> Forget Password</a>
							</div>

							<div class="text-left mb-3 ml-3">
								<button type="button" class="btn btn-light" onclick="checkRecord()"> LOGIN</button>
							</div>
						</div>
            <div id="load">   
            <!-- Show message here  -->     
                    <h5 id="loaddata"> 

                    </h5>
              </div>
							<div class="text-white mb-3"> or login with</div>
								<div class="row mb-3">
									<div class="col-4">
										<a href="" class="btn btn-block btn-social btn-facebook">
											<i class="fa fa-facebook"> </i>
										</a>
									</div>
									<div class="col-4">
										<a href="" class="btn btn-block btn-social btn-google">
											<i class="fa fa-google"></i>
										</a>
									</div>
									<div class="col-4">
										<a href="" class="btn btn-block btn-social btn-twitter">
											<i class="fa fa-twitter"></i>
										</a>
									</div>
								</div>
								<div class="text-white">Don't have a account ?
									<a href="registrationpage.php" class="register-link">Register here</a>
								</div>
					</form>
				</div>
			</div>

			<div class="col-lg-6 col-md-6 d-md-block image-container">
			
			</div>

		</div>
	</div>
	<script>
function myFunction() {
  var x = document.getElementById("pwd");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>



<script>
var input = document.getElementById("pwd");
var text = document.getElementById("warning");
input.addEventListener("keyup", function(event) {

if (event.getModifierState("CapsLock")) {
    text.style.display = "block";
    document.getElementById("warning").style.color = "red";
    document.getElementById("warning").style.visibility = "visible";
  } else {
    text.style.display = "none";
    document.getElementById("warning").style.visibility = "hidden";
  }
});
</script>
<script type="text/javascript">
  function directingfun(data1,data2,data3){
    console.log(data1);
    console.log(data2);
    console.log(data3);
    var check= "password matched successfully";
    var str1 = "lookingtoadopt";
    var str2 = "pregnantandconsideringadoption";
    var str3 = "surrogate";
    var str4 = "philanthropists";
    var str5 = "admin"; 
    var str6 = "police";  
    if(data1 == check && data2 == str1)
      {
      document.getElementById("loaddata").style.color="green";
      $('#loaddata').html(data1);
      $(location).attr('href','index.php');
      }
    else if (data1 == check && data2 == str2) {
      document.getElementById("loaddata").style.color="green";
      $('#loaddata').html(data1);
      $(location).attr('href','consideringadoptionpanel.php');
     }
    else if (data1 == check && data2 == str3) { 
      document.getElementById("loaddata").style.color="green";
      $('#loaddata').html(data1);
      $(location).attr('href','surrogatemotherpanel.php');
    }
    else if (data1 == check && data2 == str4) {      
      document.getElementById("loaddata").style.color="green";
      $('#loaddata').html(data1);
      $(location).attr('href','donatetoorphan.php');
    }
    else if (data1 == check && data3 == str5) {  
      document.getElementById("loaddata").style.color="green";
      $('#loaddata').html(data1);
      $(location).attr('href','adminpanel.php');
    }
      else if (data1 == check && data3 == str6) {  
      document.getElementById("loaddata").style.color="green";
      $('#loaddata').html(data1);
      $(location).attr('href','policelogin.php');
    }
    else{
      document.getElementById("loaddata").style.color="red";
      var string = data1;
      $('#loaddata').html(data1);
    }
  }
   function checkRecord(){
      var username = $('#uname').val();
      var password = $('#pwd').val();
      var x = document.getElementById("registeredas").selectedIndex;
      var m=document.getElementsByTagName("option")[x].value;
      $.ajax({
          url:"backend.php",
          type:'post',
          data: {uname:username,
            pwd:password, m:m},
          success: function(data){
              console.log(data);
              var string = data;
              directingfun(string,m,username);
          }
      });
    }
    function myFunction123(){
    var x = document.getElementById("registeredas").selectedIndex;
    var w=document.getElementsByTagName("option")[x].value;
    console.log(w);
    $.ajax({
          url: 'backend.php',
          type: 'POST',
          data: {w:w},
          success: function(result){
            
            $('#gettdata').html(result);
            console.log(result);
        }
          
    });
}
</script>
</body>
</html>