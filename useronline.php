         
<?php
include 'config.php';
$sql = "SELECT * FROM registration where status = 'active'";
$result  = $db->query($sql);
while ($row = mysqli_fetch_assoc($result)){
	//echo "<pre>";
	//print_r($row);
	//die;
	if($row['logstatus'] == 1 ){
		echo "<font color='#009900'>".$row['firstname'].'&nbsp'.$row['lastname']." (Online)"."</font><br>";
	 
		}
		else {
				echo "<font color='#FF0000'>".$row['firstname'].'&nbsp'.$row['lastname']." (Offline)"."</font><br>";
			}
	}

?>