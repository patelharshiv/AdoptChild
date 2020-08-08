<!DOCTYPE html>
<html>
<head>
	<title>Surrogate Mother Registration</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
		width: 40%;
    	height: auto;
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

input{
	margin-left: 10px;
}
#dob{
	margin-left: 35%;
}
#citizenship{
	margin-left: 40%;
}
#no0{
	margin-left: 38%;
}
#yes0{
	margin-left: 3%;
}
#no{
	margin-left: 38%;
}
#yes{
	margin-left: 3%;
}
#no1{
	margin-left: 38%;
}
#yes1{
	margin-left: 3%;
}
#no2{
	margin-left: 38%;
}
#yes2{
	margin-left: 3%;
}
#no3{
	margin-left: 38%;
}
#yes3{
	margin-left: 3%;
}
#no4{
	margin-left: 38%;
}
#yes4{
	margin-left: 3%;
}
#no5{
	margin-left: 38%;
}
#yes5{
	margin-left: 3%;
}
#question1{
	margin-left: 3%;
}
#question2{
	margin-left: 3%;
}
#question3{
	margin-left: 3%;
}
#question4{
	margin-left: 3%;
}
#question5{
	margin-left: 3%;
}
#question6{
	margin-left: 3%;
}
#question7{
	margin-left: 3%;
}
#textarea12{
	margin-left: 8%;
}
#height{
	margin-left: 43%;
}
#weight{
	margin-left: 43%;
}
input .active{
		border-color: blue;
		border-width: 10px;
	}
.btn{
  color: #1bc300;
  font-size:17px;
  text-decoration: none;
  text-transform: uppercase;
  transition: 0.5s;
  letter-spacing: 1.5px;
}
.btn:hover{
  background:#ff0000;
  color:#050801;
  box-shadow: 0 0 5px #ff0000;
}
.btn span{
  display: block;
  position: absolute;
}
.btn span:nth-child(1)
{
  top:0;
  left: 0;
  width:100;
  height: 2px;
  background: linear-gradient(90deg,transparent,#81ff00);
  animation: animate1 1s linear infinite;

}
</style>
</head>
<body>
	<div align="left"><h4><a href="qualificationtosurrogate.php">Qualification for being a surrogate</a></h4></div>
<div class="container">
<div id=title>
<h1 align ="center" style="color: white"><b id="as">Register Yourself</b></h1>
</div>
<div class="container">
<div id=form>	
<form method= "post" class="form-group">
<div class="form-group">
	<center><label>Date-Of-Birth</label></center>
	<input type="date" name="dob" id="dob">
</div>
<div class="form-group">
	<center><label>Citizenship</label></center>
	<select id="citizenship">
		<option id="indian" value="indian">Indian</option>
		<option id="foreigner" value="foreigner">Foreigner</option>
	</select>
</div>
<div class="form-group">
	<center><label>Do you Smoke??</label></center>
	<input type="radio" name="smoker" value="No" id="no0">
	<label for="no">No</label>
	<input type="radio" name="smoker" value="Yes" id="yes0">
	<label for="yes">Yes</label>
</div> 
<div class="form-group">
	<center><label>Height</label></center>
	<input type="text" name="height" id="height" size="5">
</div>
<div class="form-group">
	<center><label>Weight</label></center>
	<input type="text" name="weight" id="weight" size="5">
</div>
<div class="form-group">
	<label id="question1">Have You Given Birth to at least one child that you are raising?</label>
	<input type="radio" name="question1" value="no" id="no"><label for="no">No</label>
	<input type="radio" name="question1" id="yes" value="yes"><label for="yes">Yes</label>
</div>
<div>
	<label id="question2">Have you had any new tattoos or piercings within these 12 months?</label>
		<input type="radio" name="question2" id="no1" value="no"><label for="no">No</label>
	<input type="radio" name="question2" id="yes1" value="yes"><label for="yes1">Yes</label>
</div>
<div class="form-group">
	<label id="question3">Do you have a healthy BMI, as determined by your doctor?</label>
	<input type="radio" name="question3" id="no2" value="no"><label for="no">No</label>
	<input type="radio" name="question3" id="yes2" value="yes"><label for="yes">Yes</label>
</div>
<div class="form-group">
	<label id="question4">Have you had any major complications in your previous pregnancies?</label>
	<input type="radio" name="question4" id="no3" value="no"><label for="no">No</label>
	<input type="radio" name="question4" id="yes3" value="yes"><label for="yes">Yes</label>
</div>
<div class="form-group">
	<label id="question5">Are you on any anti-depressants or anti-anxiety medication in last 12 months?</label>
		<input type="radio" name="question5" id="no4" value="no"><label for="no">No</label>
	<input type="radio" name="question5" id="yes4" value="yes"><label for="yes">Yes</label>
</div>
<div class="form-group">
	<label id="question6">Have You Gone through Surrogacy Before??</label>
			<input type="radio" name="question6" id="no5" value="no"><label for="no">No</label>
	<input type="radio" name="question6" id="yes5" value="yes"><label for="yes">Yes</label>
</div>
<div class="form-group">
	<label id="question7">What made you think to be a surrogate mother?(max 200 characters)</label>
	<textarea rows="3" cols="32" id="textarea12"></textarea>
</div>
<div id="button">
	<center>
<button type="button" class="btn btn-basic" onclick="mit()">Register Yourself</button></center>     
</div>
<center><div id="getdata"><h3>Already a user??</h3></div></center>
<center><div id="data"><h3><a href="loginform1.php"><h4>Click here to login</h4></a></div></center>
</form>
</div>
</div>
<script type="text/javascript">
	function mit(){
	var dob = $('#dob').val();
	console.log(dob);
    var x = document.getElementById("citizenship").selectedIndex;
    var w=document.getElementsByTagName("option")[x].value;
    console.log(w);

    var smoker= document.getElementsByName("smoker");
    for(i = 0; i < smoker.length; i++) { 
        if(smoker[i].checked) 
               var a = smoker[i].value;
                 console.log(a); 
        }
    var height = $('#height').val();
    console.log(height);
    var weight = $('#weight').val();
    console.log(weight);
    var question1= document.getElementsByName("question1");
    for(i = 0; i < question1.length; i++) { 
     if(question1[i].checked) 
               var b = question1[i].value;
                 console.log(b); 
        }
    var question2= document.getElementsByName("question2");
    for(i = 0; i <question2.length; i++) { 
     if(question2[i].checked) 
         var c = question2[i].value;
         console.log(c); 
        }
            var question3= document.getElementsByName("question3");
    for(i = 0; i < question3.length; i++) { 
     if(question3[i].checked) 
               var d = question3[i].value;
                 console.log(d); 
        }
            var question4= document.getElementsByName("question4");
    for(i = 0; i < question4.length; i++) { 
     if(question4[i].checked) 
               var e = question4[i].value;
                 console.log(e); 
        }
            var question5= document.getElementsByName("question5");
    for(i = 0; i < question5.length; i++) { 
     if(question5[i].checked) 
               var f = question5[i].value;
                 console.log(f); 
        }
    var question6= document.getElementsByName("question6");
    for(i = 0; i <question6.length; i++) { 
     if(question6[i].checked) 
           	var g = question6[i].value;
            console.log(g); 
        }
    var question7 = $('#textarea12').val();
    console.log(question7);

$.ajax({

	url:"registrationbackend.php",
	type:"post",
	data:{ dob:dob, w:w, a:a, height:height, weight:weight, b:b, c:c, d:d, e:e, f:f, g:g, question7:question7

	},
	success:function(data){
		console.log(data);
		          if(data == "You are Successfully Registered.."){
            $(location).attr('href','redirect.php');
          }

	}

});
}
</script>
</body>
</html>