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


  extract($_POST);

if(isset($_POST['readrecord1'])){
$data = '<table class="table table-bordered table-stripped">
			<tr>
			<th>id</th>
			<th>Firstname</th>
			<th>Lastname</th>
			<th>Email</th>
			<th>Check Applicant</th>
			</tr>';
	$displayquery = "SELECT * FROM lookingtoadopt WHERE approved='no'";
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
						<td><button type="button" name="checklookingtoadopt" value="Show" id="checklookingtoadopt" onclick="checklookingtoadopt('.$row['id'].')" class="btn sbtn-warning">Show</button></td>
						</tr>';	
						$number++;
}
}
$data .= '</table>';
echo $data;
}

if(isset($_POST['readrecord2'])){
$data = '<table class="table table-bordered table-stripped">
			<tr>
			<th>id</th>
			<th>Firstname</th>
			<th>Lastname</th>
			<th>Email</th>
			<th>Check Applicant</th>
			</tr>';
	$displayquery = "SELECT * FROM surrogate WHERE approved='no'";
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
						<td><button type="button" name="checksurrogate" value="Show" id="checksurrogate" onclick="checksurrogate('.$row['id'].')" class="btn sbtn-warning">Show</button></td>
						</tr>';	
						$number++;
}
}
$data .= '</table>';
echo $data;
}

if(isset($_POST['readrecord3'])){
$data = '<table class="table table-bordered table-stripped">
			<tr>
			<th>id</th>
			<th>Firstname</th>
			<th>Lastname</th>
			<th>Email</th>
			<th>Check Applicant</th>
			</tr>';
	$displayquery = "SELECT * FROM pregnantandconsideringadoption WHERE approved='no'";
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
						<td><button type="button" name="checkpregnant" value="Show" id="checkpregnant" onclick="checkpregnant('.$row['id'].')" class="btn sbtn-warning">Show</button></td>
						</tr>';	
						$number++;
}
}
$data .= '</table>';
echo $data;
}

if (isset($_POST['id5'])) {
	$userid = $_POST['id5'];
	# code...
	$query= "SELECT * FROM lookingtoadopt WHERE id = '$userid'"; 
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

if (isset($_POST['id'])){
	$userid = $_POST['id'];
	# code...
	$query= "SELECT * FROM lookingtoadopt WHERE id = '$userid'"; 
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

if (isset($_POST['id1'])){
	$userid = $_POST['id1'];
	# code...
	$query= "SELECT * FROM surrogate WHERE id = '$userid'"; 
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

if (isset($_POST['id2'])){
	$userid = $_POST['id2'];
	# code...
	$query= "SELECT * FROM pregnantandconsideringadoption WHERE id = '$userid'"; 
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


if(isset($_POST['readrecord57']) && isset($_POST['userid1'])){
	$value = $_POST['userid1'];
	$query="UPDATE lookingtoadopt SET approved='Yes' WHERE id='$value'";
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

if(isset($_POST['readrecord58']) && isset($_POST['userid2'])){

	$value = $_POST['userid2'];
	$query="UPDATE pregnantandconsideringadoption SET approved='Yes' WHERE id='$value'";
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

if(isset($_POST['readrecord59']) && isset($_POST['userid3'])){
	$value = $_POST['userid3'];
	$query="UPDATE surrogate SET approved='Yes' WHERE id='$value'";
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

if (isset($_POST['readrecord5'])){

	$query= "SELECT * FROM messages WHERE readed IS NULL"; 
	$result = mysqli_query($conn, $query) or die( mysqli_error($conn));
	$response = array();
	if(mysqli_num_rows($result) > 0){
		while ($row = mysqli_fetch_assoc($result)) {
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
	if(!empty($row[0])){
			echo "1";
	}
	else{
			echo "0";
	}
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
}
if(isset($_POST['readrecord77'])){
	$query= "SELECT COUNT(id) FROM messages WHERE readed IS NULL"; 
	$result = mysqli_query($conn, $query) or die( mysqli_error($conn));
	$row = mysqli_fetch_array($result);
	if($row){
	echo $row[0];
}
}

?>