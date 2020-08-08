<?php
	session_start();


?>
<!DOCTYPE html>
<html>
<head>
	<title>surrogatemotherpanel</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>s
	<style type="text/css">

	.switch {
	position: relative;
	display: block;
	width: 100px;
	height: 30px;
	padding: 3px;
	margin: auto;
	margin-top: 5%;
	background: linear-gradient(to bottom, #eeeeee, #FFFFFF 25px);
	background-image: -webkit-linear-gradient(top, #eeeeee, #FFFFFF 25px);
	border-radius: 18px;
	box-shadow: inset 0 -1px white, inset 0 1px 1px rgba(0, 0, 0, 0.05);
	cursor: pointer;
	box-sizing:content-box;
}
.switch-input {
	position: absolute;
	top: 0;
	left: 0;
	opacity: 0;
	box-sizing:content-box;
}
.switch-label {
	position: relative;
	display: block;
	height: inherit;
	font-size: 10px;
	text-transform: uppercase;
	background: #eceeef;
	border-radius: inherit;
	box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.12), inset 0 0 2px rgba(0, 0, 0, 0.15);
	box-sizing:content-box;
}
.switch-label:before, .switch-label:after {
	position: absolute;
	top: 50%;
	margin-top: -.5em;
	line-height: 1;
	-webkit-transition: inherit;
	-moz-transition: inherit;
	-o-transition: inherit;
	transition: inherit;
	box-sizing:content-box;
}
.switch-label:before {
	content: attr(data-off);
	right: 11px;
	color: #aaaaaa;
	text-shadow: 0 1px rgba(255, 255, 255, 0.5);
}
.switch-label:after {
	content: attr(data-on);
	left: 11px;
	color: #FFFFFF;
	text-shadow: 0 1px rgba(0, 0, 0, 0.2);
	opacity: 0;
}
.switch-input:checked ~ .switch-label {
	background: #E1B42B;
	box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.15), inset 0 0 3px rgba(0, 0, 0, 0.2);
}
.switch-input:checked ~ .switch-label:before {
	opacity: 0;
}
.switch-input:checked ~ .switch-label:after {
	opacity: 1;
}
.switch-handle {
	position: absolute;
	top: 4px;
	left: 4px;
	width: 28px;
	height: 28px;
	background: linear-gradient(to bottom, #FFFFFF 40%, #f0f0f0);
	background-image: -webkit-linear-gradient(top, #FFFFFF 40%, #f0f0f0);
	border-radius: 100%;
	box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.2);
}
.switch-handle:before {
	content: "";
	position: absolute;
	top: 50%;
	left: 50%;
	margin: -6px 0 0 -6px;
	width: 12px;
	height: 12px;
	background: linear-gradient(to bottom, #eeeeee, #FFFFFF);
	background-image: -webkit-linear-gradient(top, #eeeeee, #FFFFFF);
	border-radius: 6px;
	box-shadow: inset 0 1px rgba(0, 0, 0, 0.02);
}
.switch-input:checked ~ .switch-handle {
	left: 74px;
	box-shadow: -1px 1px 5px rgba(0, 0, 0, 0.2);
}
 
/* Transition
========================== */
.switch-label, .switch-handle {
	transition: All 0.3s ease;
	-webkit-transition: All 0.3s ease;
	-moz-transition: All 0.3s ease;
	-o-transition: All 0.3s ease;
}
/* Switch Flat
==========================*/
.switch-flat {
	padding: 0;
	background: #FFF;
	background-image: none;
}
.switch-flat .switch-label {
	background: #FFF;
	border: solid 2px #eceeef;
	box-shadow: none;
}
.switch-flat .switch-label:after {
	color: #0088cc;
}
.switch-flat .switch-handle {
	top: 6px;
	left: 6px;
	background: #dadada;
	width: 22px;
	height: 22px;
	box-shadow: none;
}
.switch-flat .switch-handle:before {
	background: #eceeef;
}
.switch-flat .switch-input:checked ~ .switch-label {
	background: #FFF;
	border-color: #0088cc;
}
.switch-flat .switch-input:checked ~ .switch-handle {
	left: 72px;
	background: #0088cc;
	box-shadow: none;
}
#question1{
	position: relative;
	top: 40%;
	margin-top: 20%;
}
</style>
</head>
<body>
	<div class="container">
	      <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Adopt-a-Child</a>
    </div>
      <ul class="nav navbar-nav">
      <li class="active"><a href="surrogatemotherpanel.php">Home</a></li>
      <li><a href="orphanage.php">Orphanage</a></li>  
      <li><a href="Surrogate\aboutsurrogacy.php">AboutSurrogacy</a></li>
      <?php 
      if(!empty($_SESSION['uname1'])){?>
         <li><a href="logout.php">Logout</a></li>
         <li id="uname1" style="margin-top: 3%;"><?php echo "WELCOME"." ".$_SESSION['uname1']; ?></li>
         <?php 
      }
      ?>
      </ul>
  </div>
      </nav></br>
      <center><h2 id="question1"><b>Are You ready to go with Surrogacy??</b></h2></center>	
<label class="switch switch-flat">
	<input class="switch-input" type="checkbox" id="checkbox1" value="Yes" onclick="checkbox123()" />
	<span class="switch-label" data-on="Yes" data-off="No" ></span> 
	<span class="switch-handle"></span> 
</label>
</div>
<!--	<label class="switch switch-flat">
	<input class="switch-input" type="checkbox" />
	<span class="switch-label" data-on="On" data-off="Off"></span> 
	<span class="switch-handle"></span> 
</label>-->
<script type="text/javascript">
	$(document).ready(function(){
		checkvalue();
	});

	function checkvalue(){
		var readrecord1 = "readrecord1";
		$.ajax({
			url:"surrogatebackend.php", 
			type:"post",
			data:{readrecord1:readrecord1},
			success:function(data){
					var data1 = "Yes";
					console.log(data);
					if(data == data1){
						document.getElementById("checkbox1").checked = true;
					}
					else{
						document.getElementById("checkbox1").checked = false;
					}

			}

		});

	}

	function checkbox123(){
	var isChecked=document.getElementById("checkbox1").checked;
	console.log(isChecked);
      $.ajax({
			url:"surrogatebackend.php", 
			type:"post",
			data:{isChecked:isChecked},
			success:function(data){
				console.log(data);

			}

		});
  }
</script>

</body>
</html>