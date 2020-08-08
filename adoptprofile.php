<?php

session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>



<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


  <link rel="stylesheet" type="text/css" href="in-style.css">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<link rel="shortcut icon" href="/assets/favicon.ico">
<link rel="stylesheet" href="/assets/dcode.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<style>
  
  body{
     margin-top: auto;
    background-color: #f1f1f1;
  background: #f2f2f2;
  color: #797979;
  font-family: 'OpenSans-Light';
  
  line-height: ;
  margin: 0;
  min-width: ;
  padding: ;

}
.emp-profile{
    padding: 3%;
    margin-top: 3%;
    margin-bottom: 3%;
    border-radius: 0.5rem;
    background: #fff;
}
.profile-img{
    text-align: center;
}
.profile-img img{
    width: 70%;
    height: 100%;
}
.profile-img .file {
    position: relative;
    overflow: hidden;
    margin-top: -20%;
    width: 70%;
    border: none;
    border-radius: 0;
    font-size: 15px;
    background: #212529b8;
}
.profile-img .file input {
    position: absolute;
    opacity: 0;
    right: 0;
    top: 0;
}
.profile-head h5{
    color: #333;
}
.profile-head h6{
    color: #0062cc;
}
.profile-edit-btn{
    border: none;
    border-radius: 1.5rem;
    width: 70%;
    padding: 2%;
    font-weight: 600;
    color: #6c757d;
    cursor: pointer;
}
.proile-rating{
    font-size: 12px;
    color: #818182;
    margin-top: 5%;
}
.proile-rating span{
    color: #495057;
    font-size: 15px;
    font-weight: 600;
}
.profile-head .nav-tabs{
    margin-bottom:5%;
}
.profile-head .nav-tabs .nav-link{
    font-weight:600;
    border: none;
}
.profile-head .nav-tabs .nav-link.active{
    border: none;
    border-bottom:2px solid #0062cc;
}
.profile-work{
    padding: 14%;
    margin-top: -15%;
}
.profile-work p{
    font-size: 12px;
    color: #818182;
    font-weight: 600;
    margin-top: 10%;
}
.profile-work a{
    text-decoration: none;
    color: #495057;
    font-weight: 600;
    font-size: 14px;
}
.profile-work ul{
    list-style: none;
}
.profile-tab label{
    font-weight: 600; 
}
.profile-tab p{
    font-weight: 600;
    color: #0062cc;
}
   #image1{
      max-height: 60px;
      max-width: 60px;

   }

 
</style>
</head>
<body>
<header class="header">

    <nav class="navbar navbar-style bg-info sticky-top navbar-expand-sm">

        <div class="container">

            <div class="navbar-header">

              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#micon">

              <span class="icon-bar"> </span>
              <span class="icon-bar"> </span>
              <span class="icon-bar"> </span>
             
              <span class="icon-bar"> </span>

               <span class="icon-bar"> </span>

                <span class="icon-bar"> </span>




               </button>


                <a href=""> <img class="logo" src="images/123.png" > </a>
            </div>



            <div class="collapse navbar-collapse " id="micon">
            <ul class="nav navbar-nav navbar-right ">

          
                
        
              <li><a href="index.php">Home</a></li>

              <li><a href="orphanagenew.php">Orphanage</a></li>

              <li><a href="Surrogate/aboutsurrogacynew.php">AboutSurrogacy</a></li>

              <li><a href="Surrogate/qualificationtosurrogatenew.php">Qualification to be a Surrogate</a> </li>
<li><a href="donatetoorphannew.php">Donation</a></li>
                <li><a href="Help/helpnew.php">Help</a></li>
            <?php 
            if(!empty($_SESSION['fname'])){?>
            <div class="w3-dropdown-hover">
            <li><img id="image" style=" 
  pointer-events: auto;
  max-height: 30px;
  max-width: 30px;
  cursor: pointer;
  margin-top: 7px;" src="images/avatar.png" alt="avatar"></li>
            <div class="w3-dropdown-content w3-bar-block">
                <li class="w3-bar-item"><a  href="adoptprofile.php"><?php echo $_SESSION['uname']; ?></a></li>
                <li class="w3-bar-item"><a href="logout.php">Logout</a></li>
            </div>
        </div> 
         <?php 
      }
      else{
        ?>
        <li><a href="loginform1.php">Login</a></li>
        <?php
      }
      ?>
                  
                  </h5>
            </ul>
         
            </div>

        </div>
    </nav>


   <div class="w3-content" style="max-width:1600px">

  <!-- Header -->
  <header class="w3-container w3-center w3-padding-48 w3-white">
    <h1 class="w3-xxxlarge"><b>Adoption Made Easier</b></h1>
    <h4>Adopt a <span class="w3-tag">Child</span></h4>
  </header>



  <div class="container emp-profile">
            <form method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="" alt="" id="profilephoto" />
                            <div class="file btn btn-lg btn-primary">
                            <div id="photoadd">
                                Change Photo
                            </div>
                                <input type="file" name="attachment2" id="attachment2"  />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                       <?php echo $_SESSION['fname']. " ".$_SESSION['lname']; ?>
                                    </h5>
                                    <h6>
                                        <?php echo $_SESSION['maritalstatus']; ?>
                                    </h6>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                                 <div class="row">
                                            <div class="col-md-6">
                                                <label>User Id</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $_SESSION['user_id']; ?></p>
                                            </div>
                                        </div>
                                 <div class="row">
                                            <div class="col-md-6">
                                                <label>Approved</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $_SESSION['approved']; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $_SESSION['fname']. " ".$_SESSION['lname']; ?></p>
                                            </div>
                                        </div>
                                            <div class="row">
                                            <div class="col-md-6">
                                                <label>Date Of Birth</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $_SESSION['mrdateofbirth']; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $_SESSION['email']; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $_SESSION['mobilenumber']; ?></p>
                                            </div>
                                        </div>
                                        <?php if(!empty($_SESSION['maritalstatus']) && $_SESSION['maritalstatus'] != "null"){?>
                                              <div class="row">
                                            <div class="col-md-6">
                                                <label>Spouse Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $_SESSION['mrsname']; ?></p>
                                            </div>
                                        </div><?php }?>
                                            <div class="row">
                                            <div class="col-md-6">
                                                <label>Spouse Date of Birth</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $_SESSION['mrsdateofbirth']; ?></p>
                                            </div>
                                        </div>
                                              <div class="row">
                                            <div class="col-md-6">
                                                <label>Residence Address</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $_SESSION['residenceaddress']; ?></p>
                                            </div>
                                        </div>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
              
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                       
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>

<script type="text/javascript">
    $(document).ready(function(){
        profilepic();
        readdata();
        $(document).on('change','#attachment2',function(){

            var attachment1 = document.getElementById('attachment2').files[0];
            console.log(attachment1);
            var formdata123 = new FormData();
            formdata123.append('file',attachment1);
            var read1 = "read1";
            $.ajax({
                            url: 'imagebackend.php',
                            type: 'post',
                            data: formdata123,
                            contentType: false,
                            processData: false,
                            cache:false,
                            beforesend:function(){
                                  $('#photoadd').html("Loading");
                            },
                            success: function(data){
                                console.log(data);
                            var c = document.getElementById('profilephoto');
                            c.src = data;
                            $('#photoadd').html("Change Photo");
                        }
                    
                        });

        });
    });
    function profilepic(){
        var read = "read";
        $.ajax({
            url:"imagebackend.php",
            type:"post",
            data:{read:read},
            success:function(data){
                console.log(data);
                if(data == "images/pp1.png"){
                    $('#photoadd').html("Add Photo");
                    var c = document.getElementById('profilephoto');
                    c.src = data;
                }
                else{
                    $('#photoadd').html("Change Photo");
                    var c = document.getElementById('profilephoto');
                    c.src = data;

                }

            }
        });
    }
    function readdata(){
    var readdata = "readdata";
    $.ajax({
            url:"imagebackend.php",
            type:"post",
            data:{readdata:readdata},
            success:function(data){
              console.log(data);
            }

    });


    }

</script>
</body>
</html>