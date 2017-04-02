<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Comment box</title>
</head>
 
<body>
<center>
<form method="POST">
<table>
<?php
include 'config.php';
session_start();
$added_by = $_SESSION['registrationid'];


$filequery = "SELECT * FROM files order by registrationid";
$filesresults = $db->query($filequery);
function downloadfunc(){
	$downloadtime = date("Y-m-d H:i:s");
	 $sql1 =  "INSERT INTO download( registrationid,fileid, time) VALUES
		      ('$added_by','$row[id]',$downloadtime)";
			  print_r(sql1);
	die;
		      $db->query($sql1) or die('Error, query failed'); 
}
if(isset($_POST['submit'])) 
{
	$text = mysqli_real_escape_string($db,$_POST['comment']);
	//$comment = $_POST['comment'];	 
	$commenttime = date("Y-m-d H:i:s");
	$sql =  "INSERT INTO comments( added_by,comment, added_time) VALUES('$added_by','$text','$commenttime')";
	
	$db->query($sql) or die('Error, query failed');
}

$currentRegistrationid = "";


while($row = $filesresults->fetch_assoc())
{	

	$eventid = $row['Eventid'];
	$eventSql = "SELECT Eventname FROM event WHERE Eventid = ".$eventid;
	$eventResults = $db->query($eventSql) or die('Error, query failed');
	$eventRow = $eventResults->fetch_assoc();
	$eventName = $eventRow['Eventname'];
	
	$namesquery = "select lastname,firstname from registration where registrationid =".$row['registrationid'];
	$namesresult = $db->query($namesquery);
	$userRow = $namesresult->fetch_assoc();
 
	echo "<tr>";
	echo "<td>Uploaded by : ".$userRow['firstname'] ." ".$userRow['lastname']."</td>" ;
	echo "<td>Event Name: ".$eventName."</td>";

	if($row["type"]=="IMAGE")
	{
		echo '<td><img src="uploads/'.$row['name'].'" width=100px height=100px></td>';
	}
	else
	{
		echo '<td><a>'.$row['name'].'</a></td>';
				  
	}
	echo '<td><a download href="uploads/'.$row['name'].' " onclick="<?php echo downloadfunc(); ?>">Download</a></td>';
	
?>
		<td>
			Comment:<textarea name="comment" id = "comment" rows="2" cols="50" ></textarea>
			<input type="submit" name="submit" value="submit">
		</td>
	</tr>
<?php
	
 }
?>

</table>
</form>
</center>
</body>
</html>