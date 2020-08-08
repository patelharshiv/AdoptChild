<?php
  session_start();

  if(empty($_SESSION['policestation'])){
    header("Location: policelogin.php");

  }

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<style type="text/css">
 body{
  width: 100%;
  height:100%;
  background: url("images/indianpolice.png");
  background-repeat: no-repeat;
  background-size: auto;
  background-position: center;
  background-attachment: fixed;
  background-clip: padding-box;

 } 
 img{
  max-height: 30px;
  max-width: 30px;
}
li{
  cursor: pointer;
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
  font-size: 170%;
  top:36%;
  left: 60%;
}

</style>
</head>
<body>
	<div class="container">
	<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container-fluid">
    	<div class="navbar-header">
      		<a class="navbar-brand" href="#"><?php echo $_SESSION['policestation']. " " . "police" ?></a>
    	</div>
	   	<ul class="nav navbar-nav">
      	<li class="active"><a href="adminpanel.php">Home</a></li>
        <li><a href="Explore\explore.php">Applications</a></li>
      	<li>
        <div class="dropdown">
        <img src="images/notification.webp" alt="Notification" data-toggle="dropdown"  onload="checknotification()"  style="padding-top: 2px; margin-top:7px; margin-left: 10px;"><sup id="superscriptnotification"></sup>
        <ul class="dropdown-menu harshiv">
          <li id="Notification1"> </li>
          <li><a href="adminmessage.php">Show More</a></li>  
        </ul>
        </div></li>
        <li>
        <div class="dropdown">
            <img src="images/message.png" data-toggle="dropdown" alt="message" style="padding-top: 5px; margin-top:7px; margin-left: 10px; margin-right: 5px;" ><sup id="superscriptmessage"></sup>
        <ul class="dropdown-menu">
          <li><div id="displaymessage" onclick="myFunction()" class="popup">  <span class="popuptext" id="myPopup"></span></div></li>
          <li><a href="adminmessage.php" onload="">Show More</a></li>  
        </ul>
        </div>
      </li>
      </ul>
  </div>
</nav>

</div>
<script type="text/javascript">
  $(document).ready(function(){
    checknotification();
    checknotificationsuperscript();


  });


    function checknotification() {
         var readrecord6 ="readrecord6";
          $.ajax({
          url:"policebackend.php",
          type:'post',
          data:{readrecord6:readrecord6}, 
          success:function(data,status){
               $('.harshiv').html(data); 
          }
        });
      }
   function checknotificationsuperscript() {
         var readrecord7 ="readrecord7";
      // body...
          $.ajax({
          url:"policebackend.php",
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


</script>
</body>
</html>