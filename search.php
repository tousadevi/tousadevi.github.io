 <?php
 $search_value = $_post["search"];
 $sql = "select * from files where eventid =[select eventid from events where eventname = '$search_value']";
 print_r($sql);
 die;
 $res = $db-> query($sql);
 while ($row = $res -> fetch_assoc() ){
	 echo 'eventname :' .row['eventname'];
	 echo 'filename:' .row['filename'];
 }
 ?>