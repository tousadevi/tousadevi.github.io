<html>
<head><title>Admin</title>
</head>
<body>

<?php
include 'config.php';

$email = $_GET['emailId'];
$password = $_GET['pasword'];
 
$query = "SELECT * FROM registration WHERE email = '$email' AND password = '$password' AND status = 'Active'";
$resultlog = "UPDATE registration SET logstatus = 1 WHERE email = '$email'";
          $db->query($resultlog);
$time = date("Y-m-d H:i:s");

$records = $db->query($query);
$numbs = count($records);
$rowsRecords = array();
if($numbs > 0) {
	// valid logintime
	 while($loggedUser = $records->fetch_assoc())
		 $rowsRecords[] = $loggedUser;
	 foreach($rowsRecords as $loggedUser){

			echo $loggedUser['role']; 
			
			if($loggedUser['role']==4) {
				header("Location:admin.html");
			}
			if($loggedUser['role']==1) {
				header("Location:student.php");
			}
			if($loggedUser['role']==3) {
				header("Location:teacher.php");
			}
			//$email = $loggedUser['email'];
			$user_Name = $loggedUser['firstname'];
			$user_lastname = $loggedUser['lastname'];
			$user_id = $loggedUser['registrationid'];
			// write here
			session_start();
			$_SESSION['email'] = $email;
			$_SESSION['time'] = $time;
			$_SESSION['name'] = $user_Name;
			$_SESSION['surname'] = $user_lastname;
			$_SESSION['registrationid'] = $user_id;
			//$_SESSION['name'] = "for checking";
			//$_SESSION['surname'] = "for checking";
			//print_r($_SESSION);die;
			
             }
	 
}


?>
</body>
</html>