<?php
include 'config.php';
$sql = "SELECT DISTINCT logs.registrationid, firstname,lastname,email,logintime,logouttime
FROM logs, registration
WHERE logs.registrationid = registration.registrationid AND registration.type = 'Student'";
$records = $db->query($sql);

?>
<html>
<head>
<style>
#studentuser {
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
<script>
function goBack() {
    window.history.back();
}
</script>
</head>
<script src="jscripts/requests.js"> </script>
 <body>
 <form  id = "studentuser" method="Post" name = "studentuser">
 <div id="banner"><img src="studentlogs.jpg" width="100%" height="10%" alt="banner" />
</div>
 <table align = "center">
  <tr>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Email</th>
    <th>Login time</th>
	<th>Logout time</th>
    
  </tr>
  <tr>
  <?php
$rows = array();
$numb = 0;
  while($log = $records->fetch_assoc())
	  $rows[] = $log;
	 foreach($rows as $log){ 
	 
		//for($ii=0;$ii<count($rows);ii++)
	  echo "<tr>";
	 
	 ?> 
	 <td><input style="border:none;border-color:transparent;" type="text" size="15"name="firstname" id="firstname<?php echo $numb ?>" value="<?php echo $log['firstname'];?>" readonly/></td>  
	<td><input style="border:none;border-color:transparent;" type="text" size="15"name="lastname" id="lastname<?php echo $numb ?>" value="<?php echo $log['lastname'];?>" readonly/></td>  
	<td><input style="border:none;border-color:transparent;" type="text" size="15"name="email" id="email<?php echo $numb ?>" value="<?php echo $log['email'];?>" readonly/></td>  
	<td><input style="border:none;border-color:transparent;"  type="text" size="15"name="logintime" id="logintime<?php echo $numb ?>" value="<?php echo $log['logintime'];?>" readonly/></td>  
	<td><input style="border:none;border-color:transparent;"  type="text" size="15"name="logouttime" id="logouttime<?php echo $numb ?>" value="<?php echo $log['logouttime'];?>" readonly/></td>  
	
      <td><button type = "button" onclick = "deletelog(<?php echo $numb ?>)" class="button">Delete</button></td>
	 <?php
	 echo "</tr>";
	 $numb++;
  }
  
  ?>
  <input type="hidden" name="recordsize" id="recordsize"  value="<?php echo count($rows);?>" />
</table>
<button type = "button" onclick="goBack()"class="backbutton">Go Back</button>
</form>
 </body>
 </html> 