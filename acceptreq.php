<?php 
   $con = mysqli_connect("localhost","root","", "karuschool")
        or die ("failled to connet mysql server" .mysqli_connect_error());
		
		$email = mysqli_real_escape_string($con, $_POST['email']);
		
		$password = mysqli_real_escape_string($con, $_POST['password']);
		$status = "active";
        $query = "INSERT INTO users(email, password ,status) VALUES
		       ('$email','$password ' ,'$status')";
		
		if (!mysqli_query($con, $query))
		{
			echo "Error" .mysqli_error($con);
		}
		else
		{
			header ("location:requests.php?msg = 1");
		}
		?>