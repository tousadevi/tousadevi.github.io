<?php
include 'config.php';
session_start();
$email = $_SESSION['email'];
$registerid = $_SESSION['registrationid'];
//print_r($registerid);
//die;
$sql = "select * from registration where email = '$email'";
$records =$db->query($sql);

$rows = array();
$numb = 0;
  while($edit = $records->fetch_assoc())
	  $rows[] = $edit;
	 foreach($rows as $edit){ 
	 //$registrationid = $edit['registrationid'];
		//for($ii=0;$ii<count($rows);ii++)
	  echo "<tr>";
	
if(isset($_POST['btn-update'])){
 $firstname = $_POST['firstname'];
 $lastname = $_POST['lastname'];
 $dob = $_POST['dob'];
 $gender = $_POST['gender'];
 $email = $_POST['email'];
 
 $update = "UPDATE registration SET firstname='$firstname', lastname='$lastname',dob='$dob',gender='$gender',email='$email' WHERE registrationid=$registerid";
 //echo $update;
 //print_r($update);

 $up = mysqli_query($db, $update);
 //if(!isset($sql)){
 //die ("Error $sql" .mysqli_connect_error());
 //}
 //else
 //{
// header("location: disp.php");
 //}
}
?>
<html>
<head>
<style>
#edit {
    background-image: url("students.jpg");
}
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
	box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
.backbutton{	
background-color: #008CBA; /* blue */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}
</style>
<script src="datetimepicker_css.js"></script>
<script>
function goBack() {
    window.history.back();
}
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="jscripts/requests.js"> </script>
</head>

 <body>
 <form  id = "edit" method="Post" name = "edit">
 <div id="banner"><img src="editdetails.jpg" width="100%" height="10%" alt="banner" />
</div>
 <table align = "center">
    
  <tr>
  <?php


	 ?> 
	<tr><th>Firstname</th><td><input style="border:none;border-color:transparent;" type="text" size="15" name="firstname" id="firstname<?php echo $numb ?>" value="<?php echo $edit['firstname'];?>" />
	</td></tr>
	<tr><th>Lastname</th><td><input style="border:none;border-color:transparent;" type="text" size="15"name="lastname" id="lastname<?php echo $numb ?>" value="<?php echo $edit['lastname'];?>" />
	</td></tr>  
	<tr><th>Date of birth</th><td><input style="border:none;border-color:transparent;"  type="text" size="10"name="dob" id="dob<?php echo $numb ?>" value="<?php echo $edit['dob'];?>" />
	 </td></tr>  
	<tr><th>Gender</th><td><input style="border:none;border-color:transparent;"  type="text" size="10"name="gender" id="gender<?php echo $numb ?>" value="<?php echo $edit['gender'];?>" />
	<br></td><br />
	</td></tr>  
	<tr><th>Email</th><td><input style="border:none;border-color:transparent;"  type="text" size="15"name="email" id="email<?php echo $numb ?>" value="<?php echo $edit['email'];?>" />
	</td></tr>  
    
     <td><button type = "submit" name="btn-update" id="btn-update" onClick="update()" class="button">Save changes</button></td>
	 
	 <?php
	 echo "</tr>";
	 $numb++;
  }
  
  ?>
  <input type="hidden" name="recordsize" id="recordsize"  value="<?php echo count($rows);?>" />
</table>
<button type = "button" onclick="goBack()" class = "backbutton">Go Back</button>
</form>
<script>
function update(){
 var x;
 if(confirm("Updated data Sucessfully") == true){
 x= "update";
 }
}
</script>
 </body>
 </html> 