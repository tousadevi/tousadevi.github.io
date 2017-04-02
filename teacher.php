<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
include 'config.php';
session_start();
 //starting the session
 
 ?> 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Teacher</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style1.css" />

<script src="jscripts/requests.js"></script>
<script type="text/javascript">
  function resizeIframe(obj){
     obj.style.height = 0;
     obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
  }
  setInterval("users()",3000);
  function users(){
	xhr1 = new XMLHttpRequest();
	xhr1.open('POST' , 'useronline.php' , true);
	xhr1.setRequestHeader('content-type','application/x-www-form-urlencoded');
	xhr1.send();
	xhr1.onreadystatechange = function(){
	//	alert(xhr.responseText);
			document.getElementById('onlineusers').innerHTML = xhr1.responseText;
			}
		
		
		}
</script>

</head>
<body>

<div id="header"> <a href="#"><img src="images/logo.jpg" alt="" /></a>
  <ul>
    <li class="noBdr"><a href="teacher.php">Home</a></li>
    <li><a href="download.php">materials</a></li>
    <li><a href="edit.php">my details</a></li>
    <li><a href="studentlog.php">student logs</a></li>
    <li><a href="studentlist.php">student list</a></li>
    <li><a href="#" onclick = "logout()">log out</a></li>
  </ul>
</div>
<div id="body">
  <div class="leftPanel">
    <h2>Online Users</h2>
    <p class="news" id = "onlineusers" ><br />
      <h2 ></h2>
    <dl>
      <dt></dt>
      <dd><strong></strong> </dd>
      <dt></dt>
      <dd><strong></strong> </dd>
      <dt></dt>
      <dd><strong></strong> <span><a href="#" class="moreBtn">more...</a></span></dd>
    </dl>
  </div>
  <div class="rightPanel">
    <div class="welcome">
      <h2>Upload your materials</h2>
      <p><strong>welcome <?php echo $_SESSION["name"]; echo '&nbsp'; echo $_SESSION["surname"];?></strong><br />
       <iframe height="100%" width="110%"  name="iframe_a" scrolling="no" frameborder="0" src = "up.php"></iframe>
</p>
      <p class="topPad"><strong></strong> </p>
    </div>
    <h2 class="leftPad" id ="leftPad" >Online users</h2>
    <div class="gallery" >
      <ul class="gal" >
        <li id ="onlineusers"><iframe height="0" width="200%" onload='resizeIframe(this)' name="iframe_b" scrolling="no" frameborder="0" src = ""></iframe>
</li>
        
      </ul>
      <br class="spacer" />
      <ul class="preNextBtns">
        
      </ul>
      <br class="spacer" />
      <br class="spacer" />
    </div>
  </div>
  <br class="spacer" />
</div>
<div id="footer">
  <ul>
    <li class="noBdr"><a href="#">Home</a></li>
    <li><a href="#">materials</a></li>
    <li><a href="#">my details</a></li>
    <li><a href="#">student log list</a></li>
    <li><a href="#">student list</a></li>
    <li><a href="#">Contact us</a></li>
  </ul>
  <br class="spacer" />
 <p>2016 Copyright,All rights reserved. <a href="" style="color:#ffffff;">educational website</a> designed by karishma tousadevi gobindoo</span> </a></p>																																																																		
	</div>
</body>
</html>
