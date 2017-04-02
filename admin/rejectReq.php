<html>
<head>
<title>Reject Record</title>
</head>
<body>
<script src="../jscripts/requests.js"></script>
<?php
$con =  mysqli_connect("localhost","root","", "karuschool")
        or die ("failled to connet mysql server" .mysqli_connect_error());
		
		$email = $_GET['Email'];
		
		$update_query = "UPDATE registration SET STATUS = 'Rejected' WHERE EMAIL = '$email'";
		
		
		if (!mysqli_query($con, $update_query))
		{
			echo "Error" .mysqli_error($con);
		}
		else
		{
			header ("../location:registration.php?msg = 1");
		}
		
		
	
		



?>
Record has been rejected succesfully
<button type="button" onclick="requestPage()"> BACK</button>
</body>
</html>