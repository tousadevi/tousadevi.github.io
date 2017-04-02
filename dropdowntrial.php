<?php

include 'config.php';;

    $resultdropdown = $db->query("select registrationid,firstname,lastname from registration where type = 'teacher' and status = 'active'");
    
    echo "<html>";
    echo "<body>";
    echo "<select name='firstname'>";

    while ($row = $resultdropdown->fetch_assoc()) {

                  unset($registrationid,$firstname, $lastname);
				  $registrationid = $row['registrationid'];
                  $firstname = $row['firstname'];
                  $lastname = $row['lastname']; 
                  echo '<option value="'.$firstname.'">'.$lastname.'</option>';
                 
}

    echo "</select>";
    echo "</body>";
    echo "</html>";
?>
