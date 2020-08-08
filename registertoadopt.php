<!DOCTYPE html>
<html>
<head>
	<title>RegisterToAdopt</title>
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
    width: 430px;
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
#form1{
  visibility: visible;
  display: block;
}
#form2{
  visibility: hidden;
  display: none; 
  width: 430px;
      height: auto;
}
#hisblock{
visibility: hidden;
display: none;
}
#herblock{
visibility: hidden;
display: none;

}
#btn1{
  margin-bottom: 4%;
}
</style>
</head>
<body>
<div class="container">
<div id=title>
<h1 align ="center" style="color: white"><b id="as">Register Yourself</b></h1>
</div>
    <div id="form">
    <form method="POST" id="registertoadoptform">
      <div id ="form1">
   <center><h1><b>Register Here To Adopt</b></h1></center> 
	<center><b>Marital Details:</b></center></br>
	<div class="form-group">
		<center><label>Marital Status</label></center>
      <center><select required="required" autofocus="autofocus" id="maritalstatus" name="maritalstatus" oninput="maritalstatus12()">
          <option><div>!----Select From Below----!</div></option>
          <option value="Married" id="Married">Married</option>
          <option value="Single" id="Single">Single</option>
          <option value="Widow" id="Widow">Widow</option>
          <option value="Divorcee" id="Divorcee">Divorcee</option>
      </select></center>
  </div>
  <center><b>Applicant Category:</b></center>
	<div class="form-group">
  <center><input type="radio" id="male" name="gender" value="male" onclick="functionapplicant()">
  <label for="male">Male</label><br></center>
  <center><input type="radio" id="female" name="gender" value="female" onclick="functionapplicant()">
  <label for="female">Female</label><br></center>
  <center><input type="radio" id="other" name="gender" value="couple" onclick="functionapplicant()">
  <label for="couple">Couple</label></center>
	</div>
  <div id="hisblock">	
<center><b> His Personal Information:</b></center></br>
<center><div class="form-group">
<label>Name:</label>
      <select required="required" autofocus="autofocus" id="initial" name="initial">
        <option><div>!-Prefix-!</div></option>
          <option value="Mr." id="Mr" ><div>Mr.</div></option>
          <option value="Dr." id="Dr">Dr.</option>
          <option value="Er." id="Er">Er.</option>
      </select>
      <input type="text" name="name" id="name"><!-- done -->
</div></center>
<div class="form-group"> 
	<center><label>Nationality</label></center>
   <center><select required="required" autofocus="autofocus" id="nationality" name="nationality">
          <option><div>!----Select From Below----!</div></option>
          <option value="Indian" id="Indian">Indian</option>
      </select></center>
 </div>
 <div class="form-group">
 	<center><label>Date of Birth</label></center>
 	<center><input type="date" name="date" id="date"></center>
 </div>


<center><b>His Professional Details:</b></center></br>
<div class="form-group">
  <center><label>Occupation</label></center>
        <center><select required="required" autofocus="autofocus" id="workingas" name="workingas">
          <option><div>!----Select Business----!</div></option>
          <option value="business" id="business" ><div>Business</div></option>
          <option value="publicsector" id="publicsector">Public Sector</option>
          <option value="privatesector" id="privatesector">Private Sector</option>
          <option value="notworking" id="notworking">Not Working</option>
      </select></center>
</div>
<div class="form-group">
  <center><label>Place of Work</label></center>
  <center><textarea rows="3" cols="30" id="textarea"></textarea></center>
</div>
<div class="form-group"><center>Annual Income(In Rs.)</center>
  <center><input type="text" name="income" id="income"></center>
</div>
</div>
<div id="herblock">
<center><b>Her Personal Information:</b></center></br>
 <div class="form-group">
<center><label>Name:</label>
      <select required="required" autofocus="autofocus" id="initial1" name="initial1">
        <option><div>!-Prefix-!</div></option>
          <option value="Mrs."><div>Mrs.</div></option>
          <option value="Ms." id="Ms" >Ms.</option>
          <option value="Dr." id="dr1">Dr.</option>
          <option value="Er." id="er1">Er.</option>
      </select>
      <input type="text" name="name" id="name1"> </center>
</div>
<div class="form-group"> 
	<center><label>Nationality</label></center>
   <center><select required="required" autofocus="autofocus" id="nationality1" name="nationality1">
          <option><div>!----Select From Below----!</div></option>
          <option value="Indian" id="Indian1">Indian</option>
      </select></center>
 </div>
 <div class="form-group">
 	<center><label>Date of Birth</label></center>
 	<center><input type="date" name="date" id="date1"></center>
 </div></br>

<center><b>Her Professional Details:</b></center></br>
<div class="form-group">
	<center><label>Occupation</label></center>
	    <center>  <select required="required" autofocus="autofocus" id="workingas1" name="workingas1">
        <option><div>!----Select Business----!</div></option>
          <option value="business" id="business1" ><div>Business</div></option>
          <option value="publicsector" id="publicsector1">Public Sector</option>
          <option value="privatesector" id="privatesector1">Private Sector</option>
          <option value="notworking" id="notworking1">Not Working</option>
      </select></center>
</div>
<div class="form-group">
	<center><label>Place of Work</label></center>
	<center><textarea rows="3" cols="30" id="textarea1"></textarea></center>
</div>
<div class="form-group"><center>Annual Income(In Rs.)</center>
	<center><input type="text" name="income" id="income1"></center>
</div>
</div>
<div class="form-group">
	<center><label><b>No. of Biological Children</b></label></center>
	<center><input type="text" name="biochild" id="biochild"></center>
</div>
<span id="biochild"></span>
<div class="form-group">
	<center><label><b>No. of Adopted Children</b></label></center>
	<center><input type="text" name="adoptchild" id="adoptchild"></center>
</div>
<span id="adoptchild"></span>
<div class="form-group">
	<center><label><b>Total</b></label></center>
	<center><input type="text" name="total" id="total"></center>
</div>
<span id="total"></span>
*If No of Biological and Adopted Children More then 2 then you are eligible for Special Need Child
</br>
<center><b>Contact Details:</b></center></br> 
<div class="form-group">
	<center><label>Residence Address</label></center>
	<center><textarea id="address1" rows="2" cols="30"></textarea></center>
</div>


<div class="form-group">
	<center><label>City</label></center>
		      <center><select required="required" autofocus="autofocus" id="workingas2" name="workingas2">
            <option>!----Select From Below----!</option>
      </select>
      </center>

</div>
<div class="form-group">
	<center><label>State</label></center>
		      <center><select required="required" autofocus="autofocus" id="workingas3" name="workingas3" >
             <option>!----Select From Below----!</option>
      </select></center>
</div>

<div class="form-group">
	<center><label>Pin Cod
  e</label></center>
	<center><input type="text" name="pincode" id="pincode"></center>
</div>
<div class="form-group">
	<center><label>Phone No.</label></center>
	<center>STD<input type="text" name="code" id="code" maxlength="4" minlength="4" size="3">
	<input type="text" name="phno" id="phno" maxlength="7" size="9"></center>
</div>
<div class="form-group">
	<center><label>Mobile No.</label></center>
	<center><input type="text" name="mno1" id="mno1"></center>
</div>
<div class="form-group">
	<center><label>Email</label></center>
	<center><input type="text" name="email1" id="email1"></center>
</div>

</br>
<center><b>Identification Details : </b></center></br>
<div class="form-group">
	<center><label>Pan Card No.</label></center>
	<center><input type="text" name="panno" id="panno"></center>
</div></br>
<center><b>Child Preferences for Adoption:</b></center>
<div class="form-group">
  <center><label>Gender</label></center>
	   <center><select required="required" autofocus="autofocus" id="workingas5" name="workingas5">
<option><div>!----Select From Below----!</div></option>
      </select></center>
</div>
<div class="form-group">
	<center><label>Child Category</label></center>
	  <center><select required="required" autofocus="autofocus" id="workingas6" name="workingas6">
      <option><div>!----Select From Below----!</div></option>
          <option value="Single" id="Single1" ><div>Single</div></option>
          <option value="Siblings" id="Siblings">Siblings</option>
      </select></center>
</div>
<div class="form-group">
	<center><label>Health Status</label></center>
		  <center><select required="required" autofocus="autofocus" id="workingas7" name="workingas7">
         <option><div>!----Select From Below----!</div></option>
          <option value="Normal" id="Normal" ><div>Normal</div></option>
          <option value="physicalchallenges" id="physicalchallenges">Physical Challenges</option>
          <option value="mentalchallenges" id="mentalchallenges">Mental Challenges</option>
          <option value="physicalandmentalchallenges" id="physicalandmentalchallenges">Physical and Mental Challenges</option>
      </select></center>
</div>
<div class="form-group">
	<center><label>Age</label></center>
			  <center><select required="required" autofocus="autofocus" id="workingas8" name="workingas8" >
           <option><div>!----Select From Below----!</div></option>
          <option value="0-2years" id="0-2" ><div>0-2 Years</div></option>
          <option value="2-4years" id="2-4">2-4 Years</option>
          <option value="4-6years" id="4-6">4-6 Years</option>
          <option value="6-8years" id="6-8">6-8 Years</option>
           <option value="8-10years" id="8-10">8-10 Years</option>
          <option value="10-12years" id="10-12">10-12 Years</option>
          <option value="12-14years" id="12-14">12-14 Years</option>
          <option value="14-16years" id="14-16">14-16 Years</option>
          <option value="16-18years" id="16-18">16-18 Years</option>
        </select></center>
</div>
<div class="form-group">
	<center><label>First State for Adoption</label></center>
				  <center><select required="required" autofocus="autofocus" id="workingas9" name="workingas9" >
  
        </select></center>
</div>
<div class="form-group">
  <center>
	<label>Second State for Adoption</label></center>
  <center><select required="required" autofocus="autofocus" id="workingas10" name="workingas10" >
</select></center>
</div>
<div class="form-group">
	<center><label>Third State for Adoption</label></center>
  <center><select required="required" autofocus="autofocus" id="workingas11" name="workingas11" >
</select></center>
</div>
<div class="form-group">
	<center><label><b>Motivation for Adoption(Max 200 characters)</b></label></center>
  <center><textarea id="textarea2" rows="3" cols="30"></textarea></center>
</div>
<center><button type="button" id="next" class="btn btn-default" onclick="function123()">Next</button></center>
</div>
<div id="form2">
<center><h1>Select Agency for Home Study Report(HSR) near by your residence</h1></center>
<div class="form-group">
<center><label>State</label></center>
  <center><select required="required" autofocus="autofocus" id="workingas15" name="workingas15"> 
</select></center>
        </div>
        <div class="form-group">
<center><label>Agency</label></center>
<center>  
  <select required="required" autofocus="autofocus" id="workingas12" name="workingas12">
<option>!----Select From Below----!</option>
</select>
</center>
</div>
<div class="form-group">
<center><label>Name of the Agency</label></center>
<center>
  <select required="required" autofocus="autofocus" id="workingas13" name="workingas13" >
    <option>!----Select From Below----!</option>
  </select>
</center>
</div>
<div class="form-group">
<center><label>Address</label></center>
<center> 
<select required="required" autofocus="autofocus" id="workingas14" name="workingas14" > 
  <option>!----Select From Below----!</option>
</select>
</center>
</div>

<center><button type="button" id="btn1" class="btn btn-default" onclick="function124()">Submit</button></center>

</div>
	</form>
</div>
</div>
<script type="text/javascript">
  $(document).ready(function(){
    agency();
    city();
  });
    $('#workingas2').change(function(){
    var data = $(this).val();
    console.log(data);
    stateselect(data);
  });
        $('#workingas15').change(function(){
    var data = $(this).val();
    console.log(data);
    agencyselect(data);
  });
      $('#workingas13').change(function(){
    var data = $(this).val();
    console.log(data);
    agencyaddress(data);
  });
    function agencyselect(data1){
    var state = data1;
     $.ajax({
    url:"registrationbackend.php",
    type:"POST",
    data:{state13:state},
    success:function(data){

          console.log(data);
      $('#workingas12').html(data);
      $('#workingas13').html(data);
    }



  }); 

  }
  function agency(){
    var agency = "agency";
     $.ajax({
    url:"registrationbackend.php",
    type:"POST",
    data:{agency:agency},
    success:function(data){

          console.log(data);
      $('#workingas9').html(data);
      $('#workingas10').html(data);
      $('#workingas11').html(data);
      $('#workingas15').html(data);
    }



  }); 

  }

    function city(){
    var city = "city";
     $.ajax({
    url:"registrationbackend.php",
    type:"POST",
    data:{city:city},
    success:function(data){

          console.log(data);
      $('#workingas2').html(data);
      
    }



  }); 

  }


    function stateselect(data1){
    var state = data1;
     $.ajax({
    url:"registrationbackend.php",
    type:"POST",
    data:{state12:state},
    success:function(data){

          console.log(data);
      $('#workingas3').html(data);
    }



  }); 

  }
    function agencyaddress(data1){
    var state = data1;
     $.ajax({
    url:"registrationbackend.php",
    type:"POST",
    data:{agencyaddress:state},
    success:function(data){

          console.log(data);
      $('#workingas14').html(data);
    }



  }); 

  }
  function function124(){

    var a = document.getElementById("maritalstatus").selectedIndex;
    var b =document.getElementsByTagName("option")[a].value;
    console.log(b);

    var gender1= document.getElementsByName("gender");
    for(i = 0; i < gender1.length; i++) { 
        if(gender1[i].checked) 
               var g = gender1[i].value;
                 console.log(g); 
        }

    var d = $('#initial').val();
    console.log(d);
    if (d == "!-Prefix-!") {
      d = "";
    }
    console.log(d);

    var mrname = $('#name').val();//Done
    console.log(mrname);


    var f = $('#nationality').val();
    console.log(f);
    if (f == "!----Select From Below----!") {
      f = "";
    }
    console.log(f);

    var mrdate = $('#date').val();
    console.log(mrdate);

    var h = $('#initial1').val();
    console.log(h);
    if (h == "!-Prefix-!") {
      h = "";
    }
    console.log(h);

    var mrsname = $('#name1').val();
    console.log(mrsname);

    var j = $('#nationality1').val();
    console.log(j);
    if(j == "!----Select From Below----!"){
      j = "";
    }
    console.log(j);

    var mrsdate = $('#date1').val();
    console.log(mrsdate);

    var l = $('#workingas').val();
    console.log(l);
    if (l == "!----Select Business----!") {
      l == "";
    }
    console.log(l);

    var mrpwork = $('#textarea').val();
    console.log(mrpwork);

    var mraincome = $('#income').val();
    console.log(mraincome);

    var n = $('#workingas1').val();
    console.log(n);
    if (n == "!----Select Business----!") {
      n ="";
    }
    console.log(n);


    var mrspwork = $('#textarea1').val();
    console.log(mrspwork);

    var mrsaincome = $('#income1').val();
    console.log(mrsaincome);

    var biochild = $('#biochild').val();
    console.log(biochild);
    if(biochild == ""){
      $("biochilderror").html("Please enter number biochild of yours");
      biochild = "false";
    }else{
      biochild = biochild;
    }

    var adoptchild = $('#adoptchild').val();
    console.log(adoptchild);
    if(adoptchild == ""){
      adoptchild = "false";
       $("adoptchilderror").html("Please enter number adopted child of yours");
    }

    var total = $('#total').val();
    console.log(total);
    if(biochild != "" && adoptchild != "" && adoptchild != "false" && biochild != "false"){
      if(total != ""){
            if((biochild + adoptchild) != total ){
              $("#totalerror").html("make sure of your mathematics");
      }else{
          var total1 = biochild + adoptchild;
          $('#total').val(total1);
      }
    }
  }

    var address = $('#address1').val();
    console.log(address);

    var p = $('#workingas2').val();
    console.log(p);

    var r = $('#workingas3').val();
    console.log(r);

    var pincode = $('#pincode').val();
    console.log(pincode);

    var code = $('#code').val();
    console.log(code);

    var phoneno = $('#phno').val();
    console.log(phoneno);

    var mobileno = $('#mno1').val();
    console.log(mobileno);

    var email1 = $('#email1').val();
    console.log(email1);

    var panno = $('#panno').val();
    console.log(panno);

    var v = $('#workingas5').val();
    console.log(v);

    var x = $('#workingas6').val();
    console.log(x);

    var z = $('#workingas7').val();
    console.log(z);

    var b1 = $('#workingas8').val();
    console.log(b1);

    var d1 = $('#workingas9').val();
    console.log(d1);

    var f1 = $('#workingas10').val();
    console.log(f1);
    if (f1 == "!----Select From Below----!") {
      f1 = "";
    }
    console.log(f1);

    var h1 = $('#workingas11').val();
    console.log(h1);
    if (h1 == "!----Select From Below----!") {
      h1 = "";
    }
    console.log(h1);



    var motivation = $('#textarea2').val();
    console.log(motivation);

    var p1 = $('#workingas15').val();
    console.log(p1);


    var j1 = $('#workingas12').val();
    console.log(j1);


    var l1 = $('#workingas13').val();
    console.log(l1);

    var n1 = $('#workingas14').val();
    console.log(n1);

    var username = $('#uname').val();


        document.getElementById("form1").style.visibility = "hidden";
        document.getElementById("form1").style.display = "none";
        document.getElementById("form2").style.visibility = "visible";
        document.getElementById("form2").style.display = "block";

          $.ajax({
    url:"registrationbackend.php",
    type:"POST",
    data:{b:b, g:g, d:d, mrname:mrname, f:f,  mrdate:mrdate, h:h, mrsname:mrsname, j:j, mrsdate:mrsdate, l:l, mrpwork:mrpwork, mraincome:mraincome, n:n, mrspwork:mrspwork, mrsaincome:mrsaincome, biochild:biochild, adoptchild:adoptchild, total:total, address:address, p:p, r:r,code:code,  pincode:pincode, phoneno:phoneno, mobileno:mobileno, email1:email1, panno:panno, v:v, x:x, z:z, b1:b1, d1:d1, f1:f1, h1:h1, motivation:motivation, p1:p1, j1:j1, l1:l1, n1:n1 },
    success:function(data){

          console.log(data);
          if(data == "You are Successfully Registered.."){
            $(location).attr('href','redirect.php');
          }

    }



  }); 
}

function function123(){
      var biochild = $('#biochild').val();
    console.log(biochild);
    if(biochild == ""){
      $("biochilderror").html("Please enter number biochild of yours");
      biochild = "false";
    }else{
      biochild = biochild;
    }

    var adoptchild = $('#adoptchild').val();
    console.log(adoptchild);
    if(adoptchild == ""){
      adoptchild = "false";
       $("adoptchilderror").html("Please enter number adopted child of yours");
    }else{
      adoptchild = adoptchild;
    }

    var total = $('#total').val();
    console.log(total);
    if(biochild != "" && adoptchild != "" && adoptchild != "false" && biochild != "false"){
      if(total != ""){
            if((biochild + adoptchild) != total ){
              total = "false";
              $("#totalerror").html("make sure of your mathematics");
      }else{
          var total1 = biochild + adoptchild;
          $('#total').val(total1);
      }
    }
  }
  else{
    total = total;
  }
  if(biochild == "false" && adoptchild =="false" && total == "false")
  document.getElementById("form1").style.visibility="hidden";
  document.getElementById("form1").style.display = "none";
  document.getElementById("form2").style.visibility="visible";
  document.getElementById("form2").style.display = "block";
}

  function maritalstatus12(){


    var a = document.getElementById("maritalstatus").selectedIndex;
    var b =document.getElementsByTagName("option")[a].value;
    console.log(b);
    document.getElementById("hisblock").style.visibility = "hidden";
    document.getElementById("hisblock").style.display = "none";
    document.getElementById("herblock").style.visibility = "hidden";
    document.getElementById("herblock").style.display = "none";
    if(b == "Married"){
      $('input[name="gender"]').prop('checked', false);
      var c = document.getElementById('male').disabled = 'disabled';
      var d = document.getElementById('female').disabled = 'disabled';
      var e = document.getElementById('other').disabled = '';
    }
    else{
      $('input[name="gender"]').prop('checked', false);
      var c = document.getElementById('male').disabled = '';
      var d = document.getElementById('female').disabled = '';
      var e = document.getElementById('other').disabled = 'disabled';
    }

  }

  function functionapplicant(){
    var gender1= document.getElementsByName("gender");
    for(i = 0; i < gender1.length; i++) { 
        if(gender1[i].checked) 
               var g = gender1[i].value;
                 console.log(g); 
        }
        if(g == "couple"){
          document.getElementById("hisblock").style.visibility = "visible";
          document.getElementById("hisblock").style.display = "block";
          document.getElementById("herblock").style.visibility = "visible";
          document.getElementById("herblock").style.display = "block";
          $('#workingas5').html('<option value="boy" id="boy"><div id="gettdata1">Boy</div></option><option value="girl" id="girl">Girl</option><option value="NoChoice" id="NoChoice">No Choice</option>');

        }else if(g == "male"){
          document.getElementById("hisblock").style.visibility = "visible";
          document.getElementById("hisblock").style.display = "block";
          document.getElementById("herblock").style.visibility = "hidden";
          document.getElementById("herblock").style.display = "none";
          $('#workingas5').html('<option value="boy" id="boy"><div id="gettdata1">Boy</div></option>');

        }else{
          document.getElementById("hisblock").style.visibility = "hidden";
          document.getElementById("hisblock").style.display = "none";
          document.getElementById("herblock").style.visibility = "visible";
          document.getElementById("herblock").style.display = "block";
          $('#workingas5').html('<option value="boy" id="boy"><div id="gettdata1">Boy</div></option><option value="girl" id="girl">Girl</option><option value="NoChoice" id="NoChoice">No Choice</option>');
        }

  }

function totalcheck(){
  var biochild = document.getElementById("biochild").value;
  var totalchild = document.getElementById("adoptchild").value;
  if(biochild = " "){
    $("#biochild").html("Need to enter here first");
  }
  else if(adoptchild = " "){
    $("adoptchild").html("Need to enter here first");
  }
  else{
    var total = biochild + adoptchild;
    var total1 = document.getElementById("total").value;
    if(total == total1){

    }
    else{
      $("totalchild").html("Summation didn't go well");
    }
  }


}
</script>
</body>
</html>