<?php
include 'config.php';
$sql = "select * from registration where status = 'Pending'";
$records = $db->query($sql);

?>
<html>
<head>
<style>
#acceptrequest {
    background-image: url("admin.jpg");
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

</style>

</head>
<script src="jscripts/requests.js"> </script>
 <body>
 <form  id = "acceptrequest" method="Post" name = "acceptreg">
 <div id="banner"><img src="req.jpg" width="100%" height="10%" alt="banner" />
</div>
 <table align = "center">
  <tr>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Date of birth</th>
	<th>Gender</th>
	<th>Email</th>
	<th>Type</th>
	<!-- <th>Password</th> -->
  </tr>
  <tr>
  <?php
$rows = array();
$numb = 0;
  while($registration = $records->fetch_assoc())
	  $rows[] = $registration;
	 foreach($rows as $registration){ 
	 
		//for($ii=0;$ii<count($rows);ii++)
	  echo "<tr>";
	 
	 ?> 
	<td><input style="border:none;border-color:transparent;" type="text" size="15" name="firstname" id="firstname<?php echo$numb ?>" value="<?php echo $registration['firstname'];?>" readonly/></td>
	<td><input style="border:none;border-color:transparent;" type="text" size="15"name="lastname" id="lastname<?php echo $numb ?>" value="<?php echo $registration['lastname'];?>" readonly/></td>  
	<td><input style="border:none;border-color:transparent;"  type="text" size="10"name="dob" id="dob<?php echo $numb ?>" value="<?php echo $registration['dob'];?>" readonly/></td>  
	<td><input style="border:none;border-color:transparent;"  type="text" size="10"name="gender" id="gender<?php echo $numb ?>" value="<?php echo $registration['gender'];?>" readonly/></td>  
	<td><input style="border:none;border-color:transparent;"  type="text" size="15"name="email" id="email<?php echo $numb ?>" value="<?php echo $registration['email'];?>" readonly/></td>  
    <td><input style="border:none;border-color:transparent;"  type="text" size="10"name="type" id="type<?php echo $numb ?>" value="<?php echo $registration['type'];?>" readonly/></td>  
	<td><input style="border:none;border-color:transparent;"  type="hidden" size="15" name="password" id="password<?php echo $numb ?>" value="<?php echo $registration['password'];?>" readonly/></td>  
	
    
	 <td><button type = "button" onclick = "aceeptRecord(<?php echo $numb ?>)" class="button">Accept</button></td>
	 <td><button type = "button" onclick = "rejectRecord(<?php echo $numb ?>)" class="button">Reject</button></td>
	 <?php
	 echo "</tr>";
	 $numb++;
  }
  
  ?>
  <input type="hidden" name="recordsize" id="recordsize"  value="<?php echo count($rows);?>" />
</table>
</form>
 </body>
 </html> 