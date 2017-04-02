<html>
<head>
<title>Accept Record</title>
</head>
<body>
<script src="../jscripts/requests.js"></script>
<?php
$con =  mysqli_connect("localhost","root","", "karuschool")
        or die ("failled to connet mysql server" .mysqli_connect_error());
		
		$role = 0;
		$firstName = $_GET['firstName'];
		//echo $firstName;
		$lastName = $_GET['Lastame'];
		//echo $lastName;
		$dob = $_GET['Dob'];
		//echo $dob;
		$gender = $_GET['Gender'];
		//echo $gender;
		$email = $_GET['Email'];
		//echo $email;
		$type = $_GET['Type'];
		if($type == 'student') {
			$role = 1;
		} else if ($type=='parent') {
			$role = 2;
		} else if($type=='teacher') {
			$role = 3;
		} else if($type=='admin') {
			$role = 4;
		}
		//echo $type;
		$password = $_GET['regpwd'];
		//echo $password;
		//echo $role;
		$status = "Active";

		
		
		$update_query = "UPDATE registration SET STATUS = 'Active' WHERE EMAIL = '$email'";
		
         //$to = $email;
         //$subject = "This is subject";
         
         //$message = "<b>registration accepted.</b>";
        
         //$header = "From:tousa.gobin@gmail.com \r\n";
         //$header .= "Cc:afgh@somedomain.com \r\n";
         //$header .= "MIME-Version: 1.0\r\n";
         //$header .= "Content-type: text/html\r\n";
         
         //$retval = mail ($to,$subject,$message,$header);
         
         //if( $retval == true ) {
         //   echo "Message sent successfully...";
         //}else {
         //   echo "Message could not be sent...";
         //}
      
		if (!mysqli_query($con, $update_query))
		{
			echo "Error" .mysqli_error($con);
		}
		else
		{
			header ("../location:registration.php?msg = 1");
		}
		
		
	
		



?>
Record has been accepted succesfully
<button type="button" onclick="requestPage()"> BACK</button>
</body>
</html>