 <!DOCTYPE html>
<html>
<head>
	<title>Messages</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style type="text/css">
    img{
  max-height: 30px;
  max-width: 30px;
  cursor: pointer;
}
  </style>
</head>
<body>
	<div id="container">
	<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" id="modal-title"></h4>
        </div>
        <div class="modal-body">
        	<form>
            <label>Replying To</label></br>
            <input type="text" name="text1" id="text1" disabled>
          </br>
        	<label>Type Message here</label>
          <p><textarea name="reply" id="reply" maxlength="500" rows="3" cols="70"></textarea></p>
          </form>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" onclick="replyconcerned()">Send</button>
         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <input type="hidden" name="" id="hidden_user_id">
          <input type="hidden" name="" id="hidden_user_id1">
        </div>
      </div>
      
    </div>
  </div>
	<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container-fluid">
    	<div class="navbar-header">
      		<a class="navbar-brand" href="#">Adopt-a-Child</a>
    	</div>
	   	<ul class="nav navbar-nav">
      	<li><a href="adminpanel.php">Home</a></li>
              <li><a href="Explore\explore.php">Applications</a></li>
      	<li>
        <div class="dropdown">
        <img src="images/notification.webp" alt="Notification" data-toggle="dropdown" style="padding-top: 2px; margin-top:7px; margin-left: 10px;"><sup id="superscriptnotification"></sup>
        <ul class="dropdown-menu">
          <li id="Notification"> </li>
          <li><a href="adminmessage.php">Show More</a></li>  
        </ul>
        </div></li>
        <li>
        <div class="dropdown">
      <img src="images/message.png" data-toggle="dropdown" alt="message" style="padding-top: 5px; margin-top:7px; margin-left: 10px; margin-right: 5px;" ><sup id="superscriptmessage"></sup>
        <ul class="dropdown-menu">
          <li><input type="hidden" name="hidden" id="hidden" value=""><div id="displaymessage" style="cursor: pointer;"> </div></li>
          <li><a href="adminmessage.php" onload="">Show More</a></li>  
        </ul>
        </div></li>
      </ul>
  </div>
</nav>
</br>
</br>
</br>
	<section id="records_contant1">
		
	</section>
</div>
<script type="text/javascript">

    $(document).ready(function(){
      readRecords();
      readRecords1();
      //checknoofmessages();
    });
    function readRecords(){
        var readrecord8 ="readrecord8";
        $.ajax({
          url:"backend1.php",
          type:'post',
          data:{readrecord8:readrecord8}, 
          success:function(data,status){
            $('#records_contant1').html(data);
          }
        });
      }
    function readRecords1(){
        var readrecord11 ="readrecord11";
        $.ajax({
          url:"backend1.php",
          type:'post',
          data:{readrecord11:readrecord11}, 
          success:function(data,status){
            $('#modal-title').html(data);
          }
        });
      }
      function deletevalue(value){
      var id1 = value;
      var conf = confirm("are you sure");
      if (conf==true)
      {
        $.ajax({
         url:"backend1.php",
          type:'post',
          data: {value:id1},
          success:function(data,status){
              readRecords();
              }

      });
     }
   }
         function replyvalue(value,value1){
        $('#hidden_user_id').val(value);
        $('#hidden_user_id1').val(value1);
        console.log(value);
        console.log(value1);
        $.post("backend1.php", {
          id1:value, id2:value1
        }, function(data,status){
            var user = JSON.parse(data);
            $('#text1').val(user.uname);
            console.log(user.uname);
        }

        );
        $('#updateModal').modal("show");
      }
      function changereaded(value){
        var value1 = value;
        console.log(value1);
          $.ajax({
          url:"backend1.php",
          type:'post',
          data:{changereaded:value1},
          success:function(data,status){
            console.log(data);
            }

          });
      }

    

      function replyconcerned(){
        var userid=$('#hidden_user_id').val();
        var reply = $('#reply').val();
        var uname = $('#text1').val();
        var messageid = $('#hidden_user_id1').val();
        console.log(text1);
        console.log(reply);
        console.log(userid);
        console.log(messageid);
        $.ajax({
           url:"backend3.php",
          type:'post',
          data: {userid:userid, reply:reply, text1:uname, messageid:messageid},
          success:function(data,status){
              console.log(data); 
            var variable = data;
            var variable1 = 'Message Sent Successfully';
            console.log(variable);
            console.log(variable1);
            if(variable == variable1){
              document.getElementById('btnreply').innerHTML="Replied";
              changereaded(messageid);
              }
            }
        });
      }
      function myFunction(value1) {
      var readrecord47= "value1";
      $.ajax({
          url:"backend1.php",
          type:'post',
          data:{readrecord47:readrecord47},
          success:function(data,status){
            console.log(data);
            }

          });
      }
      function checknoofmessages(){
        var readrecord27 = "readrecord27";
        $.ajax({
               url:"backend1.php",
          type:'post',
          data:{readrecord27:readrecord27},
          success:function(data,status){
            console.log(data);
            checkreply(data);
            }
          });

      }
      function callajax(value){
        $.ajax({
          url:"backend1.php",
          type:'post',
          data:{checkreply:value},
          success:function(data,success){
            console.log(data);
            var check = "No";
            if(data == check)
            {
                document.getElementById('btnreply').innerHTML="Reply";
            }
            else{
              document.getElementById('btnreply').innerHTML="Replied";
            }
          }
        });
      }
      function checkreply(value){
        var value1 = value;
        console.log(value1);
         for(i=0;i<=value1;i++){
          callajax(value1);
      }
    }
</script>
</body>
</html>