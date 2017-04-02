<?php if(isset($_POST['upload']) && $_FILES['userfile']['size'] > 0)

{
session_start();
$registrationid = $_SESSION['registrationid'];
$firstname = $_SESSION['name'];
$lastname = $_SESSION['surname'];
$fileName = $_FILES['userfile']['name'];

$tmpName  = $_FILES['userfile']['tmp_name'];

$allowed =  array('gif','png' ,'jpg','jpeg');
$type="";
$ext = pathinfo($fileName, PATHINFO_EXTENSION);
if(in_array($ext,$allowed) ) {
    $type="IMAGE";
}
$fileSize = $_FILES['userfile']['size'];

$fileType = $_FILES['userfile']['type'];
$fp      = fopen($tmpName, 'r');

$content = fread($fp, filesize($tmpName));
$content = addslashes($content);

fclose($fp);

if(!get_magic_quotes_gpc())
{
	$fileName = addslashes($fileName);
}
/* 
if ($fileType == 'image/jpeg')
{ */
	// saving in folder
	$filepath = "uploads/".$fileName;
	move_uploaded_file($tmpName,$filepath);/* 
}
else{
	$filepath = $fileName;
} */



include 'config.php';
$uploadtime = date("Y-m-d H:i:s");
$eventname = $_POST["eventname"];
$eventdetails = $_POST["eventdetails"];
$subject = $_POST["subjectname"];


$queryevent = "INSERT INTO event (registrationid,eventname,subject,eventdetails ) ".
"VALUES ('$registrationid','$eventname','$subject','$eventdetails')";
$db->query($queryevent) or die('Error, query failed');

$eventidSql = "SELECT Eventid from event where Eventname = '$eventname'";
$eventIdResults = $db->query($eventidSql);

if($eventIdResults->num_rows >0){
    while($row = $eventIdResults->fetch_assoc()) {
        $eventid = $row["Eventid"];
    }
}
    
print_r($eventid);

$query = "INSERT INTO files (registrationid,eventid, name,type,uploadtime ) ".
"VALUES ('$registrationid','$eventid','$fileName','$type','$uploadtime')";
$db->query($query) or die('Error, query failed');
//print_r($query);
echo "File $fileName uploaded";

}

 

?>

<form method="post" enctype="multipart/form-data">

<table width="350" border="0" cellspacing="1" cellpadding="1">

<tbody>
<tr><td>Enter event name :<input type="text" name="eventname">
<select name = "subjectname">
    <option value="English">English</option>
    <option value="French">French</option>
	<option value="Mathematics">Mathematics</option>
</select></td>
</tr>
<tr>
<td><textarea rows="3" cols="50" name = "eventdetails" placeholder="Describe the event">

</textarea> </td>
</tr>
<tr>

<td width="250">

<input type="hidden" name="MAX_FILE_SIZE" value="2000000" />
 
<input id="userfile" type="file" name="userfile" /></td>

<td width="60"><input id="upload" type="submit" name="upload" value=" Upload " /></td>

</tr>
</tbody>

</table>

</form>
