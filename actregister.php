<?php 

   $con = mysqli_connect("localhost","root","", "karuschool")
        or die ("failled to connet mysql server" .mysqli_connect_error());
		$firstname = mysqli_real_escape_string($con, $_POST['firstname']);
		$lastname = mysqli_real_escape_string($con, $_POST['lastname']);
		$dob = mysqli_real_escape_string($con, $_POST['dob']);
		$gender = mysqli_real_escape_string($con, $_POST['gender']);
		$email = mysqli_real_escape_string($con, $_POST['email']);
		$type = mysqli_real_escape_string($con, $_POST['type']);
		$password = mysqli_real_escape_string($con, $_POST['password']);
		$studentemail = mysqli_real_escape_string($con, $_POST['studentemail']);
		$status = "Pending";
		$logstatus = "0";
		$teacherdropdown = mysqli_real_escape_string($con, $_POST['registrationid']);
		 
		$time = date("Y-m-d H:i:s");
		
       if ($type== 'student') {
			$role = 1;
		}
		elseif ($type== 'admin')  {
			$role = 4;
		}
		elseif  ($type== 'parent') {
			$role = 2;
		}
		elseif  ($type== 'teacher') {
			$role = 3;
		}
		
		
		//echo $passwordsh;
        $query = "INSERT INTO registration(firstname,lastname,dob,gender,email,type,password,status,role,logstatus) VALUES
		       ('$firstname','$lastname','$dob','$gender','$email','$type','$password','$status','$role','$logstatus')";
		
		if (!mysqli_query($con, $query))
		{
			echo "Error" .mysqli_error($con);
			
		}
		else
		{
			$studentid= mysqli_insert_id($con);
			$teacherid= mysqli_insert_id($con);
			$parentid= mysqli_insert_id($con);
			$msgnumb = "success";
			//header ("location:registration.php?msg");
		}
        if ($type== 'student') {
			
			echo "this is student portation";
			//die;
			//$student = "select registrationid from registration where type = 'student' and status = 'active'";
           //$studentid = mysqli_query($con,$student);
			
			//print_r $studentid ;
			//die;
			//$teacherid = "SELECT registrationid from registration where "
			$query1 = "INSERT INTO student(studentid,teacherid,time) values ('$studentid','$teacherdropdown','$time')";
			echo $query1;
			
            mysqli_query($con,$query1);}
		elseif ($type == 'teacher'){
			$query1 = "Insert INTO teacher (teacherid,time) values ('$teacherid','$time')";
			echo $query1;
			mysqli_query($con,$query1);
		}
		elseif ($type == 'parent'){
			$studentem = "SELECT registrationid,type from registration where email " .$_POST['studentemail'];
		    $studentemailid = $con-> query($studentem);
			$studentcheckemail = $studentemailid -> fetch_assoc();
			
		    $count = count($studentemailid);
		  if ($count != 0 AND $studentcheckemail['type'] == 'student'){
		    $query1 = "INSERT INTO parent (parentid,studentid,time) VALUES ('$parentid','$studentemailid','$time')";
		    print_r($parentid);
			print_r($studentemailid);
			print_r($time);
			print_r($query1);
			die;
		    mysqli_query($con,$query1);}
		  elseif ($count = 0 or $studentcheckemail['type'] !='student'){
			echo 'Recheck student email';
		   }
		if (mysqli_insert_id($con)==0)
		{
			echo "Error" .mysqli_error($con);
			
		}
		else
		{
			$msgnumb = "success";
			header ("location:registration.php?msg");
		}
		}
		//elseif ($type== 'admin')  {
		//	$role = 4;
		//}
		//elseif  ($type== 'parent') {
			//$role = 2;
		//}
		//elseif  ($type== 'teacher') {
			//$role = 3;
		//}
		?>