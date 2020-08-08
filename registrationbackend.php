<?php
session_start();
$db_hostname = 'localhost';
$db_database = 'formdata';
$db_username = 'root';
$db_password = '';
$conn=mysqli_connect($db_hostname, $db_username, $db_password, $db_database);
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $errorfname = "true";
  $errorlname = "true";
  $erroremail = "true";
  $errormno = "true";
  $erroruname = "true";
  $errorpwd = "true";
  $errorgender = "true";
  $errorattachment = "true";
extract($_POST);
  if(isset($_POST['registeras'])){
      $x = $_POST['registeras'];
   $w='lookingtoadopt';
   $y='pregnantandconsideringadoption';
   $h='philanthropists';
   $m='surrogate';
   $_SESSION['x']= $x;
   if($x==$w){
     $fname = $_POST['fname'];
   $lname = $_POST['lname'];
   $email = $_POST['email'];
   $mno = $_POST['mno'];
   $uname = $_POST['uname1'];
   $pwd = $_POST['pwd'];
   $cpwd = $_POST['rpwd'];
   $gender = $_POST['g'];
  $files = $_FILES['attachment1'];
  $filename = $files['name'];
  $fileerror = $files['error'];
  $filetmp = $files['tmp_name'];
  $filesize = $files['size']; 
  $fileext = explode('.', $filename);
  $fileonlyname = $fileext['0'];
  $fileonlyext = $fileext['1'];
  $filecheck = strtolower(end($fileext));
  $allowed = array( 'jpg', 'jpeg', 'gif', 'png', 'bmp');
  if(in_array($filecheck, $allowed))
  {
    $destinationfile = "uploadimage/".$filename;
    move_uploaded_file($filetmp, $destinationfile);
    $errorattachment = "false";
      $_SESSION['firstname'] = $fname;
  $_SESSION['lastname'] = $lname;
  $_SESSION['email'] = $email;
  $_SESSION['mno'] = $mno; 
  $_SESSION['username'] = $uname;
  $_SESSION['pwd'] = $pwd;
  $_SESSION['cpwd'] = $cpwd;
  $_SESSION['gender'] = $gender;
  $_SESSION['filename'] = $filename;
  $_SESSION['destinationfile']= $destinationfile;
  }
  if(!empty($fname) && !empty($lname) && !empty($email) && !empty($mno) && !empty($uname)&& !empty($pwd) && !empty($destinationfile)&& !empty($gender)){
        echo $errorattachment;
   }
  else{
    echo "here is an error";
  }
  }
   if($x==$y){
   $pwd = $_POST['pwd'];
   $cpwd = $_POST['rpwd'];
   $fname = $_POST['fname'];
   $lname = $_POST['lname'];
   $email = $_POST['email'];
   $mno = $_POST['mno'];
   $uname = $_POST['uname1'];
   $gender = $_POST['g'];
  $files = $_FILES['attachment1'];
  $filename = $files['name'];
  $fileerror = $files['error'];
  $filetmp = $files['tmp_name'];
  $filesize = $files['size'];
  $fileext = explode('.', $filename);
  $fileonlyname = $fileext['0'];
  $fileonlyext = $fileext['1'];
  $filecheck = strtolower(end($fileext));
  $allowed = array( 'jpg', 'jpeg', 'gif', 'png', 'bmp');
  if(in_array($filecheck, $allowed))
  {
    $destinationfile = "uploadimage/".$filename;
    move_uploaded_file($filetmp, $destinationfile);
    $errorattachment="false";
  $_SESSION['firstname'] = $fname;
  $_SESSION['lastname'] = $lname;
  $_SESSION['email'] = $email;
  $_SESSION['mno'] = $mno;
  $_SESSION['username'] = $uname;
  $_SESSION['pwd'] = $pwd;
  $_SESSION['cpwd'] = $cpwd;
  $_SESSION['gender'] = $g;
     $_SESSION['filename'] = $filename;
   $_SESSION['destinationfile']= $destinationfile;
  }
  else{
    $errorattachment="true";
  }
     if(!empty($fname) && !empty($lname) && !empty($email) && !empty($mno) && !empty($uname)&& !empty($pwd) && !empty($destinationfile)&& !empty($gender)){
      echo $errorattachment;

    
   }
  else{
    echo "here is an error";
  }

   }

   if($x==$h){

  $fname = $_POST['fname'];
   $lname = $_POST['lname'];
   $email = $_POST['email'];
   $mno = $_POST['mno'];
   $uname = $_POST['uname1'];
   $pwd = $_POST['pwd'];
   $cpwd = $_POST['rpwd'];
   $gender = $_POST['g'];
  $files = $_FILES['attachment1'];
  $filename = $files['name'];
  $fileerror = $files['error'];
  $filetmp = $files['tmp_name'];
  $filesize = $files['size'];
  $fileext = explode('.', $filename);
  $fileonlyname = $fileext['0'];
  $fileonlyext = $fileext['1'];
  $filecheck = strtolower(end($fileext));
  $allowed = array( 'jpg', 'jpeg', 'gif', 'png', 'bmp');
  if(in_array($filecheck, $allowed))
  {
    $destinationfile = "uploadimage/".$filename;
    move_uploaded_file($filetmp, $destinationfile);
  $errorattachment="false";
  $_SESSION['firstname'] = $fname;
  $_SESSION['lastname'] = $lname;
  $_SESSION['email'] = $email;
  $_SESSION['mno'] = $mno;
  $_SESSION['username'] = $uname;
  $_SESSION['pwd'] = $pwd;
  $_SESSION['cpwd'] = $cpwd;
  $_SESSION['gender'] = $g;
     $_SESSION['filename'] = $filename;
   $_SESSION['destinationfile']= $destinationfile;
  }
  else{
    $errorattachment="true";
  }


if(!empty($fname) && !empty($lname) && !empty($email) && !empty($mno) && !empty($uname)&& !empty($pwd) && !empty($destinationfile)&& !empty($gender)){

    $query = "INSERT INTO surrogate(firstname, lastname, email, mobileno, username, password, Gender) VALUES('$fname','$lname', '$email','$mno', '$uname','$pwd', '$gender')";
  if(!mysqli_query($conn,$query))
  {
 echo("Error description: " . mysqli_error($conn));
  }
  else
  {
    echo "You are Successfully Registered..";
  }
    
   }
  else{
    echo "here is an error";
  }


   }

   if($x==$m){

   $fname = $_POST['fname'];
   $lname = $_POST['lname'];
   $email = $_POST['email'];
   $mno = $_POST['mno'];
   $uname = $_POST['uname1'];
   $pwd = $_POST['pwd'];
   $cpwd = $_POST['rpwd'];
   $gender = $_POST['g'];
     $files = $_FILES['attachment1'];
  $filename = $files['name'];
  $fileerror = $files['error'];
  $filetmp = $files['tmp_name'];
  $filesize = $files['size'];
  $fileext = explode('.', $filename);
  $fileonlyname = $fileext['0'];
  $fileonlyext = $fileext['1'];
  $filecheck = strtolower(end($fileext));
  $allowed = array( 'jpg', 'jpeg', 'gif', 'png', 'bmp');
  if(in_array($filecheck, $allowed))
  {
    $destinationfile = "uploadimage/".$filename;
    move_uploaded_file($filetmp, $destinationfile);
    $errorattachment="false";
  $_SESSION['firstname'] = $fname;
  $_SESSION['lastname'] = $lname;
  $_SESSION['email'] = $email;
  $_SESSION['mno'] = $mno;
  $_SESSION['username'] = $uname;
  $_SESSION['pwd'] = $pwd;
  $_SESSION['cpwd'] = $cpwd;
  $_SESSION['gender'] = $gender;
     $_SESSION['filename'] = $filename;
   $_SESSION['destinationfile']= $destinationfile;
  }
  else{
    $errorattachment="true";
  }

 if(!empty($fname) && !empty($lname) && !empty($email) && !empty($mno) && !empty($uname)&& !empty($pwd) && !empty($destinationfile)&& !empty($gender)){
  echo $errorattachment;
   }
  else{
    echo "here is an error";
  }
}
  }
if(isset($_POST['fname']))
{
  $fname=$_POST['fname'];
  if(empty($fname)){
    $errorfname="true";
    echo "Please Enter firstname..";
  }
  else{
    $errorfname="false";
  }
}
if(isset($_POST['lname']))
{
  $lname=$_POST['lname'];
  if(empty($lname)){
    $errorlname="true";
    echo "Please Enter Lastname..";
  }
  else{
    $errorlname="false";
  }
}
if(isset($_POST['email']))
{
  $email=$_POST['email'];
  if(empty($email)){
    $erroremail="true";
    echo "Please Enter email..";
  }
  else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $erroremail="true";
    echo "Please Enter valid email..";  
  }
  else{
    $erroremail="false";
  }
}
if(isset($_POST['mno']))
{
  $mno=$_POST['mno'];
  $mno1 = strlen($mno);
  if(empty($mno)){
    $errormno="true";  
    echo "Please Enter mobile no..";
  }
  elseif (($mno1)<10) {
    # code...
    echo "enter valid no";
  }
  elseif (!is_numeric($mno)) {
    # code...
    echo "enter Valid No Please";
  }
  else{
    $errormno="false";
  }
}
if(isset($_POST['uname1']))
{
  $uname=$_POST['uname1'];
  if(empty($uname)){
    $erroruname="true";
    echo "Please Enter username..";
  }
  else{
    $erroruname="false";
  }
}
if(isset($_POST['pwd'])){
  $pwd=$_POST['pwd'];
  $x= strlen($pwd);
  if(empty($pwd)){
    echo "enter password";
  }
  if($x<7 && $x>0){
    echo "Too Weak";
  }

}
if(isset($_POST['pwd'])&&isset($_POST['rpwd']))
{
  $pwd=$_POST['pwd'];
  $rpwd=$_POST['rpwd'];
  if($pwd == $rpwd){
    $errorpwd="false";
  }
  else{
    $errorpwd="true";
    echo "Password Mismatched";
  }
}
if(isset($_POST['gender']))
{
  $gender=$_POST['gender'];
  if(empty($gender)){
    $errorgender="true";
    echo "Please Select Gender";
  }
  else{
    $errorgender="false";
  }
}
if(isset($_POST['y'])){
  echo $y;
}
if(isset($_FILES['attachment1'])){
  $files = $_FILES['attachment1'];
  $filename = $files['name'];
  $fileerror = $files['error'];
  $filetmp = $files['tmp_name'];
  $filesize = $files['size'];
  $fileext = explode('.', $filename);
  $fileonlyname = $fileext['0'];
  $fileonlyext = $fileext['1'];
  $filecheck = strtolower(end($fileext));
  $allowed = array( 'jpg', 'jpeg', 'gif', 'png', 'bmp');
  if(in_array($filecheck, $allowed))
  {
    $destinationfile = "uploadimage/".$filename;
    move_uploaded_file($filetmp, $destinationfile);
    $errorattachment="false";
  }
  else{
    $errorattachment="true";
  }
}

if (isset($_POST['b'])) {
   $x = $_POST['b'];
   $w='lookingtoadopt';
   $y='pregnantandconsideringadoption';
   $h='philanthropists';
   $m='surrogate';
   if($x==$w){
   $uname = $_POST['uname1'];
   $pwd = $_POST['pwd'];
   $cpwd = $_POST['rpwd'];
   $_SESSION['username'] = $uname;
   $_SESSION['pwd'] = $pwd;
   $_SESSION['cpwd'] = $cpwd;
   echo "Successfull";

   }
   if($x==$y){
   $fname = $_POST['fname'];
   $lname = $_POST['lname'];
   $email = $_POST['email'];
   $mno = $_POST['mno'];
   $uname1 = $_POST['uname1'];
   $pwd = $_POST['pwd'];
   $cpwd = $_POST['rpwd'];
   $gender = $_POST['gender'];
  $_SESSION['firstname'] = $fname;
  $_SESSION['lastname'] = $lname;
  $_SESSION['email'] = $email;
  $_SESSION['mno'] = $mno;
  $_SESSION['username1'] = $uname1;
  $_SESSION['pwd'] = $pwd;
  $_SESSION['cpwd'] = $cpwd;
  $_SESSION['gender'] = $gender;
  echo "Successfull";

   }

   if($x==$h){

  $fname = $_POST['fname'];
   $lname = $_POST['lname'];
   $email = $_POST['email'];
   $mno = $_POST['mno'];
   $uname = $_POST['uname1'];
   $pwd = $_POST['pwd'];
   $cpwd = $_POST['rpwd'];
   $gender = $_POST['gender'];
  $_SESSION['firstname'] = $fname;
  $_SESSION['lastname'] = $lname;
  $_SESSION['email'] = $email;
  $_SESSION['mno'] = $mno;
  $_SESSION['username1'] = $uname1;
  $_SESSION['pwd'] = $pwd;
  $_SESSION['cpwd'] = $cpwd;
  $_SESSION['gender'] = $gender;
  echo "Successfull";


   }

   if($x==$m){

   $fname = $_POST['fname'];
   $lname = $_POST['lname'];
   $email = $_POST['email'];
   $mno = $_POST['mno'];
   $uname = $_POST['uname1'];
   $pwd = $_POST['pwd'];
   $cpwd = $_POST['rpwd'];
   $gender = $_POST['gender'];
  $_SESSION['firstname'] = $fname;
  $_SESSION['lastname'] = $lname;
  $_SESSION['email'] = $email;
  $_SESSION['mno'] = $mno;
  $_SESSION['username1'] = $uname1;
  $_SESSION['pwd'] = $pwd;
  $_SESSION['cpwd'] = $cpwd;
  $_SESSION['gender'] = $gender;
  echo "Successfull";
   }
}


if(isset($_POST['ob2']) && isset($_POST['dob21'])&& isset($_POST['textarea2'])&&isset($_POST['g']) && isset($_POST['b']))
{
  $ob2 = $_POST['ob2'];
  $dob21 = $_POST['dob21'];
  $textarea2 = $_POST['textarea2'];
  $g = $_POST['g'];
  $b = $_POST['b'];
  $fname = $_SESSION['firstname'];
  $lname = $_SESSION['lastname'];
  $email = $_SESSION['email'];
  $mno = $_SESSION['mno'];
  $gender = $_SESSION['gender'];
  $uname = $_SESSION['username']; 
  $pwd  =  $_SESSION['pwd'];
  $cpwd =  $_SESSION['cpwd'];
  $filename = $_SESSION['filename'];
  $destinationfile =  $_SESSION['destinationfile'];
  $query = "INSERT INTO pregnantandconsideringadoption(firstname, lastname, email, mobileno, username, password, Gender, dateofbirth, dateofgettingpregnant, reasonforconsideringadoption, applicantcategory, haveyouhadanychildrenbefore ) VALUES('$fname','$lname', '$email','$mno', '$uname','$pwd', '$gender', '$ob2', '$dob21', '$textarea2', '$g', '$b')";
  if(!mysqli_query($conn,$query))
  {
    echo "Something went wrong please try again later";
  }
  else
  {
    echo "You are Successfully Registered..";
  }
}

if(isset($_POST['b']) && isset($_POST['d']) && isset($_POST['mrname']) && isset($_POST['f']) && isset($_POST['mrdate']) && isset($_POST['h']) && isset($_POST['mrsname']) && isset($_POST['j']) && isset($_POST['mrsdate']) && isset($_POST['l']) && isset($_POST['mrpwork']) && isset($_POST['mraincome']) && isset($_POST['n']) && isset($_POST['mrspwork']) && isset($_POST['mrsaincome']) && isset($_POST['biochild']) && isset($_POST['adoptchild']) && isset($_POST['total']) && isset($_POST['address']) && isset($_POST['p']) && isset($_POST['r']) && isset($_POST['pincode']) && isset($_POST['phoneno']) && isset($_POST['mobileno']) && isset($_POST['email1']) && isset($_POST['panno']) && isset($_POST['v']) && isset($_POST['x']) && isset($_POST['z']) && isset($_POST['b1']) && isset($_POST['d1']) && isset($_POST['f1']) && isset($_POST['h1']) && isset($_POST['j1']) && isset($_POST['l1']) && isset($_POST['n1']) )
{
  $b = $_POST['b'];
  $g = $_POST['g'];
  $d = $_POST['d'];
  $mrname = $_POST['mrname'];
  $mrfullname =  $d." ".$mrname;
  $f = $_POST['f'];
  $mrdate = $_POST['mrdate'];
  $h = $_POST['h'];
  $mrsname = $_POST['mrsname'];
  $mrsfullname = $h." ".$mrsname;
  $j = $_POST['j'];
  $mrsdate = $_POST['mrsdate'];
  $l = $_POST['l'];
  $mrpwork = $_POST['mrpwork'];
  $mraincome = $_POST['mraincome'];
  $n = $_POST['n'];
  $mrspwork = $_POST['mrspwork'];
  $mrsaincome = $_POST['mrsaincome'];
  $biochild = $_POST['biochild'];
  $adoptchild = $_POST['adoptchild'];
  $total = $_POST['total'];
  $address = $_POST['address'];
  $p = $_POST['p'];
  $r = $_POST['r'];
  $code = $_POST['code'];
  $pincode = $_POST['pincode'];
  $phoneno = $_POST['phoneno'];
  $code = $_POST['code'];
  $phoneno1 = $code . '-' . $phoneno;
  $mobileno = $_POST['mobileno'];
  $email1 = $_POST['email1'];
  $panno = $_POST['panno'];
  $v = $_POST['v'];
  $x = $_POST['x'];
  $z = $_POST['z'];
  $b1 = $_POST['b1'];
  $d1 = $_POST['d1'];
  $f1 = $_POST['f1'];
  $h1 = $_POST['h1'];
  $j1 = $_POST['j1'];
  $l1 = $_POST['l1'];
  $n1 = $_POST['n1'];
  $p1 = $_POST['p1'];
  $motivation = $_POST['motivation'];
  $fname = $_SESSION['firstname'];
  $lname = $_SESSION['lastname'];
  $email = $_SESSION['email'];
  $mno = $_SESSION['mno'];
  $gender = $_SESSION['gender'];
  $uname = $_SESSION['username']; 
  $pwd  =  $_SESSION['pwd'];
  $cpwd =  $_SESSION['cpwd'];
  $filename = $_SESSION['filename'];
  $destinationfile =  $_SESSION['destinationfile'];
  $null1 = "null";
  $no = "no";
  $pending = "pending";
  $query = "INSERT INTO lookingtoadopt(firstname, lastname, email, mobileno, username, password, Gender, img_dir, img_name, background_img_dir, martialstatus, applicantcategory, mrname, mrnationality, mrdateofbirth, mrsname, mrsnationality, mrsdateofbirth, mroccupation, mrplaceofwork, mrannualincome, mrsoccupation, mrsplaceofwork, mrsannualincome, noofbiologicalchildren, noofadoptedchildren, total, residenceaddress, city, state, pincode, phnno, mobilenumber, email0, pancard, gender1, childcategory, healthstatus, age, firststageofadoption, secondstageofadoption, thirdstageofadoption, motivationforadoption, stateagency, agency, nameoftheagency, agencyaddress, approved, sendforverification) VALUES('$fname','$lname', '$email','$mno', '$uname','$pwd', '$gender', '$destinationfile' , '$filename', '$null1', '$b', '$g', '$mrfullname', '$f', '$mrdate', '$mrsfullname', '$j', '$mrsdate', '$l', '$mrpwork', '$mraincome', '$n', '$mrspwork', '$mrsaincome', '$biochild', '$adoptchild', '$total', '$address', '$p', '$r', '$pincode', '$phoneno1', '$mobileno', '$email1', '$panno', '$v', '$x', '$z', '$b1', '$d1', '$f1', '$h1', '$motivation', '$p1', '$j1', '$l1', '$n1','$no','$pending')";
  
  if(!mysqli_query($conn,$query))
  {
    echo("Error description: " . mysqli_error($conn));
  } else
  {
    echo "You are Successfully Registered..";
  }

}

if( isset($_POST["dob"]) && isset($_POST["w"]) && isset($_POST["height"]) && isset($_POST["weight"]) && isset($_POST["a"]) && isset($_POST["b"]) && isset($_POST["c"]) && isset($_POST["d"]) && isset($_POST["e"]) && isset($_POST["f"]) && isset($_POST["g"]) && isset($_POST["question7"]))
{
  $dob = $_POST["dob"];
  $w = $_POST["w"];
  $height = $_POST["height"];
  $weight = $_POST["weight"];
  $a = $_POST["a"];
  $b = $_POST["b"];
  $c = $_POST["c"]; 
  $d = $_POST["d"];
  $e = $_POST["e"];
  $f = $_POST["f"];
  $g = $_POST["g"];
  $question7 = $_POST["question7"];
  $fname = $_SESSION['firstname'];
  $lname = $_SESSION['lastname'];
  $email = $_SESSION['email'];
  $mno = $_SESSION['mno'];
  $gender = $_SESSION['gender'];
  $uname = $_SESSION['username']; 
  $pwd  =  $_SESSION['pwd'];
  $cpwd =  $_SESSION['cpwd'];
  $filename = $_SESSION['filename'];
  $destinationfile =  $_SESSION['destinationfile'];
$no = "no";
$No = "No";
    $query = "INSERT INTO surrogate(firstname, lastname, email, mobileno, username, password, Gender, dateofbirth, citizenship, doyousmoke, height, weight, q1, q2, q3, q4, q5, q6, q7) VALUES('$fname','$lname', '$email','$mno', '$uname','$pwd', '$gender', '$dob', '$w', '$a', '$height', '$weight', '$b',  '$c', '$d', '$e', '$f', '$g', '$question7')";
  if(!mysqli_query($conn,$query))
  {
 echo("Error description: " . mysqli_error($conn));
  }
  else
  {
    echo "You are Successfully Registered..";
  }


}
if(isset($_POST['agency'])){
    $data = "<option id='gettdata'>!!!Select from below!!!</option>";
    $query='SELECT DISTINCT(state) FROM agencies';
    $result = mysqli_query($conn, $query) or die( mysqli_error($conn));
    if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_array($result)){
      $data .= "<option value=" . "'".$row['state']."'>".$row['state']."</option>";
  }
}
  echo $data;
}


if(isset($_POST['city'])){
    $data = "<option>!!!Select from below!!!</option>";
    $query='SELECT DISTINCT(city) FROM cityselect';
    $result = mysqli_query($conn, $query) or die( mysqli_error($conn));
    if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_array($result)){
      $data .= "<option value=" . "'".$row['city']."'>".$row['city']."</option>";
  }
}
  echo $data;
}


if (isset($_POST['state12'])) {
    $m= $_POST['state12'];
    $data = "<option>!!!Select from below!!!</option>";
    $query = "SELECT state FROM cityselect WHERE city = '$m'";
    $result = mysqli_query($conn, $query) or die( mysqli_error($conn));
    if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_array($result)){
      $data .= "<option value=" . "'".$row['state']."'>".$row['state']."</option>";
  }
}
else{
  $data .= "<option>!!!Select from below!!!</option>";
}
  echo $data;
}
if (isset($_POST['state13'])) {
    $m= $_POST['state13'];
    $data = "<option>!!!Select from below!!!</option>";
    $query = "SELECT name FROM agencies WHERE state = '$m'";
    $result = mysqli_query($conn, $query) or die( mysqli_error($conn));
    if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_array($result)){
      $data .= "<option value=" . "'".$row['name']."'>".$row['name']."</option>";
  }
}
else{
  $data .= "<option>!!!Select from below!!!</option>";

}
  echo $data;
}
if (isset($_POST['agencyaddress'])) {
    $m= $_POST['agencyaddress'];
    $data = "<option>!!!Select from below!!!</option>";
    $query = "SELECT address FROM agencies WHERE name = '$m'";
    $result = mysqli_query($conn, $query) or die( mysqli_error($conn));
    if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_array($result)){
      $data .= "<option value=" . "'".$row['address']."'>".$row['address']."</option>";
  }
}
else{
  $data .= "<option>!!!Select from below!!!</option>";

}
  echo $data;
}
?>
