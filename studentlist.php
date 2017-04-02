<?php
include 'config.php';
$sql = "select firstname,lastname from registration where type = 'student' and status = 'active'";
//$records = mysql_query($sql);
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
 <div id="banner"><img src="student.jpg" width="100%" height="10%" alt="banner" />
</div>
 <table align = "center">
  <tr>
    <th>Firstname</th>
    <th>Lastname</th>
    
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
	
     <td><button type = "button" class="button">view profile</button></td>
	 <?php
	 echo "</tr>";
	 $numb++;
  }
  
  ?>
  <input type="hidden" name="recordsize" id="recordsize"  value="<?php echo count($rows);?>" />
</table>
<button type = "button" onclick="goBack()" class = "backbutton">Go Back</button>

</form>
 </body>
 </html> 