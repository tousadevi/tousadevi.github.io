
<html>
<head><style>
#registrationform {
    background-image:  url(back.gif);
    background-position:  left top;
    background-repeat:  repeat;
    padding: 90px; 
	
}
h2 {
    color: white;
    text-shadow: 1px 1px 2px black, 0 0 25px green, 0 0 7px darkgreen;
}
table {
    border: 10px solid transparent;
    padding: 5px;
-webkit-border-image: url(border.png) 50 round;}
div{
	color:red;
}
</style>
<script src="datetimepicker_css.js"></script>
<script src="jscripts/requests.js"></script>
<script>function validate()
      {
       var dateString = document.registration.dob.value;
       var myDate = new Date(dateString);
       var today = new Date();
	   
         if( document.registration.firstname.value == "" )
         {
            
			document.getElementById('fname').innerHTML="Firstname must be entered";
 
            document.registration.firstname.focus() ;
            return false;
         }else{document.getElementById('fname').innerHTML="";}
		
          if( document.registration.lastname.value == "" )
         {
            document.getElementById('lname').innerHTML="Lastname must be entered";
            document.registration.lastname.focus() ;
            return false;
         }
		 else{document.getElementById('lname').innerHTML="";}
         if( document.registration.dob.value == "" )
         {
            document.getElementById('date').innerHTML="Date of birth must be entered";
 
            document.registration.dob.focus() ;
            return false;
			 }
          else if (myDate>today)
          { 
          //something else is wrong
            document.getElementById('date').innerHTML="Date in the future can not be entered";
 
            return false;
          }
         else{document.getElementById('date').innerHTML="";}
         
         if( document.registration.password.value == "" )
         {
            document.getElementById('pass').innerHTML="Password must be entered";
 
            document.registration.password.focus() ;
            return false;
         }
		  
		  else{document.getElementById('pass').innerHTML="";}
		    if( document.registration.reenterpassword.value == "" )
         {
            document.getElementById('reenterpass').innerHTML="re-enter password";
 
            document.registration.reenterpassword.focus() ;
            return false;
         }else{document.getElementById('reenterpass').innerHTML="";}
         return( true );
      }
	  function validateemail(x) {
    
	var atpos = x.indexOf("@");
	var dotpos = x.lastIndexOf(".");
	if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
         document.getElementById('eadd').innerHTML="Invalid Email";
 
            document.registration.email.focus() ;
		return false;
           }
	  return (true);}
	  function matchpass() {
         var pass1 = document.registration.password.value;
         var pass2 = document.registration.reenterpassword.value;
		   if (pass1 != pass2) {
				document.getElementById('reenterpass').innerHTML="password does not match";
 
            document.registration.reenterpassword.focus() ;
            return false;
	  }return (true);
	  
	 }
	function allLetter(inputtxt)  
      {   
      var letters = /^[A-Za-z]+$/;  
      if(inputtxt.value.match(letters))  
      {  
      document.getElementById('fname').innerHTML="";
      return true;  
      }  
      else  
      {  
     document.getElementById('fname').innerHTML="Input alphabets only";
            document.registration.firstname.focus() ;
      return false;  
      }  
      } 
	function lastnamefunc(inputtxt)  
      {   
      var letters = /^[A-Za-z]+$/;  
      if(inputtxt.value.match(letters))  
      {  
      document.getElementById('lname').innerHTML="";
      return true;  
      }  
      else  
      {  
     document.getElementById('lname').innerHTML="Input alphabets only";
            document.registration.lastname.focus() ;
      return false;  
      }  
      } 
	function lengthRange(inputtxt, minlength, maxlength)  
{     
   var userInput = inputtxt.value;    
   if(userInput.length >= minlength && userInput.length <= maxlength)  
      {
     document.getElementById('pass').innerHTML="";      
    		  
        return true;      
      }  
   else  
      {  

     document.getElementById('pass').innerHTML="Please input between " +minlength+ " and " +maxlength+ " characters";      
    return false;     
      }    
} 
 function Validate() {
            var enteredValue = document.registration.dob.value;
            var enteredAge = getAge(enteredValue.value);
            if (enteredAge < 18) {
                alert("DOB less than 18");
                
                return false;
            }
        }
        function getAge(DOB) {
            var today = new Date();
            var birthDate = new Date(DOB);
            var age = today.getFullYear() - birthDate.getFullYear();
            var m = today.getMonth() - birthDate.getMonth();
            if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
                age--;
            }
            return age;
        }
	function checkstudentemail(){
var studentemail = $("#studentemail").val();
$.ajax({
	type:'post',
	url:'actregister.php;,
	data:{studentemail},
	success:function(msg){
		alert(msg);
	}
	
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script>

$(document).ready(function() {
  $('input[name="type"]').click(function() 
                                  {
    var value = $(this).val();
    if( value == "parent")
    {
		$('#teacherdropdown').hide();
     $('#studentemail').show();
	 
    }
	else if ( value == "student")
    {
		
     $('#studentemail').hide();
	  $('#teacherdropdown').show();
	
    }
    else{
      
	   $('#studentemail').hide();
	   $('#teacherdropdown').hide();
    }


  });
});
</script>
</head>
<body>

<form action="actregister.php" method="Post" name = "registration" id = "registrationform" onsubmit="return(validate())">
<table style="margin-left:-90px;margin-right:auto;width:500px;height:400px;" >
  <tbody>
  <tr style ="text=align:center">
     <td colspan = "2"><h2>Register Now!</h2>
	 </tr>
  <tr>
     <td><label class="required" for="firstname">Firstname:</label></td>
     <td><input id="name" name="firstname" type="text" value="" size="30" onblur="allLetter(document.registration.firstname)"/><div id="fname" >   </div></td><br />
  </tr>
  <tr>
     <td><label class="required" for="lastname">Lastname:</label></td>
     <td><input id="email" name="lastname" type="text" value="" size="30" onblur="lastnamefunc(document.registration.lastname)"/><div id="lname">   </div></td><br />
  </tr>
  <tr>
     <td><label class="required" for="dob">Date of birth:</label></td>
    <td><input type="Text" id="dob" name = "dob" value ="" size="25" onblur = "validate()"/>
	    <img src="images2/cal.gif" onclick="javascript:NewCssCal('dob')" style="cursor:pointer"/><div id="date">   </div></td><br /> 
  </tr>
  <tr>
     <td><label class="required" for="gender">Gender:</label></td>
     <td ><input type="radio" name="gender" value="male" checked> Male
  <input type="radio" name="gender" value="female"> Female<br></td><br />
  </tr>
  <tr>
     <td><label class="required" for="email">Email:</label></td>
     <td><input id="email" name="email" type="email" value="" size="30" placeholder = "Enter a valid Email address" onblur = "return (validateemail(this.value))"/>
	     <div id="eadd">   </div></td><br />
  </tr>
  <tr>
     <td><label class="required" for="type">User type:</label></td>
     <td ><input type="radio" name="type" value="teacher" checked> Teacher 
	      <input type="radio" name="type" value="student" > Student
		  <input type="radio" name="type" value="parent"> Parent
          <input type="radio" name="type" value="admin"> Admin <br></td><br /></tr>
	<tr><td><div id="studentemail" class="studentemail" style="display: none" >
   Email:<input name = "studentemail" type="text" id="studentemail" onblur = "checkstudentemail()" /></td>
   
  <tr><td><div id="teacherdropdown" class="teacherdropdown" style="display: none" >
  Teacher name:<?php include 'config.php';
  $resultdropdown = $db->query("select registrationid,firstname,lastname from registration where type = 'teacher' and status = 'active'");
    
	
	
    echo "<html>";
    echo "<body>";
    echo "<select name='registrationid'>";

	while ($row = $resultdropdown->fetch_assoc()) {

                  unset($registrationid,$firstname, $lastname);
				  $registrationid = $row['registrationid'];
                  $teacherfirstname = $row['firstname'];
                  $teacherlastname = $row['lastname'];
     
                  echo "<option value= '".$registrationid."' >".$teacherfirstname." ".$teacherlastname."</option>";
                 
}

    echo "</select>";
    echo "</body>";
    echo "</html>";?>
	</td></tr>
	
  <tr>
     <td><label class="required" for="password">Password:</label></td>
     <td><input id="password" name="password" type="password" value="" size="30" onblur ="lengthRange(document.registration.password,6, 16)"/><div id="pass">   </div></td><br />
  </tr>
   <tr>
     <td><label class="required" for="reenterpssword">Re-enter Password:</label></td>
     <td><input id="reenterpassword" name="reenterpassword" type="password" value="" size="30" onblur = "return (matchpass())"/><div id="reenterpass" >   </div></td><br />
  </tr>
    <tr><td> <input type = "submit" name = "submit" value="Register" /></td></tr>
  <tr style = "text=align:center">
     <td colspan = "2">
	 
	 <?php
	   if(isset($_GET['msg']))
	   {
		 $message = "success";
		 if($message == 'success') {
			 echo "<span style='color:green'>Your registration has been successful!</span>";
		 } 
	     }
	 ?>
	 </td>
	</tr>
	

	<tbody>
	</table>
</form>
</body>
</html>