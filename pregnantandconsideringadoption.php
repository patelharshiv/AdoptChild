<!DOCTYPE html>
<html>
<head>
	<title>Pregnant and Considering Adoption</title>
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

input{
	margin-left: 10px;
}
#dob2{
	margin-left: 28%;
}
#dob21{
	margin-left: 27%;
}
#textarea2{
	margin-left: 15%;
}
#married{
	margin-left: 25%;
}
#unmarried{
	margin-left: 3%;
}
#no{
	margin-left: 33%;
}
#yes{
	margin-left: 3%;
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
<div class="container">
<div id=title>
<h1 align ="center" style="color: white"><b id="as">Register Yourself</b></h1>
</div>
	<div class="container">
		<div id="form">
		<form>
			<div class="form-group">
				<center><label id="date">Date-of-Birth</label></center></br>
				<input type="date" name="dob" id="dob2">
			</div>
			<div class="form-group">
			 	<center><label id="date1">Date-of-getting-Pregnant</label> </center></br>
			 	<input type="date" name="dob" id="dob21">
			</div>
			<div class="form-group">
				<center><label id="reason">Reason for considering Adoption</label></center></br>
				<textarea name="textarea" id="textarea2" rows="3" cols="30"></textarea>
			</div>
			<div class="form-group"></br>
				<center><label id="applicant">Applicant Category</label></center>
				<input type="radio" name="applicantcategory" id="married" value="married">
				<label id="Married">Married</label>
				<input type="radio" name="applicantcategory" id="unmarried" value="unmarried">
				<label id="Unmarried">Unmarried</label>
			</div>
			<div class="form-group">
				<center><label id="hyhacb1">Have You had any Child Before?</label></br></center>
				<input type="radio" name="hyhacb" value="no" id="no">
				<label id="hyhacb2">No</label>
				<input type="radio" name="hyhacb" value="yes" id="yes">
				<label id="hyhacb3">Yes</label>
			</div>
			<center><button type="button" id="button" class="btn btn-basic" onclick="function123()">Submit</button></center>
		</form>  
		</div>
	</div>
	<script type="text/javascript">
		function function123(){
	var ob2 = $('#dob2').val();
	console.log(ob2);
	var dob21 = $('#dob21').val();
	console.log(dob21);
	var textarea2 = $('#textarea2').val()
	console.log(textarea2);
	var applicantcategory= document.getElementsByName("applicantcategory");
    for(i = 0; i <applicantcategory.length; i++) { 
     if(applicantcategory[i].checked) 
               var g = applicantcategory[i].value;
                 console.log(g); 
        }
            var hyhacb= document.getElementsByName("hyhacb");
    for(i = 0; i < hyhacb.length; i++) { 
     if(hyhacb[i].checked) 
               var b =hyhacb[i].value;
                 console.log(b); 
        }

$.ajax({
	url:"registrationbackend.php",
	type:"post",
	data:{ob2:ob2, dob21:dob21, textarea2:textarea2, g:g, b:b },
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