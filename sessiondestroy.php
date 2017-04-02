<?php
include 'config.php';
session_start();
$time = $_SESSION['time'];
echo $time;
$registrationid = $_SESSION['registrationid'];
echo $email;
$logouttime =  date("Y-m-d H:i:s");
$query1 = "INSERT INTO logs (registrationid,logintime,logouttime) VALUES ('$registrationid', '$time','$logouttime')";
$db->query($query1);
session_destroy();
$result = "UPDATE registration SET logstatus = '0' WHERE registrationid = '$registrationid'";
$db->query($result);
//document.location.href = "index.php";
header("Location:index.php");


?>