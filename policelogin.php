<?php
session_start();
  if(!empty($_SESSION['policestation'])){
      header("Location: policepanel.php");
 }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Please Login</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<style type="text/css">
body{
    background-image: url("images/z2.jpeg");
     margin: 0;
    padding: 0;
    
    
    background-position: center;
    font-family: sans-serif;
  
    
}


    
  input .active{
    border-color: blue;
    border-width: 10px;
  }
#form{
  width: 330px;
  height: auto;
  background: rgba(0, 0, 0, 0.5);
  top: 54%;
  left: 50%;
  position: absolute;
  transform: translate(-45%,-50%);
  padding: 30px 30px;
  margin:auto;
  border-radius: 12px;
}
#submit{
  font-size: 22px;
  border-radius: 12px;
}
#warning{
  visibility: hidden; 
  display: none;
}
#a1{
    border-radius: 100px;
    max-width: 90px;
    max-height: 90px;
    padding: auto;
    margin:auto;
    border-color:white;
    border-width: 2px;
    transition: 0.3s;
}
#a1:hover{
  border-color: red;
  border-width: 5px;
  opacity: 0.7px;
  border-radius: 10px;
}
#loaddata{
  color: red;
}

</style>
</head>
<body>
  <div class="container">
 <form method="post">   
    <div id="form">
      <div id="logoeditor">
      <center><img src="images/adoptionlogo123.jpg" alt="ll1" align="center" id="a1"></center>
      </div>
  <div class="form-group">
  </br>
    <center><label>Select State</label></center>
      <center><select required="required" autofocus="autofocus" id="registeredas" name="registeredas" onclick="myFunction123()">
      </select></center>
  </div>
    <div class="form-group">
  </br>
    <center><label>Select City</label></center>
      <center><select required="required" autofocus="autofocus" id="selectas" name="selectas">
        <option id='gettdata1'>!!!Select from below!!!</option>
      </select></center>
  </div>

<div class="form-group">
  <label for="pwd">Enter Secret Code Provided</label></br>
  <input type="password" id="pwd" class="form-control" required="required" placeholder="Enter Secret Code"></br>
  <p id="warning">WARNING! Caps lock is ON.</p>
  <input id="a1" type="checkbox" onclick="myFunction()"> Show Code
  </div>
  <div class="form-group form-check">
      <label class="form-check-label" id="r1">
        <input class="form-check-input" type="checkbox" name="remember">Remember me
      </label></div>
  <div id="load">   
<!-- Show message here  -->
        <h5 id="loaddata"> 

        </h5>
  </div>
  <div id=button1><center>
  <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="myFunction124()" id="submit">Login</button></center>
  </div>
</form>
</div> 
<script type="text/javascript">
  $(document).ready(function(){
    dropdown();
      $('#selectas').change(function(){
    var data = $(this).val();
    console.log(data);

        $.ajax({
          url: 'policebackend.php',
          type: 'POST',
          data: {data:data},
          success: function(result){
              console.log(result);
              $('#gettdata1').html(result);
        }
          
    });
  });

  });
  function myFunction() {
  var x = document.getElementById("pwd");
  if (x.type === "password"){
    x.type = "text";
  } else {
    x.type = "password";
  }
}
  function dropdown(){
    var readrecord = "readrecord";
    $.ajax({
      url:'policebackend.php',
      type:'post',
      data:{readrecord:readrecord},
      success:function(data){
        console.log(data);
        $('#registeredas').html(data);

      }


    });


  }



function myFunction123(){
    var x = document.getElementById("registeredas").selectedIndex;
    var w=document.getElementsByTagName("option")[x].value;
    console.log(w);
    $.ajax({
          url: 'policebackend.php',
          type: 'POST',
          data: {n:w},
          success: function(result){
              console.log(result);
              $('#gettdata').html(result);
              directingvalue(result);
        }
          
    });
}
function myFunction124(){
  var x = document.getElementById("registeredas").selectedIndex;
    var w=document.getElementsByTagName("option")[x].value;
    console.log(w);
    var y = document.getElementById("selectas").value;
    console.log(y);
     var password = $('#pwd').val();
     console.log(password);

    $.ajax({
           url: 'policebackend.php',
          type: 'POST',
          data: {w:w, y:y ,password},
          success: function(result){
              console.log(result);
              if(result == "password matched successfully"){
                document.getElementById('loaddata').style.color = "green";
              }
              $('#loaddata').html(result);
              if(result == "password matched successfully"){
                  $(location).attr('href','policepanel.php');
              }
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


</script>
</body>
</html>