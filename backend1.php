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
 if(isset($_POST['readrecord'])){
$data = '<table class="table table-stripped table-hover">
			<tr>
			<th>id</th>
			<th>Firstame</th>
			<th>Lastname</th>
			<th>Email</th>
			<th>MobileNo</th>
			<th>username</th>
			<th>password</th>
			<th>Gender</th>
			<th>Send For Verification</th>
			<th>Show</th>
			<th>Delete action</th>
			</tr>';
	$displayquery = "SELECT * FROM lookingtoadopt WHERE approved='Yes'";
			//$displayquery = "SELECT * FROM form12 FULL OUTER JOIN images ON form12.id = form1.mid";
	$result = mysqli_query($conn, $displayquery) or die( mysqli_error($conn));
	if(mysqli_num_rows($result) > 0){
		$number =1;
	while($row = mysqli_fetch_array($result)){
					$data1 = $row['sendforverification'];
					$var = 'pending';
					if ($data1 == $var){
						$data .= '<tr>
						<td>'.$number.'</td>
						<td>'.$row['firstname'].'</td>
						<td>'.$row['lastname'].'</td>
						<td>'.$row['email'].'</td>
						<td>'.$row['mobileno'].'</td>
						<td>'.$row['username'].'</td>
						<td>'.$row['password'].'</td>
						<td>'.$row['Gender'].'</td>
						<td><button type="button" name="btnsend" value="Send" id="btnsend" onclick="sendforverification('.$row['id'].')" class="btn sbtn-warning">Send</button></td>
						<td><button type="button" name="btn" value="Show" id="btnshw" onclick="checklookingtoadopt('.$row['id'].')" class="btn sbtn-warning">Show</button></td>
						<td><button type="button" name="btn" value="delete" id="btndelete" onclick="deletevalue('.$row['id'].')" class="btn btn-danger">Delete</button></td>
						</tr>';	
						$number++;
					}
					else{
						$data .= '<tr>
						<td>'.$number.'</td>
						<td>'.$row['firstname'].'</td>
						<td>'.$row['lastname'].'</td>
						<td>'.$row['email'].'</td>
						<td>'.$row['mobileno'].'</td>
						<td>'.$row['username'].'</td>
						<td>'.$row['password'].'</td>
						<td>'.$row['Gender'].'</td>
						<td><button type="button" name="btnsend" value="Sent" id="btnsend" onclick="sendforverification('.$row['id'].')" class="btn sbtn-warning" disabled>Sent</button></td>
						<td><button type="button" name="btn" value="Show" id="btnshw" onclick="checklookingtoadopt('.$row['id'].')" class="btn sbtn-warning">Show</button></td>
						<td><button type="button" name="btn" value="delete" id="btndelete" onclick="deletevalue('.$row['id'].')" class="btn btn-danger">Delete</button></td>
						</tr>';	
						$number++;
					}

					
}
}
$data .= '</table>';
echo $data;
}
if(isset($_POST['readrecord1'])){
$data = '<table class="table table-hover table-stripped">
			<tr>
			<th>id</th>
			<th>Firstame</th>
			<th>Lastname</th>
			<th>Email</th>
			<th>MobileNo</th>
			<th>username</th>
			<th>password</th>
			<th>Gender</th>
			<th>Show</th>
			<th>Delete action</th>
			</tr>';
	$displayquery = "SELECT * FROM pregnantandconsideringadoption WHERE approved='Yes'";
			//$displayquery = "SELECT * FROM form12 FULL OUTER JOIN images ON form12.id = form1.mid";
	$result = mysqli_query($conn, $displayquery) or die( mysqli_error($conn));
	if(mysqli_num_rows($result) > 0){
		$number =1;
	while($row = mysqli_fetch_array($result)){

					$data .= '<tr>
						<td>'.$number.'</td>
						<td>'.$row['firstname'].'</td>
						<td>'.$row['lastname'].'</td>
						<td>'.$row['email'].'</td>
						<td>'.$row['mobileno'].'</td>
						<td>'.$row['username'].'</td>
						<td>'.$row['password'].'</td>
						<td>'.$row['Gender'].'</td>
						<td><button type="button" name="btn" value="Show" id="btnshw" onclick="checkpregnant('.$row['id'].')" class="btn sbtn-warning">Show</button></td>
						<td><button type="button" name="btn" value="delete" id="btndelete" onclick="deletevalue('.$row['id'].')" class="btn btn-danger">Delete</button></td>
						</tr>';	
						$number++;
}
}
$data .= '</table>';
echo $data;
}
if(isset($_POST['readrecord2'])){
$data = '<table class="table table-hover table-stripped">
			<tr>
			<th>id</th>
			<th>Firstame</th>
			<th>Lastname</th>
			<th>Email</th>
			<th>MobileNo</th>
			<th>username</th>
			<th>password</th>
			<th>Gender</th>
			<th>Show</th>
			<th>Delete action</th>
			</tr>';
	$displayquery = "SELECT * FROM surrogate WHERE approved='Yes'";
			//$displayquery = "SELECT * FROM form12 FULL OUTER JOIN images ON form12.id = form1.mid";
	$result = mysqli_query($conn, $displayquery) or die( mysqli_error($conn));
	if(mysqli_num_rows($result) > 0){
		$number =1;
	while($row = mysqli_fetch_array($result)){

					$data .= '<tr>
						<td>'.$number.'</td>
						<td>'.$row['firstname'].'</td>
						<td>'.$row['lastname'].'</td>
						<td>'.$row['email'].'</td>
						<td>'.$row['mobileno'].'</td>
						<td>'.$row['username'].'</td>
						<td>'.$row['password'].'</td>
						<td>'.$row['Gender'].'</td>
						<td><button type="button" name="btn" value="Show" id="btnshw" onclick="checksurrogate('.$row['id'].')" class="btn sbtn-warning">Show</button></td>
						<td><button type="button" name="btn" value="delete" id="btndelete" onclick="deletevalue('.$row['id'].')" class="btn btn-danger">Delete</button></td>
						</tr>';	
						$number++;
}
}
$data .= '</table>';
echo $data;
}
if(isset($_POST['readrecord3'])){
$data = '<table class="table table-hover table-stripped">
			<tr>
			<th>id</th>
			<th>Firstame</th>
			<th>Lastname</th>
			<th>Email</th>
			<th>MobileNo</th>
			<th>username</th>
			<th>password</th>
			<th>Gender</th>
			<th>Show</th>
			<th>Delete action</th>
			</tr>';
	$displayquery = "SELECT * FROM philanthropists";
			//$displayquery = "SELECT * FROM form12 FULL OUTER JOIN images ON form12.id = form1.mid";
	$result = mysqli_query($conn, $displayquery) or die( mysqli_error($conn));
	if(mysqli_num_rows($result) > 0){
		$number =1;
	while($row = mysqli_fetch_array($result)){

					$data .= '<tr>
						<td>'.$number.'</td>
						<td>'.$row['firstname'].'</td>
						<td>'.$row['lastname'].'</td>
						<td>'.$row['email'].'</td>
						<td>'.$row['mobileno'].'</td>
						<td>'.$row['username'].'</td>
						<td>'.$row['password'].'</td>
						<td>'.$row['Gender'].'</td>
						<td><button type="button" name="btn" value="Show" id="btnshw" onclick="showvalue('.$row['id'].')" class="btn sbtn-warning">Show</button></td>
						<td><button type="button" name="btn" value="delete" id="btndelete" onclick="deletevalue('.$row['id'].')" class="btn btn-danger">Delete</button></td>
						</tr>';	
						$number++;
}
}
$data .= '</table>';
echo $data;
}
if (isset($_POST['readrecord9'])){
	$query= "SELECT * FROM messages "; 
	$result = mysqli_query($conn, $query) or die( mysqli_error($conn));
	if(mysqli_num_rows($result) > 0){
	$row = mysqli_fetch_array($result);
	do{

				echo $row['uname'];

}while($row < 2);
}
}
/*if(isset($_POST['id2'])){
	$id3 = $_POST['id2'];
	echo $id3;
	$query1="UPDATE messages SET readed='Yes' WHERE id='$id3'";
		$result1 = mysqli_query($conn, $query1) or die( mysqli_error($conn));

}*/
if(isset($_POST['changereaded'])){
	$id3 = $_POST['changereaded'];
	echo $id3;
	$query1="UPDATE messages SET replied='Yes' WHERE id='$id3'";
		$result1 = mysqli_query($conn, $query1) or die( mysqli_error($conn));

}
if (isset($_POST['id1'])){
	$userid = $_POST['id1'];
	# code...
	$query= "SELECT * FROM messages WHERE user_id='$userid'"; 
	$result = mysqli_query($conn, $query) or die( mysqli_error($conn));
	$response = array();
	if(mysqli_num_rows($result) > 0){
		while ($row = mysqli_fetch_assoc($result)) {
			# code...
			$response = $row;
		}
	} 
	else{
		$response['status'] = 200;
		$response['message'] = 'data not found';
	}
	echo json_encode($response);

}
else{
	$response['status'] = 200;
	$response['message'] = 'Invalid request';
}

if (isset($_POST['readrecord5'])){
	/*$query= "SELECT * FROM messages WHERE readed IS NULL"; 
	$result = mysqli_query($conn, $query) or die( mysqli_error($conn));
	if(mysqli_num_rows($result) > 0){
	$row = mysqli_fetch_array($result);
	do{

				echo $row['message'];

}while($row < 2);
}*/
	$query= "SELECT * FROM messages WHERE readed IS NULL"; 
	$result = mysqli_query($conn, $query) or die( mysqli_error($conn));
	$response = array();
	if(mysqli_num_rows($result) > 0){
		while ($row = mysqli_fetch_assoc($result)) {
			# code...
			$response = $row;
		}
	} 
	else{
		$response['status'] = 200;
		$response['message'] = 'No New Messages';
	}
	echo json_encode($response);

}
else{
	$response['status'] = 200;
	$response['message'] = 'Invalid request';
}
if (isset($_POST['readrecord7'])){
	$query= "SELECT * FROM messages WHERE readed IS NULL"; 
	$result = mysqli_query($conn, $query) or die( mysqli_error($conn));
	$row = mysqli_fetch_array($result);
	$query1= "SELECT * FROM pregnantandconsideringadoption WHERE approved='no'"; 
	$result1 = mysqli_query($conn, $query1) or die( mysqli_error($conn));
	$row1 = mysqli_fetch_array($result1);
	$query2= "SELECT * FROM lookingtoadopt WHERE approved='no'"; 
	$result2 = mysqli_query($conn, $query2) or die( mysqli_error($conn));
	$row2 = mysqli_fetch_array($result2);
	$query3= "SELECT * FROM surrogate WHERE approved='no'"; 
	$result3 = mysqli_query($conn, $query3) or die( mysqli_error($conn));
	$row3 = mysqli_fetch_array($result3);
	if(!empty($row[0]) && !empty($row1[0]) && !empty($row2[0]) && !empty($row3[0])){
			echo "4";
	}
	else if(!empty($row[0]) && !empty($row1[0]) && !empty($row2[0])){
			echo "3";	
	}
	else if(!empty($row[0]) && !empty($row1[0]) && !empty($row3[0])){
			echo "3";
	}
	else if(!empty($row[0]) && !empty($row2[0]) && !empty($row3[0])){
			echo "3";
	}
	else if(!empty($row1[0]) && !empty($row2[0]) && !empty($row3[0])){
			echo "3";
	}
	else if(!empty($row[0]) && !empty($row1[0])){
			echo "2";
	}
	else if(!empty($row[0]) && !empty($row2[0])){
			echo "2";
	}
	else if(!empty($row[0]) && !empty($row3[0])){
			echo "2";
	}
	else if(!empty($row1[0]) && !empty($row2[0])){
			echo "2";
	}
	else if(!empty($row1[0]) && !empty($row3[0])){
			echo "2";
	}
	else if(!empty($row2[0]) && !empty($row3[0])){
			echo "2";
	}
	else if(!empty($row[0])){
			echo "1";
	}
	else if(!empty($row1[0])){
			echo "1";
	}
	else if(!empty($row2[0])){
			echo "1";		
	}
	else if(!empty($row3[0])){
			echo "1";
	}
	else{
			echo "0";
	}
}
if(isset($_POST['readrecord8'])){
$data = "<table class='table table-bordered table-stripped'>
			<tr>
			<th>id</th>
			<th>Name</th>
			<th> Message</th>
			<th>Email</th>
			<th>UserId</th>
			<th>Reply action</th>
			<th>Delete action</th>
			</tr>";
	$displayquery = 'SELECT * FROM messages';
			//$displayquery = "SELECT * FROM form12 FULL OUTER JOIN images ON form12.id = form1.mid";
	$result = mysqli_query($conn, $displayquery) or die( mysqli_error($conn));
	if(mysqli_num_rows($result) > 0){
		$number =1;
	while($row = mysqli_fetch_array($result)){
					$result1 = $row['replied'];
					$var = 'No';
					if ($result1 == $var) {
					$data .= "<tr>
						<td>".$number."</td>
						<td>".$row['uname']."</td>
						<td> <div class = 'divmessage' style='cursor:pointer' onload='myfunction(user_id)'>".$row['message']."</div></td>
						<td>".$row['email']."</td>
						<td>".$row['user_id']."</td>
						<td><button type='button' name='btn' value='Reply' id='btnreply' data-toggle='modal' data-target='#myModal' onclick='replyvalue(" . $row['user_id'] . "," . $row['id'] . ")' class='btn sbtn-warning'>Reply</button></td>
						<td><button type='button' name='btn' value='delete' id='btndelete' onclick='deletevalue(".$row['id'].")' class='btn btn-danger'>Delete</button></td>
						</tr>";	
						$number++;
}
else{
						$data .= "<tr>
						<td>".$number."</td>
						<td>".$row['uname']."</td>
						<td> <div class = 'divmessage' style='cursor:pointer' onload='myfunction(user_id)'>".$row['message']."</div></td>
						<td>".$row['email']."</td>
						<td>".$row['user_id']."</td>
						<td><button type='button' name='btn' value='Reply' id='btnreply' data-toggle='modal' data-target='#myModal' onclick='replyvalue(" . $row['user_id'] . "," . $row['id'] . ")' class='btn sbtn-warning' disabled>Replied</button></td>
						<td><button type='button' name='btn' value='delete' id='btndelete' onclick='deletevalue(".$row['id'].")' class='btn btn-danger'>Delete</button></td>
						</tr>";	
						$number++;

}
}
}
$data .= "</table>";
echo $data;
}
if (isset($_POST['readrecord6'])){
	$query= "SELECT * FROM messages WHERE readed IS NULL"; 
	$result = mysqli_query($conn, $query) or die( mysqli_error($conn));
	$row = mysqli_fetch_array($result);
	$query1= "SELECT * FROM pregnantandconsideringadoption WHERE approved='no'"; 
	$result1 = mysqli_query($conn, $query1) or die( mysqli_error($conn));
	$row1 = mysqli_fetch_array($result1);
	$query2= "SELECT * FROM lookingtoadopt WHERE approved='no'"; 
	$result2 = mysqli_query($conn, $query2) or die( mysqli_error($conn));
	$row2 = mysqli_fetch_array($result2);
	$query3= "SELECT * FROM surrogate WHERE approved='no'"; 
	$result3 = mysqli_query($conn, $query3) or die( mysqli_error($conn));
	$row3 = mysqli_fetch_array($result3);
	if($row){
		echo "<li onclick='traversemessagepanel()'>" .  "You Got". " " . $row[0]. " " ." new message" ."</li>";
	}
	if($row1){
		echo "<li onclick='traverseapplicationpanel()'>". "You Got". " " . $row1[0]. " " ." new application". " ". "as pregnant and considering adoption" ."</li>";
	}
	if($row2){
		echo "<li onclick='traverseapplicationpanel()'>". "You Got". " " . $row2[0]. " " ." new application". " ". "as looking for adoption"."</li>";
	}
	if($row3){
		echo "<li onclick='traverseapplicationpanel()'>". "You Got". " " . $row3[0]. " " ." new application". " ". "as Surrogate mother" ."</li>";
	}
}
if (isset($_POST['readrecord10'])){
	$query= "SELECT COUNT(id) FROM messages"; 
	$result = mysqli_query($conn, $query) or die( mysqli_error($conn));
	$row = mysqli_fetch_array($result);
	if($row){
	echo $row[0];
}
}
if (isset($_POST['readrecor11'])){
	$query= "SELECT * FROM messages"; 
	$result = mysqli_query($conn, $query) or die( mysqli_error($conn));
	if(mysqli_num_rows($result) > 0){
	$row = mysqli_fetch_array($result);
	do{

				echo $row['uname'];

}while($row < 2);
}
}
if (isset($_POST['readrecord57'])){
	$query= "SELECT * FROM messages"; 
	$result = mysqli_query($conn, $query) or die( mysqli_error($conn));
	if(mysqli_num_rows($result) > 0){
	$row = mysqli_fetch_array($result);
	do{

				echo $row['uname'];

}while($row < 2);
}
}

if (isset($_POST['readrecord47'])) {
	$value = $_POST['readrecord47'];
	$query="UPDATE messages SET readed='Yes' WHERE id='$value'";
	# code...
	$result = mysqli_query($conn, $query) or die( mysqli_error($conn));
	if(!mysqli_query($conn,$query))
	{
		echo "Something went wrong please try again later";
	}
	else
	{
		echo "Success";
	}
}

if(isset($_POST['userid'])&&isset($_POST['reply'])&&isset($_POST['text1'])&&isset($_POST['messageid'])){
	$userid1 = $_POST['userid'];
	$reply1 = $_POST['reply'];
	$text2 = $_POST['text1'];
	$messageid1 = $_POST['messageid1'];
	echo '$text2'.'$userid1';
	echo $messageid1;
	$query =  "INSERT INTO '$text2'.'$userid1'(message, user_id, message_id) VALUES('$reply1', '$userid1', 'messageid1')";
		if(!mysqli_query($conn,$query))
	{
		echo "Something went wrong please try again later";
	}
	else
	{
		echo "Message Sent Successfully";
	}
}


if (isset($_POST['checkreply'])) {
	# code...
	$checkreply1 = $_POST['checkreply'];
	echo $checkreply1;
	$query = "SELECT replied from messages WHERE id='$checkreply1'";
	$result = mysqli_query($conn, $query) or die( mysqli_error($conn));
	echo $result;
}
if (isset($_POST['readrecord27'])) {
	$query = "SELECT count(id) from messages";
	$result = mysqli_query($conn, $query) or die( mysqli_error($conn));
	$row = mysqli_fetch_array($result);
	if($row){
	echo $row[0];
}
}

if(isset($_POST['value1']))
{
	$value1 = $_POST['value1'];
	$query= "DELETE FROM philanthropists WHERE id='$value1'"; 
	$result = mysqli_query($conn, $query) or die( mysqli_error($conn));


}
if(isset($_POST['readrecord77'])){
	$query= "SELECT COUNT(id) FROM messages WHERE readed IS NULL"; 
	$result = mysqli_query($conn, $query) or die( mysqli_error($conn));
	$row = mysqli_fetch_array($result);
	if($row){
	echo $row[0];
}
}

if (isset($_POST['readrecord58'])){
	$query= "SELECT * FROM messages"; 
	$result = mysqli_query($conn, $query) or die( mysqli_error($conn));
	if(mysqli_num_rows($result) > 0){
	$row = mysqli_fetch_array($result);
	do{

				echo $row['uname'];

}while($row < 2);
}
}
?>